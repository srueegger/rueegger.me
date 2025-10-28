<?php

namespace App;

/**
 * Markdown Parser using Parsedown
 * Handles markdown to HTML conversion
 */
class MarkdownParser
{
    private object $parsedown;

    public function __construct()
    {
        $this->parsedown = new \Parsedown();
        $this->parsedown->setSafeMode(true);
        $this->parsedown->setBreaksEnabled(true); // Enable line breaks
    }

    /**
     * Parse markdown to HTML
     */
    public function parse(string $markdown): string
    {
        // Remove frontmatter
        $markdown = $this->stripFrontmatter($markdown);

        return $this->parsedown->text($markdown);
    }

    /**
     * Remove frontmatter from content
     */
    public function stripFrontmatter(string $content): string
    {
        return preg_replace('/^---\s*\n.*?\n---\s*\n/s', '', $content);
    }
}
