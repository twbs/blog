---
author: cvrebert
date: "2014-09-23T00:00:00Z"
title: Introducing Bootlint
video: 010KyIQjkTk
---

After hanging out on the Bootstrap issue tracker for a long time, you start to notice some common mistakes folks make (besides [just plain invalid HTML]({{< relref "/posts/2014/lmvtfy" >}})). Many of them are covered in our documentation, but our docs can be lengthy and some of the mistakes are pretty subtle or have non-obvious causes.

Pointing out the same mistakes repeatedly gets tiring, so once again, we decided to try automating things. The result of our efforts is **[Bootlint](https://github.com/twbs/bootlint)**, an HTML [linting](https://en.wikipedia.org/wiki/Lint_%28software%29) tool for projects using vanilla Bootstrap. Using Bootlint (either [in-browser](https://github.com/twbs/bootlint#in-the-browser) or [from the command line via Node.js](https://github.com/twbs/bootlint#on-the-command-line)), you can automatically check your Bootstrapped webpages for many common Bootstrap usage mistakes.

We encourage you to add Bootlint to your web development toolchain so that none of the common mistakes slow down your project's development. In the future, we hope to also make a GitHub issues bot based on Bootlint to help folks out on the Bootstrap issue tracker.

For more details, installation & usage instructions, or to contribute or give feedback, [check out the Bootlint project on GitHub!](https://github.com/twbs/bootlint)
