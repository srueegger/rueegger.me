---
title: "Wenn Linux blau sieht: Ein Windows-Klassiker auf Abwegen"
date: "2023-12-01"
excerpt: "Mit systemd in Version 255, das wahrscheinlich irgendwann im Dezember 2023 veröffentlicht wird, kommt nun zum ersten Mal der unter Windows bekannte «Bluescreen» zu Linux. Nachfolgend schreibe ich etwas zur Geschichte des Bluescreens, warum Microsoft ihn entwickelt hat und warum das auch für Linux eine gute Idee ist. Warum ist der Bluescreen blau? Der erste […]"
tags: ["Linux", "Linux", "systemd", "Windows"]
image: "/images/blog/wenn-linux-blau-sieht-ein-windows-klassiker-auf-abwegen.png"
---

Mit systemd in Version 255, das wahrscheinlich irgendwann im Dezember 2023 veröffentlicht wird, kommt nun zum ersten Mal der unter Windows bekannte «Bluescreen» zu Linux.





Nachfolgend schreibe ich etwas zur Geschichte des Bluescreens, warum Microsoft ihn entwickelt hat und warum das auch für Linux eine gute Idee ist.






## Warum ist der Bluescreen blau?




Der erste Bluescreen gab es mit Windows NT 3.1 aus dem Jahr 1993 und wurde in den nachfolgenden Jahren in allen Windows-Versionen integriert. Entwickelt wurde der Bluescreen vom damaligen Microsoft-Mitarbeiter John Vert.





*Windows NT 3.1 Bluescreen*



Er programmierte am liebsten mit dem Texteditor «Slickedit», der damals einen blauen Hintergrund mit weisser Schrift hatte. Da auch die Firmware seines Rechners damals weisse Schrift auf blauem Hintergrund nutzte, liess er sich davon inspirieren und gestaltete das Programm mit blauem Hintergrund und weisser Schrift.






## Warum gibt es einen Bluescreen?




Der Bluescreen ist ein Diagnosewerkzeug für Systemadministratoren. Sobald das Betriebssystem einen Fehler feststellt, wird das System zum Schutz vor Schäden an Dateien angehalten, und der Bluescreen erscheint.





Der Bluescreen zeigt dann einen Fehlercode an, der einem Systemadministrator helfen soll, das Problem zu identifizieren und lösen zu können.





Zusätzlich legt er einen «Memory Dump» an, das heisst, der komplette Inhalt des Arbeitsspeichers wird auf die Festplatte kopiert, was bei der Fehlersuche hilft.





Die häufigste Ursache für einen Bluescreen unter Windows sind Treiberprobleme, z. B. veraltete Treiber, die mit dem aktuellen Windows nicht mehr kompatibel sind und so zu einem Fehler führen. Oft können aber auch Hardwaredefekte einen Bluescreen auslösen.





Insgesamt ist der Bluescreen ein wichtiges Diagnosewerkzeug, das bei der Fehlersuche und -behebung in Windows-Betriebssystemen hilft. Trotz seines oft negativen Rufs, da er mit Systemabstürzen verbunden ist, spielt er eine wichtige Rolle bei der Aufrechterhaltung der Systemstabilität und -sicherheit bei Windows.






## Wie funktioniert das eigentlich unter Linux?




Wie wir wissen, ist Linux nicht Windows, und Dinge funktionieren oft unterschiedlich. Systemabstürze und fehlerhafte Treiber (Hallo Nvidia 🙄) kann es definitiv auch unter Linux geben. Hier kennen wir das Phänomen als «Kernel Panic».





*Beispiel einer Linux Kernel Panic unter Red Hat Linux*



Das Problem an der Kernel Panic ist, dass die Meldungen nicht sehr benutzerfreundlich sind. Wenn man kein Kernel-Entwickler ist, kann man mit den Fehlermeldungen wenig anfangen. Für Normalsterbliche gibt die Fehlermeldung keine Anhaltspunkte.






## Wie kam es nun zum Bluescreen bei Linux?




In einem «Feature Request» wurde von systemd gefordert, eine Möglichkeit zu schaffen, dass bei einem Boot-Fehler von Linux eine Vollbild-Fehlermeldung mit einem für Menschen verständlichen Fehlername angezeigt wird. Zusätzlich soll es die Möglichkeit geben, dass Linux-Distributionen dort einen QR-Code einbinden können, der auf ihre eigenen Hilfeseiten führt und somit den Nutzern die Möglichkeit gibt, Anleitungen zu finden, wie sie das Problem beheben können.





Und das ist die Geburtsstunde von «[systemd-bsod.service](https://www.freedesktop.org/software/systemd/man/latest/systemd-bsod.service.html)». Der Name «bsod» ist übrigens eine liebe Hommage an Microsoft. Im englischen Sprachraum hat sich der Name «Blue Screen of Death» etabliert. Und genau dafür steht die Abkürzung «bsod».





So wird der Bluescreen unter Linux etwa aussehen: Er ist von der Idee und dem Layout sehr an den Bluescreen von Windows 10 angelehnt.





*So wird die Bluescreen unter Linux aussehen*



*Als Vergleich der Bluescreen bei Windows 10*



Ob und wann Ihre Distribution den Service einbindet, kann ich Ihnen leider nicht sagen. Systemd ist extrem modular aufgebaut, das bedeutet, Linux-Distributionen müssen den Service nicht übernehmen. Was man mit Sicherheit sagen kann, ist, dass eine zukünftige Red Hat-Version den Service wohl mitbringen wird – weil das Anliegen von Red Hat gepusht wurde.






## Fazit: Ein neues Kapitel in der Linux-Geschichte – jetzt auch in Blau!




Man könnte sagen, dass Linux mit dem neuen systemd-bsod.service ein wenig Farbe in sein Leben bringt – und diese Farbe ist ausgerechnet Blau! Es ist, als würde Linux beschliessen, dass es Zeit für eine kleine Mode-Revolution ist. Stellen Sie sich vor, Linux, das bisher eher im Hintergrund gearbeitet hat, zieht nun plötzlich eine knallblaue Jacke an und sagt: «Hey, auch ich kann auffallen!»





Aber keine Sorge, dieser stilistische Wandel ist mehr als nur ein optisches Update. Es ist, als würde Linux sagen: «Ich habe euch verstanden – Fehlermeldungen sollen nicht nur für Computer-Gurus verständlich sein.» Mit klaren, benutzerfreundlichen Informationen und hilfreichen QR-Codes wird der Bluescreen unter Linux zu einem echten Helfer in der Not.





Und denkt nur an die Ironie – jahrelang war der Bluescreen das Symbol für Windows-Ärger, und jetzt wird er von Linux in einem neuen Licht präsentiert. Es ist, als würde ein alter Klassiker eine moderne Neuaufführung erleben. Ganz nach dem Motto: *Alte Ideen, neu interpretiert.*