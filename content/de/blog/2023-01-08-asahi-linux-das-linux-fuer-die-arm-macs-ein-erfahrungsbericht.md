---
title: "Asahi Linux – Das Linux für die ARM Macs – ein Erfahrungsbericht"
date: "2023-01-08"
excerpt: "Die M-Prozessorreihe von Apple sind ARM Prozessoren (wie wir sie auch aus Smartphones und Tablets kennen) und damit eine andere Prozessorarchitektur als bisher Intel oder AMD anbieten. Diese ARM-Chips funktionieren etwas anders als die wie wir es bisher aus der X86er Chipriehe kennen. Da es sich bei einem M-Prozessoren um einen sogenannten «SoC» (System on […]"
tags: ["Apple", "Linux", "Apple", "Arch Linux", "Asahi Linux"]
image: "/images/blog/asahi-linux-das-linux-fuer-die-arm-macs-ein-erfahrungsbericht.jpg"
---

Die M-Prozessorreihe von Apple sind ARM Prozessoren (wie wir sie auch aus Smartphones und Tablets kennen) und damit eine andere Prozessorarchitektur als bisher Intel oder AMD anbieten.





Diese ARM-Chips funktionieren etwas anders als die wie wir es bisher aus der X86er Chipriehe kennen. Da es sich bei einem M-Prozessoren um einen sogenannten «SoC» (System on a Chip) handelt. Der Name sagt es bereits -> auf einem Chip soll das ganze «System» sein. Bei den M Prozessoren bedeutet dass, dass sowohl CPU, GPU, Audio-Chip (quasi Soundkarte), und auch alles was relevant ist für Netzwerk, Wlan, Bluetooth, etc sich auf so einem Chip befindet





Asahi Linux – ist ein Projekt, dass versucht Linux Treiber in den Kernel zu integrieren, um diese M-SoC’s unter Linux nutzbar zu machen. Da werden im Grunde durch Reverse Engineering Appel Treiber für den Linux Kernel entwickelt.





Das Asahi Projekt wird per Crowdfunding finanziert und konnten in kürzester Zeit beachtliche Finanzierungsmittel aufweisen, so das die Leute die an diesem Projekt arbeiten – diese zurzeit in Vollzeit-Arbeit tun können.






## Warum gibt Asahi Linux überhaupt?




Wenn man Asahi Linux in IT News sieht, sieht man in den Kommentarspalten oft die Frage aufkommen wozu? «Ich kaufe mir doch nicht einen Mac um darauf Linux zu nutzen.», etc.





Wenn man bedenkt wie schnell die Finanzierung von Asahi Linux gestanden ist stellt sich für mich diese Frage nicht. Ich denke es gibt 3 Zielgruppen für Asahi Linux:







- Mac User – gerade im Entwicklungsbereich – sind sich Dual Boot mit Windows oder Linux gewohnt und wollen das auch weiterhin auf dem M-Prozessoren möglich haben.




- Es gibt im Windows/Linux Bereich einfach keine gute ARM-Hardware. Wenn man Vorteile von ARM (lange Akkulaufzeit, Mega Geschwindigkeit von Sleep to aufwachen, etc auch auf Linux nutzen will braucht es dieses Projekt.
Zurzeit ist das Macbook Air M1 (das man für 900-1’000 CHF/Euro) im Handel bekommt wohl das beste Stück ARM-Notebook Hardware das man kaufen kann – egal ob man darauf Mac OS, Windows ARM oder Linux nutzen möchte.




- Wie auch Smartphones, und andere Geräte fallen Mac irgendwann aus dem Software-Support bei Apple raus. Zugegebenermassen dauert das sehr lange – aber so kann man nach dem Apple-Supportende sein Mac eben mit Linux weiter nutzen







## Asahi Installieren – und warum ich solange damit gewartet habe




Ich habe lange gezögert bzw auch überlegt ob ich Asahi Linux auf meinem Macbook Pro überhaupt installieren sollte. Das hat verschiedene Gründe. Einerseits ist das Projekt wirklich noch im Alpha Status (es gibt mehr Dinge die nicht funktionieren, als Dinge die funktionieren). Zweitens baut Asahi Linux ihre Distribution auf Basis von Arch Linux auf – und naja ich hasse Arch – wirklich! Ich hasse es.





Aber die Neugier war irgendwann grösser und ich habe mich dennoch daran gewagt. Für alle die das hier lesen und denken, könnte ich auch ausprobieren. Bitte bedenkt Asahi Linux ist ALPHA Status. Viele Dinge funktionieren nicht.





Bei der Installation hat man die Qual der Wahl. Das Asahi Projekt bietet im Grunde – wie erwähnt – eine eigene auf Arch Linux basierende Distribution an (im Grunde ist es Arch Linux ARM, mit eigenem Repo aus dem der Kernel, Mesa und ein paar weitere Pakete installiert werden). Es gibt aber auch einige «Community-Varianten». Die quasi die Kernel und Mesa änderungen von Asahi Linux nehmen und die in andere Distributionen einbauen.





So könnte man statt dem offiziellen «Asahi Arch Linux» auch ein Ubuntu, Debian, und ein paar weiteren Distributionen installieren.





Ich habe aber bewusst auf die Community Varianten verzichtet. Ich wäre an Fedora oder Ubuntu interessiert gewesen (weil es halt nicht Arch ist xD), aber alle diese Community Varianten werden jeweils von einer einzelnen Person betreut.





Wenn die mal keinen Bock mehr hat, hast du ein Dual Boot Linux, dass nicht mehr aktualisiert werden kann.





Daher habe ich mich für das offizielle Asahi Arch Linux entschieden. Und auch hier muss man sich wieder entscheiden. Asahi Linux bietet da 2 Installationsoptionen an.





Die erste ist ein Voll-konfigurierter KDE Desktop -> die andere ist ein Basis-Arch System ohne GUI oder sonst was.





Und hier kam mein Problem. Ich mag KDE nicht, und wollte wenn schon das ganze mit GNOME testen und nutzen. Und ja ich weiss wie man ein Arch Linux konfiguriert, aber es ist furchtbar Zeitraubend und nervend und einfach nur dumm… aber ja ich hab es getan.





Ich werde hier bewusst keine 1:1 Anleitung für die Installation von Asahi Linux liefern. Da das Projekt noch in der Alpha Phase ist, kann sich die regelmössig ändern. Daher wenn ihr Asahi Linux installieren wollt, schaut immer auf der Projektseite nach der offiziellen Anleitung.





Kurz zusammengefasst kann man sagen: Das man sich innerhalb von Mac OS ein Bash Script herunterladet und dieses dann ausführt. Das Bash Script stellt dir diverse Fragen (z.b. wie viel Speicherplatz für die Linux Partition genutzt werden sollen etc).





Wenn man diese alle beantwortet hat, wird die bestehende Mac OS Partition verkleinert und eine neue Partition für das Asahi Linux erstellt. Dazu werden ausschliesslich in Mac OS mitgelieferte Anwendungen (wie z.b. diskutils) verwendet.





Danach wird das Arch Basis System auf die Partition kopiert. Und danach gibt es einer sehr sehr sehr wichtige Ausgabe im Terminal, die die nächsten Schritte beschreibt. Dieser Anleitung muss absolut genau folge leisten. Tut man das nicht, landet man beim Neustarten in einem Boot-Loop und man muss seinen Mac komplett neu aufsetzen.





Wenn Asahi Linux installiert ist muss man beim Starten des Mac, den Power-Button solange gedrückt halten bis die Betriebsystemauswahl kommt (quasi der Apple eigene Bootloader). Dort kann man dann zwischen Asahi Linux und Mac OS auswählen. Wenn man den Power-Button nur kurz drückt, wird einfach das Betriebssystem geladen, das zuletzt gestartet wurde.









Weder Gnome noch KDE haben Support für Notch oder Bildschirmeinkerbungen. Asahi Linux, ist sich diesem Problem bewusst und löst es relativ elegant.





Es macht quasi den Bildschirm kleiner und zeigt oben einfach einen «schwarzen Balken». Daher ist unter Asahi Linux mein 14″ Macbook eher ein 13″ Macbook -> das sieht dann so aus:










## Macht Linux auf ARM Spass?




Jein. Was Spass macht ist die Akkulaufzeit. Sie ist zwar nicht so gut wie unter Mac OS aber immer noch sehr sehr gut.





Was weniger Spass macht, ist die Software Verfügbarkeit. Dieser Punkt ist aber extrem abhängig von was ihr im Alltag so nutzt.





Grundsätzlich kann man sagen alle Distributionen die ARM Versionen anbieten, haben ihre Repositorys in der Regel auch komplett nach ARM kompiliert.





Sprich alle Software die ihr mit pacman auf einem normalen Arch Linux installiert, kann ich auch auf Asahi Linux installieren. Es gibt aber dennoch Abstriche.





Als Beispiel Firefox. Firefox liefert normalerweise automatisch ein «widewine plugin» mit. Damit kann man die verschlüsselten Inhalte auf Netflix, Disney+, etc anschauen.





Das Problem ist, dieses Plugin gibt es für Linux nur als x86er Version für 32 und 64 Bit Systeme aber nicht für ARM.





Sprich man kann auf dem Macbook zurzeit kein Netflix & Co schauen. Da der ganze Audio-Stack eh nicht funktioniert ist das begrenzt traurig -> aber das Problem ist da.





Ebenfalls nutze ich einige Software die nicht über die Distributionen installiert werden meine Must Have’s sind:







- SoftMaker Office




- FileZilla Pro




- Mega Sync




- 1 Password






Alle diese Programme gibt es für Linux. Normalerweise bieten die ein DEB oder RPM an -> oder im Falle von Arch Linux eben eine AUR-Eintrag. Nichts davon ist aber nutzbar, da die Software Hersteller eben keine ARM Builds zur Verfügung stellen.









Ob sich das jemals ändern wird? Weiss ich nicht -> wahrscheinlich nur wenn ARM auch in der Windows Welt mehr Verbreitung findet. So oder so wird das sicherlich noch dauern.






## Wie löst Apple dieses Problem?




Apple hatte diese Problematik als sie von Intel auf ihren eigenen ARM Chips gewechselt sind natürlich auch. Apple hat dazu eine Software gebaut die auf den wunderschönen Namen «Rosetta» hört. Die quasi ähnlich wie Wine unter Linux eine Software die noch nicht als ARM-Build zur Verfügung steht in Echtzeit übersetzt.





Das hat sehr sehr gut funktioniert. Inzwischen ist FileZilla Pro die einzige Software die bei mir auf dem Mac noch Rosetta benötigt. Alles andere (Firefox, Visual Studio Code, Office, NodeJS, Docker, etc) hat bereits native ARM Builds für Mac OS.






## Macht Asahi Linux zurzeit überhaupt Sinn?




Zurzeit nein. Es ist wirklich nur für Bastler. Ein System ohne Sound und ohne funktionierenden Anschlüssen macht für die tägliche Verwendung absolut keinen Sinn.





Aber es ist extrem faszinierend zu sehen welche Fortschirtte das Asahi Projekt in kurzer Zeit macht. Daher werde ich die Partition sicherlich mal lassen und hin- und wieder in das System booten.






## Warum Parallels zurzeit die bessere Option ist!




Falls ihr selber ein Apple Gerät mit ARM Prozessor habt und auch mit Linux arbeiten wollt. Kann ich euch dringend empfehlen einen Blick auf «Parallels» zu werfen.





Parallels ist wie z.b. VirtualBox eine Virtuelle Maschine für Mac OS. Und ich behaupte hier einfach es ist die beste Virtuelle Maschine die es gibt -> egal für welches System.





Man kann dort Problemlos Windows 10, 11 (jeweils als ARM Version) oder die Linux Distribution deiner Wahl (ebenfalls ARM Versionen) installieren. Cool ist, dass Parallels einen «Coherence Modus hat» Sprich Programme die ich unter Windows oder Linux in Parallels installiert haben, erscheinen auch in der Mac OS Programmübersicht und können direkt geöffnet werden ohne das man die ganze Windows oder Linux Oberfläche ansehen muss.





Man hat dann einfach innerhalb von Mac OS ein Windows oder Linux Fenster mit Programm XY. Sehr ähnlich funktioniert das übrigens auch in Windows 11 mit WSL2.





Zum Abschluss noch Neofetch und die Gnome System Infos:





[](https://rueegger.me/wp-content/uploads/2023/09/asahi-linux-neofetch.png)[](https://rueegger.me/wp-content/uploads/2023/09/gnome-infos.png)