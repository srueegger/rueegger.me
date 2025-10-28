---
title: "Die «xz-Hintertür» gefährdet unzählige Computer weltweit – was wir bisher wissen."
date: "2024-03-30"
excerpt: "Es müssen immer die Feiertage. Im Dezember gab es die «Log4j» Sicherheitslücke die unzählige Server und Computer weltweit massiv gefährdet hat. Anwendungsentwickler und Systemadministratoren hatten damals ein stressiges Weihnachtsfest. Nun haben sie stressige Ostern. Gestern wurde bekannt, dass die «xz» Bibliothek einen Backdoor enthält. Was ist «xz»? Viele von euch werden sich fragen: Was zur […]"
tags: ["Linux", "Sicherheit", "Linux", "Sicherheitslücke", "xz"]
image: "/images/blog/die-xz-hintertuer-gefaehrdet-unzaehlige-computer-weltweit-was-wir-bisher-wissen.webp"
---

Es müssen immer die Feiertage. Im Dezember gab es die «Log4j» Sicherheitslücke die unzählige Server und Computer weltweit massiv gefährdet hat.





Anwendungsentwickler und Systemadministratoren hatten damals ein stressiges Weihnachtsfest. Nun haben sie stressige Ostern.





Gestern wurde bekannt, dass die «xz» Bibliothek einen Backdoor enthält.






## Was ist «xz»?




Viele von euch werden sich fragen: Was zur Hölle ist xz? Nunja xz ist ein Kompressionsformat, ähnlich wie ZIP oder RAR – mit dem Unterschied das xz kein Archiv ist und immer nur eine einzelne Datei enthält die komprimiert wurde.






### Wo wird «xz» überall eingesetzt?




Das ist ein bisschen das Problem bei Linux (was auf dem Servermarkt sehr stark verbreitet ist) so gut wie überall. Bei so ziemlich allen bekannten Linux Distributionen wird das initramfs (oder analoge initiale Dateisysteme) und der Kernel mit xz komprimiert.





RPM und DEB Pakete (die von Debian, Ubuntu, Red Hat, Suse Linux Enterprise, etc) genutzt werden, sind ebenfalls mit dem Algorythmus komprimiert. Daher der «xz» Kompressionsalgorithmus ist in der Server und Linuxwelt all-gegenwärtig.





Potenziell sind auch macOS-Nutzer betroffen, die den homebrew Paketmanager nutzen.






## Ich bin Linux Nutzer. Was muss ich nun tun?




Hier muss man noch «etwas» relativieren. Der Backdoor wurde (durch reinen Zufall) sehr früh entdeckt und die aktuellen xz-Versionen mit dem Backdoor haben es noch nicht in die stabilen Versionen von aktuellen Distirbutionen geschafft.





Definitiv betroffen sind folgende Distributionen:







- Debian (Testing, Unstable und Sid)




- Fedora (40 und Rawhide)




- Kali Linux




- Arch Linux




- und wahrscheinlich auch viele weitere Rolling Release Distributionen






Falls du eine dieser Distributionen einsetzt solltest du umgehend die aktuellen Sicherheitsupdates einspielen. Falls es für deine Distribution noch kein Sicherheitsupdate für das Paket «xz-utils» gibt, solltest du den SSH Dienst vorläufig deaktivieren.






## Was macht den Backdoor so spannend?




Das spannende an diesem Backdoor ist, wie er in das Projekt gekommen ist. Es gibt zurzeit sehr viel Spekulation ob das die Arbeit von Geheimdiensten oder von autoritären Staaten wie Nordkorea oder Russland ist.





Ich werde hier nicht spekulieren sondern die Fakten auflisten die definitiv gesichert sind.





Gesichert ist, dass die Implementierung dieses Backdoor über mehrere Jahre vorbereitet und geplant wurde.





Die «XZ-Bibliothek» ist freie Software, bedeutet jeder kann hier Code einreichen und mitarbeiten.





Der Entwickler und Hauptmaintainer ist «Lasse Collin». Der entwickelte und wartete (wie bei OpenSource Projekten üblich) die ganze Bibliothek in seiner Freizeit.






## Kleine Anmerkung
Hier gibt es einige Parallelen zu der bereits angesprochenen Log4j Lücke. Grosse Firmen wie Red Hat, Canonical, etc verlassen sich darauf das solche Bibliotheken einfach da sind und funktionieren. Geben den Projekten so gut wie keine Unterstützung.

Hier muss dringend ein Umdenken stattfinden!






### 2021 – Jia Tan taucht auf




2021 erstellte ein Nutzer (Jia Tan) ein Konto auf der Entwicklerplattform GitHub (eine Plattform auf der viele Softwareprojekte entwickelt werden). 





Der erste Commit die «Jia Tan» machte, machte er nicht im «xz» Projekt sondern im «libarchive» Projekt: [Link zum Commit](https://github.com/libarchive/libarchive/pull/1609)





Dieser verlinkte Commit ist aber bereits sehr verdächtig. Insbesondere öffnen sie einen PR in libarchive: Angeblich hat er einen Fehlertext zu einer Warnung hinzugefügt: wenn man mit bsdtar entpackt.





Dieser Commit macht allerdings ein wenig mehr, als er sagt. Er ersetzt «safe_fprint» durch eine unsichere Variante, die möglicherweise eine weitere Sicherheitslücke einführt. Der Code wurde ohne Diskussion eingebunden und wurde erst im Rahmen des gefunden Backdoors im «xz» Projekt gefixt.






### 2022 – Jia Tian wird Teil des Projektteams




Im Jahr 2022 wird es aber mit «Jia Tan» spannend. Er reicht ein Bugfix für das «xz» Projekt ein. Dies macht er aber nicht über GitHub sondern über die Mailingliste des Projekts.





Der eingereichte Code ist harmlos, aber die darauf folgenden Ereignisse machen die Sache spannend. Plötzlich taucht auf der Mailingliste ein «Jigar Kumar» auf der massiv Druck auf den Hauptentwickler «Lasse Collin» ausübt, das er den Code so schnell wie möglich fix in die «xz» Bibliothek einbauen soll.





Wahrscheinlich ist «Jigar Kumar» ein Freund oder ein Doppelaccount von «Jia Tan» – er taucht nach diesen Druck-machen-E-Mail-Flut nicht mehr auf. Die Konversation der Mailing Liste kann man hier nachlesen: [Link zur Mailingliste](https://www.mail-archive.com/xz-devel@tukaani.org/msg00565.html)





Nach diesen Druck-Versuchs-Emails muss es eine private Unterhaltung zwischen «Jia Tan» und «Lasse Collin» gegeben haben. Man kann davon ausgehen, dass sich «Jia Tan» angeboten hat ein Teil der Arbeit von «Lasse Collin» abzunehmen und ein Projektverantwortlicher wird.





Wie genau das Gespräch ausgesehen hat, wissen wir nicht. Wir wissen aber, dass bereits 3 Tage nach diesem E-Mail Druck der GitHub Account von «Jia Tan» offizieller Maintainer beim «xz-utils» Projekt wurde.





Ab diesem Zeitpunkt erstellt «Jia Tian» regelmässige Codeänderungen und Commits zu dem «xz» Projekt. Er wurde – neben dem Hauptentwickler – zum aktivsten Entwickler der Bibliothek.






### 2023 – Jia Tian hat immer mehr Kontrolle im Projekt




Im Januar 2023 konnte «Jia Tian» den ersten eigenen «Merge» ausführen. Was bedeutet, dass er nun volles Vertrauen vom Hauptentwickler hat – und er nun Code zum Projekt hinzufügen kann ohne das das vom Hauptentwickler weiter geprüft wird.





«OSS-Fuzz» ist ein automatisiertes Testsystem für OpenSource Produkte das Sicherheit und Stabilität testet. Im März 2023 schaffte «Jia Tian», dass die E-Mail Adresse vom xz-Priojekt (das bei OSS-Fuzz hinterlegt ist) auf die E-Mail Adresse von «Jia Tian» geändert geändert wird. So bekommt der Hauptentwickler keine Benachrichtigungen mehr, falls bei den Testings dort Fehler entdeckt werden.





Kurz darauf erstellt ein «Hans Jansen» einen Patch für «xz» bereit der harmlos wirkt, aber das Testing bei OSS-Fuzz kompromittiert. «Jia Tian» nimmt den Patch an und mergt ihn in das «xz» Projekt.





Kurz darauf erstellt Jia Tian ein Patch für das «OSS-Fuzz» Projekt um das Problem das es beim Testing von der xz-Bibliothek gibt zu verschleiern. Der Patch wirkt harmlos und wird vom «OSS-Fuzz» Projekt ohne Diskussion akzeptiert und eingebunden.






### 2024 – Der Angriff startet




Über die letzten Jahre hat «Jia Tan» sorgfältig alles vorbereitet. Er hat automatisierte Sicherheitsüberprüfungen kompromittiert und immer mehr Kontrolle über das Projekt bekommen.





Mit dem harmlos klingenden Commit «Füge ein paar Testdateien hinzu» Wurde Anfang März 2024 der Backdoor in das Projekt implementiert.





Erinnert ihr euch noch an «Hans Jansen» seit seinem einmaligen Code-Beitrag hat man nichts mehr von ihm gehört. Doch plötzlich taucht er beim Debian Projekt auf und meldet dort dem Debian Team das es eine neue Version von «xz-utils» gibt und sie die doch bitte aktualisieren sollen: [Link zur Meldung](https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1067708)





«Jia Tan» hingegen machte bei der Distribution Fedora Druck, dass die neue Version so schnell wie möglich in die dortigen Repositorys aufgenommen werden soll. 





Er hat ebenfalls versucht die Version mit dem Backdoor noch in das kommende Ubuntu 24.04 LTS Release zu bringen. Was er aber nicht mehr geschafft hat. Mehr dazu [hier](https://bugs.launchpad.net/ubuntu/+source/xz-utils/+bug/2059417).





Seit der Backdoor gefunden wurde hat man von «Jia Tan» nichts mehr gehört. Der Hauptentwickler «Lasse Collin» hat inzwischen die vollständige Kontrolle über das Projekt wieder übernommen und arbeitet nun mit Hilfe von verschiedenen Sicherheitsexperten daran den Schaden von «Jia Tan» zu analysieren und wieder rückgängig zu machen.





Ebenfalls hat er eine FAQ veröffentlich die den aktuellen «IST-Zustand» erklärt. [Zur FAQ](https://tukaani.org/xz-backdoor/).






## Wer ist Jia Tan?




Das ist ein grosses Rätsel. Wir können uns jedenfalls sicher sein, dass «Jia Tian» nicht der richtige Namen dieser Person (oder Organisation, etc) ist.





Es gibt ein paar spannende Infos zu ihm. Bei gewissen Aktionen (schreiben auf Mailinglisten, etc) hinterlässt man digitale Spuren.





So war «Jia Tian» mehrmals auf dem «LibraChat» IRC Server und hatte dort die IP-Adresse: «185.128.24.163» Diese IP Adresse führt nach «Singapur» allerdings nicht zu einem «normalen» Computer sondern zu einem Server (erkennt man an den unterschiedlichen Ports die dort offen sind). Wahrscheinlich hat sich «Jia Tan» über einen Proxy oder VPN der über diesen Server lief mit dem Internet verbunden.





Ob wir jemals die Identität oder die Motivation von «Jia Tian» herausfinden werden steht jedenfalls noch in den Sternen.






## Fazit




Der Vorfall mit «Log4j» und der jüngste mit «xz-utils» illustrieren nicht nur die potenziellen Gefahren, die durch Schwachstellen in weit verbreiteter Software entstehen können, sondern auch die Herausforderungen, denen sich Anwendungsentwickler und Systemadministratoren gegenübersehen, insbesondere während kritischer Zeiten wie den Feiertagen.





Die «xz»-Bibliothek, essentiell für die Kompression in Linux-Systemen und darüber hinaus, ist aufgrund ihrer weiten Verbreitung und der kritischen Natur der Daten, die sie verarbeitet, ein bedeutsames Ziel für Angriffe geworden.





Die Beteiligung von «Jia Tan» und die Art und Weise, wie der Backdoor über Jahre hinweg eingefädelt wurde, werfen bedenkliche Fragen über die Sicherheit und Überprüfung von Beiträgen in Open-Source-Projekten auf. Dies **unterstreicht** die **Notwendigkeit** für ein verstärktes Engagement und Unterstützung von Unternehmen, die auf diese Software angewiesen sind, sowie für verbesserte Sicherheitsüberprüfungen innerhalb der Open-Source-Gemeinschaft.





Abschliessend wirft die Situation Licht auf die kritische Abhängigkeit von der Integrität und Sicherheit von Open-Source-Software. Sie betont die Notwendigkeit für ein Umdenken in der Unterstützung und Wartung solcher Projekte, um ähnliche Vorfälle in der Zukunft zu verhindern. Die Gemeinschaft muss zusammenarbeiten, um die Sicherheit zu stärken und die Anstrengungen zur Erkennung und Behebung von Schwachstellen zu intensivieren, um das Vertrauen in die digitale Infrastruktur zu bewahren.