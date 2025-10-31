# rueegger.me

Modern personal portfolio website for Samuel Rüegger - Web Developer, AI Expert & Tech Creative.

## Features

- **Completely Static**: No CMS, pure PHP with static file generation
- **Bilingual**: German and English content support with automatic language detection
- **Markdown-Based Content**: All content stored as Markdown files for easy editing
- **Modern Design**: Built with Tailwind CSS, responsive and accessible
- **Dark Mode**: Automatic theme switching based on system preferences
- **SEO Optimized**: Proper meta tags, Open Graph, and semantic HTML
- **Performance**: Lightweight, fast loading, minimal dependencies
- **Blog System**: Markdown-based blog with frontmatter metadata

## Tech Stack

### Backend
- **PHP 8.3+**: Server-side logic
- **Composer**: Dependency management
- **Parsedown**: Markdown parsing
- **Symfony YAML**: Configuration (if needed)

### Frontend
- **Tailwind CSS**: Utility-first CSS framework
- **Inline SVG Icons**: From Font Awesome Free 7.1.0 (no external dependencies)
- **Vanilla JavaScript**: Scroll animations and interactions
- **CSS Custom Properties**: Theme support

### Development
- **DDEV**: Local development environment
- **Node.js & npm**: Build tools for Tailwind CSS
- **Git**: Version control

## Project Structure

```
rueegger.me/
├── .ddev/                  # DDEV configuration
├── assets/
│   └── src/
│       ├── input.css       # Tailwind CSS source
│       └── main.js         # JavaScript source
├── content/                # Markdown content
│   ├── de/                 # German content
│   │   ├── blog/           # Blog posts
│   │   └── pages/          # Static pages
│   └── en/                 # English content
│       ├── blog/
│       └── pages/
├── includes/               # PHP includes
│   ├── classes/            # PHP classes
│   │   ├── I18n.php        # Internationalization
│   │   └── MarkdownParser.php
│   ├── header.php          # Global header
│   ├── footer.php          # Global footer
│   ├── navigation.php      # Navigation component
│   └── functions.php       # Helper functions
├── public/                 # Document root
│   ├── css/                # Compiled & minified CSS
│   ├── js/                 # Compiled & minified JavaScript
│   ├── images/             # Images
│   ├── media/              # Blog media
│   ├── index.php           # Homepage
│   ├── about.php           # About page
│   ├── projects.php        # Projects page
│   ├── blog.php            # Blog listing
│   ├── post.php            # Blog post detail
│   └── contact.php         # Contact page
├── vendor/                 # Composer dependencies (gitignored)
├── node_modules/           # npm dependencies (gitignored)
├── .gitignore
├── composer.json
├── package.json
├── tailwind.config.js
├── README.md
├── CLAUDE.md
└── LICENSE
```

## Setup Instructions

### Prerequisites

- **PHP 8.3+**
- **Composer**
- **Node.js 18+** & npm
- **DDEV** (optional, recommended for local development)
- **Git**

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/srueegger/rueegger.me.git
   cd rueegger.me
   ```

2. **Install Composer dependencies**
   ```bash
   composer install
   ```

3. **Install npm dependencies**
   ```bash
   npm install
   ```

4. **Build CSS & JavaScript**
   ```bash
   npm run build
   ```

### Local Development with DDEV

1. **Start DDEV**
   ```bash
   ddev start
   ```

2. **Watch CSS & JS changes**
   ```bash
   npm run dev
   ```

   This runs both CSS and JS watchers in parallel.

3. **Access the site**
   Open https://rueeggerme.ddev.site in your browser

### Local Development without DDEV

1. **Start PHP built-in server**
   ```bash
   cd public
   php -S localhost:8000
   ```

2. **In another terminal, watch CSS & JS changes**
   ```bash
   npm run dev
   ```

3. **Access the site**
   Open http://localhost:8000 in your browser

## Content Management

### Adding a Blog Post

1. Create a new Markdown file in `content/de/blog/` (for German) or `content/en/blog/` (for English)

2. Use this frontmatter format:
   ```markdown
   ---
   title: "Your Post Title"
   date: "2024-10-27"
   excerpt: "A brief description of your post"
   tags: ["Tag1", "Tag2", "Tag3"]
   image: "/media/blog/your-image.jpg"
   ---

   # Your Post Title

   Your content here...
   ```

3. Name the file with format: `YYYY-MM-DD-slug.md`

### Editing Static Pages

Static pages (About, etc.) are in `content/{lang}/pages/`. Edit the Markdown files directly.

## Deployment

### Production Build

```bash
npm run build
```

This generates:
- Minified CSS in `public/css/style.css`
- Minified JavaScript in `public/js/main.js`

### Deploy to Server

1. Upload all files to your web server
2. Point your document root to the `public/` directory
3. Ensure PHP 8.3+ is available
4. Make sure `vendor/` directory is uploaded (or run `composer install --no-dev` on server)

### .htaccess (for Apache)

If using Apache, create a `.htaccess` file in `public/`:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /

    # Force HTTPS
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}/$1 [R=301,L]

    # Serve files directly if they exist
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d

    # Optional: Clean URLs (requires adjustments to PHP files)
    # RewriteRule ^(.*)$ index.php [L,QSA]
</IfModule>

# Security Headers
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
    Header set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>
```

## NPM Scripts

- `npm run dev`: Watch mode for development (rebuilds CSS & JS on changes)
- `npm run dev:css`: Watch mode for CSS only
- `npm run dev:js`: Copy JS for development
- `npm run build`: Production build (minified CSS & JS)
- `npm run build:css`: Build CSS only
- `npm run build:js`: Build and minify JS only

## Browser Support

- Chrome/Edge (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

## License

MIT License - see [LICENSE](LICENSE) file for details

## Author

**Samuel Rüegger**
- Website: [rueegger.me](https://rueegger.me)
- GitHub: [@srueegger](https://github.com/srueegger)
- Mastodon: [@srueegger@swiss.social](https://swiss.social/@srueegger)

## Contributing

This is a personal portfolio website. If you find bugs or have suggestions, feel free to open an issue on GitHub.

---

Built with ❤️ and modern web technologies.
