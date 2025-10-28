---
title: "Unleash Linux: Experience limitlessness with Distrobox"
date: "2023-11-22"
excerpt: "What is Distrobox? Distrobox is a tool that allows you to run different Linux distributions within your current Linux system without needing a virtual machine. It uses the technology of Linux containers, but is designed to offer more user-friendliness and flexibility. Distrobox works in combination with Docker, podman and also lilipod. Basically, you can think of Distrobox a bit like the Windows Subsystem for Linux (WSL)."
tags: ["Linux", "Distrobox", "Gnome", "Visual Studio Code"]
image: "/images/blog/entfessle-linux-mit-distrobox-grenzenlosigkeit-erleben.jpg"
---

## What is Distrobox?

Distrobox is a tool that allows you to run different Linux distributions within your current Linux system without needing a virtual machine. It uses the technology of Linux containers, but is designed to offer more user-friendliness and flexibility. Distrobox works in combination with Docker, podman and also lilipod.

Basically, you can think of Distrobox a bit like the Windows Subsystem for Linux (WSL).

## What are the advantages of Distrobox over a virtual machine?

**Integration**
Distrobox integrates seamlessly into your existing system. You can access files on your main system and run programs as if they were part of your main operating system.

**Resource efficiency**
Distrobox is more resource-efficient than a full virtual machine because it uses container technology. So you can easily run multiple distributions at the same time without needing a high-end processor with extensive memory.

**User-friendly**
Distrobox is a command line program. But its use is very simple and you don't need to have any knowledge of container technology. Distrobox does all the magic itself in the background.

But hey. Who wants to read theoretical "blah blah" here. Let's look at a real-life example. I'm currently experimenting with [openSUSE Micro OS](https://microos.opensuse.org/) or with [openSUSE Aeon](https://en.opensuse.org/Portal:Aeon) (the Gnome variant of Micro OS).
This is an immutable system. This means you only have a kernel, GNU tools, Gnome installed as a read-only snapshot (which, by the way, also updates automatically).

If you want to install applications. So e.g. browser, office, calculator etc. you are dependent on Flatpak (is pre-configured).

Now there is also a lot of software that is not available as a Flatpak. And there is software that you don't necessarily want to use as a Flatpak (e.g. Visual Studio Code).

My plan is as follows. I will create an Ubuntu Distrobox, install Visual Studio Code as a DEB package there. And make Visual Studio Code available in my openSUSE host system.

## Getting started with Distrobox

Under openSUSE Aeon, distrobox is already pre-installed. This will not be the case with most distributions.
If Distrobox is not available in your package sources, you can install Distrobox as described [here](https://github.com/89luca89/distrobox#installation).
Once Distrobox is installed, we now start with the terminal.

As a first step, we load an Ubuntu LTS. All available distributions and versions that can be loaded can be found here: [https://distrobox.it/compatibility/#containers-distros](https://distrobox.it/compatibility/#containers-distros)

Our Ubuntu is created quickly. The following command downloads an Ubuntu 22.04 container and creates it under the name "Ubuntu".

```bash
distrobox-create --image ubuntu:22.04 --name Ubuntu
```

With "distrobox enter Ubuntu" we log into Ubuntu.

Then a few more settings are set (automatically) and we are in an Ubuntu shell. In this shell we can do everything that can be done with Ubuntu. For example, install neofetch via apt:

To do this, we simply enter the corresponding command:

```bash
sudo apt install neofetch
```

And can then execute neofetch.

Since this Distrobox-Ubuntu is a container. We have access to the normal file system and can now download the DEB file of Visual Studio Code via the host system our openSUSE.
Then we navigate with cd Downloads/ to our download folder and install Visual Studio Code via apt.

Now we have installed Visual Studio Code in our container. After the installation, we still have to export the program to our openSUSE host system.

For this we use the following command:

```bash
distrobox-export --app code
```

This command now creates a .desktop file under openSUSE with which you can open the program directly. The file is created in such a way that it is visible in the App Grid that Visual Studio Code is running in an Ubuntu container.

We can now leave the container in the terminal via "exit".

## Endless possibilities

With Distrobox you basically have endless possibilities and can install pretty much anything you want. You can only find a software in the AUR? No problem with Distrobox, just create an ArchLinux container -> install the AUR package and the problem is solved.

There is only a Fedora package for a software? Also no problem, just install a Fedora container and install the software.

Distrobox is still a relatively unknown but already very powerful tool. That will probably play an ever-increasing role in our Linux everyday life with the increasing spread of immutable systems.
