---
title: "Proton Pass in-depth review"
date: "2023-08-06"
excerpt: "Proton Pass was released about a month ago, I have tested the password manager extensively and also compared it with 1Password. Quick conclusion in advance: Proton Pass does a lot of things right, but currently has very annoying quirks. Why do I need a password manager and how does the test work? I work as a web developer and often use different browsers during work to test whether something that works in Firefox, for example, also works in Google Chrome or Microsoft Edge."
tags: ["Password Manager", "Reviews", "1Password", "App", "Browser", "iPad", "iPhone", "Proton Pass"]
image: "/images/blog/proton-pass-im-ausfuehrlichen-test.jpg"
---

Proton Pass was released about a month ago, I have tested the password manager extensively and also compared it with 1Password. Quick conclusion in advance:

Proton Pass does a lot of things right, but currently has very annoying quirks.

## Why do I need a password manager and how does the test work?

I work as a web developer and often use different browsers during work to test whether something that works in Firefox, for example, also works in Google Chrome or Microsoft Edge.

Therefore, it is important for me that I always have all passwords ready for access in every browser. I also work across platforms → which means the password manager must also work on Windows, Mac OS, on the iPad and the iPhone.

I will divide this test into two categories, on the one hand for "desktop" use on Linux, Windows, Mac OS and for mobile devices iPhone/iPad. I could not test the password manager on Android, as I have never owned an Android device.

Since Proton Pass is only available as a browser extension on the desktop, I will not break down the test individually on Linux, Windows and Mac - as it works identically on all platforms. I mainly used the password manager in Firefox. However, I could not find any functional differences between the Firefox or Chromium addon.

In addition, I will mainly draw comparisons with 1Password here. Since 1Password is the password manager that I have been using for several years and for me it is the benchmark, especially for the convenience functions.

## Proton Pass for the desktop - setup and import

Proton Pass for the desktop is, as already mentioned, a browser extension. You can easily install it via the browser addon stores. Please note that on Safari on the Mac, you have to install the extensions via the Mac App Store.

After installation, you have to log in with your Proton account. If you don't have one, you can create the account for free.

The password manager can also be tested in a free version. If you are already a paying Proton customer, you can use the password manager with its full range of functions at no extra charge.

After logging in, you can import your data from your previous password manager. The following are currently supported:

- 1Password
- Bitwarden
- Dashlane
- KeePass and KeePassXC
- Keeper
- LastPass
- Password storage from Chrome, Firefox, Edge, Brave and Safari browsers

I have only tested the import from 1Password here and can say that it worked without any problems. I have about 1300 objects stored in the password manager, including many logins for websites, notes (where we store e.g. documentation of individual servers, such as SSH access data, which ports are used for which service, etc.), credit card data, and 2FA codes.

The import of all data worked perfectly. Whether credit card data, notes, logins or the 2FA codes, everything was available in Proton Pass within seconds.

## Proton Pass for the desktop

### Handling

In theory, Proton Pass supports all important functions. You can call up a login page directly via the addon and the data is filled in directly. If you call up a page manually and there is a saved login, it is filled in automatically.

If you log in somewhere without using the password manager and there is no password stored there, the password manager directly offers to save the password.

If you want to register somewhere, Proton Pass creates a randomly generated password and fills it in directly in the password field.

In addition, you have the option to create a fake e-mail address with one click. This then creates an e-mail address that looks like this, for example: [p8aiw@passmail.net](mailto:p8aiw@passmail.net) E-mails to this address are then forwarded directly to your normal e-mail address.

This means that the website provider never has your real e-mail address and if the database or something similar should fall into the wrong hands, you can simply remove this forwarding again and are not a victim of spam mails. In practice, you have a different e-mail address for every account you create on the internet with a randomly generated password. Of course, you can also use your real e-mail address.

But I'm already predicting that Proton will have to secure a few more domains here, and many providers (especially e.g. streaming services that offer the first 30 days for free) will sooner or later block the e-mail extension "passmail.net".

Here is an example of what this would look like when registering in the [LinuxGuides Forum](https://forum.linuxguides.de):

In practice, however, I noticed two very serious problems with the handling. Proton Pass is not nearly as good as 1Password at recognizing login fields. Among others, on Reddit (but also many other sites), the extension does not recognize the login form and does not fill in the password automatically. I noticed this regularly and, as a rough estimate, I would say that the login form is not recognized on about 8 out of 10 websites.

This is a problem I never had with 1Password, it always recognized all login fields perfectly. Proton Pass also sometimes has problems with logins "over several steps". For example, with Google or Microsoft, you only enter your e-mail address in the first step and only then does the password field appear. With Google, Proton Pass can handle this and fills in the password automatically in the second step, for example, but with Microsoft you have to insert the password manually.

I think that 1Password - because they have been on the market longer - had more time to manually enter certain login processes such as Reddit or Microsoft in the code. And many of these site-specific adjustments are simply still missing from Proton Pass.

### The curse of the 2FA codes

Although Proton Pass advertises the function on the website, the automatic insertion of 2FA codes does not work for me at all. Nowhere - no matter which website, no matter which browser, no matter which operating system. This is terribly unfortunate and honestly also quite annoying and I really hope they get it fixed quickly.

### Other things about Proton Pass

For people who have problems with English, Proton Pass is definitely not recommended. The addon is currently only available in English, but the translation is being worked on.

Another negative thing I noticed was the missing "light mode". The design of the app is kept completely dark. For me, (without exception, all devices) are set up so that they have the light mode activated during the day and automatically switch to dark mode at sunset.

Since I often work outside or on the go and we had some very sunny days last month, I often noticed that I simply couldn't see anything in Proton Pass in its dark mode. It was really frustrating.

Here is a picture of the "permanent dark mode" in strong sunlight with devices that sometimes only have 300 nits of screen brightness, often nothing can be seen.

## Proton Pass on the iPhone and iPad

On the iPhone and iPad, Proton Pass is available as an app in the App Store. There, too, you have to log in with your Proton account.

Importing passwords from other apps does not work via the app, but only in the browser extension on the desktop.

On the iPhone, I had absolutely no problems with the recognition of password fields. However, this is less due to Proton Pass and more to Apple.

For all those who do not own an iPhone, here is a brief explanation. Apple has an operating system-wide API for recognizing login and registration fields in apps and websites.

In the system settings, you can select which app you want to use as a password manager - then the data is pulled from the correspondingly selected app and filled in when a login field is recognized. This worked perfectly with 1Password and also worked with Proton Pass.

So if you go to reddit.com with a browser on the iPhone, the login field is recognized by Apple without any problems. Proton Pass checks whether there is login data for "reddit.com", if so, it is filled in.

### The even stronger curse of the 2FA codes

The 2FA codes were already annoying on the desktop. But on the iPhone, it takes on much worse forms. Apple also has a similar API for 2FA codes, as I described earlier. Where you can select in the system settings which app you use for 2FA code management and thus offer automatic filling system-wide.

This also always worked absolutely without problems under 1Password. With Proton Pass, it doesn't work at all. You can't even select the app for it.

This means that if I want to log in to the forum here on the iPhone, for example, the first login step (username and password) is automatically filled in and works perfectly. Then I am asked for the 2FA code by the forum.

Then I have to minimize the browser app on the iPhone, open the Proton Pass app manually, authenticate myself via FaceID. Search for "linuxguides" in the app. Open the entry and manually copy the 2FA code there. Only to then open the browser again and insert it there manually. This is extremely annoying, time-consuming and totally unnecessary.

## Technical details about Proton Pass

The Proton Pass extension and iOS/Android apps are open source. The source code can be found on [GitHub](https://github.com/protonpass). The contents of the password manager (i.e. usernames, passwords, website addresses, credit card data, etc.) are completely end-to-end encrypted via a "zero-trust model".

Here, Proton Pass has an advantage over 1Password, as with 1Password only the passwords, but not the other data, are encrypted. So in theory, 1Password knows on which websites you have a login, Proton does not have this information.

Like all Proton services (Mail, Calendar, Drive, etc.), Proton Pass received a "security audit" from a third-party company. Such security audits get access to the complete source code and are paid to look for loopholes or other security problems.

The audit was carried out by the company Cure53 in Berlin. They tested the browser addons, the iPhone app as well as the Android app and the backend through various tests. The audit report is [public](https://res.cloudinary.com/dbulfrlrz/images/v1689754709/wp/Cure53-proton-pass-20230717_41141c8436/Cure53-proton-pass-20230717_41141c8436.pdf?_i=AA), and if you want to use Proton Pass on Android, it is certainly worth a look. Since there is a security vulnerability classified as "medium" that cannot be fixed due to the limitations of Android.

## Download Proton Pass

### Downloads

[Download](https://addons.mozilla.org/de/firefox/addon/proton-pass/)
QR-Code

[Proton Pass](https://addons.mozilla.org/de/firefox/addon/proton-pass/)

Developer:
[Proton](https://addons.mozilla.org/de/firefox/user/17877165/)

Price:
Free

[Download](https://chromewebstore.google.com/detail/proton-pass-free-password/ghmbeldphafepmbegfdlkpapadhbakde)
QR-Code

[Proton Pass: Free Password Manager - Chrome Web Store](https://chromewebstore.google.com/detail/proton-pass-free-password/ghmbeldphafepmbegfdlkpapadhbakde)

Developer:
[Unknown](https://chromewebstore.google.com/detail/proton-pass-free-password/ghmbeldphafepmbegfdlkpapadhbakde)

Price:
Free

[Download](https://apps.apple.com/ch/app/passwort-manager-proton-pass/id6443490629)
QR-Code

[‎Password manager - Proton Pass](https://apps.apple.com/ch/app/passwort-manager-proton-pass/id6443490629)

Developer:
[Proton AG](https://apps.apple.com/ch/developer/proton-ag/id979659484)

Price:
Free+

## Conclusion

The overall conclusion is mixed. I have now extended my 1Password subscription for another year and am now running 1Password and Proton Pass in parallel.

What I really like about Proton Pass is the integrated "Passmail.net" service to automatically create some fake e-mail addresses for new accounts. The whole thing works very well, is not complicated and is simply done with one click.

When creating new accounts on websites and automatically saving this data, Proton Pass is better than 1Password for me (mainly because of the Passmail service).

When filling in login data, however, 1Password is noticeably the better application. Proton Pass often does not recognize login fields and filling in 2FA codes does not work at all.

The general handling is also more pleasant with 1Password on the desktop, as you can also authenticate there with biometric data such as fingerprint or IR face scan. This possibility is (still) missing from Proton Pass. This is not due to the technical limitation that Proton Pass is only available as a web addon. Since there would be a web standard for biometric authentication with the "Web Authentication API" (even if Firefox unfortunately does not support it yet).

The integrated SSH agent that you have with 1Password is also missing. This means that with 1Password I can also store all my SSH keys.

If I then connect to a server in the terminal, e.g. via "ssh user@host", the corresponding key is used directly from 1Password. So you always have all your SSH keys available on all computers.

I am sure that Proton Pass will get the problems with unrecognized password fields and the 2FA codes under control. If someone is looking for a new password manager today and can do without the SSH integration, Proton Pass is certainly worth a look - also because Proton currently costs about 2/3 less than 1Password - or is free for existing Proton customers.

My hope that I can completely save the costs for 1Password and switch completely to Proton Pass has unfortunately not (yet) been fulfilled.
