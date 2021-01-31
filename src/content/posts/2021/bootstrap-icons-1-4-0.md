---
author: mdo
date: "2021-02-22T21:30:00Z"
title: Bootstrap Icons v1.4.0
video: A-LMScK5SwU
---

[Bootstrap Icons v1.4.0](https://icons.getbootstrap.com) adds over 60 new icons as part of a brand new weather category. Also included are some long requested improvements to vertical alignment and a handful of updates to tags and categories.

Keep reading for a preview of the new icons and how icon alignment has changed.

## 60+ weather icons

<img src="/assets/img/2021/02/v140-new-icons.png" alt="New icons in v1.4.0" style="border: 1px solid rgba(0,0,0,.15);">

The new weather category includes over 60 icons for various weather and atmospheric conditions. From fog and haze to rainstorms and hurricanes, we now have icons for just about every weather situation. We undoubtedly have some more work to do to refine and add to this new category, but it's a pretty big addition to the project. Let us know what you think and what's missing so we can keep adding to it over time.

## Alignment changes

<img src="/assets/img/2021/02/v140-alignment.png" alt="Alignment changes" style="border: 1px solid rgba(0,0,0,.15);">

Also new in v1.4.0 are some alignment changes—before and after are shown above. Previously we used `vertical-align: text-top` in our CSS to aligning individual icons. This wasn't as much of an issue when we only had SVGs, but with the addition of icon fonts and their generated CSS in v1.2.0, we had to make some changes.

New in this release is a change to `vertical-align: -.125em`. This new alignment is similar to that found in the tried and true [Font Awesome](https://fontawesome.com) project. This change essentially raises icons up about 1px to better vertically center them with nearby text.

It may not be perfect in all implementations, so additional changes might still be needed, but this should give you a stronger baseline to start (pun intended). Should you still run into issues, please don't hesitate to open an issue on GitHub.

## And more...

We've also made several updates under the hood, from dependencies to build tools. This has resulted in improved speeds for our development scripts and more resilient tooling for packaging our icons. We've also included category names into the fuzzy search on the homepage, making it a lot easier to search for groups of icons.

We still have some work to do on our docs and search, so stay tuned as we'll eventually add category pages and more for easier browsing and navigating. If you're reading this and want to help improve the Bootstrap Icons docs, please consider opening a PR anytime.

## Install

To get started, install via npm:

```sh
npm i bootstrap-icons
```

You can also [download the release from GitHub](https://github.com/twbs/icons/releases/tag/v1.4.0), or [download just the SVGs and fonts](https://github.com/twbs/icons/releases/download/v1.4.0/bootstrap-icons-1.4.0.zip) (without the rest of the repository files).

## Figma

For the Figma users out there, you can also snag the [icons from Figma](https://www.figma.com/file/tZZVOiEgKcRUHE3s6o5djB/Bootstrap-Icons-v1.4.0?node-id=0%3A1).
