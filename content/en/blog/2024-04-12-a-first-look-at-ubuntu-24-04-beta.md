---
title: "A first look at Ubuntu 24.04 (Beta)"
date: "2024-04-12"
excerpt: "The beta of Ubuntu 24.04 was recently released a little late. I took a look at it and will tell you about the new features in this article. I will not talk about the Gnome desktop and its new features in this article. If you want to know more about Gnome 46, I recommend the article from DerStandard.at. When we talk about new features in Ubuntu, I am addressing two different user groups here. On the one hand, those who are currently using the last Ubuntu version 22.04. But also those who have gone through all the STS versions and are currently on version 23.10."
tags: ["Linux", "Ubuntu"]
image: "/images/blog/ein-erster-blick-auf-ubuntu-24-04-beta.webp"
---

The beta of Ubuntu 24.04 was recently released a little late. I took a look at it and will tell you about the new features in this article. I will not talk about the Gnome desktop and its new features in this article. If you want to know more about Gnome 46, I recommend the article from [DerStandard.at](https://www.derstandard.at/story/3000000212323/gnome-46-ist-da-was-der-linux-desktop-alles-an-neuem-zu-bieten-hat).

When we talk about new features in Ubuntu, I am addressing two different user groups here. On the one hand, those who are currently using the last Ubuntu version 22.04. But also those who have gone through all the STS versions and are currently on version 23.10.

It is in the nature of things that for the 22.04 users, much is new that was already introduced in the STS versions during the 2-year release cycle of Ubuntu development.

## **The Installer**

### **Accessibility**

One of the first points of contact you have with Linux is the installer. Previous LTS users will find a completely newly developed installer. STS users have known the installer since version 23.04. Nevertheless, the installer for Ubuntu 24.04 has received some exciting new features.

As one of the first points, you can now activate accessibility features. If you have limitations in seeing or reading or are motorically impaired, you can now activate the most common accessibility features directly in the installer - these are then also active directly after the installation.

### **Automated Installations**

The Ubuntu installer now supports automated installations. Practical for companies that carry out several installations that should be identical on all computers, or also for individuals who have a precise idea of their installation.

Here you can now create a "yaml" file that defines which packages should be installed, which settings should be set, etc. You can now load this "yaml" file directly into the installer and thus carry out an automated, self-customized installation.

### **Standard Installation and Miscellaneous**

Ubuntu 22.04 users know the choice between "Standard" and "Minimal" installation. This choice has now been changed. The "Standard" installation is now the "minimal" installation that only installs the desktop, a Gnome Core Apps (file manager, terminal, etc.) and Firefox.

If you want to have the full installation directly, you now have to select the "Full installation" option, then you get LibreOffice, Thunderbird, and a few other programs installed directly.

With the "full installation", however, there are some changes compared to previous installations. The webcam program "Cheese" is no longer installed - the new Gnome Core program "Snapshot" is installed as a replacement. And the Gnome games (Solitaire & Co) are no longer installed. But they are still available in the repository.

Otherwise, the installer remains as you know it. You select your language, time zone, keyboard settings and configure a user. You still have the option to install codecs and non-free drivers by selecting a checkbox during the installation.

There is also still the option to use ZFS partitions and to set up a Trusted Boot environment - where the partition encryption is done via TPM.

## **Application Management and Snaps**

When we talk about Ubuntu - we also have to talk about Snaps. My personal view is relatively simple: Ubuntu prefers Snaps and also delivers some applications (Firefox, Thunderbird, Signal Desktop, etc.) by default via Snap.

There will always be some ways to free Ubuntu from Snap and install some programs alternatively. I myself like the Snaps and use some of them (e.g. Docker, Visual Studio Code, NodeJS) daily. My recommendation for all those who do not like Snaps for some obscure reasons - take another distribution instead of getting upset that Ubuntu uses Snaps.

### **The new application management**

This new feature mainly affects Ubuntu LTS 22.04 users. They will find a completely new application management with the upgrade to Ubuntu 24.04. Like the new installer, the new application management is written in Flutter.

In contrast to the old "Snap Store", the new application management has absolutely no speed problems, everything works here in a jiffy and looks visually very appealing.

Anyone who has previously managed the permissions of Snap applications directly via the previous Snap Store will miss this option. It has now been removed from the application management and moved to the Gnome settings.

You can now manage the permissions of all apps, regardless of whether they were installed as Snap, Deb or Flatpak, globally in the settings.

### **Firmware Updates**

Firmware updates are also now handled externally. In Ubuntu 22.04, these were still offered via the "Snap Store". Now there is a "Firmware" app developed by Ubuntu itself (also programmed in Flutter).

This app shows the available firmware versions and also allows direct updates, if any are available.

## **Longer battery life**

Notebook users can look forward to this. The new version of the "power-profiles-daemon" has made it into the new Ubuntu version. The new version supports the energy-saving modes of Intel and AMD processors better and ensures that notebooks will last much longer.

## **Other things under the hood**

Ubuntu 24.04 will be delivered with the Linux kernel 6.8. This is good news for all those who use Intel processors of the 14th generation (Meteor Lake), as they will finally reach their correct "boost" speeds with kernel 6.8. And for all gamers - with kernel 6.8, the classic "Nintendo Switch Online Controllers" are supported out-of-the-box.

## **I am thrilled!**

I have been following Ubuntu since Ubuntu existed. And Ubuntu was originally known for its "simple" installation - since Linux installations before Ubuntu were often a science in themselves.

Ubuntu has had to listen to a lot of criticism over the years that they are making hardly any progress and the installer still works as it did 20 years ago.

Now Ubuntu has struck back and introduced sensible improvements. Putting the accessibility features right at the beginning of the installer is probably the best new feature in a very long time and, to my knowledge, is the only distribution that does this so far.

In conclusion, it can be said that Ubuntu 24.04, with its numerous new features and improvements, represents a significant further development for both long-time users and newcomers. The revised accessibility features in the installer set new standards in terms of accessibility and show that Ubuntu continues to focus strongly on the needs of all users. The introduction of the new application management and the firmware app not only improves the user experience through increased performance and clearer interfaces, but also offers more efficient management of permissions and software updates. In addition, the optimization of energy management is an important step to increase the longevity and efficiency of mobile devices.

The integration of the latest kernel version optimally supports the most modern hardware and thus opens up new possibilities for tech-savvy users and developers. All these elements taken together show that Ubuntu 24.04 is not only reacting to current criticism, but is actively working on creating a user-friendly and future-proof platform. Ubuntu thus remains one of the leading Linux distributions that offers both reliability and innovation.
