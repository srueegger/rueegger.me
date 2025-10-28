---
title: "Das Ende von LibreOffice?"
date: "2023-09-02"
excerpt: "Vor kurzem kam LibreOffice in der Version 7.6.0 heraus. Neben den üblichen kleinen Verbesserungen und Bugfixes sind die Release Notes in dieser Version besonders spannend. Fairerweise hat Gerrit in seinem Blog bereits über das Thema geschrieben. Und unserer Meinungen sind in diesem Thema sehr deckungsgleich, dennoch möchte ich hier auf ein paar Punkte eingehen. Die […]"
tags: ["Allgemein", "LibreOffice", "Red Hat Linux"]
image: "/images/blog/das-ende-von-libreoffice.png"
---

Vor kurzem kam LibreOffice in der Version 7.6.0 heraus. Neben den üblichen kleinen Verbesserungen und Bugfixes sind die Release Notes in dieser Version besonders spannend.





Fairerweise hat [Gerrit in seinem Blog bereits über das Thema](https://curius.de/2023/08/kommentar-libreoffice-gibt-auf-office-ist-angeblich-ausentwickelt/) geschrieben. Und unserer Meinungen sind in diesem Thema sehr deckungsgleich, dennoch möchte ich hier auf ein paar Punkte eingehen.





Die [Veröffentlichungshinweise](https://blog.documentfoundation.org/blog/2023/08/21/libreoffice-7-6-community/) von LibreOffice 7.6.0 sind dieses mal besonders spannend.






## Statement von LibreOffice




Bevor überhaupt auf die Änderungen der neuen Version eingegangen wird, erklärt LibreOffice für die Zukunft ein komplett neues Veröffentlichungsmodell. Es wird in Zukunft keine «Versionsnummern» wie bisher geben, sondern eine ähnliche Versionierung wie es z.b. Ubuntu handhabt.





Die nächste grosse Version wird LibreOffice 24.2 (Februar 2024) sein. Als Begründung für diesen Schritt wird folgendes Angemerkt.





EnglischDeutschEnglischDeutsch


LibreOffice is the only open source office suite for personal productivity which can be compared feature-by-feature with the market leader. After twelve years and five release cycles – code cleaning, code refactoring, polishing the user interface, extending to new hardware and software platforms, and optimizing interoperability with OOXML to support users – it is increasingly difficult to develop entirely new features, so most of them are refinements or improvements of existing ones.


*LibreOffice Announcment*






LibreOffice ist die einzige Open-Source-Office-Suite für persönliche Produktivität, die sich in allen Funktionen mit dem Marktführer vergleichen lässt. Nach zwölf Jahren und fünf Veröffentlichungszyklen – Codebereinigung, Code-Refactoring, Aufpolieren der Benutzeroberfläche, Erweiterung auf neue Hardware- und Softwareplattformen und Optimierung der Interoperabilität mit OOXML zur Unterstützung der Benutzer – wird es immer schwieriger, völlig neue Funktionen zu entwickeln, so dass die meisten davon Verfeinerungen oder Verbesserungen bestehender Funktionen sind.


Deutsche Übersetzung: *LibreOffice Announcment*





Etwas salopp formuliert sagt LibreOffice hier klar «mehr geht nicht mehr» wie sind fertig. Wir werden das Produkt so wie es heute ist noch etwas polieren aber keine neuen Funktionen mehr einbauen.






## Was bedeutet das?




Ich befürchte, dass durch diese Entscheidung LibreOffice zunehmend weniger Attraktiv wird als die Alternativen. Sowohl Microsoft, wie Google oder z.b. SoftMaker entwickeln gefühlt täglich ihre Office-Produkte weiter.





Wenn man sich z.b. ansieht was man mit Microsoft CoPilot in seinem Office alles machen kann (SoftMaker Office bietet hier ebenfalls bereits KI-Integration an) merkt man sehr schnell – das «Office» längst nicht ausentwickelt wurde.









Etwas verträumt formuliert, beginnt im Grunde gerade die Neuerfindung von Office Anwendungen.





Wenn LibreOffice solche oder ähnliche Funktionen in Zukunft nicht anbieten kann, wird die eh schon sehr geringe Nutzerbasis immer weiter verschwinden.






## Warum wird die Entwicklung von LibreOffice zurückgefahren?




Die Veröffentlichungshinweise geben keine Rückschlüsse auf diese Entscheidung zu. Aber wer Open- und LibreOffice schon länger kennt.





Einerseits ist LibreOffice ein extrem umfangreiches Projekt, verschiedene Anwendungen. Writer, Calc, Impress, Base, Draw und Math sind für sich alleine schon sehr komplexe Anwendungen, die alle in einer Suite und das auch noch plattformunabhängig für alle möglichen Betriebssysteme ist ein sehr grosser Aufwand.





Zugleich ist der Code historisch. LibreOffice wurde ursprünglich aus dem Code von OpenOffice.org geforkt, und dieser Code hat seine Wurzeln in StarOffice, das in den 1980er Jahren entwickelt wurde. Obwohl viele Teile des Codes im Laufe der Jahre überarbeitet und modernisiert wurden, gibt es immer noch Teile des alten Codes, die bis heute so beibehalten wurden.





Durch diese Tatsachen, fällt es interessierten neuen Entwicklern schwer sich in den Code einzuarbeiten und daran mitzuarbeiten.






### Der Rückzug von RedHat




Vor rund 3 Monaten hat RedHat verkündet, dass sie ihren Support für LibreOffice einstellen werden.





Die Entscheidung ist nicht weiter verwunderlich, da das Geschäftsfeld von Red Hat grosse Enterprise Kunden sind, und gerade diese Kunden sind im Jahr 2023 nicht mehr an einer Office-Suite interessiert bei der nicht mal mehrere Personen gleichzeitig an einem Dokument arbeiten können.





Ich denke, dass der Rückzug vom Red Hat Personal, und die Schwierigkeiten neue Entwickler zu finden nun der Grund ist, warum LibreOffice in Zukunft nur noch auf die Produktpflege spezialisiert.






## Meine Meinung?




Die jüngsten Entwicklungen bei LibreOffice sind sowohl nachvollziehbar als auch ein wenig besorgniserregend. Wenn man die Historie und den Umfang des Projekts berücksichtigt, ist es verständlich, dass die Verantwortlichen vor Herausforderungen stehen. Die Kombination aus altem Code, der Schwierigkeit, neue Entwickler zu gewinnen, und dem Rückzug von RedHat sind eindeutige Indikatoren für die aktuellen Schwierigkeiten des Projekts.





Doch während ich die Entscheidungen und die daraus resultierenden Konsequenzen von LibreOffice verstehe, sehe ich auch die potenziellen Auswirkungen auf die Open-Source-Gemeinschaft und die Nutzerbasis. LibreOffice hat sich einen Namen als eine der wenigen echten Open-Source-Alternativen in der Office-Suite-Welt gemacht. Eine Verringerung ihrer Weiterentwicklung könnte eine Lücke im Open-Source-Ökosystem hinterlassen.





Persönlich habe ich vor vielen Jahren den Übergang zu SoftMaker Office gemacht und bin zufrieden mit meiner Wahl. Doch das bedeutet nicht, dass ich nicht an die Bedeutung von LibreOffice und das, was es für die Gemeinschaft bedeutet, glaube. Mein Wunsch wäre es, dass sich trotz der aktuellen Rückschritte und Herausforderungen weiterhin eine engagierte Gemeinschaft hinter LibreOffice formiert, um es am Leben zu halten und vielleicht in eine neue, innovative Richtung zu lenken.