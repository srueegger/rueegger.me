---
title: "Entfessle Linux: Mit Distrobox Grenzenlosigkeit erleben"
date: "2023-11-22"
excerpt: "Was ist Distrobox? Distrobox ist ein Tool, das es Ihnen ermöglicht, verschiedene Linux-Distributionen innerhalb deines aktuellen Linux-Systems zu betreiben, ohne dass Du dafür eine virtuelle Maschine benötigst. Es nutzt die Technologie von Linux-Containern, ist aber darauf ausgerichtet, mehr Benutzerfreundlichkeit und Flexibilität zu bieten. Distrobox funktioniert sowohl in Kombination mit Docker, podman und auch lilipod. Im […]"
tags: ["Linux", "Distrobox", "Gnome", "Visual Studio Code"]
image: "/images/blog/entfessle-linux-mit-distrobox-grenzenlosigkeit-erleben.jpg"
---

## Was ist Distrobox?




Distrobox ist ein Tool, das es Ihnen ermöglicht, verschiedene Linux-Distributionen innerhalb deines aktuellen Linux-Systems zu betreiben, ohne dass Du dafür eine virtuelle Maschine benötigst. Es nutzt die Technologie von Linux-Containern, ist aber darauf ausgerichtet, mehr Benutzerfreundlichkeit und Flexibilität zu bieten. Distrobox funktioniert sowohl in Kombination mit Docker, podman und auch lilipod.





Im Grunde kann man sich Distrobox ein bisschen wie das Windows Subsystem für Linux (WSL) vorstellen.






## Was sind die Vorteile von Distrobox gegenüber einer virtuellen Maschine?




**Integration**
Distrobox integriert sich nahtlos in dein bestehendes System. Du kannst auf Dateien Deines Hauptsystems zugreifen und Programme ausführen, als wären sie Teil deines Hauptbetriebssystems.





**Ressourceneffizienz**
Distrobox ist ressourcenschonender als eine vollständige virtuelle Maschine, da es Container-Technologie verwendet. Du kannst also problemlos mehrere Distributionen gleichzeitig laufen lassen, ohne das du einen High-End Prozessor mit umfangreichem Arbeitsspeicher benötigst.





**Benutzerfreundlich**
Distrobox ist zwar ein Kommandozeilenprogramm. Die Nutzung ist aber sehr simpel und man muss keine Kenntnisse über Container Technologie haben. Distrobox macht hier die ganze Magie selbstständig im Hintergrund.





Aber hej. Wer will hier schon theoretisches «Bla Bla» lesen. Schauen wir uns ein Real-Life Beispiel an. Ich experimentiere zurzeit mit [openSUSE Micro OS](https://microos.opensuse.org/) bzw. mit [openSUSE Aeon](https://en.opensuse.org/Portal:Aeon) (der Gnome Variante von Micro OS).
Hierbei handelt es sich um ein unveränderliches System. Sprich man hat nur eine Kernel, GNU Tools, Gnome als Read-Only Snapshot installiert (der sich übrigens auch automatisch aktualisiert).





Wenn man Anwendungen installieren will. Also z.b. Browser, Office, Taschenrechner usw ist man auf Flatpak (ist voreingerichtet) angewiesen.





Nun gibt es aber auch viel Software die nicht als Flatpak zur Verfügung steht. Und es gibt Software die man nicht unbedingt als Flatpak nutzen möchte (z.b. Visual Studio Code).





Mein Plan ist folgender. Ich werde eine Ubuntu Distrobox erstellen, dort Visual Studio Code als DEB Paket installieren. Und Visual Studio Code in meinem openSUSE Hostsystem verfügbar machen.






## Starten mit Distrobox




Unter openSUSE Aeon ist distrobox bereits vorinstalliert. Bei den meisten Distributionen wird das nicht der Fall sein.
Falls Distrobox nicht in deinen Paketquellen verfügbar ist, kannst du Distrobox wie [hier](https://github.com/89luca89/distrobox#installation) beschrieben installieren.
Ist Distrobox einmal installiert starten wir nun mit dem Terminal.





Als ersten Schritt laden wir ein Ubuntu LTS. Alle verfügbaren Distrobutionen und Versionen die geladen werden können findet man hier: [https://distrobox.it/compatibility/#containers-distros](https://distrobox.it/compatibility/#containers-distros)





Unser Ubuntu ist schnell erstellt. Nachfolgender Befehl lädt uns einen Ubuntu 22.04 Container herunter und erstellt ihn unter dem Namen «Ubuntu».






```
`distrobox-create --image ubuntu:22.04 --name Ubuntu`
```
Bash



Mit «distrobox enter Ubuntu» loggen wir uns in Ubuntu ein.









Danach werden noch ein paar Einstellungen (automatisch gesetzt) und wir befinden uns in einer Ubuntu Shell. In dieser Shell können wir alles tun was man mit Ubuntu tun kann. Z.b. per apt neofetch installieren:





Dazu geben wir einfach den entsprechenden Befehl ein:






```
`sudo apt install neofetch`
```
Bash



Und können danach neofetch ausführen.









Da dieses Distrobox-Ubuntu ein Container ist. Haben wir damit Zugriff auf das normale Dateisystem und können nun über das Hostsystem unserem openSUSE die DEB Datei von Visual Studio Code herunter.
Danach navigieren wir mit cd Downloads/ zu unserem Download Ordner und installieren Visual Studio Code über apt.









Nun haben wir Visual Studio Code in unserem Container installiert. Nach der Installation müssen wir das Programm noch in unser openSUSE Hostsystem exportieren.





Dazu nutzen wir folgenden Befehl:






```
`distrobox-export --app code`
```
Bash



Dieser Befehl erstellt nun eine .desktop Datei unter openSUSE mit der man das Programm direkt öffnen kann. Die Datei wird so erstellt das im App Grid sichtbar ist, dass Visual Studio Code in einem Ubuntu Container läuft.









Den Container können wir im Terminal nun über «exit» verlassen.






## Möglichkeiten ohne Ende




Mit Distrobox hat man im Grunde unendliche Möglichkeiten und kann so ziemlich alles installieren was man haben möchte. Man findet eine Software nur im AUR? Kein Problem mit Distrobox kurz einen ArchLinux Container erstellen -> AUR Paket installieren und Problem ist gelöst.





Es gibt für eine Software nur ein Fedora Paket? Auch kein Problem, kurz einen Fedora Container installieren und Software installieren.





Distrobox ist noch ein relativ unbekanntes aber bereits sehr mächtiges Tool. Das wohl mit der zunehmenden Verbreitung von unveränderbaren Systemen eine immer grössere Rolle in unserem Linux Alltag einnehmen wird.