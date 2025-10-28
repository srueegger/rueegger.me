---
title: "CSS Nesting: Eine umfassende Einführung"
date: "2023-08-18"
excerpt: "Eines der begehrtesten Features, das Entwickler seit Jahren von nativem CSS fordern, ist die Möglichkeit, Stile zu verschachteln. Mit CSS Nesting wird das Verschachteln von Stildefinitionen einfacher und nativer, ohne dass man sich auf Präprozessoren wie Sass oder Less verlassen muss. Historischer Kontext Wenn man heute klassisches CSS schreibt, erledigt man sehr viel Schreibartbeit. Viele […]"
tags: ["Web Entwicklung", "CSS", "JetBrain", "Visual Studio Code"]
image: "/images/blog/css-nesting-eine-umfassende-einfuehrung.jpg"
---

Eines der begehrtesten Features, das Entwickler seit Jahren von nativem CSS fordern, ist die Möglichkeit, Stile zu verschachteln. Mit CSS Nesting wird das Verschachteln von Stildefinitionen einfacher und nativer, ohne dass man sich auf Präprozessoren wie Sass oder Less verlassen muss.






## Historischer Kontext




Wenn man heute klassisches CSS schreibt, erledigt man sehr viel Schreibartbeit. Viele Entwickler verlassen sich deswegen auf Präprozessoren wie Sass und Less um verschachteltes CSS zu schreiben.





Dies führt zu mehr Abhängigkeiten und Komplexität in einem Projekt und ändert nichts daran, dass die generierten CSS-Dateien vergleichsweise gross sind.





Hier kommt CSS Nesting ins Spiel.






## Was ist CSS Nesting?




CSS Nesting ermöglicht es Ihnen, Stilregeln innerhalb von anderen zu schreiben. Dadurch wird der Code sauberer, organisierter, kürzer und oft lesbarer, insbesondere wenn Sie mit Techniken wie [BEM](https://de.wikipedia.org/wiki/Block,_Element,_Modifier) arbeiten, bei denen Klassen oft vom Elternelement abgeleitet werden.






## Vergleich: Klassisches CSS vs. CSS Nesting




Das Hauptunterscheidungsmerkmal ist die Struktur:






### Klassisches CSS:





```
`.header {
    background-color: #f5f5f5;
}

.header .logo {
    width: 50px;
}

.header .nav {
    display: flex;
}

.header .nav .item {
    margin-right: 15px;
}`
```
CSS




### Mit CSS Nesting:





```
`.header {
    background-color: #f5f5f5;

    & .logo {
        width: 50px;
    }

    & .nav {
        display: flex;

        & .item {
            margin-right: 15px;
        }
    }
}`
```




Durch das Verschachteln entsteht eine hierarchische Struktur im Code, die die Beziehungen zwischen den Elementen besser darstellt.






## Syntax-Details




Neben der grundlegenden Verschachtelung können Sie das «&»-Zeichen auch in anderen Kontexten verwenden:






```
`.button {
    color: white;

    &:hover {
        color: grey;
    }
    
    &.active {
        background-color: blue;
    }
}`
```




Auch Kombinationen mit anderen CSS-Funktionen wie Media Queries und Keyframes sind möglich:






```
`.container {
    width: 100%;

    @media (min-width: 600px) {
        &.double {
            width: 200%;
        }
    }
}

.button {
    animation: fadeIn 2s ease-in;

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
}`
```




Mit diesem Ansatz werden die @keyframes direkt innerhalb des .button-Selektors definiert. Dies macht es einfacher, Animationen und den zugehörigen Selektor zusammenzuhalten. Es ist jedoch wichtig zu beachten, dass diese @keyframes-Definition spezifisch für diesen Selektor ist. Wenn Sie planen, die gleiche Animation an mehreren Stellen zu verwenden, ist es sinnvoller, sie auf der obersten Ebene Ihres Stylesheets zu definieren.





Durch das Einbinden von Keyframe-Animationen direkt in den Kontext eines bestimmten Selektors wird Ihr CSS möglicherweise sauberer und organisierter, insbesondere in Fällen, in denen die Animation nur an einem Ort verwendet wird.






## Vorteile und Best Practices






- **Lesbarkeit:** Der Code wird sauberer und strukturierter.




- **Weniger Wiederholung:** Sie müssen nicht wiederholt den gleichen Selektor schreiben.




- **Klarheit der Beziehung:** Die verschachtelte Struktur zeigt klar die Beziehungen zwischen den Elementen.




- **Tiefe der Verschachtelung:** Vermeiden Sie zu tiefe Verschachtelungen, um den Code lesbar zu halten.




- **Spezifität:** Beachten Sie, dass das Verschachteln die Spezifität von Selektoren erhöhen kann.







## Nachteile




**Erhöhte Spezifität:** Durch das Verschachteln kann die Spezifität von CSS-Selektoren unbeabsichtigt erhöht werden. Das macht es schwieriger, Stile später im Stylesheet oder in anderen Stylesheets zu überschreiben. Dies kann zu «Spezifitätskriegen» führen, bei denen man noch spezifischere Selektoren oder `!important`-Anweisungen verwendet, um Stile zu überschreiben.





**Komplexität:** Obwohl das Verschachteln den Code organisierter erscheinen lassen kann, kann es auch zu einer erhöhten Komplexität führen, insbesondere wenn zu tief verschachtelt wird. Zu tief verschachtelter Code kann schwer zu lesen und zu warten sein.





**Wiederverwendbarkeit:** Wenn Stile zu spezifisch durch Verschachtelung definiert werden, können sie weniger wiederverwendbar sein. Das macht es schwierig, Stile an anderen Stellen im Projekt wiederzuverwenden, ohne sie zu duplizieren.





**Performance:** Auch wenn der Unterschied in der Regel minimal ist, können längere und spezifischere Selektoren einen (wenn auch geringen) Einfluss auf die Renderleistung haben.






## Browser- und IDE Support für Nesting CSS




Alle grossen Browser (Chrome, Edge, Safari) unterstützen bereits Nesting CSS. Nur Firefox hinkt hier noch etwas hinterher.





Voraussichtlich nächste Woche (24. August 2023) sollte Firefox 117 erscheinen, ab dem Zeitpunkt unterstützt auch Firefox Nesting CSS. Daher ist jetzt der perfekte Zeitpunkt sich mit den neuen Möglichkeiten in CSS auseinanderzusetzen.






### Nesting CSS und Visual Studio Code




Visual Studio Code unterstützt leider noch kein Nesting CSS. Es gibt weder ein funktionierendes Syntax-Highlighting noch eine Auto-Vervollständigung. Bis die Nesting CSS Unterstützung in Visual Studio Code eingebaut wurde, kann man [dieses Plugin](https://marketplace.visualstudio.com/items?itemName=csstools.postcss) verwenden um die Funktion «nachzurüsten».






### Nesting CSS und die IDEs von JetBrain




Seit der Version 2023.2 sollten alle IDEs von JetBrain die für die Web-Entwicklung relevant sind, Nesting CSS vollständig unterstützen.






## Schlussfolgerung




CSS Nesting bietet eine leistungsstarke Möglichkeit, CSS sauberer und organisierter zu schreiben. Es kombiniert die Vorteile der strukturierten Codierung mit der Einfachheit und Leistung von nativem CSS. Es ist wichtig, sich mit den Best Practices vertraut zu machen und das Verschachteln bewusst und effektiv einzusetzen.