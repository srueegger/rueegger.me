<?php

namespace App;

/**
 * Simple i18n (internationalization) system
 * Manages language switching and content loading
 */
class I18n
{
    private string $lang;
    private string $defaultLang = 'de';
    private array $supportedLangs = ['de', 'en'];
    private string $contentDir;

    public function __construct(string $contentDir = '../content')
    {
        $this->contentDir = $contentDir;
        $this->detectLanguage();
    }

    /**
     * Detect language from URL parameter, cookie, or browser
     */
    private function detectLanguage(): void
    {
        // 1. Check URL parameter
        if (isset($_GET['lang']) && in_array($_GET['lang'], $this->supportedLangs)) {
            $this->lang = $_GET['lang'];
            $this->setLanguageCookie($this->lang);
            return;
        }

        // 2. Check cookie
        if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $this->supportedLangs)) {
            $this->lang = $_COOKIE['lang'];
            return;
        }

        // 3. Check browser language
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if (in_array($browserLang, $this->supportedLangs)) {
                $this->lang = $browserLang;
                $this->setLanguageCookie($this->lang);
                return;
            }
        }

        // 4. Use default
        $this->lang = $this->defaultLang;
    }

    /**
     * Set language cookie
     */
    private function setLanguageCookie(string $lang): void
    {
        setcookie('lang', $lang, [
            'expires' => time() + (365 * 24 * 60 * 60),
            'path' => '/',
            'secure' => true,
            'httponly' => true,
            'samesite' => 'Lax'
        ]);
    }

    /**
     * Get current language
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * Get language name
     */
    public function getLangName(): string
    {
        return match($this->lang) {
            'de' => 'Deutsch',
            'en' => 'English',
            default => 'Deutsch'
        };
    }

    /**
     * Get opposite language (for language switcher)
     */
    public function getOtherLang(): string
    {
        return $this->lang === 'de' ? 'en' : 'de';
    }

    /**
     * Get opposite language name
     */
    public function getOtherLangName(): string
    {
        $otherLang = $this->getOtherLang();
        return match($otherLang) {
            'de' => 'Deutsch',
            'en' => 'English',
            default => 'English'
        };
    }

    /**
     * Load markdown content file
     */
    public function loadContent(string $type, string $slug = ''): ?string
    {
        if ($slug) {
            // First try with slug as-is
            $filePath = "{$this->contentDir}/{$this->lang}/{$type}/{$slug}.md";

            // If not found and it's a blog post, try to find by slug without date
            if (!file_exists($filePath) && $type === 'blog') {
                $blogDir = "{$this->contentDir}/{$this->lang}/blog";
                $files = glob($blogDir . '/*-' . $slug . '.md');
                if (!empty($files)) {
                    $filePath = $files[0];
                }
            }
        } else {
            $filePath = "{$this->contentDir}/{$this->lang}/{$type}.md";
        }

        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        }

        return null;
    }

    /**
     * Get all blog posts for current language
     */
    public function getBlogPosts(): array
    {
        $blogDir = "{$this->contentDir}/{$this->lang}/blog";
        $posts = [];

        if (!is_dir($blogDir)) {
            return $posts;
        }

        $files = glob($blogDir . '/*.md');

        foreach ($files as $file) {
            $content = file_get_contents($file);
            $meta = $this->extractMetadata($content);
            $filename = basename($file, '.md');

            // Remove date prefix from slug (YYYY-MM-DD-)
            $slug = preg_replace('/^\d{4}-\d{2}-\d{2}-/', '', $filename);

            $posts[] = [
                'slug' => $slug,
                'filename' => $filename, // Keep original filename for loading
                'title' => $meta['title'] ?? 'Untitled',
                'date' => $meta['date'] ?? '',
                'excerpt' => $meta['excerpt'] ?? '',
                'tags' => $meta['tags'] ?? [],
                'image' => $meta['image'] ?? ''
            ];
        }

        // Sort by date descending
        usort($posts, function($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $posts;
    }

    /**
     * Extract metadata from markdown content
     */
    public function extractMetadata(string $content): array
    {
        $meta = [];

        // Extract YAML frontmatter if exists
        if (preg_match('/^---\s*\n(.*?)\n---\s*\n/s', $content, $matches)) {
            $lines = explode("\n", $matches[1]);
            foreach ($lines as $line) {
                if (strpos($line, ':') !== false) {
                    list($key, $value) = explode(':', $line, 2);
                    $key = trim($key);
                    $value = trim($value);

                    // Remove surrounding quotes from string values
                    if (preg_match('/^["\'](.+)["\']$/', $value, $matches)) {
                        $value = $matches[1];
                    }

                    // Handle arrays (tags)
                    if ($key === 'tags' && strpos($value, '[') === 0) {
                        $value = json_decode(str_replace("'", '"', $value), true) ?? [];
                    }

                    $meta[$key] = $value;
                }
            }
        }

        return $meta;
    }

    /**
     * Get supported languages
     */
    public function getSupportedLangs(): array
    {
        return $this->supportedLangs;
    }
}
