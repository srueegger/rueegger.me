---
title: "The end of LibreOffice?"
date: "2023-09-02"
excerpt: "LibreOffice version 7.6.0 was recently released. In addition to the usual small improvements and bug fixes, the release notes in this version are particularly exciting. To be fair, Gerrit has already written about the topic in his blog. And our opinions on this topic are very much in line, but I would like to go into a few points here. The release notes for LibreOffice 7.6.0 are particularly exciting this time."
tags: ["General", "LibreOffice", "Red Hat Linux"]
image: "/images/blog/das-ende-von-libreoffice.png"
---

LibreOffice version 7.6.0 was recently released. In addition to the usual small improvements and bug fixes, the release notes in this version are particularly exciting.

To be fair, [Gerrit has already written about the topic in his blog](https://curius.de/2023/08/kommentar-libreoffice-gibt-auf-office-ist-angeblich-ausentwickelt/). And our opinions on this topic are very much in line, but I would like to go into a few points here.

The [release notes](https://blog.documentfoundation.org/blog/2023/08/21/libreoffice-7-6-community/) for LibreOffice 7.6.0 are particularly exciting this time.

## Statement from LibreOffice

Before even going into the changes of the new version, LibreOffice explains a completely new release model for the future. In the future, there will be no "version numbers" as before, but a similar versioning as Ubuntu handles it, for example.

The next major version will be LibreOffice 24.2 (February 2024). The following is noted as the reason for this step.

English | German
--- | ---
LibreOffice is the only open source office suite for personal productivity which can be compared feature-by-feature with the market leader. After twelve years and five release cycles – code cleaning, code refactoring, polishing the user interface, extending to new hardware and software platforms, and optimizing interoperability with OOXML to support users – it is increasingly difficult to develop entirely new features, so most of them are refinements or improvements of existing ones. | LibreOffice ist die einzige Open-Source-Office-Suite für persönliche Produktivität, die sich in allen Funktionen mit dem Marktführer vergleichen lässt. Nach zwölf Jahren und fünf Veröffentlichungszyklen – Codebereinigung, Code-Refactoring, Aufpolieren der Benutzeroberfläche, Erweiterung auf neue Hardware- und Softwareplattformen und Optimierung der Interoperabilität mit OOXML zur Unterstützung der Benutzer – wird es immer schwieriger, völlig neue Funktionen zu entwickeln, so dass die meisten davon Verfeinerungen oder Verbesserungen bestehender Funktionen sind.
*LibreOffice Announcement* | Deutsche Übersetzung: *LibreOffice Announcment*

To put it bluntly, LibreOffice is clearly saying here "no more is possible" we are finished. We will polish the product as it is today, but we will not add any new functions.

## What does that mean?

I fear that this decision will make LibreOffice increasingly less attractive than the alternatives. Microsoft, Google or, for example, SoftMaker are developing their office products on a daily basis.

If you look at what you can do with Microsoft CoPilot in your Office, for example (SoftMaker Office also already offers AI integration), you quickly realize that "Office" is far from being fully developed.

To put it a bit dreamily, the reinvention of office applications is basically just beginning.

If LibreOffice cannot offer such or similar functions in the future, the already very small user base will continue to disappear.

## Why is the development of LibreOffice being scaled back?

The release notes give no conclusions about this decision. But anyone who has known Open- and LibreOffice for a long time.

On the one hand, LibreOffice is an extremely extensive project, various applications. Writer, Calc, Impress, Base, Draw and Math are in themselves very complex applications, all in one suite and also platform-independent for all possible operating systems is a very large effort.

At the same time, the code is historical. LibreOffice was originally forked from the code of OpenOffice.org, and this code has its roots in StarOffice, which was developed in the 1980s. Although many parts of the code have been revised and modernized over the years, there are still parts of the old code that have been retained to this day.

Due to these facts, it is difficult for interested new developers to familiarize themselves with the code and to contribute to it.

### The withdrawal of RedHat

About 3 months ago, RedHat announced that they would be discontinuing their support for LibreOffice.

The decision is not surprising, as Red Hat's business is large enterprise customers, and these customers in 2023 are no longer interested in an office suite where not even several people can work on a document at the same time.

I think that the withdrawal of Red Hat personnel and the difficulties in finding new developers is now the reason why LibreOffice will in future only specialize in product maintenance.

## My opinion?

The recent developments at LibreOffice are both understandable and a little worrying. Considering the history and scope of the project, it is understandable that those responsible are facing challenges. The combination of old code, the difficulty of attracting new developers, and the withdrawal of RedHat are clear indicators of the project's current difficulties.

But while I understand the decisions and the resulting consequences of LibreOffice, I also see the potential impact on the open source community and the user base. LibreOffice has made a name for itself as one of the few true open source alternatives in the office suite world. A reduction in their further development could leave a gap in the open source ecosystem.

Personally, I made the transition to SoftMaker Office many years ago and am happy with my choice. But that doesn't mean I don't believe in the importance of LibreOffice and what it means to the community. My wish would be that despite the current setbacks and challenges, a dedicated community will continue to form behind LibreOffice to keep it alive and perhaps steer it in a new, innovative direction.
