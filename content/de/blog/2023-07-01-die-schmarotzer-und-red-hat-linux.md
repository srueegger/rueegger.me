---
title: "Die «Schmarotzer» und Red Hat Linux"
date: "2023-07-01"
excerpt: "Vorab: Dieser Beitrag ist definitiv ein Meinungsartikel. Meinungen können gerne mal kontrovers sein und man darf auch sehr gerne komplett andere Meinung sein. Aber bitte bleibt freundlich in den Kommentaren. Was ist Passiert? Für alle die es nicht mitbekommen haben. Red Hat Linux macht in Zukunft ihre Paket-Quellen nicht mehr öffentlich zugänglich. Diese Ankündigung hat […]"
tags: ["Linux", "Red Hat Linux"]
image: "/images/blog/die-schmarotzer-und-red-hat-linux.png"
---

Vorab: *Dieser Beitrag ist definitiv ein Meinungsartikel. Meinungen können gerne mal kontrovers sein und man darf auch sehr gerne komplett andere Meinung sein. Aber bitte bleibt freundlich in den Kommentaren.*






## Was ist Passiert?




Für alle die es nicht mitbekommen haben. Red Hat Linux macht in Zukunft ihre Paket-Quellen nicht mehr öffentlich zugänglich.





Diese Ankündigung hat die Open Source Community in heller Aufregung versetzt.






## Wo ist das Problem?




Red Hat Linux ist das kommerziell erfolgreichste Linux der Welt. Es wird auf zahlreichen Servern eingesetzt, hat eine Supportlaufzeit von 10+ Jahren und wenn man es nutzen will muss man dafür bezahlen.





Ja ich weiss man bezahlt nicht direkt für das Linux sondern für den Support und den Zugang zu den Binärpaketen – aber ich will es möglichst einfach halten.





Da die Stabilität von Red Hat Linux quasi weltbekannt ist und nicht alle dafür bezahlen wollen. Gibt es verschiedene Communitys die den Quellcode der Red Hat Pakete nehmen, jeweils das Logo von Red Hat und den Namen auswechseln und damit eine «eigene zu Red Hat binär-kompatible Distributionen» bauen und vermarkten.





Neben diversen Community Projekten gibt es aber auch kommerzielle Projekte wie z.b. «Oracle Linux» die genau das selbe machen und damit auch noch Geld verdienen.





Was sind eigentlich «Quellcode Pakete» und was ist der Unterschied zum Quellcode einer Software?





Hier wird es etwas technisch. Das wissen ist aber essenziell um die Entscheidung von Red Hat besser nach-voll ziehen zu können.





Beginnen wir mal mit Quellcode. Wir in der Linux und OpenSource Welt sind es uns gewohnt, dass ein gross-teil der Software die wir nutzen einen offenen Quellcode hat. Man kann sich diesen Quellcode anschauen, herunterladen, verändern ein eigenes Produkt daraus machen, usw.





Im Grunde tun Linux Distributionen nichts anderes. Sie nehmen sich den Quellcode von diversen Projekten (Kernel, Desktop, Office Programm, etc) passen diesen Quellcode an ihre Bedürfnisse an kompilieren das ganze in ein Paketformat und bieten auf dieser Basis ihre Distribution an.





Quellcode Pakete sind aber etwas komplexer. Und das liegt in der Natur von «Point-Release-Distributionen». Nehmen wir hier als Beispiel Red Hat Linux 8. Dieses Linux wurde im Mai 2019 veröffentlicht und wird Sicherheitsaktualisierungen bis im Mai 2031 erhalten. Bei Release wurde der Linux-Kernel in der Version 4.18 ausgeliefert.





Sicherheitsaktualisierung bis Mai 2031 bedeutet aber nicht, das nun der Kernel auf 4.19 oder auf 4.20 aktualisiert wird – sobald der Kernel verfügbar ist.





Sicherheitsaktualisierung bedeutet folgendes: Wenn das Linux-Kernel Team den Kernel 4.19 veröffentlicht prüfen Red Hat Mitarbeiter den neuen Kernel. Bei sicherheitsrelevanten Änderungen werden diese Änderung in Red Hat 4.18 Kernel zurückportiert.





Das wird bei jedem neuen Kernel Release gemacht – also auch Sicherheitsänderungen die mit dem Kernel 6.3 – der kürzlich veröffentlicht wurde Einzug gehalten haben werden auf einen mehreren Jahren alten Kernel zurückportiert.





Dies passiert aber nicht nur für den Kernel – sondern für jedes einzelne Paket das Red Hat Linux über ihre Paketquellen anbietet.





Als Red Hat Kunde hat man so immer ein möglichst sicheres System das dazu absolut «stabil» bleibt. (Stabil bedeutet in dem Kontext nicht, dass nicht mal irgendwas abstürzen kann sondern – das sich Versionen, APIs und Funktionen im Betriebssystem über den gesamten Supportzeitraum nicht ändern).





Dieses zurückportieren auf über 10 Jahre für alle Pakete ist eine «extrem» grosse Arbeit. Gerade wenn zwischen Red Hat Release und neuem Upstream Release schon 7, 8 oder 9 Jahre liegen ist man da Stunden und teilweise Tage damit beschäftigt die sicherheitsrelevanten Änderungen vernünftig zurück zu portieren.





Und diese Änderungen findet man in diesen «Quellcode Paketen». Wenn man bei Red Hat Linux 8 nun den aktuellsten 4.18 Kernel herunterlädt kann man auch das Quellcode-Paket herunterladen und so Stück für Stück nachvollziehen wo und wann welche Änderung und welche Backports vorgenommen wurden.






## Nun zu den «Schmarotzern»




Wie ich bereits angesprochen habe, ist dieses Rückportieren und anpassen der Pakete eine extrem grosse Arbeit. Bei Red Hat wird diese Arbeit von Menschen gemacht, die jeden Monat einen Lohn erhalten.





Sprich diese Arbeit kostet nicht nur Zeit sondern auch Geld.





Und hier kommt die Problematik der «Community-Projekte». Diese Community Projekte machen diese Arbeit nicht. Sie nehmen einfach 1:1 die Arbeit die von Red Hat gemacht wurde, wechseln dort das Logo und den Namen aus und verschenken es an alle die es haben wollen und deklarieren das quasi als eigene Arbeit.





Noch schlimmer ist Oracle Linux, die für ihr Linux ebenfalls Support-Pakete anbieten. Oracle Linux geht hier auch offensiv in einen Preiskampf mit Red Hat indem sie sagen «Wir sind 1:1 binär-kompatibel zu Red Hat Linux aber günstiger».





Oracle kann ihr Linux aber nur günstiger anbieten, weil die ganze Arbeit nicht von Ihnen sondern von Red Hat geleistet wurde.





Daher aus rein wirtschaftlicher Sicht kann ich persönlich die Entscheidung von Red Hat Linux, diese Quellcode Pakete nicht mehr zu veröffentlichen definitiv nachvollziehen.





Wer von dieser grossen Arbeit die hier von Red Hat geleistet wird profitieren will – der soll auch dafür bezahlen.






## Wer generiert Mehrwert?




Mehrwert ist der Punkt den wir als Linux oder OpenSource-Community am wichtigsten finden. Weil ganz ehrlich weder du noch ich profitieren direkt von der Backport Arbeit von Red Hat – die wenigsten von uns werden auf unserem privaten Rechner ein Red Hat Linux oder einen Red Hat Linux Klon einsetzen.





Dennoch sollte uns das finanzielle Wohlergehen von Red Hat Linux wichtig sein. Sie sind «der wichtigste Sponsor» in der Linux Szene überhaupt. Einerseits finanziert es eine riesige Anzahl von OpenSource Projekten einerseits direkt durch Geld anderseits durch Software Entwickler die zwar bei Red Hat angestellt sind – ihre Arbeitszeit aber komplett für ein OpenSource Projekt nutzen.






### Beispiele wo Red Hat Linux Mehrwert generiert hat:






- **Gnome** wäre ohne Red Hat kaum denkbar. Red Hat ist der Hauptsponsor von Gnome und finanziert im Grunde die komplette Infrastruktur vom Gnome Projekt, zahllose Entwickler die an Gnome und deren Apps arbeiten und auch die jährliche Gnome Entwickler Konferenz (GUADEC) mit jeweils mehreren hundert Teilnehmer die sich dort vor Ort direkt über die Zukunft des Gnome Projekts austauschen. Man muss nicht zwingend ein Gnome Fan sein um diese Arbeit wertzuschätzen.

Zum Gnome Projekt gehören auch Dinge wie GTK ohne dem z.b. auch die Desktops XFCE, Mate, Cinnamon, etc nicht machbar wären.







- **PulseAudio:** Alle die Linux schon länger nutzen wissen vielleicht noch was Audio manchmal für einen Scheiss unter Linux war. Es gab diverse Audio Schnittstellen, jedes Programm nutzte gefühlt eine andere. Mal funktionierte es mal nicht es war alles ein Gebastel.


Mit PulseAudio bekam Linux einen einheitlichen SoundServer der bei Release schon mehr Funktionen hatte als z.b. der SoundServer bei Mac OS heute hat.




- PulseAudio wurde komplett von RedHat finanziert und heute wohl in weit über 90% allen verfügbaren Linux Distributionen eingesetzt.







- Das gleiche gilt für **systemd**, den **NetworkManager**, **LibreOffice**, und vielen vielen mehr.





Man kann hier sagen, dass Red Hat Linux für die OpenSource Community definitiv einen Mehrwert generiert.





Und hier kommt das Problem der «Schmarotzer» Distributionen. Egal ob Community oder kommerziell – diese Distributionen generieren keinen Mehrwert.





Weder bauen sie eigene Innovationen in Ihre Distribution – sie zeichnen sich ja dadurch aus eine 1:1 Kopie zu sein.





Noch arbeiten oder finanzieren sie irgendwelche Upstream Projekte.





Und hier kommt mein Fazit zu der Entscheidung von Red Hat. Ich kann definitiv wirtschaftlich nachvollziehen warum Red Hat diese Entscheidung getroffen hat. Was aber noch viel wichtiger ist – als Nutzer von Freier Software kann ich diese Entscheidung ebenfalls befürworten.





Weil Red Hat mit dem Umsatz den sie mit dem Verkauf ihres Linux machen einen Mehrwert für uns alle generiert → und ich befürworte es wenn das auch langfristig so bleibt.