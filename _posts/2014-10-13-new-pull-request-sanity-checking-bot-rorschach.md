---
layout: post
title: New pull request sanity checking bot (Rorschach)
---

As the most-starred project on GitHub, Bootstrap gets a **lot** of pull requests. Unfortunately, sometimes there are rookie mistakes in the pull requests that get submitted to us.

To help address this, we've launched a new pull request sanity checker bot: [@twbs-rorschach](https://github.com/twbs-rorschach) ([GitHub repo](https://github.com/twbs/rorschach)), a.k.a. Rorschach

Rorschach automatically gives instant feedback on Bootstrap pull requests that suffer from one of [several simple mistakes](https://github.com/twbs/rorschach#checks-performed), thus decreasing turnaround time on fixing the pull request. The bot also refers the contributor to [new documentation](https://github.com/twbs/rorschach/tree/master/docs) we've written that explains each of the mistakes in detail, along with how to correct them, thus decreasing friction for contributors. Previously, these mistakes were checked for manually, which meant there was often a delay before the mistake was noticed and that pull request reviewers had to manually explain the mistake to the contributor each time.

So hopefully this new bot will help provide a smoother experience for both contributors and reviewers alike.

Happy pull requesting!

<3,

[@cvrebert](https://github.com/cvrebert) and [team](https://github.com/twbs)
