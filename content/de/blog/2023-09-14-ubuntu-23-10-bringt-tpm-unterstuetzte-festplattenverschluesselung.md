---
title: "Ubuntu 23.10: bringt TPM-unterstützte Festplattenverschlüsselung"
date: "2023-09-14"
excerpt: "Seit Langem lamentiere ich darüber, dass die Linux-Distributionen die Möglichkeiten von TPM nicht nutzen. Nun kündigt Canonical aus dem Nichts an, die FDE (Full-Disk-Encryption) mit Ubuntu 23.10 (vorerst noch experimentell) in Ubuntu Desktop 23.10 zu implementieren. Was ist FDE? Die Sicherheit persönlicher und geschäftlicher Daten steht heutzutage im Zentrum vieler technologischer Überlegungen. Unter Linux bietet die […]"
tags: ["Linux", "Encryption", "TPM", "Ubuntu"]
image: "/images/blog/ubuntu-23-10-bringt-tpm-unterstuetzte-festplattenverschluesselung.svg"
---

Seit Langem lamentiere ich darüber, dass die Linux-Distributionen die Möglichkeiten von TPM nicht nutzen. Nun [kündigt Canonical aus dem Nichts an](https://ubuntu.com/blog/tpm-backed-full-disk-encryption-is-coming-to-ubuntu), die FDE (Full-Disk-Encryption) mit Ubuntu 23.10 (vorerst noch experimentell) in Ubuntu Desktop 23.10 zu implementieren.






## Was ist FDE?




Die Sicherheit persönlicher und geschäftlicher Daten steht heutzutage im Zentrum vieler technologischer Überlegungen. Unter Linux bietet die vollständige Festplattenverschlüsselung (Full Disk Encryption, FDE) eine Lösung, um sämtliche Daten auf einer Festplatte vor unbefugtem Zugriff zu schützen.





Dabei werden nicht nur einzelne Dateien oder Partitionen, sondern die gesamte Festplatte, einschließlich des Betriebssystems und aller Systemdateien, verschlüsselt. Wird ein Rechner mit FDE gestartet, so ist vor dem Boot-Vorgang die Eingabe eines Passworts oder Schlüssels erforderlich. Dies stellt sicher, dass ohne die korrekte Authentifizierung kein Zugriff auf die Daten möglich ist.





Tools wie LUKS (Linux Unified Key Setup) sind in der Linux-Welt weit verbreitet, um solch eine Verschlüsselung zu realisieren. Das Ergebnis: Ein deutlich erhöhter Schutz vor Datenverlust oder -diebstahl, selbst wenn die physische Hardware in die falschen Hände gerät.






## Was ist TPM?




TPM steht für «Trusted Platform Module». Es handelt sich dabei um einen internationalen Standard für einen sicheren Krypto-Prozessor, der Schlüssel für hardwaregestützte Verschlüsselung erzeugt. Ein TPM ist in der Regel ein eigenständiger Mikrocontroller oder kann in einem anderen Chip integriert sein.





Hier sind einige Hauptmerkmale und Funktionen von TPM:







- **Sichere Schlüsselgenerierung:** TPMs können kryptografische Schlüssel erzeugen, sodass diese Schlüssel niemals in nicht verschlüsselter Form außerhalb des TPMs existieren.




- **Hardware-Speicher für Schlüssel:** Schlüssel, die im TPM gespeichert sind, können so konfiguriert werden, dass sie nicht exportiert werden können. Das erhöht die Sicherheit gegen Schlüsseldiebstahl.




- **Endorsement Key (EK):** Bei der Herstellung wird jedem TPM ein eindeutiger und privater RSA-Schlüssel zugewiesen, bekannt als der Endorsement Key.




- **Speichern und Überprüfen von Plattformmetriken**: TPMs können Systemmetriken speichern und sicher überprüfen, um sicherzustellen, dass das System nicht durch Malware oder andere schädliche Änderungen kompromittiert wurde.




- **Integritätsprüfung des Betriebssystems:** Mit Hilfe der oben genannten Plattformmetriken kann das TPM bei Systemstart sicherstellen, dass das Betriebssystem und die Startkomponenten nicht verändert wurden.




- **Verschlüsselungsfunktionen:** TPMs unterstützen verschiedene kryptografische Funktionen, einschließlich symmetrischer und asymmetrischer Verschlüsselung, Hashing und digitales Signieren.




- **Binden und Versiegeln:** Das sind spezielle Funktionen, mit denen Daten an bestimmte Systemzustände gebunden oder versiegelt werden können. Beispielsweise kann ein Schlüssel so versiegelt werden, dass er nur zugänglich ist, wenn bestimmte Softwarekomponenten geladen sind.







## **Was macht nun Ubuntu 23.10?**




Ubuntu hat die Möglichkeit für die TPM-Verschlüsselung nun in die ISO integriert und den Ubuntu Installer angepasst. So sieht das zurzeit aus:









Der Vorteil der TPM-Methode ist, dass man nun keine eigene „Passphrase“ mehr definieren muss, sondern der Schlüssel direkt im TPM generiert und gespeichert wird.





Der Schlüssel beim Booten wird vom TPM nur ausgelesen. Dies ist nur möglich, wenn die Software, die den Schlüssel nutzen möchte, durch Secure Boot entsprechend autorisiert wurde. Daher ja, das System ist nur mit aktiviertem Secure Boot nutzbar.





Optional kann man auch „Passphrase und TPM“ konfigurieren. So werden für die Entschlüsselung zwei Schlüssel benötigt: einerseits der im TPM hinterlegte und andererseits die eigene Passphrase.





Komplett neu ist dieses System im Ubuntu-Universum nicht. Das Produkt „Ubuntu Core“ bietet diese Möglichkeit schon länger an. Und im Grunde nutzt Canonical nun die gleichen Methoden in Ubuntu Desktop wie zuvor in Ubuntu Core.





Das bedeutet ebenfalls, dass Snap zwingend erforderlich ist. Wenn man wählt, dass Ubuntu über TPM verschlüsselt wird, wird der Bootloader und die Kernel-Assets zwingend als Snap installiert.






## Fazit




Die Integration von TPM-Unterstützung in Ubuntu 23.10 ist ein deutlicher Schritt nach vorne in Richtung verbesserte Datensicherheit und Benutzerfreundlichkeit.





Die nahtlose Kombination von bewährten Sicherheitsstandards mit den fortschrittlichen Funktionen von TPM verspricht eine robustere und zuverlässigere Datenverschlüsselung. Durch das Wegfallen der Notwendigkeit, eine eigene Passphrase festzulegen, und das Vertrauen in die hardwaregestützte Schlüsselgenerierung des TPM, wird nicht nur die Sicherheit erhöht, sondern auch der Prozess der Datenverschlüsselung vereinfacht.





Canonical zeigt mit dieser Neuerung, dass sie bestrebt sind, stets an vorderster Front der technologischen Entwicklung zu stehen und ihre Benutzer mit den besten und aktuellsten Sicherheitsfunktionen auszustatten. Für alle, die Wert auf Datenschutz und Sicherheit legen, ist Ubuntu 23.10 zweifellos ein interessantes Update, das es zu erwägen gilt.