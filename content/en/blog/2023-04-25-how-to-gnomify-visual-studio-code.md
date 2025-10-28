---
title: "How to Gnomify Visual Studio Code"
date: "2023-04-25"
excerpt: "Visual Studio Code has been my 'way to go code editor' for several years now. It's fast, unobtrusive, runs on all major platforms (Linux, Mac, Windows), and just works. Since Visual Studio Code is an 'Electron app', its integration into the Gnome desktop is more 'meh' than truly great. Since I was on an online call for almost 90 minutes today - in which I had absolutely nothing to do (why was I invited? 🙄) - I used the time to visually adapt Visual Studio Code a bit more to my desktop."
tags: ["Linux", "Gnome", "Visual Studio Code"]
image: "/images/blog/wie-man-visual-studio-code-gnomifiziert.png"
---

Visual Studio Code has been my "way to go code editor" for several years now. The thing is fast, unobtrusive, runs on all major platforms (Linux, Mac, Windows) and just works.

Since Visual Studio Code is an "Electron app", its integration into the Gnome desktop is more "meh" than really great. Since I was in an online call for almost 90 minutes today - in which I had absolutely nothing to do (why was I invited? 🙄) I used the time to visually adapt Visual Studio Code a bit more to my desktop.

You can see the final result here with and without dark mode:

Admittedly, it's definitely not the "non-plus-ultra" but I personally find it more pleasant than the standard view.

If you want this too, here are the steps I took:

As a first step, we need the Gnome extension "[Rounded Window Corners](https://extensions.gnome.org/extension/5237/rounded-window-corners/)", which is not only useful for Visual Studio Code but also for browsers like Firefox or Google Chrome.

Applications written in GTK4/libadwaita have rounded corners at the top and bottom. "Legacy applications" that still use GTK3 or no GTK at all do not have this. This extension also adds the rounded corners to non-Gnome apps.

As a next step, we install the "[Adwaita](https://marketplace.visualstudio.com/items?itemName=piousdeer.adwaita-theme)" theme in Visual Studio Code.

Once the theme is installed, we still need to set a few settings. With the key combination "Ctrl+," you open the settings. Then there is a small icon at the top that you can click, then you can add the JSON settings directly via copy & paste:

I have set the following settings:

```json
{
  "window.titleBarStyle": "custom",
  "window.commandCenter": true,
  "window.autoDetectColorScheme": true,
  "workbench.preferredDarkColorTheme": "Adwaita Dark & default syntax highlighting & colorful status bar",
  "workbench.preferredLightColorTheme": "Adwaita Light & default syntax highlighting & colorful status bar",
  "workbench.productIconTheme": "adwaita",
  "editor.renderLineHighlight": "none",
  "workbench.iconTheme": null,
  "workbench.tree.indent": 12,
  "workbench.colorTheme": "Adwaita Dark & default syntax highlighting & colorful status bar"
}
```

After you have saved the settings, you have to restart Visual Studio Code briefly.

Do you have any other tips on how to "Gnomify" the app more?
