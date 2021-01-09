---
layout: post
title: Bootstrap Icons Alpha 5
video: HgzGwKwLmgM
date: 2020-06-26 21:30:00
author: mdo
---

Today we're shipping our fifth and final alpha release of [Bootstrap Icons](https://icons.getbootstrap.com). After today's alpha release, we'll be moving onto final touch ups of existing icons, closing out some more requests, and buttoning things up for a stable v1 release. Stay tuned!

## 1,000+ icons

This release adds nearly 300 new glyphs, taking us right past 1,000 icons. We've fleshed out all our calendar icons to add ranges and events, added a suite of new phone icons, added tons of new devices and hardware icons, dozens of badges, and so much more.

[![All Bootstrap Icons](/assets/img/2020/06/bootstrap-icons-alpha5-all.png)](https://icons.getbootstrap.com)

As was the case with our previous alpha releases, not only do we have tons of brand new icons, but also dozens of fixes and refinements to existing ones. We've improved our paths to reduce icon file sizes, spending more time making things pixel perfect and with fewer vector hacks in our Figma files. In addition, we've updated our icon processing script to read the `viewBox` dimensions of each SVG individually to set their `width` and `height`. In future updates, this will allow us to create icons of various dimensions instead of our default 16x16.

## New SVG sprite

In addition to hundreds of new icons, we've added a new `bootstrap-icons.svg` sprite. For those new to SVG sprites, it allows you to load a single asset and reference fragments of it across your project without inserting the entire HTML for the SVG.

Here's a quick look at how it works once imported:

```html
<svg class="bi" width="32" height="32" fill="currentColor">
  <use xlink:href="bootstrap-icons.svg#heart-fill"/>
</svg>
<svg class="bi" width="32" height="32" fill="currentColor">
  <use xlink:href="bootstrap-icons.svg#toggles"/>
</svg>
<svg class="bi" width="32" height="32" fill="currentColor">
  <use xlink:href="bootstrap-icons.svg#shop"/>
</svg>
```

We hope to include some optimizations around this in the future as it's our first endeavor into an SVG sprite system. Feedback and ideas are always welcome in our issues!

## Coming in v1 stable

The single biggest feature coming in v1's stable release will be [icon web fonts](https://github.com/twbs/icons/pull/287). There's a PR underway that requires further SVG path cleanup, as well as some tooling improvements. Overall it feels pretty promising!

While icon fonts are great for a handful of implementation reasons, please be aware that they are not inherently the most accessible option for your visitors. SVGs provide more control and styling options, and allow you to be accessible from the start with `aria` roles and `<title>`s.

If you have additional tips for how we can improve our icons, documentation, or tooling to be more accessible and approachable, don't hesitate to share.

Beyond that, we'll continue to clean up and improve existing icons and then aim to add a handful of new icons.

## Download

Alpha 5 has been published to GitHub and npm (package name `bootstrap-icons`). Get your hands on it [from GitHub](https://github.com/twbs/icons/releases), by updating to `v1.0.0-alpha5`, or by snagging the [icons from Figma](https://www.figma.com/file/hTJtQ2MrMTeNVmYrVBqNZZ/Bootstrap-Icons-v1.0.0-alpha5).
