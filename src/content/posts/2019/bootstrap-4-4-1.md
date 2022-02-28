---
author: mdo
date: "2019-11-28T00:00:00Z"
title: Bootstrap 4.4.1
video: 2HuiH-0R6a0
keywords:
  - bootstrap
  - release
---

Today we're shipping [Bootstrap v4.4.1](https://github.com/twbs/bootstrap/releases/tag/v4.4.1)!

In [v4.4.0]({{< relref "/posts/2019/bootstrap-4-4-0" >}}), we added `add()` and `subtract()` functions to avoid errors when using zero values in CSS's built in `calc()` function. While these functions work as expected with our build system, which is based on `node-sass`, some alert developers noticed that [things broke when using another Sass compiler](https://github.com/twbs/bootstrap/issues/29743) like Dart Sass or Ruby Sass. To resolve this issue, we've tweaked these functions a bit to output what we would expect.

Lastly, we also added a [theming fix](https://github.com/twbs/bootstrap/pull/29762) for some custom forms in a disabled fieldset.
