---
author: mdo
date: "2021-01-07T21:30:00Z"
title: Bootstrap Icons v1.3.0
video: a01QQZyl-_I
keywords:
  - icons
  - release
---

Say hello to over 60 new icons with [Bootstrap Icons v1.3.0](https://icons.getbootstrap.com)! We focused our efforts on filling in some holes and expanding some coverage of a few categories. We’re super happy with how the new additions came out and hope y’all love them, too!

As usual, we also snuck in some bug fixes to existing icons and ours docs. After this release, we're back to focusing on shipping updates to Bootstrap v5 and v4. More on that soon, and in the mean time, enjoy the new icons!

## 60+ new icons

![New icons in v1.3.0](/assets/img/2021/01/icons-130-new.png)

Here's a look at the new icons in v1.3.0:

- Added window-dock and window-sidebar
- Added two symmetry icons
- Added new stack icon
- Added two speedometer icons
- Added four save icons
- Added rulers icon
- Added filled variations for phone-vibrate, mouse, mouse2, mouse3, and four hand icons
- Added several border icons
- Added paint bucket
- Added four new badges (3D, AR, VR, WC)
- Added four lightbulb icons
- Added eyedropper
- Added mask icon
- Added three color palette icons
- Added layer-forward and layer-backward
- Added two eraser icons
- Added two megaphone icons
- Added four push pin icons
- Added Whatsapp and Telegram social icons
- Added dotted circle dash, circle plus, square dash, and square plus

Have some ideas for new icons we should consider? Open an issue to tell us about it!

## CDN quickstart with icon fonts

Since we added icon fonts in v1.2.0, it's been possible to use a CDN to deliver and use Bootstrap Icons in seconds. Include the stylesheet, place short HTML snippets where you want icons, and you're done! If you want to include it yourself, here's how.

1. Include the Bootstrap Icons font stylesheet in the `<head>` of your website. Or, use `@import` to include the stylesheet that way.

    ```html
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    ```

    ```css
    /* Option 2: Import via CSS */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    ```

2. Add HTML snippets to include Bootstrap Icons where desired.

    ```html
    <i class="bi-alarm"></i>
    ```

Want to see it in action? We've put together a helpful [CodePen demo for using Bootstrap Icons fonts via CDN](https://codepen.io/emdeoh/pen/NWRzbKM).

_**ProTip:** Most browsers do not allow SVG sprites to be used across domains, which is why having icon fonts (when SVGs are the preferrable and more accessible method of delivering icons) are so useful. Whenever possible, please use SVGs over icon fonts._

## Install

To get started, install via npm:

```sh
npm i bootstrap-icons
```

You can also [download the release from GitHub](https://github.com/twbs/icons/releases/tag/v1.3.0), or [download just the SVGs and fonts](https://github.com/twbs/icons/releases/download/v1.3.0/bootstrap-icons-1.3.0.zip) (without the rest of the repository files).

## Figma

For the Figma users out there, you can also snag the [icons from Figma](https://www.figma.com/file/UuL6jIPhUePmOVttDaQN8h/Bootstrap-Icons-v1.3.0?node-id=0%3A1).
