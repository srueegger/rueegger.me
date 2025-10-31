# CLAUDE.md - Project Architecture Documentation

## Project Overview

**rueegger.me** is a modern, static personal portfolio website built for Samuel Rüegger, showcasing his work as a Web Developer, AI Expert, and Tech Creative. The project emphasizes simplicity, performance, and maintainability.

### Core Principles

1. **No CMS Required**: All content is managed via Markdown files
2. **Bilingual Support**: German and English with automatic language detection
3. **Static First**: No database, no complex build steps, just PHP and static assets
4. **Modern UX**: Tailwind CSS with dark mode and smooth animations
5. **SEO Optimized**: Proper meta tags, semantic HTML, and fast loading

## Technical Architecture

### Technology Choices

#### Why PHP Without a Framework?

- **Simplicity**: No framework overhead for a small portfolio site
- **Control**: Full control over every aspect of the application
- **Performance**: Minimal dependencies, fast execution
- **Hosting Compatibility**: Works on any PHP-enabled shared hosting

#### Why Tailwind CSS?

- **Utility-First**: Rapid development with consistent design
- **Dark Mode**: Built-in `prefers-color-scheme` support
- **Performance**: PurgeCSS removes unused styles in production
- **Customization**: Easy to extend and modify

#### Why Inline SVG Icons?

- **Performance**: No external dependencies or CDN requests
- **Control**: Full control over styling and animations
- **Lightweight**: Only icons actually used are included in the HTML
- **Customization**: Direct CSS manipulation with `fill` and size classes
- **Self-Contained**: All assets hosted locally, no third-party scripts
- **Accessibility**: Easy to add aria-labels and titles for screen readers

#### Why Markdown for Content?

- **Simplicity**: Easy to write and edit
- **Version Control**: Git-friendly plain text format
- **Portability**: Not locked into a proprietary CMS
- **Future-Proof**: Markdown will always be readable

### Architecture Decisions

#### 1. **Internationalization (I18n) System**

**File**: `includes/classes/I18n.php`

**Design**: Custom lightweight i18n system instead of using gettext or frameworks.

**Rationale**:
- **Simplicity**: Only 2 languages needed (DE/EN)
- **File-Based**: Language detection via URL parameter, cookie, or browser header
- **Content Organization**: Separate directory structure for each language

**How It Works**:
```
content/
├── de/
│   ├── blog/
│   └── pages/
└── en/
    ├── blog/
    └── pages/
```

The `I18n` class:
1. Detects user's preferred language
2. Loads appropriate Markdown files
3. Provides helper methods for language switching

#### 2. **Markdown Parsing**

**File**: `includes/classes/MarkdownParser.php`

**Design**: Uses Parsedown library with frontmatter extraction.

**Rationale**:
- **Parsedown**: Lightweight, fast, well-maintained
- **Frontmatter**: YAML-style metadata for posts (title, date, tags, excerpt)
- **Safety**: `setSafeMode(true)` prevents XSS attacks

**Example Post Structure**:
```markdown
---
title: "Post Title"
date: "2024-10-27"
excerpt: "Brief description"
tags: ["Tag1", "Tag2"]
image: "/media/blog/image.jpg"
---

# Post Content

Your markdown content here...
```

#### 3. **Routing Strategy**

**Design**: Simple file-based routing (no .htaccess rewrites needed).

**Files**:
- `index.php`: Homepage
- `about.php`: About page
- `projects.php`: Projects portfolio
- `blog.php`: Blog listing
- `post.php`: Individual blog post (uses `?slug=` parameter)
- `contact.php`: Contact page

**Rationale**:
- **Simplicity**: No complex routing logic
- **Compatibility**: Works on any PHP server without mod_rewrite
- **Debugging**: Easy to understand and troubleshoot

**Future Enhancement**: Could add clean URLs with `.htaccess` if desired.

#### 4. **Component-Based Includes**

**Design**: Reusable PHP includes for common elements.

**Files**:
- `includes/header.php`: HTML head, meta tags, navigation inclusion
- `includes/footer.php`: Site footer, scripts
- `includes/navigation.php`: Main navigation with mobile menu
- `includes/functions.php`: Helper functions

**Benefits**:
- **DRY Principle**: Don't Repeat Yourself
- **Maintainability**: Change once, update everywhere
- **Consistency**: Same header/footer across all pages

#### 5. **Asset Pipeline**

**Build Tools**: npm + Tailwind CLI + Terser

**Process**:
```bash
# Development (watch mode - runs CSS & JS in parallel)
npm run dev

# Production (minified CSS & JS)
npm run build
```

**CSS Pipeline**:
- **Input**: `assets/src/input.css`
- **Output**: `public/css/style.css`
- **Tool**: Tailwind CLI with `--minify` flag in production

**JavaScript Pipeline**:
- **Input**: `assets/src/main.js`
- **Output**: `public/js/main.js`
- **Tool**: Terser (compress + mangle) in production
- **Development**: Simple file copy for debugging

**Configuration**: `tailwind.config.js`
- Content paths for class detection
- Custom theme extensions
- Dark mode configuration
- Plugin configuration (typography)

**NPM Scripts**:
```json
{
  "dev": "npm run dev:css & npm run dev:js",
  "dev:css": "npx tailwindcss -i ./assets/src/input.css -o ./public/css/style.css --watch",
  "dev:js": "cp ./assets/src/main.js ./public/js/main.js",
  "build": "npm run build:css && npm run build:js",
  "build:css": "npx tailwindcss -i ./assets/src/input.css -o ./public/css/style.css --minify",
  "build:js": "npx terser ./assets/src/main.js -o ./public/js/main.js --compress --mangle"
}
```

**Rationale**:
- **Parallel Development**: `&` operator runs CSS and JS watchers simultaneously
- **Sequential Production**: `&&` ensures CSS builds before JS
- **Source Separation**: All source files in `assets/src/`, compiled files in `public/`
- **Performance**: Minified assets in production reduce file size significantly

#### 6. **Dark Mode Implementation**

**Strategy**: CSS `prefers-color-scheme` media query

**Implementation**:
```css
:root {
  --color-bg: 255 255 255;
  --color-text: 17 24 39;
}

@media (prefers-color-scheme: dark) {
  :root {
    --color-bg: 17 24 39;
    --color-text: 243 244 246;
  }
}
```

**Tailwind Classes**: `dark:` prefix automatically applies styles in dark mode.

**Rationale**:
- **Automatic**: Respects system preferences
- **No JavaScript**: Pure CSS solution
- **Performance**: No flash of unstyled content

#### 7. **Animation Strategy**

**Implementation**: Intersection Observer API

**Source File**: `assets/src/main.js`
**Compiled File**: `public/js/main.js` (minified in production)

**How It Works**:
1. Elements with `.animate-on-scroll` class start invisible
2. Intersection Observer detects when they enter viewport
3. Adds `.visible` class to trigger CSS animations
4. Unobserves element (animation only happens once)

**Build Process**:
- **Development**: `npm run dev:js` copies source JS to public folder
- **Production**: `npm run build:js` minifies JS using Terser (compress + mangle)

**Benefits**:
- **Performance**: Only animates visible elements, minified for production
- **UX**: Smooth, professional feel
- **Accessibility**: Respects `prefers-reduced-motion`

#### 8. **SEO Strategy**

**Implementation**:
- Unique `<title>` and meta descriptions per page
- Open Graph tags for social sharing
- Twitter Card metadata
- Semantic HTML5 elements (`<article>`, `<section>`, `<nav>`)
- Proper heading hierarchy (H1 → H2 → H3)
- Alt text for all images
- Mobile-responsive (Google ranking factor)
- Fast loading times

**Dynamic SEO**: Each page sets:
```php
$pageTitle = "Page Title - Samuel Rüegger";
$metaDescription = "Page description...";
$metaKeywords = "keyword1, keyword2, keyword3";
```

#### 9. **Blog System Architecture**

**Design**: File-based blog system using Markdown

**Features**:
- Frontmatter metadata (YAML-style)
- Automatic post listing by date
- Tag system
- Excerpt support
- Featured images
- Slug-based URLs

**Listing Logic** (`I18n::getBlogPosts()`):
1. Scan `content/{lang}/blog/` directory
2. Read each `.md` file
3. Extract frontmatter metadata
4. Sort by date (newest first)
5. Return array of post objects

**Benefits**:
- **No Database**: Files are the database
- **Git-Friendly**: Version control for content
- **Portable**: Easy to backup and migrate
- **Fast**: No DB queries needed

#### 10. **Security Considerations**

**Implemented Measures**:

1. **Output Escaping**: `htmlspecialchars()` via `e()` helper function
2. **Markdown Safety**: Parsedown `setSafeMode(true)`
3. **Input Validation**: Language parameter whitelist
4. **Cookie Security**: Secure, HttpOnly, SameSite attributes
5. **No User Input Storage**: Static content only, no forms with database
6. **HTTPS**: Enforced via .htaccess (recommended)

**Future Enhancements**:
- Content Security Policy (CSP) headers
- Subresource Integrity (SRI) for CDN resources
- Rate limiting (if adding contact form)

## Directory Structure Rationale

### `/content/`
**Purpose**: All editable content (Markdown files)

**Structure**: Language-based organization
- Easy to find content in specific language
- Scalable to more languages if needed
- Clear separation of blog posts vs static pages

### `/includes/`
**Purpose**: Reusable PHP components and classes

**Structure**:
- `/classes/`: OOP components (I18n, MarkdownParser)
- Root: Include files (header, footer, navigation)

### `/public/`
**Purpose**: Web-accessible document root

**Structure**:
- `/css/`: Compiled styles
- `/js/`: JavaScript files
- `/images/`: Site images (logo, profile, etc.)
- `/media/`: User-generated content (blog images)
- Root: PHP pages

**Security**: Only this directory should be publicly accessible.

### `/assets/`
**Purpose**: Source files for build process

**Structure**:
- `/src/input.css` - Tailwind CSS source
- `/src/main.js` - JavaScript source (animations, interactions)

### `/vendor/` & `/node_modules/`
**Purpose**: Dependencies (gitignored)

## Performance Optimizations

### 1. **Minimal Dependencies**
- Only 2 Composer packages (Parsedown, Symfony YAML)
- Tailwind CSS (purged in production)
- Inline SVG icons (no external icon library)
- No jQuery, no heavy frameworks

### 2. **Asset Optimization**
- Minified CSS in production (`npm run build:css`)
- Minified JavaScript in production (`npm run build:js` with Terser)
- Lazy loading for images
- Inline SVG icons (zero external requests)
- Inline critical CSS (could be added)

### 3. **Caching Strategy**
- Static HTML (PHP outputs static content)
- Browser caching for assets (can configure via .htaccess)
- No database queries

### 4. **Code Splitting**
- Separate CSS/JS files
- Conditional loading (only what's needed per page)

## Deployment Workflow

### Development
```bash
ddev start
npm run dev
# Edit files, test locally
```

### Production Build
```bash
npm run build
composer install --no-dev --optimize-autoloader
# Deploy to server
```

### Deployment Checklist
- [ ] Run production build (`npm run build` - builds both CSS & JS)
- [ ] Verify minified assets (check file sizes in `public/css/` and `public/js/`)
- [ ] Test all pages
- [ ] Verify dark mode
- [ ] Check responsive design
- [ ] Test language switching
- [ ] Verify all blog posts load
- [ ] Check SEO meta tags
- [ ] Test inline SVG icons display correctly across all pages
- [ ] Test animations and interactions
- [ ] Test on multiple browsers

## Future Enhancements

### Potential Additions
1. **RSS Feed**: Generate RSS/Atom feed for blog
2. **Sitemap**: XML sitemap for better SEO
3. **Search**: Client-side search with Lunr.js
4. **Comments**: Integration with external service (Disqus, Utterances)
5. **Analytics**: Privacy-friendly analytics (Plausible, Fathom)
6. **Contact Form**: Simple PHP form with email sending
7. **Portfolio CMS**: Lightweight admin panel for content editing
8. **Progressive Web App**: Add service worker for offline capability
9. **Image Optimization**: Automated WebP conversion
10. **Multilingual Blog**: Linked translations between DE/EN posts

### Performance Improvements
1. **Critical CSS**: Inline above-the-fold styles
2. **Resource Hints**: Preconnect, prefetch, preload
3. **HTTP/2 Server Push**: Push critical resources
4. **CDN**: Use CDN for static assets

## Maintenance

### Regular Tasks
- **Content Updates**: Add new blog posts
- **Dependency Updates**: `composer update`, `npm update`
- **Security Patches**: Monitor for PHP/dependency vulnerabilities
- **Backup**: Regular git commits + server backups

### Monitoring
- **Uptime**: Use uptime monitoring service
- **Performance**: PageSpeed Insights, Lighthouse
- **SEO**: Google Search Console
- **Analytics**: Track visitor behavior

## Lessons Learned

### What Worked Well
1. **Markdown-Based Content**: Easy to manage, git-friendly
2. **Tailwind CSS**: Rapid development, consistent design
3. **Inline SVG Icons**: Zero dependencies, full control, better performance
4. **Modern Build Pipeline**: Parallel development, optimized production builds
5. **Simple Architecture**: No over-engineering
6. **DDEV**: Excellent local development experience

### What Could Be Improved
1. **URL Structure**: Could implement clean URLs with routing
2. **Asset Versioning**: Cache-busting for CSS/JS updates
3. **Image Handling**: Automated optimization pipeline
4. **Multilingual Content**: Better linking between translations

## Conclusion

This project demonstrates that **modern, professional websites don't require complex frameworks or CMSs**. By choosing the right tools for the job and keeping the architecture simple, we achieved:

- ✅ Fast performance
- ✅ Easy maintenance
- ✅ SEO optimization
- ✅ Modern UX
- ✅ Bilingual support
- ✅ Git-based workflow
- ✅ Deployment simplicity

The architecture is **scalable** (can add more languages, pages, features) while remaining **maintainable** (easy to understand and modify).

---

**Last Updated**: 2025-10-31
**Claude**: Assisted in architecture design and implementation
**Author**: Samuel Rüegger

## Icon Implementation

The website uses inline SVG icons instead of external icon libraries. All icons are:

- Embedded directly in PHP/HTML for zero external requests
- From Font Awesome Free (version 7.1.0) - fully open source
- Styled with Tailwind utility classes (`fill-current`, `w-4`, `h-4`, etc.)
- Optimized for performance with no CDN dependencies

**Icons Used:**
- **Brand Icons**: LinkedIn, WhatsApp, Facebook, X/Twitter, GitHub, Mastodon, Instagram
- **Solid Icons**: Code, Code Branch, Graduation Cap, Shield, Rocket, Coffee Mug, Envelope, Share Nodes, Clock, Arrow Up Right, Hands Holding Circle

All SVG code is sourced from Font Awesome Free and embedded directly in the templates for maximum performance and control.
