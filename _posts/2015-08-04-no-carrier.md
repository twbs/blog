---
layout: post
title: Introducing No Carrier
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/rog8ou-ZepE?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

Say hello to our newest bot, **No Carrier**. Inspired by the classic modem disconnection error message of yesteryear, No Carrier helps us track issues that appear to have been abandoned by the original poster. Issues that go without a reply to our questions for two weeks are closed with a friendly explanation by No Carrier.

To date, we've handled abandoned issues just like any other issues—with ad-hoc reviews. We felt that could be improved, so we made a bot to automate the process. No Carrier appears on our issue tracker as [@twbs-closer](https://github.com/twbs-closer?tab=activity) and will monitor issues we tag with [`awaiting-reply`](https://github.com/twbs/bootstrap/labels/awaiting%20reply). Should no one reply within two weeks, **@twbs-closer** will post a final comment explaining the situation and our policy, and then automatically close the issue. If someone later replies after the cutoff, a member of our team will happily reopen the issue manually and continue pursuing it.

No Carrier is available for any GitHub project, not just Bootstrap. If you have a project on GitHub that might benefit from this automation, we invite you to try out No Carrier. For more details, usage instructions, and feedback, [check out the No Carrier project on GitHub](https://github.com/twbs/no-carrier). You can download the assembly JAR from the "Downloads" section of [the v1.0.0 release page](https://github.com/twbs/no-carrier/releases/tag/v1.0.0).

<3,

[@cvrebert](https://github.com/cvrebert) & [team](https://github.com/twbs)
