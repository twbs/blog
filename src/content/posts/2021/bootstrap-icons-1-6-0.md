---
author: mdo
date: "2021-10-13T00:00:00Z"
title: Bootstrap Icons v1.6.0
video: sOS9aOIXPEk
---

[Bootstrap Icons v1.6.0](https://icons.getbootstrap.com) adds over 30 new icons, adds official Composer support, includes a new `.scss` stylesheet for the icon font, plus some other enhancements and bug fixes. Keep reading to see what's new!

## 1,400+ icons

We've officially passed 1,400 glyphs in Bootstrap Icons with this release—woohoo! Seems utterly insane to me that the project has come this far and there are still so many more icons to include.

![New icons in v1.6.0](/assets/img/2021/10/v160-new-updated-icons.png)

We have a few dozen new and updated icons in this release, including:

- New brand icons for Apple, Behance, Dribbble, Line, Medium, Microsoft, PayPal, Pinterest, Signal, Snapchat, Spotify, Stack Overflow, Strava, Vimeo, Windows, and WordPress
- Two new easel variations
- New fingerprint icon
- New magic stick
- New people variations for rolodex, workspace, and video chat
- New webcam icons
- New radioactive icon
- New fan icon
- New hypnotize icon
- New yin yang icon
- New activity/pulse icon
- Updated large dash, plus, slash, x, i, ?, !, and check icons to have a thinner stroke that better matches other icons
- Updated lamp icons
- Updated `graph-up` and `graph-down` icons, with the previous ones being renamed to `graph-up-arrow` and `graph-down-arrow`

## New features

We've added a handful of new features and enhancements to how you can use Bootstrap Icons in this release:

- **Added Composer support** with automatic publishing to Packagist. See the [official package](https://packagist.org/packages/twbs/bootstrap-icons) for more information.

- **Added new `bootstrap-icons.scss` stylesheet for the icon font.** This includes font name and path variables, plus a Sass map of icon names and unicode values.

- **Added new `.bi` CSS selector** to the icon font ruleset (in addition to the attribute selectors we had through v1.5.0) to allow for easier `@extend`ing of icon styles. This has also been reflected in the new `.scss` stylesheet.

Our next minor release will continue to see improvements to our icon permalink pages, adding more options for copying and pasting our icons. If you have other suggestions, please don't hesitate to open a new issue!

## Bug fixes

We've fixed a few glitches with existing icons in this release:

- `droplet-fill` now renders correctly thanks to an updated fill rule
- `lamp` and `lamp-fill` now look more like lamps and less like toilets 😅
- `coin` now renders correctly thanks to an updated fill rule
- `cloud` now renders correctly thanks to an updated fill rule
- `textarea-resize` is no longer incorrectly placed in the `viewBox`

Found another bug, or have a suggestion? Check out the issue tracker and open an issue if you don't see one already opened.

## Install

To get started, install or update via npm:

```sh
npm i bootstrap-icons
```

Or Composer:

```sh
composer require twbs/bootstrap-icons
```

You can also [download the release from GitHub](https://github.com/twbs/icons/releases/tag/v1.6.0), or [download just the SVGs and fonts](https://github.com/twbs/icons/releases/download/v1.6.0/bootstrap-icons-1.6.0.zip) (without the rest of the repository files).

## Figma

The Figma file is now published to the Figma Community! It's the same [Bootstrap Icons Figma file](https://www.figma.com/file/cKgRyErzl4pR1WN4NcB5lv/Bootstrap-Icons) you've seen from previous releases, just a little more accessible to those using the app.
