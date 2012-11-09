---
layout: post
title: Update on the Glyphicons font
---

Earlier this week, I was excited to announce that our next release, 2.2.2-wip, would include the new Glyphicons icon font. In hindsight I got a little carried away and forgot about something.

**IE7 doesn't really do icon fonts.**

I could put together a hack to add IE7 support, duplicating tons of code, but that doesn't feel right as we're dropping IE7 support in BS3. Instead of spending time on something we'll just remove later on, we're going to focus on things that will be here in the next major version.

So, it's with some sadness that I inform you **we will not be including the Glyphicons font in 2.2.2-wip**.

There's some good news though. For you nerds who live on the edge, I've been working on tons of BS3-esque changes in the [exploratory branch on GitHub](https://github.com/twitter/bootstrap/tree/exploratory). If you really cannot wait for the Glyphicons font (and don't mind using unsupported code), do check it out. I plan on accelarating work on it in the coming weeks.

Backwards compatibility is always a pain in the ass, and to avoid huge headaches for folks, we sometimes have to bend over, well, backwards. I hope this doesn't screw up your plans too much and that you understand we have the community's best interests in mind.

Thanks for listening, and as always, <3<3<3.

[@mdo](http://twitter.com/mdo)
