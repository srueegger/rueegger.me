---
title: "Proton Pass im ausführlichen Test"
date: "2023-08-06"
excerpt: "Proton Pass wurde vor ca. einem Monat veröffentlicht, ich habe den Passwort Manager ausführlich getestet und auch mit 1Password verglichen. Kurzes Fazit vorab: Proton Pass macht vieles richtig, hat zurzeit aber noch sehr nervende Eigenheiten. Wozu brauche ich einen Passwort Manager und wie funktioniert der Test? Ich arbeite als Web-Entwickler und nutze währendem arbeiten sehr […]"
tags: ["Passwort Manager", "Testberichte", "1Password", "App", "Browser", "iPad", "iPhone", "Proton Pass"]
image: "/images/blog/proton-pass-im-ausfuehrlichen-test.jpg"
---

Proton Pass wurde vor ca. einem Monat veröffentlicht, ich habe den Passwort Manager ausführlich getestet und auch mit 1Password verglichen. Kurzes Fazit vorab:





Proton Pass macht vieles richtig, hat zurzeit aber noch sehr nervende Eigenheiten.






## Wozu brauche ich einen Passwort Manager und wie funktioniert der Test?




Ich arbeite als Web-Entwickler und nutze währendem arbeiten sehr oft verschiedene Browser, um zu testen, ob etwas das z.B. in Firefox funktioniert auch in Google Chrome oder Microsoft Edge funktioniert.





Daher ist es für mich wichtig, dass ich alle Passwörter immer in jedem Browser zugriffsbereit habe. Ebenfalls arbeite ich auch plattformübergreifend → bedeutet der Passwortmanager muss auch auf Windows, Mac OS, auf dem iPad und dem iPhone funktionieren.





Ich werde diesen Test in zwei Kategorien aufteilen, einerseits für die »Desktop« Nutzung auf Linux, Windows, Mac OS und für die mobilen Geräten iPhone/iPad. Auf Android konnte ich den Passwortmanager nicht testen, da ich noch nie ein Android Gerät besessen habe.





Da auf dem Desktop Proton Pass nur als Browser Erweiterung verfügbar ist, werde ich den Test nicht einzeln auf Linux, Windows und Mac aufschlüsseln – da er auf allen Plattformen identisch funktioniert. Hauptsächlich habe ich den Passwortmanager im Firefox benutzt. Ich konnte aber keine Funktionsunterschiede zwischen dem Firefox oder Chromium Addon Fesstellen.





Zusätzlich werde ich hier hauptsächlich Vergleiche mit 1Password ziehen. Da 1Password der Passwortmanager ist, den ich seit mehreren Jahren verwende und für mich die Messlatte gerade bei den Komfortfunktionen ist.






## Proton Pass für den Desktop – Einrichtung und Import




Proton Pass für den Desktop ist wie bereits erwähnt eine Browser Erweiterung. Die kann man problemlos über die Browser Addon-Stores installieren. Hier bitte beachten, dass man unter Safari auf dem Mac die Erweiterungen über den Mac App Store installieren muss.





Nach der Installation muss man sich mit seinem Proton-Account einloggen. Falls man keinen hat kann man den Account kostenlos erstellen.





Der PasswortManager kann auch in einer kostenlosen Version getestet werden. Falls man bereits zahlender Proton Kunde ist, kann man den Passwortmanager ohne Aufpreis in vollem Funktionsumfang nutzen.





Nach dem Login kann man seine Daten vom bisherigen Passwortmanager importieren. Unterstützt werden derzeit:







- 1Password




- Bitwarden




- Dashlane




- KeePass und KeePassXC




- Keeper




- LastPass




- Passwortspeicher von Chrome, Firefox, Edge, Brave und Safari Browser












Ich habe hier nur den Import von 1Password getestet und kann sagen, dass der problemlos funktioniert hat. Ich habe rund 1300 Objekte im Passwortmanager gespeichert, darunter viele Logins für Webseiten, Notizen (wo wir z.b. Dokumentationen von einzelnen Server speichern, wie SSH Zugangsdaten, welche Ports für welchen Dienst verwendet werden, etc), Kreditkarten Daten, und 2FA-Codes.





Der Import von allen Daten funktionierte einwandfrei. Egal ob Kreditkartendaten, Notizen, Logins oder die 2FA Codes alles war innerhalb von Sekunden in Proton Pass verfügbar.






## Proton Pass für den Desktop





### Handhabung




Proton Pass unterstützt in der Theorie alle wichtigen Funktionen. Man kann direkt über das Addon eine Loginseite aufrufen und die Daten werden direkt ausgefüllt. Wenn man eine Seite manuell aufruft und es gibt ein gespeichertes Login wird es automatisch ausgefüllt.





Wenn man sich irgendwo einloggt, ohne den Passwortmanager zu nutzen und dort kein Passwort hinterlegt ist bietet der Passwortmanager direkt an das Passwort zu speichern.





Wenn man sich irgendwo registrieren will, erstellt Proton Pass ein zufällig generiertes Passwort und füllt es im Passwortfeld direkt aus.





Zudem hat man die Möglichkeit, eine Fake-E-Mail Adresse mit einem Klick zu erstellen. Das erstellt dann eine E-Mail Adresse, die z.B. so aussieht: [p8aiw@passmail.net](mailto:p8aiw@passmail.net) E-Mails an diese Adresse werden dann direkt an deine normale E-Mail Adresse weitergeleitet.





Dadurch hat der Webseiten Anbieter nie deine richtige E-Mail Adresse und falls dort mal die Datenbank oder so in falsche Hände geraten sollte, kannst du diese Weiterleitung einfach wieder entfernen und bist kein Opfer von Spammails. In der Praxis hat man dadurch für jeden Account den im Internet erstellt eine andere E-Mail Adresse mit einem jeweils zufällig generierten Passwort. Natürlich kann man aber auch seine richtige E-Mail Adresse verwenden.





Ich sage aber jetzt schon voraus, dass Proton sich hier noch einige weitere Domains sichern muss, und viele Anbieter (gerade z.B. Streamingdienste, die die ersten 30 Tage kostenlos anbieten) die E-Mail Endung »passmail.net« früher oder später sperren werden.





Hier als Beispiel wie das bei der Registrierung im [LinuxGuides Forum](https://forum.linuxguides.de) aussehen würde:









In der Praxis sind mir beim Handling aber zwei sehr gravierende Probleme aufgefallen. Proton Pass ist nicht annähernd so gut wie 1Password beim Erkennen von Login Felder. Unter anderem bei Reddit (aber auch vielen anderen Seiten) erkennt die Erweiterung das Login Formular nicht und füllt das Passwort nicht automatisch aus. Das ist mir regelmässig aufgefallen und grob über den Daumen geschätzt würde ich sagen, dass bei ca 8 von 10 Webseiten das Login Formular nicht erkannt wird.





Das ist ein Problem das ich bei 1Password nie hatte, der hat immer alle Login Felder einwandfrei erkannt. Auch hat Proton Pass teilweise Probleme bei Logins »über mehrere Schritte«. Z.b. bei Google oder Microsoft gibt man im ersten Schritt ja nur seine E-Mail Adresse ein und erst danach erscheint das Passwort Feld. Bei Google kann Proton Pass damit umgehen und füllt das Passwort z.B. auch im zweiten Schritt automatisch aus, bei Microsoft muss man dann das Passwort manuell einfügen.





Ich denke das hier 1Password – durch das sie schon länger auf dem Markt sind – mehr Zeit hatte gewisse Login Prozesse wie z.b. Reddit oder Microsoft manuell im Code zu hinterlegen. Und viele dieser seitenspezifischen Anpassungen bei Proton Pass einfach noch fehlen.






### Der Fluch mit den 2FA-Codes




Obwohl Proton Pass die Funktion auf der Webseite bewirbt, klappt bei mir das automatische einfügen von 2FA Codes überhaupt nicht. Nirgendwo – egal welche Webseite, egal welchen Browser egal welches Betriebssystem. Das ist furchtbar schade und ehrlicherweise auch ziemlich nervig und ich hoffe wirklich das sie das schnell gefixt bekommen.






### Sonstiges zu Proton Pass




Für Menschen die Probleme mit Englisch haben, ist Proton Pass definitiv nicht empfehlenswert. Das Addon ist zurzeit nur in Englisch verfügbar, an der Übersetzung wird aber gearbeitet.





Negativ aufgefallen ist bei mir noch der fehlende »Light-Mode« Das Design der App komplett dunkel gehalten. Bei mir sind (ausnahmslos alle Geräte) so eingerichtet, dass sie Tagdurchs den hellen Modus aktiviert haben und bei Sonnenuntergang automatisch in den Dark Mode wechseln.





Da ich sehr oft draussen oder unterwegs arbeite und wir im letzten Monat teilweise doch sehr sonnige Tage hatten ist mir oft aufgefallen, dass ich bei Proton Pass in seinem Dunkelmodus schlicht und einfach nichts erkennen konnte. War wirklich frustrierend.





Hier ein Bild, vom «Dauer-Dark-Mode» bei starkem Sonnenlicht mit Geräten die teilweise nur 300 Nits Bildschirmhelligkeit haben oft nichts zu erkennen.










## Proton Pass auf dem iPhone und iPad




Auf dem iPhone und iPad ist Proton Pass als App im App Store verfügbar. Auch dort muss man sich mit seinem Proton-Account anmelden.





Der Import von Passwörtern aus anderen Apps funktioniert nicht über die App, sondern nur in der Browser Erweiterung auf dem Desktop.





Auf dem iPhone hatte ich absolut keine Probleme mit dem Erkennen von Passwortfeldern. Dies liegt aber weniger an Proton Pass sondern mehr an Apple.





Für alle die kein iPhone besitzen hier eine kurze Erklärung. Apple hat eine Betriebssystemweite API für das erkennen von Login und Registrierungsfelder in Apps und Webseiten.





In den Systemeinstellungen kann man auswählen welche App man als Passwortmanager nutzen will – danach werden die Daten bei einem erkannten Login Feld aus der entsprechend gewählten App gezogen und eingefüllt. Das hat mit 1Password einwandfrei funktioniert und hat mit Proton Pass ebenfalls funktioniert.









Wenn man also mit einem Browser auf dem iPhone auf reddit.com geht, wird das Login Feld von Apple problemlos erkannt. Bei Proton Pass geprüft ob es Logindaten für »reddit.com« gibt, falls ja werden die ausgefüllt.






### Der noch stärkerere Fluch mit den 2FA Codes




Die 2FA Codes waren auf dem Desktop schon nervend. Aber auf dem iPhone nimmt das viel schlimmere Züge an. Eine ähnliche API wie ich vorhin beschrieben habe, hat Apple auch für 2FA Codes. Wo man in den Systemeinstellungen auswählen kann, welche App man für die 2FA Code Verwaltung nutzt und somit systemweit ein automatisches ausfüllen anbietet.





Das hat unter 1Password auch immer absolut problemlos funktioniert. Bei Proton Pass funktioniert nicht überhaupt nicht. Man kann die App nicht mal dafür auswählen.





Das führt dazu, dass wenn ich mich auf dem iPhone z.B. hier im Forum einloggen möchte, der erste Login Schritt (Benutzername und Passwort) automatisch ausgefüllt wird und einwandfrei funktioniert. Danach werden ich vom Forum nach dem 2FA Code gefragt.





Dann muss ich die Browser App auf dem iPhone minimieren, die Proton Pass App manuell öffnen, mich per FaceID authentifizieren. In der App nach »linuxguides« suchen. Den Eintrag öffnen und dort manuell den 2FA Code kopieren muss. Nur um danach wieder den Browser zu öffnen und ihn dort manuell einzufügen. Das ist extrem nervend, zeitraubend und total unnötig.






## Technisches zu Proton Pass




Die Proton Pass Erweiterung und iOS/Android Apps sind OpenSource. Den Quellcode findet man auf [GitHub](https://github.com/protonpass). Die Inhalte des Passwort Managers (also Benutzernamen, Passwörter, Webseitenadressen, Kreditkartendaten, usw) sind komplett über ein »Zero-Trust-Modell) Ende zu Ende verschlüsselt.





Hier hat Proton Pass ein Vorteil gegenüber 1Password, da bei 1Password nur die Passwörter, aber nicht die anderen Daten verschlüsselt. So weiss 1Password in der Theorie, auf welchen Webseiten du alles einen Login hast, Proton hat diese Information nicht.





Wie alle Proton-Services (Mail, Kalender, Drive, etc) bekam Proton Pass ein »Security Audit« von einer dritten Firma. Solche Sicherheitsaudits bekommen Zugriff auf den kompletten Quellcode und werden dafür bezahlt, um dort nach Lücken oder anderen Sicherheitsprobleme zu suchen.





Das Audit wurde von der Firma Cure53 in Berlin durchgeführt. Sie haben sowohl die Browser Addons, die iPhone App wie auch die Android App und das Backend durch diverse Tests getestet. Der Audit Bericht ist [öffentlich](https://res.cloudinary.com/dbulfrlrz/images/v1689754709/wp/Cure53-proton-pass-20230717_41141c8436/Cure53-proton-pass-20230717_41141c8436.pdf?_i=AA), und wenn man Proton Pass auf Android einsetzen will sicherlich einen Blick Wert. Da es dort eine als »medium« eingestufte Sicherheitslücke gibt die man aufgrund der Limitierungen von Android nicht beheben kann.






## Proton Pass herunterladen





### Donwloads





	
	
		[](https://addons.mozilla.org/de/firefox/addon/proton-pass/)
	
	
		
			[Download](https://addons.mozilla.org/de/firefox/addon/proton-pass/)
			QR-Code
		
	
	
		[Proton Pass](https://addons.mozilla.org/de/firefox/addon/proton-pass/)
		
			Entwickler: 
			[Proton](https://addons.mozilla.org/de/firefox/user/17877165/)
		
		
			Preis: 
			Kostenlos 
			
		
	





	
	
		[](https://chromewebstore.google.com/detail/proton-pass-free-password/ghmbeldphafepmbegfdlkpapadhbakde)
	
	
		
			[Download](https://chromewebstore.google.com/detail/proton-pass-free-password/ghmbeldphafepmbegfdlkpapadhbakde)
			QR-Code
		
	
	
		[Proton Pass: Free Password Manager - Chrome Web Store](https://chromewebstore.google.com/detail/proton-pass-free-password/ghmbeldphafepmbegfdlkpapadhbakde)
		
			Entwickler: 
			[Unbekannt](https://chromewebstore.google.com/detail/proton-pass-free-password/ghmbeldphafepmbegfdlkpapadhbakde)
		
		
			Preis: 
			Kostenlos 
			
		
	





	
	
		[](https://apps.apple.com/ch/app/passwort-manager-proton-pass/id6443490629)
	
	
		
			[Download](https://apps.apple.com/ch/app/passwort-manager-proton-pass/id6443490629)
			QR-Code
		
	
	
		[‎Passwort manager - Proton Pass](https://apps.apple.com/ch/app/passwort-manager-proton-pass/id6443490629)
		
			Entwickler: 
			[Proton AG](https://apps.apple.com/ch/developer/proton-ag/id979659484)
		
		
			Preis: 
			Kostenlos+ 
			
		
	





## Fazit




Das Fazit insgesamt ist durchwachsen. Ich habe nun mein 1Password Abo nochmals für ein Jahr verlängert und lasse nun 1Password und Proton Pass parallel laufen.





Was mir extrem gut an Proton Pass gefällt ist der integrierte »Passmail.net« Service, um für neue Accounts automatisch irgendwelche Fake E-Mail Adressen zu erstellen. Das Ganze funktioniert sehr gut, ist nicht kompliziert und mit einem Klick einfach erledigt.





Beim erstellen von neuen Accounts auf Webseiten, und dem automatischen speichern dieser Daten ist für mich Proton Pass besser als 1Password (hauptsächlich wegen dem Passmail Service).





Beim Ausfüllen von Logindaten ist 1Password aber spürbar die bessere Anwendung. Proton Pass erkennt oft Login Felder nicht und das ausfüllen von 2FA Codes funktioniert überhaupt nicht.





Das allgemeine Handling ist bei 1Password auf dem Desktop ebenfalls angenehmer, da man sich dort auch mit biometrischen Daten wie Fingerabdruck, oder IR-Gesichtscan authentifizieren kann. Diese Möglichkeit fehlt Proton Pass (noch). Das liegt nicht an der technischen Limitierung, das Proton Pass nur als WebAddon verfügbar ist. Da es mit der »Web Authentication API« einen Webstandard für biometrische Authentifizierung geben würde (auch wenn Firefox den leider noch nicht unterstützt).





Ebenfalls fehlt der integrierte SSH-Agent, den man bei 1Password hat. Bedeutet bei 1Password kann ich auch alle meine SSH-Keys hinterlegen.





Wenn ich mich danach im Terminal z.B. per »ssh user@host« mit einem Server verbinde, wird der zugehörige Key direkt aus 1Password verwendet. So hat man auf allen Rechnern immer alle seine SSH Keys verfügbar.





Ich bin sicher, dass Proton Pass die Probleme mit nicht erkannten Passwortfeldern und den 2FA Codes noch in den Griff bekommen wird. Wenn heute jemand einen neuen PasswortManager sucht und auf die SSH-Integration verzichten kann ist Proton Pass sicherlich einen Blick Wert – auch weil Proton zurzeit etwa 2/3 weniger kostet als 1Password – bzw. als bestehender Proton Kunde umsonst ist.





Meine Hoffnung, dass ich die Kosten für 1Password komplett sparen, und komplett auf Proton Pass umsteigen kann haben sich leider (noch) nicht erfüllt.