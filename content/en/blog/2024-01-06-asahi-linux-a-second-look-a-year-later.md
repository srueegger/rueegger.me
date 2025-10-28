---
title: "Asahi Linux – a second look a year later."
date: "2024-01-06"
excerpt: "About a year ago, I took a detailed look at Asahi Linux. My conclusion at the time was that Asahi Linux is not yet worthwhile. I criticized the Arch Linux base and the fundamentally lacking software. A year has now passed and Asahi Linux has developed massively, the base is now Fedora and the hardware support is also very good. So a good time to take a second look at Asahi Linux."
tags: ["Linux", "Asahi Linux", "MacOS"]
image: "/images/blog/asahi-linux-zweiter-blick-ein-jahr-spaeter.jpg"
---

About a year ago, I took a detailed look at [Asahi Linux](https://rueegger.me/2023/01/08/asahi-linux-das-linux-fuer-die-arm-macs-ein-erfahrungsbericht/). My conclusion at the time was that Asahi Linux is not yet worthwhile. I criticized the Arch Linux base and the fundamentally lacking software.

A year has now passed and Asahi Linux has developed massively, the base is now Fedora and not Arch anymore and the hardware support is also very good.

So a good time to take a second look at Asahi Linux.

## The installation

I **deliberately** do not want to write a tutorial for the installation here. Anyone who wants to install Asahi Linux should follow the official Asahi documentation. This is really important - because in the worst case you can destroy your MacOS and have to do a complete clean install. [To the Asahi Linux documentation](https://github.com/AsahiLinux/docs/wiki).

### The choice of desktop

Asahi Linux recommends installing Asahi with KDE. Of course, I completely ignored this recommendation and installed Asahi with Gnome. Since Gnome is my preferred Linux desktop environment.

I regretted this choice pretty quickly. Asahi Linux with Gnome is currently completely (!) unusable. The Gnome Shell has constant freezes and often crashes completely or restarts completely randomly - even when you are not doing anything and the desktop is just running in idle.

Therefore, my recommendation at the present time is if you want to install Asahi Linux - take the KDE version. I aborted my Asahi Gnome experiment after about 2 hours - and reinstalled Asahi Clean with KDE.

The Asahi KDE version has been running here for several days now and I have not been able to find any problems at all.

Other desktops are not officially supported at the moment. And will probably hardly run unofficially. The Asahi project team builds its own drivers for the Apple ARM processors (M1, M2, M3) and also tinkers a lot with the graphics stack so that 3D acceleration, etc. works perfectly.

This work is based on the Linux kernel, Mesa and Wayland - the X server is not supported. Therefore, desktops like Mate, Cinnamon & Co that still use the X server do not run under Asahi Linux.

I will not do a KDE desktop tour here. It is just a current KDE under Fedora. Anyone who wants to know what KDE under Fedora feels like can simply pack the [Fedora-KDE-Spin](https://fedoraproject.org/spins/kde/) into a virtual machine.

I installed the whole thing on a Macbook Air M2 15″ device with 512GB SSD and 16GB RAM. I assigned 100GB of storage space to the Asahi Linux installation.

## Why the switch from Arch Linux to Fedora Linux?

Some of you may be wondering why Asahi Linux switched its base from Arch Linux to Fedora. In my article from a year ago, I described Arch Linux as a sensible basis for a project like Asahi Linux.

Since Asahi is very much on the pulse of the times and wants to test its kernel and Mesa patches on a basis that is as up-to-date as possible, and Arch Linux as a rolling release distribution always offers current packages here.

To be fair, however, it must be said that Fedora also has a "semi-rolling-release model" when it comes to kernel, Mesa and co. The reason for the switch was ultimately two reasons. Partly questionable package quality of the ARM packages under Arch. Often programs under Arch that were compiled for ARM were not executable or had other strange bugs.

You can definitely say that the ARM variant of Arch Linux is not nearly as well tested as the AMD64 variant. Secondly, there was no direct contact between the Asahi Linux team and the Arch Linux team.

The Fedora team deliberately sought this contact and thus also takes some work off the Asahi team. Certain Asahi Linux scripts are now maintained directly upstream in the Fedora repositories and Asahi Linux no longer has to worry about it itself - overall, you have serious contact with the Fedora developers and a really "joint" work on the project, which you unfortunately could not achieve before with Arch Linux.

## What is the current hardware support?

Very good. The most important thing and also the point where the most work has gone into - graphics drivers. Last year you could already use OpenGL in version 2. In the meantime, the GPU driver has been modified to the extent that it is also certified for OpenGL 3.0 and OpenGL 3.1. Video acceleration via the GPU in Firefox now also works.

With the release of Fedora 40 (probably in April 2024), OpenGL 4 and Vulkan support should also be included.

Wi-Fi and Bluetooth work out-of-the-box. The touchpad works (unfortunately there is still no way to configure the strength of the click resistance).

The keyboard backlight also works. And is continuously adjustable. The screen brightness can now also be controlled directly.

The speakers work. And the 3.5mm jack now also works and you can connect headphones. However, the microphone unfortunately does not work yet.

If someone has a Mac Mini and wants to run Asahi Linux on it, they can be reassured that both the Ethernet port and the HDMI output work. If you have a Macbook Pro with an M processor and a touch bar - you are now also lucky that the touch bar works.

What does not work besides the microphone connection is the TouchID fingerprint scanner.

Massive progress has been in the last year. If you consider how long the list of non-functioning hardware was a year ago and today only TouchID and microphone do not work - you realize that the developers around Asahi Linux have done a great job.

## Asahi Linux and Kernel Upstream

Asahi Linux works as follows. They write their own drivers for the M* processors from Apple through "reverse engineering". They write these drivers in their own fork of the Linux kernel.

Therefore, a separate "asahi-linux-kernel" runs on Asahi Linux. The goal of Asahi Linux is that their drivers are included upstream in the normal Linux kernel - and that in the future you will not need a modified "asahi-kernel".

And here, too, there has been progress, as some of the things I listed earlier are already upstream in the normal Linux kernel.

Here are some examples. The drivers for the keyboard backlight have been available directly via the normal Linux kernel since kernel version 6.4, for example. The Wi-Fi drivers have been fixed in the kernel since version 6.1. The Bluetooth drivers since version 6.2.

The drivers for the Ethernet port on the Mac Mini have been in the Linux kernel since version 6.4.

At the moment, you still need the adapted "asahi-linux-kernel" for many things, but it is nice to see that more and more hardware support is landing directly in the Linux kernel.

The goal is clear, as much as possible should come upstream into the kernel. As much as possible so that Asahi Linux is no longer needed and you can then install all possible distributions directly on a Mac.

## Asahi Linux in everyday life

Now, hand on heart. Have you ever seen such a battery life on a Linux notebook?

Around 12 hours of battery life with Firefox open. What the Macbooks from Apple with their M1, M2 or M3 processors conjure up in terms of battery life - whether under Linux or Mac OS - always inspires me anew.

To be fair, the battery life under Mac OS is a little better, you get another 1-2 hours out of it. Nevertheless, having a notebook that has 10+ hours of battery life makes everyday life immensely easier.

### Software remains a problem

Unfortunately, I have to say a year later that software remains a problem. In the report last year, I said that an ARM version for Linux is missing for some software that I use.
Specifically, these were:

- SoftMaker Office
- FileZilla Pro
- 1Password
- MegaSync

I no longer use MegaSync, as I have switched my cloud from Mega to ProtonDrive. Which is a bit ironic here - since MegaSync now offers ARM versions of their program for Linux.

SoftMaker Office is also still only available for Linux in an AMD64 version. I know that they also had a lot of problems under Mac OS to make the whole thing ARM compatible. The main reason for this was the integrated Duden corrector, which was not really ARM compatible.

FileZilla Pro is also only available for AMD64 and X86. And with FileZilla Pro, I really want to let out a little rant now. The Linux support they offer is miserable. FileZilla Pro for Linux is still built on a Debian 10 system.
FileZilla Pro for Linux is built with GTK2 (end-of-life for ages). It is even recommended to only use FileZilla Pro for Linux on Debian 10. In the customer support forum (unfortunately not public, or posts only visible to paying users) there is no support if you use the thing on another distribution.
All Linux distributions have long since proven that you can build the normal FileZilla with GTK3. How little the FileZilla developers care about their paying Linux customers is just embarrassing.

But there is good news from 1Password. They now offer a fully functional ARM-Linux version of their password manager.

For people who use Google Chrome. Google does not offer (for whatever reason) an ARM version of their browser for Linux - although Chrome OS is practically made for the ARM architecture.

It can't be the Chromium platform - since Vivaldi offers official ARM builds of their browser.

What unfortunately - regardless of the browser - still does not work is the playback of streaming services such as Netflix, Disney+, etc. Since you need the Widevine plugin in the browser for the decryption of the video stream - and Widevine does not offer an official ARM-Linux version.

The whole thing is already quite ridiculous again. Since you can play Netflix and Co without any problems with a Chromebook, which also runs on ARM architecture.

In other words, there is a Linux-Arm version of Widevine but apparently only for Google exclusively. I have read some reports that you can copy the Widevine plugin from the file system on a Chromebook and paste it in the right place on Asahi - and thus watch Netflix and Co. I could not test this myself due to the lack of a Chromebook.

## Conclusion on the current Asahi Linux status

A year has passed and Asahi Linux has developed significantly. The base has been switched from Arch Linux to Fedora, which has led to improved package quality and closer cooperation with the Fedora team. This change is also reflected in the increased hardware support, which now includes OpenGL 3.0/3.1, improved graphics drivers and a more stable desktop environment with KDE.

The challenge with the Gnome Shell, which leads to crashes and freezes, illustrates the importance of choosing the right desktop. This is a crucial point for users considering an installation.

However, a critical eye remains on software compatibility. Despite some progress, such as the ARM support of 1Password, support for ARM architectures is lacking in some key programs. This could be an obstacle for users who need specific applications.

Hardware support has improved significantly, especially in terms of graphics performance and support for various MacBook models. However, the lack of microphone support remains a disadvantage, especially for users who regularly participate in video conferences.

Asahi Linux shows its potential through the constant integration of its drivers into the main Linux kernel, which could enable a broader use of various Linux distributions on Apple hardware in the long term.

In conclusion, it can be said that Asahi Linux has come a long way and has established itself as a promising option for those who want to use Linux on Apple hardware. Despite some limitations, especially with regard to software compatibility and microphone support, it represents a considerable achievement and gives hope for an even brighter future.
