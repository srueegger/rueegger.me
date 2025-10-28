---
title: "Wie man Visual Studio Code gnomifiziert"
date: "2023-04-25"
excerpt: "Visual Studio Code ist meine «Way to go Code Editor», inzwischen doch schon seit einigen Jahren. Das Teil ist schnell, nicht aufdringlich, läuft auf allen wichtigen Plattformen (Linux, Mac, Windows) und funktioniert einfach. Da Visual Studio Code eine «Electron-App» ist, ist die Einbindung in den Gnome Desktop aber eher so mähh als wirklich toll. Da […]"
tags: ["Linux", "Gnome", "Visual Studio Code"]
image: "/images/blog/wie-man-visual-studio-code-gnomifiziert.png"
---

Visual Studio Code ist meine «Way to go Code Editor», inzwischen doch schon seit einigen Jahren. Das Teil ist schnell, nicht aufdringlich, läuft auf allen wichtigen Plattformen (Linux, Mac, Windows) und funktioniert einfach.





Da Visual Studio Code eine «Electron-App» ist, ist die Einbindung in den Gnome Desktop aber eher so mähh als wirklich toll. Da ich heute über knapp 90 Minuten in einem Online-Call war – in dem ich absolut nichts zu tun hatte (warum wurde ich da eingeladen? 🙄) habe ich die Zeit genutzt Visual Studio Code optisch mal etwas mehr an meinen Desktop anzupassen.





Das finale Ergebnis seht ihr hier sowohl mit und ohne Dark Mode:









Zugegeben es ist definitiv nicht das «Non-Plus-Ultra» aber ich persönlich finde es schon mal angenehmer als die Standard-Ansicht.





Falls ihr das auch haben wollt hier sind die Schritte die ich gegangen bin:





Als ersten Schritt brauchen wir die Gnome Erweiterung «[Rounded Window Corner](https://extensions.gnome.org/extension/5237/rounded-window-corners/)» die ist nicht nur für Visual Studio Code sondern auch für Browser wie Firefox oder Google Chrome nützlich.





Anwendungen die in GTK4/libadwaita geschrieben sind, haben oben und unten abgerundete Ecken. «Legacy-Anwendungen» die noch GTK3 oder überhaupt kein GTK Verwenden haben das nicht. Diese Erweiterung fügt die runden Ecken auch bei Nicht-Gnome Apps hinzu.





Als nächsten Schritt installieren wir in Visual Studio Code das «[Adwaita](https://marketplace.visualstudio.com/items?itemName=piousdeer.adwaita-theme)» Theme.





Wenn das Theme installiert ist, müssen wir noch ein paar Einstellungen festlegen. Mit der Tastenkombination «Strg+,» öffnet ihr die Einstellungen. Danach gibt es oben ein kleines Icon, dass ihr anklicken könnt, dann könnt ihr die JSON Einstellungen direkt per Copy&Paste hinzufügen:





Folgende Einstellungen habe ich gesetzt:






```
`{
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
}`
```
JSON



Nachdem ihr die Einstellungen gespeichert habt müsst ihr Visual Studio Code kurz neustarten.





Habt ihr noch Tipps wie man die App mehr «Gnomifizieren» kann?