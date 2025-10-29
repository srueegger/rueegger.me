---
title: "Ubuntu 25.10: Warum der Wechsel von initramfs-tools zu dracut wichtig ist"
date: "2025-10-21"
excerpt: "Ubuntu 25.10 wechselt von initramfs-tools zu dracut. Was bedeutet das für Nutzer und warum ist dieser Schritt wichtig für die Zukunft?"
tags: ["Ubuntu", "Linux", "Dracut", "Boot"]
image: "/media/blog/ubuntu-dracut.png"
---

# Ubuntu 25.10: Warum der Wechsel von initramfs-tools zu dracut wichtig ist

Stellt euch vor, ein Orchester bereitet sich auf ein Konzert vor. Bevor die Musiker spielen, muss die Bühne vorbereitet werden: Instrumente aufstellen, Mikrophone testen, Beleuchtung einstellen. Genau so funktioniert der Boot-Prozess eines Computers – und genau hier kommt **initramfs** ins Spiel.

## Was passiert beim Einschalten eines Computers?

Wenn du deinen Computer einschaltest, passiert folgendes:

1. Die Firmware (BIOS/UEFI) startet
2. Der Bootloader (z.B. GRUB) wird geladen
3. Der Linux-Kernel startet

Aber hier ist das Problem: Der Kernel kann noch nicht auf deine Festplatte oder verschlüsselte Partitionen zugreifen. Er braucht erst Treiber, Module und Tools – und genau das liefert **initramfs**.

**initramfs** ist ein temporäres Mini-Betriebssystem, das in den Arbeitsspeicher geladen wird. Es stellt sicher, dass:
- Festplatten-Treiber geladen werden
- Verschlüsselte Partitionen entsperrt werden können
- Das eigentliche System-Partition gemountet wird

Sobald das echte System läuft, verschwindet initramfs wieder aus dem Speicher.

**Fun Fact:** Windows nutzt für einen ähnlichen Zweck die Datei `boot.wim`, macOS verwendet `kernelcache`. Technisch machen Linux, Windows und macOS hier also viele Dinge sehr ähnlich.

## Warum Ubuntu jetzt auf dracut umsteigt

Bisher nutzte Ubuntu **initramfs-tools**. Das ist eine Sammlung von Shell-Skripten, die das initramfs-Image erstellen. Diese Skripte waren zwar zuverlässig, aber:

- Schwer zu warten (viele einzelne Skripte)
- Unflexibel bei neuer Hardware
- Kompliziert zu debuggen

Mit **Ubuntu 25.10** kommt nun **dracut** zum Einsatz. Dracut wurde ursprünglich für Fedora entwickelt und ist heute der Standard bei vielen grossen Distributionen.

### Was macht dracut besser?

**Modularer Aufbau:** Statt starrer Skripte nutzt dracut wiederverwendbare Module.

**Automatische Erkennung:** Dracut erkennt automatisch, was dein System braucht, und baut ein massgeschneidertes, schlankes initramfs.

**Bessere Wartbarkeit:** Entwickler können Module einfacher aktualisieren und erweitern.

## Was bedeutet das für mich als Nutzer?

### Konkrete Vorteile

**Schnelleres Booten:** Dracut erstellt effizientere initramfs-Images, was die Boot-Zeit verkürzen kann.

**Stabileres System:** Weniger Skript-Chaos bedeutet weniger potenzielle Fehlerquellen.

**Bessere Hardware-Unterstützung:** Moderne Geräte (z.B. Bluetooth-Tastaturen während des Bootvorgangs) werden besser unterstützt.

**Verschlüsselte Systeme:** Module werden früher geladen, was bei verschlüsselten Festplatten Vorteile bringt.

### Für Entwickler und Admins

**Klarere Struktur:** Module statt Shell-Skript-Wirrwarr.

**Einfacheres Debugging:** Probleme beim Booten lassen sich besser diagnostizieren.

## Ein bisschen Geschichte

Früher gab es **initrd** (Initial RAM Disk) – eine starre RAM-Disk. Das war unflexibel und musste manuell angepasst werden.

**initramfs** (seit Linux 2.6) ist dynamischer: Es wird zur Boot-Zeit generiert und passt sich besser an die Umgebung an.

**dracut** geht noch einen Schritt weiter: Modulare Architektur, automatische Erkennung, bessere Wartbarkeit.

## Woher kommt dracut?

Dracut wurde 2008 von der Fedora/Red Hat-Community entwickelt. Einer der Hauptentwickler war der deutsche Entwickler **Harald Hoyer**.

Der Name? **Dracut** ist eine Stadt in Massachusetts, USA. Red Hat hat eine Tradition, Projekte nach Städten in Neuengland zu benennen.

Heute nutzen viele grosse Distributionen dracut:
- Fedora
- Red Hat Enterprise Linux
- openSUSE
- Gentoo
- Solus
- SUSE Enterprise Linux

Mit Ubuntu kommt nun eine weitere wichtige Distribution hinzu.

## Fazit

Der Wechsel von initramfs-tools zu dracut ist ein wichtiger Schritt für Ubuntu. Es geht nicht nur um technische Details, sondern um:

- **Modernisierung** des Boot-Prozesses
- **Vereinheitlichung** zwischen verschiedenen Distributionen
- **Bessere Zukunftsfähigkeit**

Für die meisten Nutzer wird der Wechsel kaum spürbar sein – aber unter der Haube wird Ubuntu moderner, stabiler und zukunftssicherer.

**Wichtig:** Der Wechsel zu dracut betrifft nur Neuinstallationen von Ubuntu 25.10. Wer von 25.04 upgraded, behält weiterhin initramfs-tools.
