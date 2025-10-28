---
title: "Will Linux distributions become one operating system in the future?"
date: "2023-06-10"
excerpt: "The title might be confusing for many. But I had another long, rather boring meeting and was able to philosophize with myself about Linux in my head again (and yes, I know that sounds crazy, and no, I'm not going to have myself committed to a psychiatric hospital). In any case, I'm now sitting by the lake in Zurich, drinking what is probably the most expensive Coke in the world (0.33L for 7.90 CHF - they're crazy in Zurich 🙄) and it's still far too hot for me to go home, so I'm writing down my thoughts - perhaps as a basis for discussion - on digital paper."
tags: ["Linux"]
image: "/images/blog/werden-linux-distributionen-zukuenftig-zu-einem-betriebssystemen.jpg"
---

The title might be confusing for many. But I had another long, rather boring meeting and was able to philosophize with myself about Linux in my head again (and yes, I know that sounds crazy, and no, I'm not going to have myself committed to a psychiatric hospital).

In any case, I'm now sitting by the lake in Zurich, drinking what is probably the most expensive Coke in the world (0.33L for 7.90 CHF - they're crazy in Zurich 🙄) and it's still far too hot for me to go home, so I'm writing down my thoughts - perhaps as a basis for discussion - on digital paper.

In its current state, I would say that Ubuntu, Fedora, etc. are not "operating systems in the classic sense". If we look at other operating systems, e.g. Windows, Mac OS or even Android, Linux works completely differently. With Windows (and co), the operating system is basically a base system. I have a desktop, a calculator, a few sysadmin tools and that's about it.

Everything else, i.e. what we use our computer for. For example, graphics editing software or a BluRay player are application programs that we download and install from third-party providers.

Especially with mobile operating systems like Android, iPhone or iPad OS, we see this separation between "system and applications" very well. As a user, you don't even have direct access to the "system" (without any hacks), but can actually only manage and work with your application programs.

With Linux, it's different. System and application programs have so far been "merged" into a single unit. You got everything from your Linux provider, everything basically had the same source. Which is probably also a reason why we don't call Ubuntu, Fedora & Co "Linux operating systems" but "Linux distributions".

The developers behind these distributions don't make "an" operating system, but simply package a more or less complete software collection.

Perhaps that's also a reason why I find the distributions quite boring these days. Whether it's Fedora, Ubuntu or e.g. ArchLinux, in the end it's always the same. It's the Linux kernel, Grub, it's systemd, it's Wayland/X11, it's the same graphics driver, each with its preferred desktop environment and then also the same programs.

For the normal end user, it doesn't really matter in the end whether he gets Gnome 44 a few months later or earlier. I have now moved my entire Linux machine park from Fedora to Ubuntu. To be honest, in everyday life I wouldn't even notice that I had done it - the thing operates exactly the same here as before.

The folder icons look a little different - who cares?

We now have an extremely wide variety of distributions - and in the end we can see that all (with very few exceptions) do the same thing: Linux kernel, Grub, systemd, Wayland/X11, Firefox, LibreOffice, etc...

But with the big steps towards immutable systems, the distributions (that go this way) will in my opinion have to lead the discussions again "What is an operating system", "What is a basic package". The projects like Fedora Silverblue are currently still "Immutable Light" distributions. As a user, I can still add any RPM packages to my base system via rpm-ostree.

But at some point, the path will go towards real "immutable" systems. Where you just get an unchangeable "base system" that you can't really customize anymore - quasi an Android.

And this is where there should be exciting discussions. What belongs in such a base system? Does it need a media player? Does it need an e-mail client or a browser? Does it still need support for floppy disk drives or audio CDs? etc.

To a certain extent, you can see many such discussions with Fedora Kinoite (immutable Fedora system with the KDE Plasma Desktop). The project is a bit younger than the Silverblue project and is currently changing its base system back and forth quite a bit. Why they do that, and what the discussions were in each case, can be tracked here: [https://pagure.io/fedora-kde/SIG/issues?status=Closed](https://pagure.io/fedora-kde/SIG/issues?status=Closed)

As an example here, when someone wanted to have "inxi" in the default image, but it was rejected: [https://pagure.io/fedora-kde/SIG/issue/339](https://pagure.io/fedora-kde/SIG/issue/339)

And I think all these discussions - which every distribution has to have for itself. Can bring some fresh air into "Linux for Desktop". Distributions could differentiate themselves a bit more and really set themselves apart from each other.

What do you think about it? What should be the base system? What should be available as apps? How do you rate the topic?

In any case, I'm going to order a new, far too expensive Coke for now.
