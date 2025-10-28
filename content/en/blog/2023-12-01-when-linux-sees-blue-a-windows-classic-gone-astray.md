---
title: "When Linux sees blue: A Windows classic gone astray"
date: "2023-12-01"
excerpt: "With systemd version 255, which will probably be released sometime in December 2023, the well-known 'blue screen' from Windows is now coming to Linux for the first time. Below I will write something about the history of the blue screen, why Microsoft developed it and why it is also a good idea for Linux. Why is the blue screen blue? The first blue screen was with Windows NT 3.1 from 1993 and was integrated into all subsequent Windows versions in the following years. The blue screen was developed by the then Microsoft employee John Vert."
tags: ["Linux", "Linux", "systemd", "Windows"]
image: "/images/blog/wenn-linux-blau-sieht-ein-windows-klassiker-auf-abwegen.png"
---

With systemd version 255, which will probably be released sometime in December 2023, the well-known "blue screen" from Windows is now coming to Linux for the first time.

Below I will write something about the history of the blue screen, why Microsoft developed it and why it is also a good idea for Linux.

## Why is the blue screen blue?

The first blue screen was with Windows NT 3.1 from 1993 and was integrated into all subsequent Windows versions in the following years. The blue screen was developed by the then Microsoft employee John Vert.

*Windows NT 3.1 Blue Screen*

He preferred to program with the text editor "Slickedit", which at that time had a blue background with white text. Since the firmware of his computer at that time also used white text on a blue background, he was inspired by it and designed the program with a blue background and white text.

## Why is there a blue screen?

The blue screen is a diagnostic tool for system administrators. As soon as the operating system detects an error, the system is stopped to protect files from damage, and the blue screen appears.

The blue screen then displays an error code that is intended to help a system administrator identify and solve the problem.

In addition, it creates a "memory dump", which means that the entire content of the main memory is copied to the hard disk, which helps with troubleshooting.

The most common cause of a blue screen under Windows are driver problems, e.g. outdated drivers that are no longer compatible with the current Windows and thus lead to an error. Often, however, hardware defects can also trigger a blue screen.

Overall, the blue screen is an important diagnostic tool that helps with troubleshooting and error correction in Windows operating systems. Despite its often negative reputation, as it is associated with system crashes, it plays an important role in maintaining system stability and security in Windows.

## How does this actually work under Linux?

As we know, Linux is not Windows, and things often work differently. System crashes and faulty drivers (hello Nvidia 🙄) can definitely also occur under Linux. Here we know the phenomenon as "Kernel Panic".

*Example of a Linux Kernel Panic under Red Hat Linux*

The problem with the kernel panic is that the messages are not very user-friendly. If you are not a kernel developer, you can do little with the error messages. For ordinary mortals, the error message gives no clues.

## How did the blue screen come to Linux?

In a "feature request", systemd was asked to create a way for a full-screen error message with a human-readable error name to be displayed in the event of a Linux boot error. In addition, it should be possible for Linux distributions to include a QR code that leads to their own help pages and thus gives users the opportunity to find instructions on how to fix the problem.

And that is the birth of "[systemd-bsod.service](https://www.freedesktop.org/software/systemd/man/latest/systemd-bsod.service.html)". The name "bsod" is, by the way, a loving homage to Microsoft. In the English-speaking world, the name "Blue Screen of Death" has become established. And that is exactly what the abbreviation "bsod" stands for.

This is what the blue screen under Linux will look like: It is very much based on the idea and layout of the blue screen of Windows 10.

*This is what the blue screen will look like under Linux*

*As a comparison, the blue screen on Windows 10*

Whether and when your distribution will include the service, I can unfortunately not tell you. Systemd is extremely modular, which means that Linux distributions do not have to adopt the service. What can be said with certainty is that a future Red Hat version will probably bring the service - because the request was pushed by Red Hat.

## Conclusion: A new chapter in Linux history - now also in blue!

You could say that with the new systemd-bsod.service, Linux is bringing a little color into its life - and that color is, of all things, blue! It's as if Linux is deciding that it's time for a little fashion revolution. Imagine, Linux, which has so far worked more in the background, suddenly puts on a bright blue jacket and says: "Hey, I can stand out too!"

But don't worry, this stylistic change is more than just a visual update. It's as if Linux is saying: "I've understood you - error messages should not only be understandable for computer gurus." With clear, user-friendly information and helpful QR codes, the blue screen under Linux becomes a real helper in need.

And just think of the irony - for years the blue screen was the symbol of Windows trouble, and now it is presented by Linux in a new light. It is as if an old classic is experiencing a modern revival. True to the motto: *Old ideas, reinterpreted.*
