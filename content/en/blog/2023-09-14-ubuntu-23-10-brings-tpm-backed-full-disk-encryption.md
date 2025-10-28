---
title: "Ubuntu 23.10: brings TPM-backed full disk encryption"
date: "2023-09-14"
excerpt: "For a long time I have been lamenting that the Linux distributions do not use the possibilities of TPM. Now Canonical announces out of the blue to implement FDE (Full-Disk-Encryption) with Ubuntu 23.10 (for now still experimental) in Ubuntu Desktop 23.10. What is FDE? The security of personal and business data is at the center of many technological considerations today. Under Linux, Full Disk Encryption (FDE) offers a solution to protect all data on a hard disk from unauthorized access."
tags: ["Linux", "Encryption", "TPM", "Ubuntu"]
image: "/images/blog/ubuntu-23-10-bringt-tpm-unterstuetzte-festplattenverschluesselung.svg"
---

For a long time, I have been lamenting that Linux distributions do not take advantage of the possibilities of TPM. Now, [Canonical announces out of the blue](https://ubuntu.com/blog/tpm-backed-full-disk-encryption-is-coming-to-ubuntu) that they will implement FDE (Full-Disk-Encryption) with Ubuntu 23.10 (for now still experimental) in Ubuntu Desktop 23.10.

## What is FDE?

The security of personal and business data is at the center of many technological considerations today. Under Linux, full disk encryption (FDE) offers a solution to protect all data on a hard disk from unauthorized access.

In this process, not just individual files or partitions, but the entire hard disk, including the operating system and all system files, are encrypted. When a computer with FDE is started, a password or key must be entered before the boot process. This ensures that no access to the data is possible without the correct authentication.

Tools like LUKS (Linux Unified Key Setup) are widely used in the Linux world to implement such encryption. The result: a significantly increased protection against data loss or theft, even if the physical hardware falls into the wrong hands.

## What is TPM?

TPM stands for "Trusted Platform Module". It is an international standard for a secure crypto-processor that generates keys for hardware-based encryption. A TPM is usually a standalone microcontroller or can be integrated into another chip.

Here are some main features and functions of TPM:

- **Secure key generation:** TPMs can generate cryptographic keys so that these keys never exist in unencrypted form outside the TPM.
- **Hardware storage for keys:** Keys stored in the TPM can be configured so that they cannot be exported. This increases security against key theft.
- **Endorsement Key (EK):** During manufacturing, each TPM is assigned a unique and private RSA key, known as the Endorsement Key.
- **Storing and verifying platform metrics**: TPMs can store and securely verify system metrics to ensure that the system has not been compromised by malware or other malicious changes.
- **Integrity check of the operating system:** With the help of the platform metrics mentioned above, the TPM can ensure at system startup that the operating system and the startup components have not been changed.
- **Encryption functions:** TPMs support various cryptographic functions, including symmetric and asymmetric encryption, hashing and digital signing.
- **Binding and sealing:** These are special functions with which data can be bound or sealed to specific system states. For example, a key can be sealed in such a way that it is only accessible when certain software components are loaded.

## **What is Ubuntu 23.10 doing now?**

Ubuntu has now integrated the option for TPM encryption into the ISO and adapted the Ubuntu installer. This is what it looks like at the moment:

The advantage of the TPM method is that you no longer have to define your own "passphrase", but the key is generated and stored directly in the TPM.

The key is only read from the TPM during booting. This is only possible if the software that wants to use the key has been authorized accordingly by Secure Boot. Therefore, yes, the system can only be used with Secure Boot enabled.

Optionally, you can also configure "Passphrase and TPM". In this case, two keys are required for decryption: one stored in the TPM and the other your own passphrase.

This system is not completely new in the Ubuntu universe. The product "Ubuntu Core" has been offering this possibility for some time. And basically, Canonical is now using the same methods in Ubuntu Desktop as before in Ubuntu Core.

This also means that Snap is mandatory. If you choose to encrypt Ubuntu via TPM, the bootloader and kernel assets will be installed as a Snap.

## Conclusion

The integration of TPM support in Ubuntu 23.10 is a clear step forward towards improved data security and user-friendliness.

The seamless combination of proven security standards with the advanced functions of TPM promises more robust and reliable data encryption. By eliminating the need to set your own passphrase and relying on the hardware-based key generation of the TPM, not only is security increased, but the process of data encryption is also simplified.

With this innovation, Canonical shows that they are committed to always being at the forefront of technological development and to providing their users with the best and most up-to-date security features. For all those who value data protection and security, Ubuntu 23.10 is undoubtedly an interesting update to consider.
