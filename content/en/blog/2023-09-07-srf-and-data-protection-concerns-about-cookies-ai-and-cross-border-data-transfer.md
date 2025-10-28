---
title: "SRF and data protection: Concerns about cookies, AI and cross-border data transfer"
date: "2023-09-07"
excerpt: "SRF (Schweizer Radio und Fernsehen) is the public broadcasting corporation of Switzerland for the German-speaking part of the country. It is part of the SRG SSR (Swiss Broadcasting Corporation), which operates throughout Switzerland and produces programs in the country's four official languages (German, French, Italian and Romansh). A new data protection law has recently come into force in Switzerland."
tags: ["Data protection", "App", "Cookie", "SRF", "SRG"]
image: "/images/blog/srf-und-datenschutz-bedenken-bezueglich-cookies-ki-und-grenzueberschreitender-datenuebertragung.jpg"
---

SRF (Schweizer Radio und Fernsehen) is the public broadcasting corporation of Switzerland for the German-speaking part of the country. It is part of the SRG SSR (Swiss Broadcasting Corporation), which operates throughout Switzerland and produces programs in the country's four official languages (German, French, Italian and Romansh).

A new data protection law has recently come into force in Switzerland. Many Swiss websites had to make some adjustments and in some cases also set up cookie banners.

## Cookie banner on SRF

Thanks to a [toot on Mastodon](https://mastodon.savvy.ch/@exception/111019147532509987), I became aware that the newly introduced cookie banner at SRF is extremely questionable.

There is no direct way to reject everything, you can only accept all cookies, or then adjust options individually. A classic dark pattern that should not be used like this.

This means that the fee-financed website is clearly working against the interests of its visitors and fee payers.

## Strange data protection

After discovering the cookie banner, I was curious and took a look at the [SRF's privacy policy](https://www.srf.ch/rechtliches-datenschutzerklaerung).

After skimming it, it was clear to me that I had to write about it.

SRF collects a variety of personal data from the users of its online services. This includes master data such as name, address and e-mail address, contract data, communication data, usage data and technical data.

This data is used for various purposes, such as the provision and optimization of their online services, informing users about their programs, conducting research and analysis, legal obligations, protecting their systems and users, and the development and use of artificial intelligence.

## Negligent handling of user data

Swiss Radio and Television (SRF) is a central medium for many in German-speaking Switzerland. As a public broadcasting corporation, it plays a special role in providing information and entertainment to the population.

But with advanced digitization and the integration of new technologies such as artificial intelligence (AI) into their services, new questions and challenges are also emerging in terms of data protection and ethics.

Especially in the context of AI, a technology that is increasingly at the center of debates about data management and security.

### SRF and AI

I was particularly taken aback by the following section of the privacy policy:

**Artificial Intelligence**
We may also use artificial intelligence to process personal data. The processing serves the purpose of learning to better understand and properly use artificial intelligence. We always provide for human control and, of course, pay attention to the protection of your data. We are aware that the use of artificial intelligence in data processing can entail certain risks and uncertainties. Therefore, we have internal guidelines that ensure a legally and ethically responsible handling of AI.

SRF Privacy Policy (as of August 31, 2023)

Here we learn that our personal data is processed with AI systems. Which AI? Which data exactly? What kind of internal guidelines? You don't learn more about that. As a user, you cannot object to this processing of data.

All AI systems on the market today come from US companies and process their data in the USA.

This means that SRF passes on personal data of its visitors to US companies and the data is stored and further evaluated on servers in the USA - and can be used for all sorts of things.

### The visit to the SRF website is analyzed in India

The fact that SRF passes on personal data to the USA and other countries outside the EU/EFTA is also not kept secret.

A few paragraphs after the AI paragraph, you will find the following sentence:

We also pass on personal data to third parties or to processors who are not based in Switzerland or EU/EFTA/EEA countries.

Currently, personal data, in addition to possible transfers to EU/EFTA/EEA countries, is transferred to the following countries: **Australia**, **India** and **USA**.

SRF Privacy Policy (as of August 31, 2023)

Again, it remains a pure mystery which data is evaluated in India or Australia. And basically the question? Why is my personal data processed in India or Australia?
And of course - you cannot object to the transfer of this data to these countries.

## Extreme Wild West with the SRF apps

Anyone who uses the SRF apps makes themselves completely transparent to SRF. This horror section is also in the privacy policy.

Furthermore, in order to provide the services of the app, we require your device identification, the unique number of the end device (IMEI = International Mobile Equipment Identity), the unique number of the network subscriber (IMSI = International Mobile Subscriber Identity), the mobile phone number (MSISDN), the MAC address for WLAN use, the name of your mobile end device and your e-mail address.

SRF Privacy Policy (as of August 31, 2023)

In addition to the online services, SRF also collects a considerable amount of data. According to their privacy policy, various technical information is collected, including the IMEI and IMSI numbers, the MAC address for WLAN use and many others. This collection of data entails considerable risks:

- **Personal identification and tracking**: The combination of IMEI, IMSI, and mobile phone number enables a unique identification and assignment of a user to a specific device. In the wrong hands, this could pave the way for targeted attacks or misuse.
- **Location tracking**: The collection of IMSI and IMEI data can, in conjunction with other data, be used to track a user's location, which significantly affects privacy.
- **Security breaches**: If this data is compromised through a security incident, attackers could gain access to highly sensitive information that could be exploited for criminal activities, such as identity theft.
- **Unauthorized data access**: Should this data, especially MAC addresses, be made available in combination with other information, third parties could potentially infiltrate networks or monitor user activities.
- **Limited control by the user**: By collecting such a variety of data, users are deprived of control over their own information. Even if they do not want to use certain functions of the app, their data could still be collected and processed.

The main question that arises here is: **Is this data collection really necessary?** A large part of this data seems to go beyond what is required for the function of a media app. This extensive data collection entails considerable risks in terms of data protection and security.

## Questions to SRF

UpdateIn the meantime, the answers from SRF have arrived. They can be [read here](https://rueegger.me/2023/09/27/die-antworten-vom-srf/).

When reading the SRF privacy policy, a few questions came to my mind. Specifically, I formulated the following 13 questions and submitted them to SRF after the publication of this article.

As soon as I get an answer here, I will publish it as a follow-up article in the blog.

- **Manipulative cookie banner**: Why was the cookie banner designed in such a way that it directs users in a certain direction instead of offering them a clear and simple choice between consent and rejection? Don't you think that a more transparent approach would strengthen user trust?
- **AI systems**: Which AI systems do you use exactly? Are they in-house developments or do you use third-party systems? If so, which ones?
- **Responsibility for AI decisions**: Who takes responsibility if the AI you use makes wrong decisions or misuses data? How can users challenge such decisions?
- **Data transparency**: Can you specify which personal data is transmitted to countries such as the USA, Australia and India? Which companies or institutions in these countries have access to it?
- **Data access**: Who within SRF and at your partners has access to the collected data?
- **Purpose of app data collection**: For what specific purpose do you need detailed technical information such as IMEI, IMSI and MAC address from users of your apps?
- **Necessity of data**: How do these specific data (IMEI, IMSI, MAC address, etc.) contribute to the functionality or improvement of the app? Are they essential for the operation of the app?
- **Location data**: Is location data also collected by collecting IMSI and IMEI? If so, how is it used?
- **Transparency and education**: How do you inform your app users about the type of data collected and its use? Is there an easy way for users to request a complete list of the data collected by the app?
- **Use of third-party SDKs**: Do your apps use software development kits (SDKs) from third-party providers that may also have access to this technical data?
- **Opt-out option**: Is there a way for users to refuse or opt-out of certain data collections or transfers without having to completely avoid SRF's services?
- **Data minimization**: In view of data economy, a basic principle of data protection: Why do you collect more data than is obviously necessary for the function of your services? Have you considered measures for data minimization?
- **Clarity about third parties**: Can you provide a list of the third-party providers with whom you work, especially those who have access to user data?

## Conclusion

In the age of digital transformation and the exponential growth of data, it is the responsibility of all organizations, especially public and fee-funded institutions such as SRF, to handle their users' data carefully and transparently. It is disappointing to see that SRF, an institution funded by and serving the public, is unable to fully commit to the interests of its users and fee payers, especially with regard to data protection.

The points mentioned regarding cookies, AI and data transfers outside the EU/EFTA, as well as the in-depth information collected by the SRF apps, are worrying. Users should be aware of their digital rights and have the freedom to make informed decisions about the use of their data.

SRF and similar organizations should see this criticism as an opportunity to rethink their practices and improve their data protection measures. At a time when trust and transparency are crucial, protecting user privacy should be at the forefront. It is to be hoped that SRF will take these concerns seriously and play an exemplary role in the area of data protection in the future.
