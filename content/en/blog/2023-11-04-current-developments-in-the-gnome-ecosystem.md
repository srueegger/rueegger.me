---
title: "Current developments in the Gnome ecosystem"
date: "2023-11-04"
excerpt: "Gnome 45 was released a little over a month ago. Of course, the best, most beautiful and greatest edition of the Gnome desktop so far 😉. The Gnome project has of course not rested on its laurels but is already working hard on the next version. The release of Gnome 46 is planned for March 20, 2024. The Gnome 46 Alpha should appear on January 6, 2024, the Beta on February 10. From February 10, the UI and feature freeze will also come. This means that no new functions or design changes may be made from then on. And the team then has about a month to stabilize the package."
tags: ["Linux", "Gnome"]
image: "/images/blog/aktuelle-entwicklungen-im-gnome-oekosystem.png"
---

A little over a month ago, Gnome 45 was released. Of course, the best, most beautiful and greatest edition of the Gnome desktop so far 😉.

The Gnome project has of course not rested on its laurels but is already working hard on the next version. The release of Gnome 46 is planned for March 20, 2024. The Gnome 46 Alpha should appear on January 6, 2024, the Beta on February 10.
From February 10, the UI and feature freeze will also come. This means that no new functions or design changes may be made from then on. And the team then has about a month to stabilize the package.

I will now list what exciting things have happened in the Gnome world in recent weeks. I will divide it into categories:

- **Gnome Foundation** (everything that happens in the administration around Gnome)
- **Gnome Core Apps** (all apps that are maintained by the Gnome project itself)
- **Gnome Circle Apps** (apps that are not maintained by Gnome itself, but meet a number of strict requirements to be labeled as an "app for the Gnome desktop".
- **Third-party projects** (apps that are not directly related to Gnome, but are somehow relevant anyway)

The article can also be seen as a small box of wonders where you might get to know new Gnome or Linux apps that you didn't even know existed. 🎉

## Gnome Foundation

### Gnome Asia Summit

In one month from today, the "Gnome Asia Summit" will take place in Nepal. A meeting in the Asian region that is primarily about the Gnome desktop. It is intended to be a forum for Gnome users, developers, governments and private companies to discuss the current Gnome and future possibilities.

You can still register at the moment. So if someone is in Nepal next month and is still looking for a leisure activity, feel free. In addition, they are still looking for companies that would like to co-sponsor the event.

Registrations and more about the event → even in German can be found here: [https://events.gnome.org/event/170/overview](https://events.gnome.org/event/170/overview)

### New Gnome Executive Director

On October 17 of this year, Holly Million was appointed as the new Executive Director of the Gnome Foundation. She is the first woman to hold this office. Holly brings three decades of invaluable experience in non-profit management and has served as a consultant, development director, executive director, and board member for numerous organizations. In particular, she founded the non-profit organization Artists United, which is dedicated to empowering individual artists and promoting collaboration between artistic disciplines for the benefit of the community. In addition, Holly served as Executive Director of the BioBricks Foundation, an international open-source biotechnology non-profit organization.

Anyone who would like to get to know Holly can do so on November 14. There will be a digital "Meet and Greet with Holly Million". If you want to be there, you have to register: [https://events.gnome.org/event/172/](https://events.gnome.org/event/172/)

And yes, I will be at the Meet&Greet. If you can't be there but have an exciting question you would like to ask Holly, you can give it to me here.

### Welcome to Gnome

Gnome is currently working on a website that will run under "welcome.gnome.org" in the future. The idea is to introduce people who are not yet familiar with the Gnome desktop to it. And to give people who want to contribute to the Gnome project an easy start to where and how they can best get involved.

The layout is now open for review: [https://teams.pages.gitlab.gnome.org/Websites/welcome.gnome.org/de/](https://teams.pages.gitlab.gnome.org/Websites/welcome.gnome.org/de/)

After the review, there will certainly be adjustments and then it will go into translation.

### More about the Gnome Foundation

In addition, the Gnome Foundation has set up a new committee. This committee has the task of developing a code of conduct. Since it has happened in the past that answers from Gnome developers were perceived as very cheeky, arrogant or arrogant, they are trying to create a better climate for the developers here.

Have you always wanted to help with a free software project but can't program? The Gnome project is currently looking for volunteers to help fill the Gnome social media channels with content. If you are interested, you can contact the Gnome Foundation Brand Manager Caroline Henrikson directly: [chenriksen@gnome.org](mailto:chenriksen@gnome.org)

## Gnome Core Apps

### Gnome System Monitor

The Gnome System Monitor is the well-known task manager of the Gnome desktop. For Gnome 46, it is planned that the System Monitor will get rid of its GTK3 basis and finally come in libadwaita/GTK4. There is a very extensive merge request for this that can be viewed here: [https://gitlab.gnome.org/GNOME/gnome-system-monitor/-/merge_requests/55](https://gitlab.gnome.org/GNOME/gnome-system-monitor/-/merge_requests/55)

### Gnome Software

A few UI fixes for version 46 have been prepared for the Gnome project's app store.

### VTE Library

The VTE library is a Gnome library that GTK programs can use to display a terminal. For example, the Gnome Console program is based on it.

Since the library - especially because of Gnome Console - has become more important than it was before, the Gnome developers have now invested a lot of work to make VTE more performant.

Among other things, the compression algorithm has been changed, a lot of code that was still written in C has been ported to C++, large parts are now rendered via the GPU instead of the CPU and more native GTK4 functions are used.

### Tracker

The Gnome Tracker is the search engine behind all search functions in the Gnome desktop or in the file manager. It continuously indexes the content and metadata of the files on the computer and creates a search index so that you can easily and conveniently search for files via the Gnome Shell.

Tracker has now been significantly improved and both the search and indexing speed have been optimized. For this, parts of the code have been rewritten - which now gets by with fewer lengthy system calls and thus acts faster.

### Vala

Vala is an object-oriented programming language whose compiler generates C code. Vala is a very popular language within the Gnome project (of course, it also comes from Switzerland 😛) and many projects (e.g. Timeshift, or also the Unity desktop) were developed with Vala.

The language has now updated the documentation. A completely new website has been built for this and it works much more with code examples. For anyone who wants to build a Gnome app, Vala is definitely worth a look.

### Gnome Terminal

The Gnome Terminal enjoys great popularity although it has been replaced by Gnome with the Gnome Console. Many distributions such as Ubuntu and Fedora continue to ship the more extensive Gnome Terminal and not the Gnome Console.

The developers behind the Gnome Terminal have now released a first GTK4 version (not libadwaita). It still needs some effort until it is really usable, but the goal is to have the GTK4 port completed with version 46.

## Gnome Circle Apps

### Webfont Kit Generator

The Webfont Kit Generator is a program that is very exciting for web developers. The program creates a webfont (woff, or woff) from ttf or otp fonts that you can embed directly into websites locally. The Webfont Kit Generator has been updated to adapt to the updated design language of Gnome 45. In addition, there were a few new translations. The program can be downloaded here: [https://flathub.org/de/apps/com.rafaelmardojai.WebfontKitGenerator](https://flathub.org/de/apps/com.rafaelmardojai.WebfontKitGenerator)

### Warp

With Warp you can easily, uncomplicatedly and encrypted share files on the internet from one device to another. Here, too, there was an update to adapt to the updated design guidelines of Gnome 45. [https://flathub.org/de/apps/app.drey.Warp](https://flathub.org/de/apps/app.drey.Warp)

### Share Preview

The program has also updated its layout for Gnome 45. You can now also generate a preview for LinkedIn. In addition, it is now possible to open multiple instances of the app at once. [https://flathub.org/de/apps/com.rafaelmardojai.SharePreview](https://flathub.org/de/apps/com.rafaelmardojai.SharePreview)

### Ear Tag

With Ear Tag you can tag your music. The software has also been adapted to the new design guidelines. In addition, you can now define a front and back cover instead of just one image. [https://flathub.org/de/apps/app.drey.EarTag](https://flathub.org/de/apps/app.drey.EarTag)

### Commit

Commit is a small but fine app that helps developers write GIT commits. There was a small update here, when writing the commit message, the spell check is now active if a local dictionary is available. [https://flathub.org/de/apps/re.sonny.Commit](https://flathub.org/de/apps/re.sonny.Commit)

### Fragments

Fragments is a BitTorrent client written in libadwaita. A long-awaited function has been added with an update. You can now select which files you want to download in a torrent and do not necessarily have to load the entire torrent package. The update is not yet available but should appear in a few days: [https://flathub.org/de/apps/de.haeckerfelix.Fragments](https://flathub.org/de/apps/de.haeckerfelix.Fragments)

### Paper Clip

Paper Clip is a small program with which you can edit the metadata of PDF files. With the update, Russian was added as a new language. The app can now open multiple instances. The look and feel has also been adapted to the new Gnome 45 design guidelines: [https://flathub.org/de/apps/io.github.diegoivan.pdf_metadata_editor](https://flathub.org/de/apps/io.github.diegoivan.pdf_metadata_editor)

### Video Trimmer

With Video Trimmer you can cut certain parts out of a video. The program received a small update to adapt to the new design guidelines of Gnome 45: [https://flathub.org/de/apps/org.gnome.gitlab.YaLTeR.VideoTrimmer](https://flathub.org/de/apps/org.gnome.gitlab.YaLTeR.VideoTrimmer)

### Cartridges

Cartridges is a "game launcher" for all possible games. It supports Steam, Lutris and many other providers. The app received an update that ensures that you can now also find the games via the Gnome desktop search. In addition, the design was adapted to the Gnome 45 look and feel. [https://flathub.org/de/apps/hu.kramo.Cartridges](https://flathub.org/de/apps/hu.kramo.Cartridges)

## Third-party projects for the Gnome desktop

### Jogger

Jogger is a completely new Gnome Mobile app that can be installed and used on the Librem 5 smartphone, for example. It can track and visually display training such as jogging, cycling, etc. There is also an import function where you can import previous training from Android apps. [https://flathub.org/apps/xyz.slothlife.Jogger](https://flathub.org/apps/xyz.slothlife.Jogger)

### Railway

Railway should be an exciting app for all train drivers. With the app you can look up train connections of various providers. Including, for example, Deutsche Bahn or ÖBB. The new version 2.0 has now been developed with libadwaita and follows the Gnome design guidelines. [https://flathub.org/apps/de.schmidhuberj.DieBahn](https://flathub.org/apps/de.schmidhuberj.DieBahn)

### Turtle

Turtle is now available as a Flatpak. Turtle is a program that provides plugins for Nautilus (and other file managers) for managing GIT repositories. [https://flathub.org/apps/de.philippun1.turtle](https://flathub.org/apps/de.philippun1.turtle)

### Upscaler

Upscaler is a program that allows you to enlarge images without any noticeable loss of quality. The app was recently updated and now offers "drag & drop" support, WebP support and a design adapted to Gnome 45. [https://flathub.org/apps/io.gitlab.theevilskeleton.Upscaler](https://flathub.org/apps/io.gitlab.theevilskeleton.Upscaler)

### GDM Settings

GDM Settings is a program to be able to visually adapt the login screen of Gnome. The app has been updated to be compatible with GDM45. At the same time, the look and feel of the app has been adapted to the design language of Gnome 45. [https://flathub.org/apps/io.github.realmazharhussain.GdmSettings](https://flathub.org/apps/io.github.realmazharhussain.GdmSettings)

By the way, the project would like to draw attention to the fact that you are welcome to support the work financially. A "GitHub Sponsors" area has now been set up for this: [https://github.com/sponsors/gdm-settings](https://github.com/sponsors/gdm-settings)

### Flatseal

With Flatseal you can manage the permissions of Flatpak apps. With the latest update, the speed has been improved. And Flatseal now also looks like a Gnome 45 app in terms of layout. [https://flathub.org/apps/com.github.tchx84.Flatseal](https://flathub.org/apps/com.github.tchx84.Flatseal)

### Meld

Meld is an ancient app, I've been using it for what feels like since I've known Linux. The developer of Meld is currently working on a libadwaita adaptation of his app. It's not finished yet but far advanced. He is also urgently looking for people to help him. You can register here: [https://gitlab.gnome.org/GNOME/meld/-/merge_requests/105](https://gitlab.gnome.org/GNOME/meld/-/merge_requests/105)

### Dosage

Dosage is a new libadwaita app that helps you take regular medication. It reminds you via push notification when you have to take a medication. The app is very new and was developed with libadwaita. The developer has also announced that he wants to become a Gnome Circle app with his app in the medium term. [https://flathub.org/de/apps/io.github.diegopvlk.Dosage](https://flathub.org/de/apps/io.github.diegopvlk.Dosage)

### Televido

Televido is a new libadwaita app with which you can watch the German public TV channels live and download content from the media library. [https://flathub.org/apps/de.k_bo.Televido](https://flathub.org/apps/de.k_bo.Televido)

### Celeste

Celeste is a cloud synchronization program to synchronize files from Google Drive, Dropbox, etc. with your computer. With an update, support for ProtonDrive has now also been added. [https://flathub.org/apps/com.hunterwittenborn.Celeste](https://flathub.org/apps/com.hunterwittenborn.Celeste)

## Conclusion

To conclude this virtual excursion into the magical land of Gnome development, let's state: It looks as if the Gnome team will continue to miss no opportunity to expand and beautify its digital garden party. With the loving care of the Gnome ecosystem, new apps thrive like rare flowers and well-known tools are constantly being refined, so that even the System Monitor will soon shine in GTK4 splendor.

Gnome 45 seems to be not only a bull's-eye in terms of aesthetics and functionality, but also a springboard for future innovations that will certainly not be long in coming with Gnome 46. So much commitment and passion could almost make you forget that this desktop environment consists of zeros and ones - the Gnome project presents itself so vividly and dynamically.

While the Gnome Foundation provides for an even friendlier coexistence with new faces and fresh ideas, Gnome Circle and third-party apps happily compete to enrich the desktop with usefulness and shine. And should you get lost between all the exciting developments, the upcoming "welcome.gnome.org" will show you the way back to the center of the Gnome community.

In summary: Whether you join the Gnome festival as a developer, user or curious digital tourist - it won't get boring here. Gnome 45 may be the most beautiful chapter so far, but the story will be continued with excitement, humor and a pinch of magic.
