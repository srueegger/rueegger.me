---
title: "Gradia – die beste Screenshot-App für GNOME | App-Vorstellung"
date: "2025-08-24"
excerpt: "Endlich eine native Screenshot-App für GNOME, die Aufnahme und Bearbeitung vereint. Gradia löst ein langjähriges Problem des GNOME-Desktops."
tags: ["GNOME", "Linux", "Screenshot", "Apps"]
---

# Gradia – die beste Screenshot-App für GNOME

GNOME hatte schon immer ein Problem: Die eingebaute Screenshot-Funktion ist gut zum Aufnehmen, aber zum Bearbeiten braucht man externe Tools. **Gradia** löst dieses Problem endlich – und zwar richtig gut.

## Warum nicht mehr Flameshot?

Ich habe jahrelang **Flameshot** genutzt. Es war die beste Screenshot-Lösung für Linux. Aber unter GNOME hat Flameshot Probleme:

### Die Nachteile von Flameshot unter GNOME

**Wayland-Kompatibilität:**
Flameshot ist nur sehr eingeschränkt mit Wayland kompatibel. Man muss oft Tricks anwenden, damit es unter GNOME funktioniert.

**Keine native Integration:**
Flameshot umgeht GNOMEs native Screenshot-Funktion komplett. Das führt zu Inkonsistenzen im Workflow.

**Abhängigkeiten:**
Flameshot basiert auf Qt, nicht auf GTK. Das bedeutet unnötige System-Abhängigkeiten, die Ressourcen verschwenden.

**Fazit:** Flameshot fühlt sich an wie eine Fremdlösung, nicht wie ein Teil von GNOME.

## Gradia – Die native Alternative

**Gradia** ist anders. Es integriert sich nahtlos in GNOME, weil es **libadwaita** und native GNOME-Komponenten nutzt.

### Was macht Gradia besser?

**Integrierter Workflow:**
Du machst einen Screenshot mit GNOMEs Auswahl-Interface, und Gradia öffnet sich automatisch zur Bearbeitung.

**Natives Feeling:**
Die App sieht aus und verhält sich wie eine echte GNOME-Anwendung.

**Integrierte Bearbeitung:**
Markierungen, Pfeile, Text, Zuschneiden – alles direkt in der App, ohne externe Programme.

## Installation & Einrichtung

### Installation via Flathub

```bash
flatpak install flathub be.alexandervanhee.gradia
```

### Tastenkombination einrichten

1. **Einstellungen** → **Tastatur** → **Benutzerdefinierte Tastenkombinationen**
2. **Befehl:** `flatpak run be.alexandervanhee.gradia --screenshot=INTERACTIVE`
3. **Taste:** Druck-Taste (Print Screen)

Fertig! Jetzt startet Gradia bei jedem Screenshot automatisch.

## Kompatibilität mit anderen Desktops

### Linux Mint (Cinnamon)

Funktioniert gut, aber: Gradia macht standardmässig einen Fullscreen-Screenshot. Du musst dann in der Bearbeitungsansicht zuschneiden.

### KDE Plasma

Weniger sinnvoll. **Spectacle** (KDEs native Screenshot-App) bietet bereits alle Funktionen, die Gradia hat.

## Fazit

**Endlich bekommt GNOME die Screenshot-App, die es die ganze Zeit vermisst hat.**

Screenshots können nicht nur aufgenommen, sondern auch direkt bearbeitet werden. Keine externe App, keine Qt-Abhängigkeiten, keine Wayland-Probleme.

### Für wen ist Gradia?

✅ **GNOME-Nutzer:** Absolute Pflicht-App
✅ **Cinnamon-Nutzer:** Sinnvoll, aber mit Einschränkungen
❌ **KDE-Nutzer:** Spectacle ist besser

Wenn du GNOME nutzt, probier Gradia aus. Du wirst Flameshot nicht vermissen.
