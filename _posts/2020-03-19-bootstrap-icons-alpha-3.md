---
layout: post
title: Bootstrap Icons Alpha 3
video: kijpcUv-b8M
---

While we continue to work on Bootstrap 5, I've been jamming away on the Bootstrap Icons library, continuing to create as many icons as time allows. Today marks the third alpha, and massive update to the project. We've officially crossed 500 icons!

We've cleaned up existing icons, created new permalink pages for each and every icon, and added hundreds of new icons—all in one release.

## 500+ icons!

I've added 221 new icons in our third alpha, the most ever in an alpha release thus far. And while I was drawing all these new awesome icons, I also cleaned up the existing ones by changing their `viewBox` size and redrew many to ensure more pixel perfect icons.

![All Bootstrap Icons](/assets/img/2020/03/bootstrap-icons-alpha3-all.png)

Why change the `viewBox`? In the first two alphas, I was drawing icons on 20x20 artboards in Figma. This seemed like a good idea, but every icon was roughly 16x16, so it ended up being dead space. Now, every icon has been updated to eliminate the 2px inner padding, making the `viewBox`s `0 0 16 16` instead of `0 0 20 20`.

This change has some slight file size improvements, and should help with sizing and positioning as well.

## Permalink pages

Looking for a particular icon, but don't want to download the entire project to snag the SVG source code? Need to send someone a link to an icon? Look no further than the new icon permalink pages!

From the Bootstrap Icons homepage, click any icon and you'll be taken to a page dedicated to just that icon. It features the icon in various sizes and renders the source code like you're used to seeing in Bootstrap's docs.

![Bootstrap Icons permalink](/assets/img/2020/03/bootstrap-icons-alpha3-permalink.png)

Since this is still an alpha, some features are still missing from our docs. This includes unlinked tags, no category listing, and no copy to clipboard. I hope to see those added before our stable v1.0.0 release. PRs are very much welcome if you'd like to contribute!

## Download

Alpha 3 has been published to GitHub and npm (package name `bootstrap-icons`). Get your hands on it [from GitHub](https://github.com/twbs/icons/releases), by updating to `v1.0.0-alpha3`, or by snagging the [icons from Figma](https://www.figma.com/file/NKZWcfR2T3FU0I7fNLqFvI/Bootstrap-Icons-v1.0.0-alpha3).

<3,<br>

[@mdo](https://github.com/mdo) & [team](https://github.com/twbs)
