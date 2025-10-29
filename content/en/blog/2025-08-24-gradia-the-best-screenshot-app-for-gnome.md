---
title: "Gradia – The Best Screenshot App for GNOME | App Showcase"
date: "2025-08-24"
excerpt: "Finally, a native screenshot app for GNOME that combines capturing and editing. Gradia solves a long-standing problem of the GNOME desktop."
tags: ["GNOME", "Linux", "Screenshot", "Apps"]
image: "/media/blog/gradia-screenshot.png"
---

# Gradia – The Best Screenshot App for GNOME

GNOME has always had a problem: the built-in screenshot function is good for capturing, but you need external tools for editing. **Gradia** finally solves this problem – and does it really well.

## Why Not Flameshot Anymore?

I used **Flameshot** for years. It was the best screenshot solution for Linux. But under GNOME, Flameshot has problems:

### The Disadvantages of Flameshot under GNOME

**Wayland Compatibility:**
Flameshot is only very limitedly compatible with Wayland. You often have to use tricks to make it work under GNOME.

**No Native Integration:**
Flameshot completely bypasses GNOME's native screenshot function. This leads to inconsistencies in the workflow.

**Dependencies:**
Flameshot is based on Qt, not GTK. This means unnecessary system dependencies that waste resources.

**Conclusion:** Flameshot feels like a foreign solution, not a part of GNOME.

## Gradia – The Native Alternative

**Gradia** is different. It integrates seamlessly into GNOME because it uses **libadwaita** and native GNOME components.

### What Makes Gradia Better?

**Integrated Workflow:**
You take a screenshot with GNOME's selection interface, and Gradia opens automatically for editing.

**Native Feeling:**
The app looks and behaves like a real GNOME application.

**Integrated Editing:**
Annotations, arrows, text, cropping – all directly in the app, without external programs.

## Installation & Setup

### Installation via Flathub

```bash
flatpak install flathub be.alexandervanhee.gradia
```

### Setting up a Keyboard Shortcut

1. **Settings** → **Keyboard** → **Custom Shortcuts**
2. **Command:** `flatpak run be.alexandervanhee.gradia --screenshot=INTERACTIVE`
3. **Key:** Print Screen

Done! Now Gradia will start automatically with every screenshot.

## Compatibility with Other Desktops

### Linux Mint (Cinnamon)

Works well, but: Gradia takes a fullscreen screenshot by default. You then have to crop it in the editing view.

### KDE Plasma

Less useful. **Spectacle** (KDE's native screenshot app) already offers all the features that Gradia has.

## Conclusion

**Finally, GNOME gets the screenshot app it has been missing all this time.**

Screenshots can not only be captured but also edited directly. No external app, no Qt dependencies, no Wayland problems.

### Who is Gradia for?

✅ **GNOME Users:** Absolute must-have app
✅ **Cinnamon Users:** Useful, but with limitations
❌ **KDE Users:** Spectacle is better

If you use GNOME, try Gradia. You won't miss Flameshot.

## Screenshots

![Gradia Editing View](/media/blog/gradia-2.webp)

![Gradia Tools](/media/blog/gradia-3.webp)

![Gradia Export Options](/media/blog/gradia-4.webp)

![Gradia in Action](/media/blog/gradia-5.webp)
