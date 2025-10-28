---
title: "Asahi Linux – zweiter Blick ein Jahr später."
date: "2024-01-06"
excerpt: "Vor ziemlich genau einem Jahr habe ich einen ausführlichen Blick auf Asahi Linux geworfen. Mein Fazit damals war, dass sich Asahi Linux zurzeit noch nicht lohnt. Ich habe die Arch Linux Basis und die grundsätzlich fehlende Software kritisiert. Inzwischen ist ein Jahr vergangen und Asahi Linux hat sich massiv weiterentwickelt die Basis ist nun Fedora […]"
tags: ["Linux", "Asahi Linux", "MacOS"]
image: "/images/blog/asahi-linux-zweiter-blick-ein-jahr-spaeter.jpg"
---

Vor ziemlich genau einem Jahr habe ich einen ausführlichen Blick auf [Asahi Linux](https://rueegger.me/2023/01/08/asahi-linux-das-linux-fuer-die-arm-macs-ein-erfahrungsbericht/) geworfen. Mein Fazit damals war, dass sich Asahi Linux zurzeit noch nicht lohnt. Ich habe die Arch Linux Basis und die grundsätzlich fehlende Software kritisiert.





Inzwischen ist ein Jahr vergangen und Asahi Linux hat sich massiv weiterentwickelt die Basis ist nun Fedora und nicht mehr Arch und auch die Hardwareunterstützung kann sie sehr gut sehen lassen.





Also ein guter Zeitpunkt hier einen zweiten Blick auf Asahi Linux zu werfen.






## Die Installation




Zur Installation möchte ich hier **bewusst** kein Tutorial schreiben. Wer Asahi Linux installieren will soll sich an die offizielle Asahi Dokumentation halten. Das ist wirklich wichtig – da man im schlimmstenfall sein MacOS zerstört und einen kompletten Clean-Install machen muss. [Zur Asahi Linux Dokumentation](https://github.com/AsahiLinux/docs/wiki).






### Die Wahl des Desktops




Asahi Linux empfiehlt die Installation von Asahi mit KDE. Natürlich habe ich diese Empfehlung knallhart ignoriert und mir Asahi mit Gnome installiert. Da Gnome meine bevorzugte Linux Desktop-Umgebung ist.





Ich habe diese Wahl ziemlich schnell bereut. Asahi Linux mit Gnome ist zurzeit völlig (!) unbrauchbar. Die Gnome Shell hat ständige Freezes und, stürzt oft komplett ab oder startet sich völlig zufällig komplett neu – selbst dann wenn man gar nichts macht und der Desktop nur im Idle läuft.





Daher meine Empfehlung zum jetzigen Zeitpunkt wenn Ihr Asahi Linux installieren wollt – nehm die KDE Version. Ich habe nach ca. 2 Stunden mein Asahi Gnome Experiment abgebrochen – und Asahi Clean neu mit KDE installiert.





Die Asahi KDE Version läuft hier nun seit mehrere Tagen und ich konnte absolut keine Probleme festellen.





Andere Desktops werden zurzeit nicht offiziell unterstützt. Und werden wohl auch inoffiziell kaum laufen. Das Asahi Projekt Team baut ja eigene Treiber für die Apple ARM Prozessoren (M1, M2, M3) und bastelt auch viel am Grafikstack damit damit 3D Beschleunigung, etc einwandfrei funktioniert.





Diese Arbeit basiert auf dem Linux Kernel, Mesa und Wayland – der X-Server wird nicht unterstützt. Daher Desktops wie Mate, Cinnamon & Co die nach wie vor den X-Server nutzen laufen unter Asahi Linux nicht.









Ich werde hier nun keine KDE-Desktop Tour machen. Es ist eben ein aktuelles KDE unter Fedora. Wer wissen will wie sich KDE unter Fedora anfühlt kann einfach den [Fedora-KDE-Spin](https://fedoraproject.org/spins/kde/) in eine virtuelle Maschine packen.





Installiert habe ich das ganze auf einem Macbook Air M2 15″ Gerät mit 512GB SSD und 16GB Arbeitsspeicher. Der Asahi Linux Installation habe ich 100GB Speicherplatz zugewiesen.






## Warum der Wechsel von Arch Linux zu Fedora Linux?




Einige von euch Fragen sich vielleicht warum Asahi Linux ihre Basis von Arch Linux auf Fedora gewechselt hat. In meinem Beitrag von vor einem Jahr habe ich Arch Linux durchaus als sinnvolle Basis für ein Projekt wie Asahi Linux beschrieben.





Da Asahi sehr am Puls der Zeit ist und ihre Kernel- und Mesa Patches jeweils auf einer möglichst aktuellen Basis testen wollen und Arch Linux als Rolling-Release Distribution hier immer aktuelle Pakete bietet.





Fairerweise muss man aber sagen, dass auch Fedora ein «Semi-Rolling-Release-Modell» fährt wenn es um Kernel, Mesa und Co geht. Der Grund für den Wechsel waren am Ende zwei Gründe. Teilweise fragwürdige Paketqualität der ARM Pakete unter Arch. Oft waren Programme unter Arch die für ARM kompiliert waren nicht ausführbar oder hatten andere merkwürdige Bugs.





Man kann durchaus sagen, dass die ARM Variante von Arch Linux nicht ansatzweise so gut getestet ist wie die AMD64 Variante. Zweitens gab es keinen direkten Kontakt zwischen dem Asahi Linux Team und dem Arch Linux Team.





Das Fedora Team hat diesen Kontakt bewusst gesucht und nimmt dadurch dem Asahi Team auch einige Arbeit ab. Gewisse Asahi Linux Scripts werden nun direkt Upstream in den Fedora Repositories gepflegt und Asahi Linux muss sich nicht mehr selber darum kümmern – overall hat man mit den Fedora Entwicklern am Ende halt ernsthaften Kontakt und ein wirklich «gemeinsames» Arbeiten am Projekt was man vorher bei Arch Linux leider nicht erreichen konnte.






## Wie ist der aktuelle Hardware Support?




Sehr gut. Das wichtigste und auch der Punkt wo die grösste Arbeit reingeflossen ist – Grafiktreiber. Letztes Jahr konnte man bereits OpenGL in der Version 2 nutzen. Inzwischen ist der GPU-Treiber swoeit modifiziert das er auch OpenGL 3.0 und OpenGL 3.1 zertifiziert ist. Ebenfalls funktioniert nun die Videobeschleunigung über die GPU bei Firefox.





Mit dem Release von Fedora 40 (wahrscheinlich im April 2024) soll dann auch OpenGL 4 und Vulkan Support dabei sein.





Wlan und Bluetooth funktionieren Out-of-the-Box. Das Touchpad funktioniert (leider gibt es immer noch keine Möglichkeit die Stärke des Klick-Widerstands zu konfigurieren).





Die Tastaturhintergrundbeleuchtung funktioniert ebenfalls. Und ist stufenlos einstellbar. Die Bildschimrhelligkeit kann nun ebenfalls direkt gesteuert werden.





Die Lautsprecher funktionieren. Und ebenfalls funktioniert nun der 3.5mm Anschluss und man kann Kopfhörer anschliessen. Allerdings funktioniert das Mikrophon leider noch nicht.





Falls jemand ein Mac Mini hat und dort Asahi Linux laufen lassen will, kann er insofern beruhigt sein das sowohl der Ethernet Port wie auch der HDMI Ausgang funktioniert. Falls man ein Macbook Pro mit M Prozessor und Tochbar hat – hat nun auch das Glück das die Touchbar funktioniert.





Nicht funktionieren tut neben dem Mikrofon Anschluss der TouchID Fingerabdruck-Scanner.





Hier wurde innerhalb vom letzten Jahr massive Fortschritte gemacht. Wenn man bedenkt wie lange die Liste der nicht funktionierenden Hardware vor einem Jahr war und heute nur TouchID und Mikrphon nicht geht – merkt man das die Entwicklerinnen rund um Asahi Linux einen grossartigen Job gemacht haben.






## Asahi Linux und Kernel Upstream




Asahi Linux funktioniert folgendermassen. Sie schreiben durch «Reverse Engineering» eigene Treiber für die M* Prozessoren von Apple. Diese Treiber schreiben sie in einem eigenen Fork vom Linux Kernel.





Daher auf Asahi Linux läuft ein eigenes «asahi-linux-kernel». Ziel von Asahi Linux ist, dass ihre Treiber aber Upstream in den normalen Linux Kernel aufgenommen werden – und man in der Zukunft keinen modifizierten «asahi-kernel» braucht.





Und auch hier gab es Fortschritte da einige Dinge die ich vorher aufgezählt habe bereits Upstream im Kernel im normalen Linux Kernel sind.





Hier einige Beispiele. Die Treiber für die Tastatur-Hintergrundbeleuchtung ist ab Kernel Version 6.4 z.b. direkt über den normalen Linux-Kernel verfügbar. Die W-Lan Treiber sind seit Version 6.1 fix im Kernel. Die Bluetooth Treiber seit Version 6.2.





Die Treiber für den Ethernet Anschluss beim Mac Mini sind seit Version 6.4 im Linux Kernel.





Zurzeit braucht man für viele Dinge noch den angepassten «asahi-linux-kernel» aber es ist schön zu sehen, dass immer mehr Hardware Support direkt im Linux Kernel landet.





Das Ziel ist klar, es soll möglichst alles Upstream in den Kernel kommen. Möglichst so, dass es Asahi Linux gar nicht mehr braucht und man dann alle möglichen Distributionen direkt auf einem Mac installieren kann.






## Asahi Linux im Alltag




Jetzt mal Hand aufs Herz. Habt ihr schon mal so eine Akku-Laufzeit bei einem Linux Notebook gesehen?









Um die 12 Stunden Akku Laufzeit mit offenem Firefox. Was die Macbooks von Apple mit ihrem M1, M2 oder M3 Prozessoren an Akku-Laufzeit zaubern – egal ob unter Linux oder Mac OS begeistert mich immer wieder aufs neue.





Fairerweise die Laufzeit unter Mac OS ist noch etwas besser, dort holt man noch 1-2 Stunden mehr raus. Dennoch ein Notebook zu haben das 10+ Stunden Akkulaufzeit hat erleichtert den Alltag ungemein.






### Software bleibt ein Problem




Leider muss ich aber auch ein Jahr später sagen, dass Software ein Problem bleibt. Im Bericht letztes Jahr habe ich gesagt das für einige Software die ich einsetze eine ARM Version für Linux fehlt.
Konkret waren das:







- SoftMaker Office




- FileZilla Pro




- 1Password




- MegaSync






MegaSync nutze ich inzwischen nicht mehr, da ich meine Cloud von Mega zu ProtonDrive gewechselt habe. Was hier gerade ein bisschen ironisch ist – da gerade MegaSync inzwischen ARM Versionen für Linux ihres Programms anbietet.





SoftMaker Office gibt es für Linux ebenfalls nach wie vor nur in einer AMD64 Version. Ich weiss, dass die auch unter Mac OS sehr viele Probleme hatten das ganze zu ARM kompatibel zu machen. Hauptgrund dafür war der integrierte Duden Korrektor der nicht wirklich ARM kompatibel war.





FileZilla Pro gibt es ebenfalls nur für AMD64 und X86. Und bei FileZilla Pro möchte ich nun wirklich mal einen kleinen Rant loswerden. Der Linux Support den sie bieten ist miserabel. FileZilla Pro für Linux wird nach wie vor Debian 10 System gebaut.
FileZilla Pro für Linux wird mit GTK2 gebaut (seit Ewigkeiten End-of-Life). Es wird sogar empfohlen FileZilla Pro für Linux nur auf Debian 10 anzuwenden. Im Customer Support Forum (leider nicht öffentlich, bzw Beiträge nur für zahlende Nutzer sichtbar) gibt es keinen Support wenn man das Ding auf einer anderen Distribution nutzt.
Alle Linux-Distributionen beweisen längst das man das normale FileZilla mit GTK3 bauen kann. Wie wenig sich hier die FileZilla Entwickler um ihre zahlende Linux-Kundschaft kümmern ist einfach nur peinlich.





Dafür gibt es gute Nachrichten von 1Password. Die bieten inzwischen eine voll funktionsfähige ARM-Linux-Version ihres Passwortmanagers an.





Für Leute die Google Chrome nutzen. Google bietete (warum auch immer) keine ARM Version ihres Browser für Linux an – obwohl Chrome OS quasi für die ARM Architektur geschaffen ist.





An der Chromium Plattform kann es nicht liegen – Da Vivaldi bietet offizielle ARM Builds ihrers Browsers an.





Was leider – unabhängig – vom Browser immer noch nicht geht ist die Wiedergabe von Streaming-Diensten wie Netflix, Disney+, etc. Da man für die Entschlüsselung des Video-Streams das Widevine Plugin im Browser braucht – und Widevine keine offizielle ARM-Linux Version anbietet.









Das ganze ist bereits wieder ziemlich lächerlich. Da man mit einem Chromebook, das ebenfalls auf ARM-Architektur läuft problemlos Netflix und Co abspielen kann.





Sprich es gibt eine Linux-Arm Version von Widevine aber offenbar nur für Google exklusiv. Ich hab einige Berichte gelesen, das man mit einem Chromebook dort das Widevine Plugin vom Dateisystem kopieren und bei Asahi am richtigen Ort einfügen kann – und man so Netflix und Co sehen kann. Ich konnte das mangels eines Chromebooks aber nicht selber testen.






## Fazit zum aktuellen Asahi Linux Stand




Ein Jahr ist vergangen und Asahi Linux hat sich signifikant weiterentwickelt. Die Basis wurde von Arch Linux auf Fedora umgestellt, was zu einer verbesserten Paketqualität und engerer Zusammenarbeit mit dem Fedora-Team geführt hat. Diese Veränderung spiegelt sich auch in der gestiegenen Hardware-Unterstützung wider, die nun OpenGL 3.0/3.1, verbesserte Grafiktreiber und eine stabilere Desktop-Umgebung mit KDE umfasst.





Die Herausforderung mit der Gnome Shell, die zu Abstürzen und Freezes führt, verdeutlicht die Wichtigkeit der Wahl des richtigen Desktops. Dies ist ein entscheidender Punkt für Nutzer, die eine Installation in Betracht ziehen.





Ein kritischer Blick bleibt jedoch auf die Software-Kompatibilität gerichtet. Trotz einiger Fortschritte, wie der ARM-Unterstützung von 1Password, bleibt die Unterstützung für ARM-Architekturen bei einigen Schlüsselprogrammen aus. Dies könnte ein Hindernis für Nutzer sein, die spezifische Anwendungen benötigen.





Die Hardwareunterstützung hat sich erheblich verbessert, insbesondere bei der Grafikleistung und der Unterstützung verschiedener MacBook-Modelle. Jedoch bleibt das Fehlen von Mikrofonunterstützung ein Nachteil, insbesondere für Nutzer, die regelmässig an Videokonferenzen teilnehmen.





Asahi Linux zeigt sein Potenzial durch die stetige Integration seiner Treiber in den Haupt-Linux-Kernel, was langfristig eine breitere Nutzung verschiedener Linux-Distributionen auf Apple-Hardware ermöglichen könnte.





Abschliessend lässt sich sagen, dass Asahi Linux einen langen Weg zurückgelegt hat und sich als eine vielversprechende Option für diejenigen etabliert hat, die Linux auf Apple-Hardware nutzen möchten. Trotz einiger Einschränkungen, insbesondere in Bezug auf die Software-Kompatibilität und Mikrofonunterstützung, stellt es eine beachtliche Leistung dar und lässt auf eine noch hellere Zukunft hoffen.