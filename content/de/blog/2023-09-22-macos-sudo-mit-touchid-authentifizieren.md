---
title: "MacOS: «sudo» mit TouchID authentifizieren"
date: "2023-09-22"
excerpt: "Jede Person, die Mac OS nicht nur für Grafik- oder Videobearbeitung nutzt, sondern auch aktiv im Terminal arbeitet, weiss, wie wichtig das Terminal ist. Was ist «sudo»? Egal ob Linux oder MacOS: Um einen Befehl mit Administrationsrechten auszuführen, wird gerne das Tool «sudo» benutzt. So kann man z. B. mit folgendem Befehl seinen Mac herunterfahren: […]"
tags: ["Apple", "Biometrie", "MacOS", "PAM", "sudo"]
image: "/images/blog/macos-sudo-mit-touchid-authentifizieren.jpg"
---

Jede Person, die Mac OS nicht nur für Grafik- oder Videobearbeitung nutzt, sondern auch aktiv im Terminal arbeitet, weiss, wie wichtig das Terminal ist.






## Was ist «sudo»?




Egal ob Linux oder MacOS: Um einen Befehl mit Administrationsrechten auszuführen, wird gerne das Tool «sudo» benutzt. So kann man z. B. mit folgendem Befehl seinen Mac herunterfahren:






```
`sudo shutdown`
```
Zsh



Etwas nervend ist, dass man bei jedem «sudo» Befehl sein Benutzerpasswort eingeben muss. Obwohl die Macbooks ja alle TouchID mitbringen, wurde der Fingerabdrucksensor leider nicht als sudo-Authentifizierungsmethode eingerichtet.






## TouchID für sudo einrichten




Glücklicherweise kann man diese Einrichtung selber vornehmen. Eigentlich wollte ich daraus ein komplettes Tagesprojekt machen. Merkte dann aber sehr schnell, das das gar nicht nötig ist.





MacOS nutzt für das Verwalten von Authentifizierungen [PAM (Pluggable Authentication Modules)](https://de.wikipedia.org/wiki/Pluggable_Authentication_Modules). Und ja, auch Linux nutzt PAM für denselben Einsatzzweck.





Da ich in der Vergangenheit sehr viel mit PAM unter Linux gearbeitet habe und mich selbst gefühlt als Linux-PAM-Experte bezeichnen würde, war die Konfiguration unter MacOS tatsächlich kein Hexenwerk mehr.





Das verwendete PAM bei MacOS ist zwar nicht absolut identisch mit dem PAM bei Linux, aber die Unterschiede sind minimal.





Lange Rede, kurzer Sinn: Ihr könnt mit dem Texteditor nano die Datei «**/etc/pam.d/sudo**» bearbeiten und müsst dort die nachfolgende Zeile hinzufügen:






```
`auth       sufficient     pam_tid.so`
```
Plaintext



Konkret öffnet ihr dazu die Terminal App und gebt folgenden Befehl ein:






```
`sudo nano /etc/pam.d/sudo`
```
Zsh



Danach müsst ihr euer Passwort eingeben und die im Bildschirmfoto markierte Zeile hinzufügen.










### Was bedeutet diese Zeile?






- **auth**: Dieses Steuerwort legt den Typ des Moduls fest. In diesem Fall handelt es sich um ein Authentifizierungsmodul.




- **sufficient**: Dieses Steuerwort gibt an, dass, wenn dieses Modul erfolgreich ist, keine weiteren Module (sofern vorhanden) in dieser Kette aufgerufen werden müssen, um die Authentifizierung als erfolgreich zu betrachten. Wenn es jedoch fehlschlägt, wird die Authentifizierung nicht sofort als fehlgeschlagen betrachtet; es wird versucht, mit den nächsten Modulen fortzufahren.




- **pam_tid.so**: Dies ist das eigentliche PAM-Modul, das aufgerufen wird. Das Modul **pam_tid.so** ist spezifisch für macOS und wird verwendet, um die Touch ID-Authentifizierung zu unterstützen.







## Fazit




Das Terminal stellt für viele Mac-Nutzer, die über die bloße Grafik- und Videobearbeitung hinausgehen, ein essentielles Werkzeug dar. Dabei bietet «sudo» eine leistungsstarke Möglichkeit, Befehle mit erhöhten Rechten auszuführen, sowohl auf MacOS als auch auf Linux.





Es ist zwar anfangs etwas umständlich, ständig das Passwort einzugeben, aber mit der Integration von TouchID kann dieser Schritt komfortabler gestaltet werden. Dank PAM, das sowohl von MacOS als auch von Linux verwendet wird, können Anwender die Touch ID-Authentifizierung selbst einrichten.