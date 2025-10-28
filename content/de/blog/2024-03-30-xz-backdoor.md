---
title: "Die XZ-Hintertür gefährdet unzählige Computer weltweit – was wir bisher wissen"
date: "2024-03-30"
excerpt: "Ein kritischer Backdoor in der XZ-Kompressionsbibliothek bedroht Server weltweit. Die Geschichte eines mehrjährigen Social-Engineering-Angriffs."
tags: ["Linux", "Sicherheit", "xz", "Backdoor"]
image: "/images/xz-backdoor.webp"
---

# Die XZ-Hintertür: Globale Sicherheitsbedrohung

Ein kritischer Backdoor wurde in der weit verbreiteten XZ-Kompressionsbibliothek entdeckt. Diese Sicherheitslücke gefährdet potenziell unzählige Server und Computer weltweit.

## Was ist XZ?

XZ ist ein Kompressionsformat ähnlich ZIP oder RAR, allgegenwärtig in der Linux-Welt:

- Initramfs und Kernel-Kompression
- RPM- und DEB-Pakete
- Auch macOS-Nutzer mit Homebrew betroffen

## Betroffene Distributionen

**Definitiv gefährdet:**
- Debian (Testing, Unstable, Sid)
- Fedora (40 und Rawhide)
- Kali Linux
- Arch Linux
- Weitere Rolling-Release-Distributionen

**Empfehlung**: Sofort Sicherheitsupdates einspielen. Bei fehlenden Updates: SSH-Dienst deaktivieren.

## Die Geschichte des Backdoors: Ein mehrjähriger Angriff

### 2021: Jia Tan erscheint

"Jia Tan" erstellt ein GitHub-Konto und bringt verdächtige Änderungen im libarchive-Projekt ein, die potentielle Sicherheitslücken einführen.

### 2022: Druck und Integration

- "Jia Tan" reicht Bugfix ein
- "Jigar Kumar" übt massiven Druck auf Hauptentwickler Lasse Collin aus
- Drei Tage später: "Jia Tan" wird offizieller Maintainer

### 2023: Kontrolle ausgebaut

- **Januar**: Vollständige Commit-Rechte für "Jia Tan"
- **März**: Manipulation der OSS-Fuzz-Kontakte zur Sabotage automatisierter Sicherheitstests

### 2024: Der Angriff

- **Anfang März**: Backdoor als "Testdateien" implementiert
- "Jia Tan" und "Hans Jansen" drängen Distributionen zur Übernahme

## Die Entdeckung: Ein glücklicher Zufall

Ein Microsoft-Entwickler bemerkte eine **SSH-Verzögerung von 500 Millisekunden** – dieser Zufall führte zur Entdeckung.

Ohne diesen Zufall wäre der Backdoor möglicherweise in Stable-Releases gelangt und hätte Millionen Systeme kompromittiert.

## Identität von "Jia Tan"

Die wahre Identität bleibt ungeklärt:

- IP-Adresse (185.128.24.163) führt nach Singapur
- Vermutlich via Proxy/VPN verschleiert
- Möglicherweise staatlich gesponsert

## Was dies über Open Source zeigt

Der Vorfall demonstriert kritische Schwachstellen:

1. **Unterfinanzierte Maintainer**: Lasse Collin unterhielt XZ größtenteils allein
2. **Social Engineering**: Mehrjährige, geduldige Angriffe sind möglich
3. **Fehlende Corporate-Unterstützung**: Kritische Infrastruktur ohne angemessene Finanzierung

## Fazit

Die XZ-Hintertür ist einer der raffiniertesten Angriffe auf Open-Source-Software:

- **Mehrjährige Planung**
- **Social Engineering** statt technischer Exploits
- **Beinahe-Erfolg** mit potentiell globalen Auswirkungen

**Dringend erforderlich:**
- Verstärkte Unterstützung kritischer Open-Source-Projekte
- Verbesserte Sicherheitsüberprüfungen
- Corporate Sponsoring für Maintainer

Die Entdeckung war Glück. Beim nächsten Mal haben wir vielleicht nicht so viel Glück.

**Status**: Gepatcht, aber die Lehren bleiben relevant
