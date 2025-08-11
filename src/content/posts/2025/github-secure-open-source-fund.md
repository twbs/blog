---
author: julien-deramond
date: "2025-08-10T08:40:00Z"
title: GitHub Secure Open Source Fund
keywords:
 - github
 - open source
---

[Mark](https://github.com/mdo) and [Julien](https://github.com/julien-deramond/) recently represented Bootstrap in the second round of the [GitHub Secure Open Source Fund](https://github.blog/open-source/maintainers/securing-the-supply-chain-at-scale-starting-with-71-important-open-source-projects/) this past June. The program is designed to programmatically and financially improve the security and sustainability of open source projects, and we were honored to be a part of it.

GitHub brought together open source maintainers, security experts, and ecosystem partners for an intensive, hands-on learning experience. Throughout three weeks, we had a few days of mixed expert-led presentations, collaborative workshops, and dedicated office hours with security specialists. Between sessions, we had homework: concrete, project-specific actions to immediately strengthen our codebase, workflows, and processes.

As usual, this was done in our spare time, making the pace intense but manageable. Thanks to the flexibility of remote participation, we balanced the program’s demands around our workdays, with sessions either before or after work depending on our time zones.

## What the program covered

The program was organized into three thematic weeks, each combining presentations, workshops, and actionable takeaways. Here’s an overview of the modules we attended:

### Week 1

- Welcome & Program Overview
- Licensing and Security Compliance
- What You Need To Know About Security Advisories
- Security Lab Office Hours
- Secure Code Game
- GitHub Sponsors Success
- Responding to Security Incidents

### Week 2

- Threat Modeling 101
- Secure Your GitHub Actions
- Keeping Users Safe from Malware, Abuse, Fraud, and Online Harms
- Open SSF with David Wheeler
- CodeQL: From Zero to Hero
- Secure by Design: End-to-End Secure UX

### Week 3

- AI/LLM & MCP Security
- Leverage GitHub Copilot to Ship Secure Code
- Fuzzing
- Better Together Closing Session

## What we found most valuable

While every module provided value, a few stood out for Bootstrap focused either on immediate impact or organizational relevance.

Specifically, since our core team is small and changes over time, we need to ensure that security practices are well understood, easily actionable by maintainers remotely and autonomously, and thoroughly documented. One thing we’ll remember is that an Incident Response Plan must be in place before any incident occurs to avoid panic and confusion.

There were also several great takeaways around Threat Modeling, secure GitHub Actions, some GitHub security features, and other tools that we can use to improve our security posture.

But the most valuable part was the community aspect. Engaging with other maintainers, sharing experiences, questions, and solutions, and learning from each other’s challenges and successes was incredibly enriching. It reminded us that we’re not alone in this journey: the Open Source community is a powerful support network.

For those wondering, there were folks from various projects, including [Express.js](https://expressjs.com/), [JUnit](https://junit.org/), [nvm](https://github.com/nvm-sh/nvm), [Oh My Zsh](https://ohmyz.sh/), and many more (53 projects in total).

## How Bootstrap is improving

As a direct result of the program, we implemented immediate security actions:

- Performed a SBOM analysis of our dependencies to identify vulnerabilities.
- Enabled Private Vulnerability Reporting to allow users to report security issues privately.
- Experimented during the session some fuzzing on our codebase to identify potential security issues.

We have started drafting an Incident Response Plan, which we plan to finalize in the coming months, and have initiated discussions around developing a Threat Model for Bootstrap. Since the program, we've also reintegrated the OSS Scorecard into our workflow (for the second time, actually!) to track our security posture and compliance with best practices, and also used sha-1 hashes for the versions of the GitHub Actions we use.

There’s still a lot to do, but we feel more confident in our ability to maintain Bootstrap securely and sustainably. In the coming months, we’ll continue refining our build processes, documentation, and testing to make Bootstrap more secure for everyone who uses it.

## Thank you

A huge thank you to the Funding & Ecosystem Partners who made this program possible, to the GitHub team and security experts for their guidance, and to all the maintainers of the other projects for their insights and camaraderie.

If you maintain an open source project, we highly recommend applying for a future session: it’s an investment that pays dividends in resilience, trust, and peace of mind.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)’ GitHub profiles to help support the maintainers contributing to Bootstrap.
