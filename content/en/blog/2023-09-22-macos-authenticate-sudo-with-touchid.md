---
title: "MacOS: Authenticate 'sudo' with TouchID"
date: "2023-09-22"
excerpt: "Anyone who not only uses Mac OS for graphics or video editing, but also actively works in the terminal, knows how important the terminal is. What is 'sudo'? Whether Linux or MacOS: To execute a command with administration rights, the tool 'sudo' is often used. For example, you can shut down your Mac with the following command: [...]"
tags: ["Apple", "Biometrics", "MacOS", "PAM", "sudo"]
image: "/images/blog/macos-sudo-mit-touchid-authentifizieren.jpg"
---

Anyone who not only uses Mac OS for graphics or video editing, but also actively works in the terminal, knows how important the terminal is.

## What is "sudo"?

Whether Linux or MacOS: To execute a command with administration rights, the tool "sudo" is often used. For example, you can shut down your Mac with the following command:

```zsh
sudo shutdown
```

What's a bit annoying is that you have to enter your user password for every "sudo" command. Although the Macbooks all have TouchID, the fingerprint sensor was unfortunately not set up as a sudo authentication method.

## Set up TouchID for sudo

Fortunately, you can do this setup yourself. I actually wanted to make a whole day project out of it. But then I realized very quickly that this is not necessary at all.

MacOS uses [PAM (Pluggable Authentication Modules)](https://en.wikipedia.org/wiki/Pluggable_Authentication_Modules) to manage authentications. And yes, Linux also uses PAM for the same purpose.

Since I have worked a lot with PAM under Linux in the past and would describe myself as a Linux PAM expert, the configuration under MacOS was actually no longer rocket science.

The PAM used by MacOS is not absolutely identical to the PAM on Linux, but the differences are minimal.

Long story short: You can edit the file "**/etc/pam.d/sudo**" with the text editor nano and have to add the following line there:

```plaintext
auth       sufficient     pam_tid.so
```

Specifically, you open the Terminal app and enter the following command:

```zsh
sudo nano /etc/pam.d/sudo
```

Then you have to enter your password and add the line marked in the screenshot.

### What does this line mean?

- **auth**: This control word specifies the type of module. In this case, it is an authentication module.
- **sufficient**: This control word indicates that if this module is successful, no further modules (if any) in this chain need to be called to consider the authentication successful. However, if it fails, the authentication is not immediately considered failed; it will try to proceed with the next modules.
- **pam_tid.so**: This is the actual PAM module that is called. The **pam_tid.so** module is specific to macOS and is used to support Touch ID authentication.

## Conclusion

The terminal is an essential tool for many Mac users who go beyond mere graphics and video editing. "sudo" offers a powerful way to execute commands with elevated privileges, both on MacOS and on Linux.

Although it is a bit cumbersome at first to constantly enter the password, this step can be made more convenient with the integration of TouchID. Thanks to PAM, which is used by both MacOS and Linux, users can set up Touch ID authentication themselves.
