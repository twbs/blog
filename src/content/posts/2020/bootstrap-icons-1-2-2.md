---
author: mdo
date: "2020-12-23T21:30:00Z"
title: Bootstrap Icons v1.2.2
video: hFDcoX7s6rE
keywords:
  - icons
  - release
---

We’re ironing out the kinks in our new font files with Bootstrap Icons v1.2.2! We went back to the Figma file and ironed out all the fill-rule details to ensure our SVGs translated into font files properly.

We also snuck in a few bug fixes to existing icons, docs, and some slight visual improvements to some existing icons. Get the details below!

## Font files

Our icons fonts are (fingers crossed!) free of visual glitches that made so many unusable across Windows devices. For some reason macOS and iOS had no problems, but Windows butchered the font files. Turns out this was a result of inconsistent [fill-rule](https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/fill-rule) values in our icons, and some font formats and renderers only support a `non-zero` fill rule. We revisited nearly every icon and got it all sorted out.

![Icon fonts](/assets/img/2020/12/icons-font-index.png)

Massive shoutout to the [Figma Fill Rule Editor plugin](https://www.figma.com/community/plugin/771155994770327940) that made this relatively quick and painless to update. _You can even see in the plugin's image below how this rule affects rendering of SVGs._

[![Figma Fill Rule Editor plugin](/assets/img/2020/12/figma-fill-rule-editor.png)](https://www.figma.com/community/plugin/771155994770327940)

[Check out the PR](https://github.com/twbs/icons/pull/552) for what's changed under the hood.

## Updated icons

![Revised icons](/assets/img/2020/12/icons-realigned.png)

A few icons got touched up with the work for our font files to clean up paths and make them more visually pleasing.

- Locks are a little more legible—they’re taller and narrower.
- Laptops now have a half pixel gap between their base and screen, making them look a little sleeker.
- Shields are 1px taller now, with their inner icons now raised 1px as well. No reason to make them not take up the full viewBox.
- Stopwatch icons look more like actual stopwatches with separate start/stop and lap buttons.
- The bricks icon has its missing grout line restored.
- Renamed patch fill icons to fix typos in their file names (`fll` to `fill`).

Have some other refinements we should consider? Open an issue to tell us about it.

Last but not least, we ironed out some docs issues. Our navbar is fully functional and inline with the v5 beta site. We also added [new aliases](https://github.com/twbs/icons/pull/561) for icon filtering on homepage.

## Install

To get started, install via npm:

```sh
npm i bootstrap-icons
```

You can also [download the release from GitHub](https://github.com/twbs/icons/releases/tag/v1.2.2), or [download just the SVGs and fonts](https://github.com/twbs/icons/releases/download/v1.2.2/bootstrap-icons-1.2.2.zip) (without the rest of the repository files).

## Figma

For the Figma users out there, you can also snag the [icons from Figma](https://www.figma.com/file/0fjzjlmwMsHJ0Mgj51j444/Bootstrap-Icons-v1.2.2?node-id=0%3A1).
