---
title: "The 'xz backdoor' endangers countless computers worldwide - what we know so far."
date: "2024-03-30"
excerpt: "It always has to be the holidays. In December, there was the 'Log4j' security vulnerability that massively endangered countless servers and computers worldwide. Application developers and system administrators had a stressful Christmas back then. Now they have a stressful Easter. Yesterday it was announced that the 'xz' library contains a backdoor. What is 'xz'? Many of you will be asking: What the hell is xz? Well, xz is a compression format, similar to ZIP or RAR - with the difference that xz is not an archive and always contains only a single compressed file."
tags: ["Linux", "Security", "Linux", "Security Vulnerability", "xz"]
image: "/images/blog/die-xz-hintertuer-gefaehrdet-unzaehlige-computer-weltweit-was-wir-bisher-wissen.webp"
---

It always has to be the holidays. In December, there was the "Log4j" security vulnerability that massively endangered countless servers and computers worldwide.

Application developers and system administrators had a stressful Christmas back then. Now they have a stressful Easter.

Yesterday it was announced that the "xz" library contains a backdoor.

## What is "xz"?

Many of you will be asking: What the hell is xz? Well, xz is a compression format, similar to ZIP or RAR - with the difference that xz is not an archive and always contains only a single file that has been compressed.

### Where is "xz" used everywhere?

That's a bit of the problem with Linux (which is very widespread in the server market) pretty much everywhere. In pretty much all known Linux distributions, the initramfs (or analogous initial file systems) and the kernel are compressed with xz.

RPM and DEB packages (which are used by Debian, Ubuntu, Red Hat, Suse Linux Enterprise, etc.) are also compressed with the algorithm. Therefore, the "xz" compression algorithm is omnipresent in the server and Linux world.

Potentially, macOS users who use the homebrew package manager are also affected.

## I am a Linux user. What do I have to do now?

Here you have to "somewhat" relativize. The backdoor was discovered very early (by pure chance) and the current xz versions with the backdoor have not yet made it into the stable versions of current distributions.

The following distributions are definitely affected:

- Debian (Testing, Unstable and Sid)
- Fedora (40 and Rawhide)
- Kali Linux
- Arch Linux
- and probably many other rolling release distributions

If you use one of these distributions, you should install the current security updates immediately. If there is no security update for the "xz-utils" package for your distribution yet, you should temporarily disable the SSH service.

## What makes the backdoor so exciting?

The exciting thing about this backdoor is how it got into the project. There is currently a lot of speculation as to whether this is the work of secret services or authoritarian states like North Korea or Russia.

I will not speculate here but list the facts that are definitely secured.

It is certain that the implementation of this backdoor was prepared and planned over several years.

The "XZ library" is free software, which means that anyone can submit code and contribute here.

The developer and main maintainer is "Lasse Collin". He developed and maintained (as is usual with open source projects) the entire library in his spare time.

## Small note
Here there are some parallels to the already mentioned Log4j vulnerability. Large companies like Red Hat, Canonical, etc. rely on such libraries simply being there and working. They give the projects almost no support.

A rethink is urgently needed here!

### 2021 - Jia Tan appears

In 2021, a user (Jia Tan) created an account on the developer platform GitHub (a platform on which many software projects are developed).

The first commit that "Jia Tan" made, he did not make in the "xz" project but in the "libarchive" project: [Link to the commit](https://github.com/libarchive/libarchive/pull/1609)

However, this linked commit is already very suspicious. In particular, they open a PR in libarchive: Allegedly, he added an error text to a warning: when unpacking with bsdtar.

However, this commit does a little more than it says. It replaces "safe_fprint" with an insecure variant that may introduce another security vulnerability. The code was included without discussion and was only fixed as part of the found backdoor in the "xz" project.

### 2022 - Jia Tian becomes part of the project team

In 2022, however, it gets exciting with "Jia Tan". He submits a bug fix for the "xz" project. He does this not via GitHub but via the project's mailing list.

The submitted code is harmless, but the subsequent events make the matter exciting. Suddenly, a "Jigar Kumar" appears on the mailing list who puts massive pressure on the main developer "Lasse Collin" to fix the code in the "xz" library as quickly as possible.

"Jigar Kumar" is probably a friend or a double account of "Jia Tan" - he no longer appears after this pressure-making e-mail flood. The conversation on the mailing list can be read here: [Link to the mailing list](https://www.mail-archive.com/xz-devel@tukaani.org/msg00565.html)

After these pressure-attempt e-mails, there must have been a private conversation between "Jia Tan" and "Lasse Collin". It can be assumed that "Jia Tan" offered to take over part of the work of "Lasse Collin" and become a project manager.

We do not know exactly what the conversation looked like. But we do know that just 3 days after this e-mail pressure, the GitHub account of "Jia Tan" became the official maintainer of the "xz-utils" project.

From this point on, "Jia Tian" makes regular code changes and commits to the "xz" project. He became - besides the main developer - the most active developer of the library.

### 2023 - Jia Tian has more and more control in the project

In January 2023, "Jia Tian" was able to execute the first own "merge". This means that he now has the full trust of the main developer - and he can now add code to the project without it being further checked by the main developer.

"OSS-Fuzz" is an automated test system for open source products that tests security and stability. In March 2023, "Jia Tian" managed to have the e-mail address of the xz project (which is stored at OSS-Fuzz) changed to the e-mail address of "Jia Tian". This way, the main developer no longer receives notifications if errors are discovered during the testing there.

Shortly thereafter, a "Hans Jansen" creates a patch for "xz" that seems harmless, but compromises the testing at OSS-Fuzz. "Jia Tian" accepts the patch and merges it into the "xz" project.

Shortly thereafter, Jia Tian creates a patch for the "OSS-Fuzz" project to cover up the problem that exists when testing the xz library. The patch seems harmless and is accepted and integrated by the "OSS-Fuzz" project without discussion.

### 2024 - The attack begins

Over the past few years, "Jia Tan" has carefully prepared everything. He has compromised automated security checks and gained more and more control over the project.

With the harmless-sounding commit "Add a few test files", the backdoor was implemented in the project at the beginning of March 2024.

Do you remember "Hans Jansen"? Since his one-time code contribution, nothing has been heard from him. But suddenly he appears at the Debian project and reports to the Debian team that there is a new version of "xz-utils" and that they should please update it: [Link to the report](https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1067708)

"Jia Tan", on the other hand, put pressure on the Fedora distribution to have the new version included in the repositories there as quickly as possible.

He also tried to get the version with the backdoor into the upcoming Ubuntu 24.04 LTS release. But he didn't manage to do that anymore. More on this [here](https://bugs.launchpad.net/ubuntu/+source/xz-utils/+bug/2059417).

Since the backdoor was found, nothing has been heard from "Jia Tan". The main developer "Lasse Collin" has now taken over full control of the project again and is now working with the help of various security experts to analyze and reverse the damage caused by "Jia Tan".

He has also published a FAQ that explains the current "as-is" state. [To the FAQ](https://tukaani.org/xz-backdoor/).

## Who is Jia Tan?

That is a big mystery. In any case, we can be sure that "Jia Tian" is not the real name of this person (or organization, etc.).

There is some exciting information about him. With certain actions (writing on mailing lists, etc.), you leave digital traces.

For example, "Jia Tian" was on the "LibraChat" IRC server several times and had the IP address: "185.128.24.163". This IP address leads to "Singapore", but not to a "normal" computer but to a server (you can tell by the different ports that are open there). "Jia Tan" probably connected to the internet via a proxy or VPN that ran over this server.

Whether we will ever find out the identity or motivation of "Jia Tian" is still in the stars.

## Conclusion

The incident with "Log4j" and the most recent one with "xz-utils" illustrate not only the potential dangers that can arise from vulnerabilities in widely used software, but also the challenges that application developers and system administrators face, especially during critical times such as the holidays.

The "xz" library, essential for compression in Linux systems and beyond, has become a significant target for attacks due to its wide distribution and the critical nature of the data it processes.

The involvement of "Jia Tan" and the way the backdoor was threaded in over the years raise serious questions about the security and verification of contributions in open source projects. This **underlines** the **need** for increased commitment and support from companies that rely on this software, as well as for improved security checks within the open source community.

In conclusion, the situation sheds light on the critical dependence on the integrity and security of open source software. It emphasizes the need for a rethink in the support and maintenance of such projects in order to prevent similar incidents in the future. The community must work together to strengthen security and intensify efforts to detect and fix vulnerabilities in order to maintain trust in the digital infrastructure.
