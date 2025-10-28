---
title: "Asahi Linux – The Linux for ARM Macs – a review"
date: "2023-01-08"
excerpt: "Apple's M-series processors are ARM processors (as we know them from smartphones and tablets) and thus a different processor architecture than what Intel or AMD have offered so far. These ARM chips work a little differently than what we know from the X86 series of chips. Since an M-processor is a so-called 'SoC' (System on a Chip) [...]."
tags: ["Apple", "Linux", "Apple", "Arch Linux", "Asahi Linux"]
image: "/images/blog/asahi-linux-das-linux-fuer-die-arm-macs-ein-erfahrungsbericht.jpg"
---

Apple's M-series processors are ARM processors (as we know them from smartphones and tablets) and thus a different processor architecture than what Intel or AMD have offered so far.

These ARM chips work a little differently than what we know from the X86 series of chips. Since an M-processor is a so-called "SoC" (System on a Chip). The name says it all -> the whole "system" should be on one chip. With the M processors, this means that the CPU, GPU, audio chip (quasi sound card), and everything relevant for network, Wi-Fi, Bluetooth, etc. are on such a chip.

Asahi Linux is a project that tries to integrate Linux drivers into the kernel to make these M-SoCs usable under Linux. Basically, Apple drivers for the Linux kernel are developed through reverse engineering.

The Asahi project is financed by crowdfunding and was able to show considerable funding in a very short time, so that the people working on this project can currently do so full-time.

## Why does Asahi Linux even exist?

When you see Asahi Linux in IT news, you often see the question in the comment sections, why? "I don't buy a Mac to use Linux on it.", etc.

Considering how quickly the financing of Asahi Linux was established, this question does not arise for me. I think there are 3 target groups for Asahi Linux:

- Mac users - especially in the development field - are used to dual booting with Windows or Linux and want to continue to have this option on the M processors.

- There is simply no good ARM hardware in the Windows/Linux area. If you want to use the advantages of ARM (long battery life, mega speed from sleep to wake up, etc.) on Linux, you need this project.
Currently, the Macbook Air M1 (which you can get for 900-1,000 CHF/Euro) is probably the best piece of ARM notebook hardware you can buy - regardless of whether you want to use Mac OS, Windows ARM or Linux on it.

- Like smartphones and other devices, Macs eventually fall out of software support at Apple. Admittedly, this takes a very long time - but so you can continue to use your Mac with Linux after the Apple support ends.

## Installing Asahi - and why I waited so long

I hesitated for a long time and also considered whether I should install Asahi Linux on my Macbook Pro at all. This has several reasons. On the one hand, the project is really still in alpha status (there are more things that don't work than things that do). Secondly, Asahi Linux builds its distribution on the basis of Arch Linux - and well, I hate Arch - really! I hate it.

But at some point the curiosity was greater and I dared to do it anyway. For all who read this and think, I could try it too. Please remember Asahi Linux is ALPHA status. Many things do not work.

During the installation you are spoiled for choice. The Asahi project basically offers - as mentioned - its own distribution based on Arch Linux (basically it is Arch Linux ARM, with its own repo from which the kernel, Mesa and a few other packages are installed). But there are also some "community variants". They basically take the kernel and Mesa changes from Asahi Linux and build them into other distributions.

So you could install an Ubuntu, Debian, and a few other distributions instead of the official "Asahi Arch Linux".

But I deliberately refrained from the community variants. I would have been interested in Fedora or Ubuntu (because it's not Arch xD), but all these community variants are each maintained by a single person.

If they don't feel like it anymore, you have a dual boot Linux that can no longer be updated.

Therefore, I decided on the official Asahi Arch Linux. And here, too, you have to decide again. Asahi Linux offers 2 installation options.

The first is a fully configured KDE desktop -> the other is a basic Arch system without a GUI or anything else.

And here came my problem. I don't like KDE, and if so, I wanted to test and use the whole thing with GNOME. And yes, I know how to configure an Arch Linux, but it's terribly time-consuming and annoying and just stupid... but yes, I did it.

I will deliberately not provide a 1:1 guide for the installation of Asahi Linux here. Since the project is still in the alpha phase, this can change regularly. Therefore, if you want to install Asahi Linux, always look at the project page for the official instructions.

In short, you can say that you download a bash script within Mac OS and then execute it. The bash script asks you various questions (e.g. how much disk space should be used for the Linux partition, etc.).

When you have answered all of them, the existing Mac OS partition is reduced and a new partition for the Asahi Linux is created. For this, only applications included in Mac OS (such as diskutils) are used.

Then the Arch base system is copied to the partition. And then there is a very, very, very important output in the terminal that describes the next steps. This instruction must be followed exactly. If you don't, you'll end up in a boot loop when you restart and you'll have to completely reset your Mac.

When Asahi Linux is installed, you have to hold down the power button when starting the Mac until the operating system selection comes up (quasi the Apple's own bootloader). There you can then choose between Asahi Linux and Mac OS. If you only press the power button briefly, the operating system that was last started is simply loaded.

Neither Gnome nor KDE have support for notches or screen indentations. Asahi Linux is aware of this problem and solves it relatively elegantly.

It basically makes the screen smaller and simply shows a "black bar" at the top. Therefore, under Asahi Linux my 14" Macbook is more like a 13" Macbook -> it looks like this:

## Is Linux on ARM fun?

Yes and no. What is fun is the battery life. It's not as good as under Mac OS, but still very, very good.

What is less fun is the software availability. However, this point is extremely dependent on what you use in everyday life.

Basically, you can say that all distributions that offer ARM versions have usually also completely compiled their repositories for ARM.

In other words, all the software that you install with pacman on a normal Arch Linux, I can also install on Asahi Linux. But there are still drawbacks.

For example, Firefox. Firefox normally automatically comes with a "widewine plugin". With it you can watch the encrypted content on Netflix, Disney+, etc.

The problem is, this plugin is only available for Linux as an x86 version for 32 and 64 bit systems but not for ARM.

In other words, you can't watch Netflix & Co on the Macbook at the moment. Since the whole audio stack doesn't work anyway, that's of limited sadness -> but the problem is there.

I also use some software that is not installed via the distributions, my must-haves are:

- SoftMaker Office
- FileZilla Pro
- Mega Sync
- 1Password

All these programs are available for Linux. Normally they offer a DEB or RPM -> or in the case of Arch Linux an AUR entry. None of this is usable, however, as the software manufacturers do not provide ARM builds.

Will that ever change? I don't know -> probably only if ARM also finds more distribution in the Windows world. Either way, it will certainly take a while.

## How does Apple solve this problem?

Apple also had this problem when they switched from Intel to their own ARM chips, of course. Apple has built a software for this that goes by the beautiful name "Rosetta". Which, similar to Wine under Linux, translates a software that is not yet available as an ARM build in real time.

That worked very, very well. In the meantime, FileZilla Pro is the only software on my Mac that still requires Rosetta. Everything else (Firefox, Visual Studio Code, Office, NodeJS, Docker, etc.) already has native ARM builds for Mac OS.

## Does Asahi Linux make sense at all right now?

Currently no. It is really only for hobbyists. A system without sound and without functioning connections makes absolutely no sense for daily use.

But it is extremely fascinating to see what progress the Asahi project is making in a short time. Therefore, I will certainly leave the partition for now and boot into the system from time to time.

## Why Parallels is the better option at the moment!

If you have an Apple device with an ARM processor yourself and also want to work with Linux. I can urgently recommend you to take a look at "Parallels".

Parallels is, like e.g. VirtualBox, a virtual machine for Mac OS. And I claim here simply it is the best virtual machine there is -> regardless of the system.

You can easily install Windows 10, 11 (each as an ARM version) or the Linux distribution of your choice (also ARM versions). What's cool is that Parallels has a "Coherence Mode". This means that programs that I have installed under Windows or Linux in Parallels also appear in the Mac OS program overview and can be opened directly without having to look at the entire Windows or Linux interface.

You then simply have a Windows or Linux window with program XY within Mac OS. By the way, this works very similarly in Windows 11 with WSL2.

To conclude, Neofetch and the Gnome system info:

[](https://rueegger.me/wp-content/uploads/2023/09/asahi-linux-neofetch.png)[](https://rueegger.me/wp-content/uploads/2023/09/gnome-infos.png)
