---
title: "The 'Parasites' and Red Hat Linux"
date: "2023-07-01"
excerpt: "First of all: This article is definitely an opinion piece. Opinions can sometimes be controversial and you are very welcome to have a completely different opinion. But please be friendly in the comments. What happened? For all those who didn't notice. Red Hat Linux will no longer make its package sources publicly available in the future. This announcement has caused a great stir in the open source community."
tags: ["Linux", "Red Hat Linux"]
image: "/images/blog/die-schmarotzer-und-red-hat-linux.png"
---

First of all: *This article is definitely an opinion piece. Opinions can sometimes be controversial and you are very welcome to have a completely different opinion. But please be friendly in the comments.*

## What happened?

For all those who didn't notice. Red Hat Linux will no longer make its package sources publicly available in the future.

This announcement has caused a great stir in the open source community.

## Where is the problem?

Red Hat Linux is the most commercially successful Linux in the world. It is used on numerous servers, has a support period of 10+ years and if you want to use it, you have to pay for it.

Yes, I know you don't pay directly for the Linux but for the support and access to the binary packages - but I want to keep it as simple as possible.

Since the stability of Red Hat Linux is virtually world-renowned and not everyone wants to pay for it. There are various communities that take the source code of the Red Hat packages, change the Red Hat logo and name, and thus build and market their "own Red Hat binary-compatible distributions".

In addition to various community projects, there are also commercial projects such as "Oracle Linux" that do exactly the same thing and also earn money with it.

What are "source code packages" and what is the difference to the source code of a software?

This is where it gets a bit technical. But the knowledge is essential to better understand Red Hat's decision.

Let's start with source code. We in the Linux and open source world are used to the fact that a large part of the software we use has an open source code. You can look at this source code, download it, change it, make your own product out of it, etc.

Basically, Linux distributions do nothing else. They take the source code of various projects (kernel, desktop, office program, etc.), adapt this source code to their needs, compile the whole thing into a package format and offer their distribution on this basis.

Source code packages, however, are a bit more complex. And that is in the nature of "point-release distributions". Let's take Red Hat Linux 8 as an example here. This Linux was released in May 2019 and will receive security updates until May 2031. At release, the Linux kernel was delivered in version 4.18.

However, security updates until May 2031 do not mean that the kernel will now be updated to 4.19 or 4.20 - as soon as the kernel is available.

Security update means the following: When the Linux kernel team releases kernel 4.19, Red Hat employees check the new kernel. In case of security-relevant changes, these changes are backported to the Red Hat 4.18 kernel.

This is done with every new kernel release - so security changes that have been introduced with kernel 6.3 - which was recently released - are also backported to a kernel that is several years old.

This happens not only for the kernel - but for every single package that Red Hat Linux offers via its package sources.

As a Red Hat customer, you always have a system that is as secure as possible and that also remains absolutely "stable". (Stable in this context does not mean that something cannot crash, but that versions, APIs and functions in the operating system do not change over the entire support period).

This backporting for over 10 years for all packages is an "extremely" large amount of work. Especially when there are already 7, 8 or 9 years between the Red Hat release and the new upstream release, you spend hours and sometimes days to backport the security-relevant changes properly.

And these changes can be found in these "source code packages". If you now download the latest 4.18 kernel from Red Hat Linux 8, you can also download the source code package and thus trace step by step where and when which changes and which backports were made.

## Now to the "parasites"

As I have already mentioned, this backporting and adapting of the packages is an extremely large amount of work. At Red Hat, this work is done by people who receive a salary every month.

In other words, this work costs not only time but also money.

And here comes the problem of the "community projects". These community projects do not do this work. They simply take 1:1 the work that was done by Red Hat, change the logo and the name and give it away to everyone who wants it and declare it as their own work.

Even worse is Oracle Linux, which also offers support packages for their Linux. Oracle Linux also aggressively enters into a price war with Red Hat by saying "We are 1:1 binary compatible with Red Hat Linux but cheaper".

However, Oracle can only offer their Linux cheaper because all the work was not done by them but by Red Hat.

Therefore, from a purely economic point of view, I can personally definitely understand Red Hat's decision not to publish these source code packages anymore.

Whoever wants to profit from this great work that is done here by Red Hat - should also pay for it.

## Who generates added value?

Added value is the point that we as a Linux or open source community find most important. Because honestly, neither you nor I profit directly from the backport work of Red Hat - very few of us will use a Red Hat Linux or a Red Hat Linux clone on our private computer.

Nevertheless, the financial well-being of Red Hat Linux should be important to us. They are "the most important sponsor" in the Linux scene at all. On the one hand, it finances a huge number of open source projects directly through money, on the other hand through software developers who are employed by Red Hat - but use their working time completely for an open source project.

### Examples where Red Hat Linux has generated added value:

- **Gnome** would be hardly conceivable without Red Hat. Red Hat is the main sponsor of Gnome and basically finances the entire infrastructure of the Gnome project, countless developers who work on Gnome and its apps, and also the annual Gnome developer conference (GUADEC) with several hundred participants who exchange ideas directly on site about the future of the Gnome project. You don't have to be a Gnome fan to appreciate this work.

The Gnome project also includes things like GTK, without which, for example, the desktops XFCE, Mate, Cinnamon, etc. would not be possible.

- **PulseAudio:** Anyone who has been using Linux for a long time may still know what a mess audio sometimes was under Linux. There were various audio interfaces, every program felt like it used a different one. Sometimes it worked, sometimes it didn't, it was all a mess.

With PulseAudio, Linux got a uniform sound server that already had more functions at release than, for example, the sound server on Mac OS has today.

- PulseAudio was completely financed by RedHat and is probably used in well over 90% of all available Linux distributions today.

- The same applies to **systemd**, the **NetworkManager**, **LibreOffice**, and many, many more.

You can say here that Red Hat Linux definitely generates added value for the open source community.

And here comes the problem of the "parasite" distributions. Whether community or commercial - these distributions do not generate any added value.

Neither do they build their own innovations into their distribution - they are characterized by being a 1:1 copy.

Nor do they work on or finance any upstream projects.

And here comes my conclusion on Red Hat's decision. I can definitely understand economically why Red Hat made this decision. But what is much more important - as a user of free software, I can also support this decision.

Because Red Hat, with the revenue they make from selling their Linux, generates added value for all of us → and I support it if that remains the case in the long term.
