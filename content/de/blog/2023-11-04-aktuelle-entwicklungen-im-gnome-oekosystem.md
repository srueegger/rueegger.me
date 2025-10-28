---
title: "Aktuelle Entwicklungen im Gnome Ökosystem"
date: "2023-11-04"
excerpt: "Vor etwas über einem Monat wurde Gnome 45 veröffentlicht. Natürlich die bisher beste, schönste und tollste Ausgabe des Gnome Desktops 😉. Das Gnome Projekt hat sich natürlich nicht auf seinen Lorbeeren ausgeruht sondern arbeitet bereits fleissig an der nächsten Version. Das Release von Gnome 46 ist für den 20. März 2024 geplant. Die Gnome 46 […]"
tags: ["Linux", "Gnome"]
image: "/images/blog/aktuelle-entwicklungen-im-gnome-oekosystem.png"
---

Vor etwas über einem Monat wurde Gnome 45 veröffentlicht. Natürlich die bisher beste, schönste und tollste Ausgabe des Gnome Desktops 😉.





Das Gnome Projekt hat sich natürlich nicht auf seinen Lorbeeren ausgeruht sondern arbeitet bereits fleissig an der nächsten Version. Das Release von Gnome 46 ist für den 20. März 2024 geplant. Die Gnome 46 Alpha sollte am 6. Januar 2024 erscheinen, die Beta 10. Februar.
Ab dem 10 Februar kommt dann auch der UI und Feature Freeze. Sprich ab dann dürfen keine neue Funktionen oder Designänderungen mehr vorgenommen werden. Und das Team hat dann noch rund einen Monat Zeit das Paket zu stabilisieren.





Ich werde nun nachfolgend Auflisten was in den letzten Wochen in der Gnome Welt spannendes passiert ist. Ich werde es aufteilen auf Kategorien:







- **Gnome Foundation** (alles was in der Verwaltung rund um Gnome passiert)




- **Gnome Core Apps** (alle Apps die vom Gnome Projekt selbst betreut werden)




- **Gnome Circle Apps** (Apps die nicht von Gnome selbst betreut werden, aber eine Reihe an strengen Anforderungen erfüllen um als »App für den Gnome Desktop« gelabelt zu werden.




- **Drittanbieter Projekte** (Apps die in keinem direkten Zusammenhang mit Gnome stehen, aber irgendwie trotzdem relevant sind)






Der Beitrag, kann auch als kleine Wunderkiste betrachtet werden wo man eventuell neue Gnome bzw. Linux Apps kennen lernt, die man bisher noch gar nicht kannte. 🎉






## Gnome Foundation





### Gnome Asia Summit




Heute in einem Monat findet der »Gnome Asia Summit« in Nepal statt. Ein Treffen im asiatischen Raum bei dem es primär um den Gnome Desktop geht. Es soll ein Forum für Gnome Nutzer, Entwickler, Regierungen und Private Firmen sein um das derzeitige Gnome und zukünftige Möglichkeiten zu besprechen.





Zurzeit kann man sich immer noch anmelden. Also Fall jemand nächsten Monat in Nepal ist und noch nach einer Freizeitbeschäftigung sucht fühl euch frei. Ausserdem sucht man noch nach Firmen die den Event gerne mitsponsern würden.





Anmeldungen und mehr zum Event → sogar auf Deutsch findet man hier: [https://events.gnome.org/event/170/overview](https://events.gnome.org/event/170/overview)






### Neue Gnome Geschäftsführerin




Am 17. Oktober dieses Jahres wurde Holly Million als neue Geschäftsführerin der Gnome Foundation ernannt. Sie ist damit die erste Frau die dieses Amt übernimmt. Holly bringt drei Jahrzehnte unschätzbare Erfahrung im Non-Profit-Management mit und war als Beraterin, Entwicklungsleiterin, Geschäftsführerin und Vorstandsmitglied für zahlreiche Organisationen tätig. Insbesondere gründete sie die gemeinnützige Organisation Artists United, die sich der Stärkung einzelner Künstler und der Förderung der Zusammenarbeit zwischen künstlerischen Disziplinen zum Wohle der Gemeinschaft widmet. Darüber hinaus fungierte Holly als Geschäftsführerin der BioBricks Foundation, einer internationalen Open-Source-Biotechnologie-Nonprofit-Organisation.





Wer Holly kennen lernen möchte kann das am 14. November tun. Es gibt dann ein digitales »Meet and Greet with Holly Million« wenn man dabei sein will muss man sich anmelden: [https://events.gnome.org/event/172/](https://events.gnome.org/event/172/)





Und ja ich werde bei dem Meet&Greet dabei sein. Wenn ihr nicht dabei sein könnt aber eine spannende Frage habt die ihr Holly gerne stellen wollt könnt ihr sie mir hier mitgeben.






### Welcome to Gnome




Gnome arbeitet zurzeit an einer Webseite die in Zukunft unter »welcome.gnome.org« laufen soll. Die Idee ist es Leuten den Gnome Desktop näher zu bringen die ihn noch nicht so gut kennen. Und Menschen die zum Gnome Projekt beitragen wollen einen einfachen Einstieg zu geben wo sie sich wie am besten einbringen können.





Das Layout ist nun offen für ein Review: [https://teams.pages.gitlab.gnome.org/Websites/welcome.gnome.org/de/](https://teams.pages.gitlab.gnome.org/Websites/welcome.gnome.org/de/)





Nach dem Review wird es sicherlich noch Anpassungen geben und geht dann in die Übersetzung.






### Weiteres zur Gnome Foundation




Zudem hat die Gnome Foundation einen neuen Ausschuss eingerichtet. Dieser Ausschuss hat die Aufgabe einen Verhaltenskodex zu entwickeln. Da es in der Vergangenheit teilweise vorkam das Antworten von Gnome Entwickler als sehr frech, hochnässig oder arrogant aufgefasst wurde versucht man hier ein besseres Klima für die Entwickler zu schaffen.





Du wolltest schon immer bei einem freien Software Projekt mithelfen kannst aber nicht Programmieren? Das Gnome Projekt sucht zurzeit freiwillige die helfen die Social Media Kanäle von Gnome mit Inhalten zu befüllen. Wer hier Interesse hat kann sich direkt bei der Gnome Foundation Brand Managerin Caroline Henrikson melden: [chenriksen@gnome.org](mailto:chenriksen@gnome.org)






## Gnome Core Apps





### Gnome System Monitor




Der Gnome System Monitor ist der altbekannte Task Manger vom Gnome Desktop. Für Gnome 46 ist geplant, dass der System Monitor seine GTK3 Basis entledigt und endlich auch in libadwaita/GTK4 daherkommt. Dazu gibt es einen sehr umfangreichen Merge Request den man hier einsehen kann: [https://gitlab.gnome.org/GNOME/gnome-system-monitor/-/merge_requests/55](https://gitlab.gnome.org/GNOME/gnome-system-monitor/-/merge_requests/55)










### Gnome Software




Beim App Store des Gnome Projektes wurden ein paar UI Fixes für die Version 46 vorbereitet.






### VTE Bibliothek




Die VTE Bibliothek ist eine Gnome Bibliothek die GTK Programme nutzen können um ein Temrinal darzustellen. Zum Beispiel basiert das Programm Gnome Console darauf.





Da die Bibliothekt – gerade wegen Gnome Console wichtiger wurde als sie es bisher war haben die Gnome Entwickler hier nun sehr viel Arbeit investiert um VTE performanter zu machen.





Man hat unter anderem den Kompressionsalgoryhtmus geändert, viel Code der noch in C geschrieben war nach C++ portiert, Grosse Teile werden nun über die GPU statt über die CPU gerendert und es werden mehr native GTK4 Funktionen benutzt.






### Tracker




Der Gnome Tracker ist die Suchengine hinter allen Suchfunktionen im Gnome Desktop oder auch im Dateimanager. Er indexiert laufend die Inhalte und Metadaten der Dateien auf dem Rechner und erstellt einen Suchindex, so dass man leicht und bequem über die Gnome Shell nach Dateien suchen kann.





Tracker wurde nun erheblich verbessert und sowohl die Such- wie auch die Indexiergeschwindigkeit optimiert. Dafür wurden Teile des Codes neugeschrieben – der nun mit weniger langatmigen Systemaufrufen auskommt und damit schneller agiert.






### Vala




Vala ist eine objektorientierte Programmiersprache deren Compiler C Code erzeugt. Vala ist innerhalb vom Gnome Projekt eine sehr beliebte Sprache (klar kommt ja auch aus der Schweiz 😛) und viele Projekte (z.b. Timeshift, oder auch der Unity Desktop) wurden mit Vala entwickelt.





Die Sprache hat nun die Dokumentation aktualisiert. Dazu eine komplett neue Webseite gebaut und arbeitet viel mehr mit Code Beispielen. Für alle die eine Gnome App bauen wollen, ist Vala definitiv einen Blick Wert.






### Gnome Terminal




Das Gnome Terminal erfreut sich einer breiten Beliebtheit obwohl es von Gnome durch die Gnome-Console ersetzt wurde. Viele Distributionen wie z.B. Ubuntu und Fedora liefern weiterhin das umfangreichere Gnome Terminal und nicht die Gnome-Console aus.





Die Entwickler hinter dem Gnome Terminal haben nun eine erste GTK4 Version (nicht libadwaita) herausgebracht. Es braucht noch etwas Effort bis es wirklich nutzbar ist, das Ziel ist es aber mit Version 46 den GTK4 Port abgeschlossen zu haben.










## Gnome Circle Apps





### Webfont Kit Generator




Der Webfontkit Generator ist ein Programm das gerade für Webentwickler sehr spannend ist. Das Programm erstellt dir aus ttf oder otp Schriften eine Webfont (woff, bzw woff) die man direkt in Webseiten lokal einbinden kann. Der Webfontkit Generator wurde aktualisiert um sich an die aktualisierte Designsprache des Gnome 45 anzupassen. Zusätzlich gab es ein paar neue Übersetzungen. Das Programm kann man hier herunterladen: [https://flathub.org/de/apps/com.rafaelmardojai.WebfontKitGenerator](https://flathub.org/de/apps/com.rafaelmardojai.WebfontKitGenerator)






### Warp




Mit Warp kann man einfach, unkompliziert und verschlüsselt Dateien im Internet von einem Gerät zu einem anderen Teilen. Auch hier gab es ein Update um sich an die aktualisierte Design Richtlinien von Gnome 45 anzupassen. [https://flathub.org/de/apps/app.drey.Warp](https://flathub.org/de/apps/app.drey.Warp)






### Share Preview




Das Programm hat ebenfalls sein Layout für Gnome 45 aktualisiert. Ebenfalls kann man nun auch eine Vorschau für LinkedIn generieren. Zudem ist es nun möglich mehrere Instanzen der App auf einmal zu öffnen. [https://flathub.org/de/apps/com.rafaelmardojai.SharePreview](https://flathub.org/de/apps/com.rafaelmardojai.SharePreview)






### Ear Tag




Mit Ear Tag kann man seine Musik taggen. Die Software wurde ebenfalls an die neuen Design Richtlinien angepasst. Zudem kann nun ein Front- und Backcover definieren statt nur einem Bild. [https://flathub.org/de/apps/app.drey.EarTag](https://flathub.org/de/apps/app.drey.EarTag)






### Commit




Commit ist eine kleine aber feine App, die Entwicklern hilft GIT-Commits zu schreiben. Hier gab es ein kleines Update, beim schreiben der Commit Nachricht ist nun die Rechtschreibprüfung aktiv sofern ein lokales Wörterbuch vorhanden ist. [https://flathub.org/de/apps/re.sonny.Commit](https://flathub.org/de/apps/re.sonny.Commit)






### Fragments




Fragments ist ein in libadwaita geschriebener BitTorrent Client. Mit einem Update wurde eine lang gewünschte Funktion hinzugefügt. Man kann nun in einem Torrent selektieren welche Dateien man herunterladen möchte und muss nicht zwingend das gesamte Torrent Paket laden. Das Update ist noch nicht verfügbar sollte aber in wenigen Tagen erscheinen: [https://flathub.org/de/apps/de.haeckerfelix.Fragments](https://flathub.org/de/apps/de.haeckerfelix.Fragments)






### Paper Clip




Paper Clip ist ein kleines Programm mit dem man die Metadaten von PDF Dateien bearbeiten kann. Mit dem Update wurde russisch als neue Sprache hinzugefügt. Die App kann nun mehrere Instanzen öffnen. Ebenfalls hat man das Look&Feel an die neuen Gnome 45 Design Richtlinien angepasst: [https://flathub.org/de/apps/io.github.diegoivan.pdf_metadata_editor](https://flathub.org/de/apps/io.github.diegoivan.pdf_metadata_editor)






### Video Trimmer




Mit Video Trimmer kann man gewisse Teile aus einem Video schneiden. Das Programm bekam ein kleines Update um sich an die neuen Design Richtlinien von Gnome 45 anzupassen: [https://flathub.org/de/apps/org.gnome.gitlab.YaLTeR.VideoTrimmer](https://flathub.org/de/apps/org.gnome.gitlab.YaLTeR.VideoTrimmer)






### Cartridges




Cartridges ist ein »Game Launcher« für alle möglichen Spiele. Es unterstützt unter anderem Steam, Lutris und viele weitere Anbieter. Die App bekam ein Update das dafür sorgt, dass man nun die Spiele auch über die Gnome Desktop Suche finden kann. Zudem wurde das Design an das Gnome 45 Look&Feel angepasst. [https://flathub.org/de/apps/hu.kramo.Cartridges](https://flathub.org/de/apps/hu.kramo.Cartridges)






## Drittanbieter Projekte für den Gnome Desktop





### Jogger




Jogger ist eine komplett neue Gnome Mobile App die man z.B. auf dem Librem 5 Smartphone installieren und nuten kann. Sie kann Training wie Joggen, Fahrrad fahren, etc tracken und visuell ausgeben. Ebenfalls gibt es eine Import Funktion wo man bisherige Trainings aus Android Apps importieren kann. [https://flathub.org/apps/xyz.slothlife.Jogger](https://flathub.org/apps/xyz.slothlife.Jogger)






### Railway




Railway dürfte für alle Bahnfahrer eine spannende App sein. Mit der App kann man Zug-Verbidnungen diverser Anbieter nachschauen. Darunter z.B. auch der Deutschen Bahn oder der ÖBB. Die neue Version 2.0 ist nun mit libadwaita entwickelt worden und folgt den Gnome Design Richtlinien. [https://flathub.org/apps/de.schmidhuberj.DieBahn](https://flathub.org/apps/de.schmidhuberj.DieBahn)










### Turtle




Turtle ist nun als Flatpak verfügbar. Turtle ist ein Programm, dass Plugins für Nautilus (und andere Dateimanager) für die Verwaltung von GIT Repositorys zur Verfügung stellt. [https://](https://flathub.org/apps/de.philippun1.turtle)[flathub.org/apps/de.philippun1.turtle](https://flathub.org/apps/de.philippun1.turtle)






### Upscaler




Upscaler ist ein Programm das dir erlaubt Bilder ohne merklichen Qualitätsverlust zu vergrössern. Die App wurde kürzlich aktualisiert und bietet nun »Drag&Drop« Support, Webp Support und ein an Gnome 45 angepasstes Design. [https://flathub.org/apps/io.gitlab.theevilskeleton.Upscaler](https://flathub.org/apps/io.gitlab.theevilskeleton.Upscaler)






### GDM Settings




GDM Settings ist ein Programm um den Login Screen von Gnome optisch anpassen zu können. Die App wurde aktualisiert um mit GDM45 kompatibel zu werden. Gleichzeitig wurde das Look&Feel der App an die Designsprache von Gnome 45 angepasst. [https://flathub.org/](https://flathub.org/apps/io.github.realmazharhussain.GdmSettings)[apps](https://flathub.org/apps/io.github.realmazharhussain.GdmSettings)[/io.github.realmazharhussain.GdmSettings](https://flathub.org/apps/io.github.realmazharhussain.GdmSettings)





Das Projekt möchte übrigens darauf aufmerksam machen, dass man die Arbeit gerne finanziell unterstützen darf. Dafür wurde nun ein »GitHub Sponsors« Bereich aufgeschalten: [https://github.com/sponsors/gdm-settings](https://github.com/sponsors/gdm-settings)






### Flatseal




Mit Flatseal kann man die Berechtigungen von Flatpak Apps verwalten. Mit dem neusten Update wurde die Geschwindigkeit verbessert. Und Flatseal sieht vom Layout her nun auch wie eine Gnome 45 App aus. [https://flathub.org/apps/com.github.](https://flathub.org/apps/com.github.tchx84.Flatseal)[tchx84](https://flathub.org/apps/com.github.tchx84.Flatseal)[.Flatseal](https://flathub.org/apps/com.github.tchx84.Flatseal)






### Meld




Meld ist eine uralte App ich nutze sie gefühlt seit glaub seit ich Linux kenne. Der Entwickler von meld arbeitet zurzeit an einer libadwaita Adaption seiner App. Die ist noch nicht fertig aber weit fortgeschritten. Er sucht aber auch dringend noch Leute die ihm helfen. Melden kann man sich hier: [https://gitlab.gnome.org/GNOME/meld/-/merge_requests/105](https://gitlab.gnome.org/GNOME/meld/-/merge_requests/105)






### Dosage




Dosage ist eine neue libadwaita App, die einem bei der Einnahme von regelmässigen Medikamenten unterstützt. Sie erinnert einen per Push Benachrichtigung daran, wann man ein Medikament einnehmen muss. Die App ist sehr neu und wurde mit libadwaita entwickelt. Der Entwickler hat auch angekündigt, dass er mit seiner App mittelfristig eine Gnome Circle App werden will. [https://flathub.org/de/apps/io.github.diegopvlk.Dosage](https://flathub.org/de/apps/io.github.diegopvlk.Dosage)






### Televido




Televido ist eine neue libadwaita App mit der man die deutschen öffentlich rechtlichen TV Sender Live ansehen und Inhalte aus der Mediathek runterladen kann. [https://flathub.org/apps/de.k_bo.Televido](https://flathub.org/apps/de.k_bo.Televido)






### Celeste




Celeste ist ein Cloud-Synchronisierungsprogramm um z.b. Dateien von Google Drive, Dropbox, etc mit seinem Rechner zu synchronisieren. Mit einem Update kam nun auch Unterstützung für ProtonDrive hinzu. [https://flathub.org/apps/com.hunterwittenborn.Celeste](https://flathub.org/apps/com.hunterwittenborn.Celeste)






## Fazit




Um diesen virtuellen Ausflug in das zauberhafte Land der Gnome-Entwicklung zu beschliessen, wollen wir festhalten: Es sieht ganz so aus, als würde das Gnome-Team weiterhin keine Gelegenheit auslassen, um seine digitale Gartenparty zu erweitern und zu verschönern. Mit der liebevollen Pflege des Gnome Ökosystems gedeihen neue Apps wie seltene Blüten und altbekannte Werkzeuge werden so stetig veredelt, dass selbst der System Monitor bald in GTK4-Pracht erstrahlt





Gnome 45 scheint in Sachen Ästhetik und Funktionalität nicht nur ein Volltreffer zu sein, sondern auch ein Sprungbrett für zukünftige Innovationen, die mit Gnome 46 sicherlich nicht auf sich warten lassen werden. So viel Engagement und Leidenschaft könnte fast vergessen machen, dass diese Schreibtischumgebung aus Nullen und Einsen besteht – so lebendig und dynamisch präsentiert sich das Gnome-Projekt.





Während die Gnome Foundation mit neuen Gesichtern und frischen Ideen für ein noch freundlicheres Miteinander sorgt, hüpfen Gnome Circle und Drittanbieter-Apps fröhlich um die Wette, um den Desktop mit Nützlichkeit und Glanz zu bereichern. Und sollte man sich zwischen all den spannenden Entwicklungen mal verirren, weist einem das kommende «welcome.gnome.org» den Weg zurück ins Zentrum der Gnome-Gemeinschaft.





Zusammengefasst: Ob Sie nun als Entwickler, Nutzer oder neugieriger Digital-Tourist zum Gnome-Fest stossen – langweilig wird es hier nicht. Gnome 45 mag das bisher schönste Kapitel sein, aber die Geschichte wird mit Spannung, Humor und einer Prise Magie weitergeschrieben.