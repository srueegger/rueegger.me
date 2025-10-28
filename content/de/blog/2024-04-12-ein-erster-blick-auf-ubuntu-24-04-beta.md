---
title: "Ein erster Blick auf Ubuntu 24.04 (Beta)"
date: "2024-04-12"
excerpt: "Kürzlich ist etwas verspätet die Beta von Ubuntu 24.04 erschienen. Ich habe einen Blick darauf geworfen und erzähle euch in diesem Beitrag die Neuerungen. Ich werde in diesem Beitrag nicht über den Gnome Desktop und dessen Neuerungen sprechen. Wer mehr über Gnome 46 wissen will, dem empfehle ich gerne den Artikel von DerStandard.at. Wenn wir […]"
tags: ["Linux", "Ubuntu"]
image: "/images/blog/ein-erster-blick-auf-ubuntu-24-04-beta.webp"
---

Kürzlich ist etwas verspätet die Beta von Ubuntu 24.04 erschienen. Ich habe einen Blick darauf geworfen und erzähle euch in diesem Beitrag die Neuerungen. Ich werde in diesem Beitrag nicht über den Gnome Desktop und dessen Neuerungen sprechen. Wer mehr über Gnome 46 wissen will, dem empfehle ich gerne den Artikel von [DerStandard.at](https://www.derstandard.at/story/3000000212323/gnome-46-ist-da-was-der-linux-desktop-alles-an-neuem-zu-bieten-hat). 





Wenn wir über Neuerungen von Ubuntu sprechen, spreche ich hier zwei unterschiedliche Nutzergruppen an. Einerseits die, die aktuell die letzt Ubuntu Version 22.04 verwenden. Aber auch die, die alle STS-Versionen mitgemacht haben und zurzeit bei der Version 23.10 verweilen.





Es liegt in der Natur der Sache, dass für die 22.04 Nutzer vieles neu, ist das während des 2-jährigen Releasezyklus der Ubuntu Entwicklung bereits vorab in den STS Versionen eingeführt wurde.






## **Der Installer**





### **Bedienungshilfen**




Einer der ersten Berührungspunkte, den man mit Linux hat, ist der Installer. Bisherige LTS Nutzer werden einen komplett neu entwickelten Installer vorfinden. STS-Nutzer kennen den Installer schon seit der Version 23.04. Dennoch hat der Installer für Ubuntu 24.04 noch mal einige spannende Neuerungen bekommen.





Als einer der ersten Punkte kann man nun Bedienungshilfen aktivieren. Falls man Einschränkungen bei Sehen oder Lesen hat oder motorisch eingeschränkt ist, kann man nun direkt im Installer die gängigsten Bedienungshilfen aktivieren – diese sind dann auch direkt nach der Installation aktiv.










### **Automatisierte Installationen**




Der Ubuntu Installer unterstützt nun automatisierte Installationen. Praktisch für Unternehmen die mehrere Installationen ausführen, die auf allen Rechner identisch sein soll, oder auch für Einzelpersonen die eine genaue Vorstellung ihrer Installation haben.









Hier kann man nun eine »yaml« Datei erstellen, die definiert, welche Pakete installiert werden sollen, welche Einstellungen gesetzt werden sollen, etc. Diese »yaml« Datei kann man nun direkt in den Installer laden und so eine automatisierte selbst angepasste Installation durchführen.






### **Standard Installation und Sonstiges**




Ubuntu 22.04 Nutzer kennen die Auswahl zwischen »Standard« und »Minimaler« Installation. Diese Auswahl wurde inzwischen geändert. Die »Standard« Installation ist inzwischen die »minimale« Installation die nur der Desktop, eine Gnome Core Apps (Dateimanager, Terminal, etc) und Firefox installiert.





Wenn man direkt die volle Installation haben möchte, muss man nun die Option »Vollständige Installation« auswählen, dann bekommt man direkt LibreOffice, Thunderbird, und ein paar weitere Programme mitinstalliert.





Bei der »vollständigen Installation« gibt es aber im Vergleich zu bisherigen Installationen einige Änderungen. Das Webcam Programm »Cheese« wird nicht mehr installiert – als Ersatz wird das neue Gnome Core Programm »Snapshot« installiert. Und die Gnome Spiele (Solitaire & Co) werden nicht mehr mitinstalliert. Stehen aber im Repository weiterhin zur Verfügung.





Ansonsten bleibt der Installer, wie man ihn kennt. Man wählt seine Sprache, Zeitzone, Tastatureinstellungen aus und konfiguriert einen Nutzer. Man hat weiterhin die Möglichkeit, Codecs und unfreie Treiber per anwählen einer Checkbox bei der Installation mit zu installieren.





Ebenfalls gibt es weiterhin die Möglichkeit ZFS Partitionen zu nutzen und eine Trusted Boot Umgebung – wo die Partitionsverschlüsselung über TPM erfolgt einzurichten.






## **Anwendungsverwaltung und Snaps**




Wenn wir über Ubuntu sprechen – müssen wir auch über Snaps sprechen. Meine persönliche Ansicht ist relativ simpel Ubuntu präferiert Snaps und liefert auch einige Anwendungen (Firefox, Thunderbird, Signal Desktop, etc) standardmässig per Snap aus.





Es wird immer irgendwelche Möglichkeiten geben, Ubuntu von Snap zu befreien und irgendwelche Programme alternativ zu installieren. Ich selber mag die Snaps und nutze einige davon (z.b. Docker, Visual Studio Code, NodeJS) täglich. Meine Empfehlung für alle die Snaps aus irgendwelchen obskuren Gründen nicht mögen – nehmt eine andere Distribution, anstatt euch darüber aufzuregen, dass Ubuntu Snaps benutzt.






### **Die neue Anwendungsverwaltung**




Diese Neuerung betrifft hauptsächlich Ubuntu LTS 22.04 Nutzer. Die werden mit dem Upgrade auf Ubuntu 24.04 eine komplett neue Anwendungsverwaltung vorfinden. Wie der neue Installer ist die neue Anwendungsverwaltung in Flutter geschrieben.









Im Gegensatz zum alten »Snap Store« hat die neue Anwendungsverwaltung absolut keine Geschwindigkeitsprobleme, alles funktioniert hier ruckzuck und sieht optisch sehr ansprechend aus.





Wer bisher die Berechtigungen von Snap-Anwendungen direkt über den bisherigen snap Store verwaltet hat wird diese Option vermissen. Die wurde nun aus der Anwendungsverwaltung entfernt und in die Gnome Einstellungen verschoben.





Man kann nun die Berechtigungen aller Apps egal ob sie als Snap, Deb oder Flatpak installiert wurden Global in den Einstellungen verwalten.










### **Firmware Aktualisierungen**




Ebenfalls werden Firmware Aktualisierungen nun extern gelöst. Bei Ubuntu 22.04 wurden diese noch über den »Snap Store« angeboten. Neu gibt es dafür eine von Ubuntu eigen entwickelte »Firmware« App (ebenfalls in Flutter programmiert).





Diese App zeigt die vorhanden Firmware Versionen an und ermöglicht auch direkt die Aktualisierungen, sofern welche verfügbar sind.






## **Längere Akkulaufzeiten**




Freuen dürfen sich Notebook Nutzer. Die neue Version des »power-profiles-daemon« hat es in die neue Ubuntu Version geschafft. Die neue Version unterstützt die Energiesparmodis von Intel und AMD Przessoren besser und sorgt dafür das Notebooks um einiges länger durchhalten werden.






## **Weiteres unter der Haube**




Ubuntu 24.04 wird mit dem Linux Kernel 6.8 ausgeliefert. Das ist eine gute Nachricht für alle die Intel Prozessoren der 14. Generation (Meteor Lake) nutzen, da die mit dem Kernel 6.8 endlich ihre korrekten »Boost«-Geschwindigkeiten erreichen. Und für alle Gamer – mit dem Kernel 6.8 werden die klassichen »Nintendo Switch Online Controller« Out-of-the-Box unterstützt.






## **Ich bin begeistert!**




Ich begleite Ubuntu, seit es Ubuntu gibt. Und Ubuntu wurde ursprünglich bekannt für die »einfache« Installation – da Linux Installationen vor Ubuntu oft eine Wissenschaft für sich waren.





Ubuntu musste sich über die Jahre viel Kritik anhören, dass die kaum Fortschritte machen und der Installer noch funktioniert wie vor 20 Jahren.





Nun hat Ubuntu zurückgeschlagen und sinnvolle Verbesserung eingebracht. Die Bedienungshilfen direkt an den Anfang des Installer zu setzen ist wohl die beste Neuerung seit sehr langer Zeit und ist meines Wissens bisher die einzige Distribution, die das macht.





Abschliessend lässt sich sagen, dass Ubuntu 24.04 mit seinen zahlreichen Neuerungen und Verbesserungen sowohl für langjährige Nutzer als auch für Neueinsteiger eine signifikante Weiterentwicklung darstellt. Die überarbeiteten Bedienungshilfen im Installer setzen neue Standards in Sachen Barrierefreiheit und zeigen, dass Ubuntu sich weiterhin stark auf die Bedürfnisse aller Nutzer konzentriert. Die Einführung der neuen Anwendungsverwaltung und der Firmware App verbessert nicht nur die Benutzererfahrung durch erhöhte Performance und übersichtlichere Interfaces, sondern bietet auch eine effizientere Verwaltung von Berechtigungen und Software-Updates. Zudem ist die Optimierung der Energieverwaltung ein wichtiger Schritt, um die Langlebigkeit und Effizienz mobiler Geräte zu erhöhen.





Die Einbindung der neuesten Kernel-Version unterstützt modernste Hardware optimal und eröffnet damit neue Möglichkeiten für technikaffine Nutzer und Entwickler. All diese Elemente zusammen genommen, zeigen, dass Ubuntu 24.04 nicht nur auf die aktuelle Kritik reagiert, sondern aktiv an der Gestaltung einer benutzerfreundlichen und zukunftssicheren Plattform arbeitet. Ubuntu bleibt somit eine der führenden Linux-Distributionen, die sowohl Zuverlässigkeit als auch Innovation bietet.