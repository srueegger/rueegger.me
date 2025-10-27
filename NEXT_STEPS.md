# Remaining Work - Nerdy Redesign

## ✅ COMPLETED
1. **Design System** - Complete LCARS/Terminal CSS theme
2. **Navigation** - Terminal-style nav with `~/` paths and LCARS accents
3. **Blog Images** - Downloaded from old site

## 🚧 IN PROGRESS - High Priority

### 1. Profile Image ⚠️ MANUAL STEP REQUIRED
**Your black & white hoodie photo needs to be saved as:**
```bash
public/images/samuel-rueegger.jpg
```
I can see the image in chat but cannot extract it automatically. Please save it manually.

### 2. Footer - LCARS Status Bar Style
Replace current footer with status bar design featuring:
- System status indicators
- Social "connection ports"
- LCARS-colored segments

### 3. Index Page - Terminal Hero
Complete redesign with:
```
┌─ TERMINAL ────────────────────────────┐
│ $ whoami                              │
│ > Samuel Rüegger                      │
│ > WEB_DEV | AI_EXPERT | TECH_NERD    │
│                                        │
│ $ cat ./about.txt                     │
│ > Building modern web apps...        │
│ > Integrating AI solutions...        │
│ >                                     │
│ $ █                                   │
└────────────────────────────────────────┘
```

## 📋 TODO - Complete Page Redesigns

### Blog Updates
File: `content/de/blog/*.md`
- Update image paths to use downloaded files:
  - `2024-10-09-proton-wallet.md` → `/images/proton-wallet.webp`
  - `2024-08-21-linux-distributionen-vielfalt.md` → `/images/linux-vielfalt.png`
  - `2024-06-11-libreoffice-ende.md` → `/images/libreoffice.png`
  - `2024-03-30-xz-backdoor.md` → `/images/xz-backdoor.webp`

### Page Redesigns Needed

**blog.php** - Terminal Log Style
```
$ tail -f ~/blog/posts.log
[2024-10-09 14:23] POST: Proton Wallet im Test...
[2024-08-21 09:15] POST: Linux-Distributionen...
[2024-06-11 11:42] POST: LibreOffice Ende...
```

**projects.php** - CLI Directory Listing
```
$ ls -la ~/projects/
drwxr-xr-x  AI-Integration-Suite/
drwxr-xr-x  Modern-CMS-Platform/
drwxr-xr-x  E-Commerce-Optimization/
```

**about.php** - Terminal Cat Output
```
$ cat ~/about/profile.txt
NAME: Samuel Rüegger
ROLE: Web Developer | AI Expert
SKILLS: PHP, JavaScript, AI, Linux...
```

**contact.php** - Network Connection Style
```
$ netstat -connections
PROTOCOL    ADDRESS              STATUS
mastodon    swiss.social         [ACTIVE]
github      github.com/srueegger [ACTIVE]
linkedin    linkedin.com         [ACTIVE]
```

## 🎨 Design Elements to Apply

### LCARS Panels
```php
<div class="lcars-panel p-6">
    <!-- Content -->
</div>
```

### Terminal Windows
```php
<div class="terminal">
    <div class="terminal-header">
        <div class="terminal-dot bg-red-500"></div>
        <div class="terminal-dot bg-yellow-500"></div>
        <div class="terminal-dot bg-green-500"></div>
        <span class="ml-2 text-sm">terminal@rueegger.me</span>
    </div>
    <div class="terminal-content">
        <div class="terminal-prompt">command here</div>
    </div>
</div>
```

### Tech Badges
```php
<span class="tech-badge">PHP</span>
<span class="tech-badge">Node.js</span>
```

### Status Bars
```php
<div class="status-bar">
    SYSTEM STATUS: ONLINE
</div>
```

## 🔧 Quick Commands

### Build CSS
```bash
npm run build
```

### Test Locally
```bash
ddev start
ddev launch
```

### Commit Changes
```bash
git add -A
git commit -m "Complete nerdy/LCARS redesign"
git push
```

## 📝 Code Patterns

### Hero Terminal Animation (index.php)
Add typing effect JavaScript:
```javascript
const lines = [
    "$ whoami",
    "> Samuel Rüegger",
    "> Web Developer | AI Expert",
    "$ cat specialties.txt",
    "> PHP, JavaScript, AI Integration",
    "> Linux, Docker, Cloud Infrastructure"
];

let lineIndex = 0;
let charIndex = 0;

function typeWriter() {
    if (lineIndex < lines.length) {
        if (charIndex < lines[lineIndex].length) {
            document.getElementById('terminal-output').innerHTML += lines[lineIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeWriter, 50);
        } else {
            document.getElementById('terminal-output').innerHTML += '<br>';
            lineIndex++;
            charIndex = 0;
            setTimeout(typeWriter, 500);
        }
    }
}
```

### LCARS Corner Design
```html
<div class="relative">
    <div class="absolute top-0 left-0 w-32 h-32 border-t-8 border-l-8 border-[#ff9966] rounded-tl-3xl"></div>
    <!-- Content -->
</div>
```

## ⏱️ Estimated Time
- Footer redesign: 30 min
- Index page complete: 1-2 hours
- Other pages: 2-3 hours
- Testing & polish: 1 hour

**Total: 4-6 hours remaining work**

## 🎯 Priority Order
1. ✅ Navigation (DONE)
2. 🚧 Footer
3. 🚧 Index/Hero
4. Blog listing
5. Projects page
6. About page
7. Contact page
8. Post detail page

---
**Note**: All design system CSS is complete. Just need to apply to pages!
