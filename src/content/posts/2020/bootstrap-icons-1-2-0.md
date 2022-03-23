---
author: mdo
date: "2020-12-11T21:30:00Z"
title: Bootstrap Icons v1.2.0
video: rY0WxgSXdEE
keywords:
  - icons
  - release
---

Our latest Bootstrap Icons release includes dozens of new icons, redesigned documentation, and the most highly requested new feature—icon fonts!

## New social icons

We're starting slow with social icons—just a handful of the biggest sites and networks folks are likely to need. We'll keep this list purposefully small as the intent isn't for full coverage. We'll aim to add a few over time, but this should suffice for the time being!

![Social icons](/assets/img/2020/12/icons-social.png)

## New media icons

The other main addition is our extended suite of media icons. We had folks ask for more options when it came to media controls, as well as different media types, so we're getting the ball rolling with this update.

![Media icons](/assets/img/2020/12/icons-media.png)

## Icon fonts!

Finally, they're here! We're now generating web fonts for our icons thanks to a wonderful project, [Fantasticon](https://github.com/tancredi/fantasticon). To start, we're generating two web font formats—`.woff` and `.woff2`. We're also including an HTML index of all icons in web font format, powered by a generated CSS file.

![Web fonts index](/assets/img/2020/12/icons-font-index.png)

This is our first foray into icon fonts, and we're likely to make some tweaks along the way. Help us iron out any kinks by testing the fonts yourself and sharing any feedback in an issue.

## Refreshed docs

[![New Icons homepage](/assets/img/2020/12/icons-docs-homepage.png)](https://icons.getbootstrap.com)

The [homepage for Bootstrap Icons](https://icons.getbootstrap.com) has a new look thanks to an updated hero. The new hero features a new colorful icon image, clearer project description, and an upfront `npm i` snippet to help folks get started faster. A new notice at the top links to the blog post to tell folks what's new, too.

[![New Icons permalink](/assets/img/2020/12/icons-docs-permalink.png)](https://icons.getbootstrap.com/icons/disc/)

[Individual icon permalink pages](https://icons.getbootstrap.com/icons/disc/) have also been refreshed and greatly simplified. We've reduced the main example down to one instance of the icon, and expanded the examples below it to include the icon in more Bootstrap components.

The new permalink sidebar also features new and improved access to the icons. Need just an SVG or two? Use the new `Download SVG` button. Looking for the HTML for the new icon fonts? Just copy-paste. And as always, want the raw SVG HTML? That's still there, too.

## Install

To get started, install via npm:

```sh
npm i bootstrap-icons
```

You can also [download the release from GitHub](https://github.com/twbs/icons/releases/tag/v1.2.0), or [download just the SVGs and fonts](https://github.com/twbs/icons/releases/download/v1.2.0/bootstrap-icons-1.2.0.zip) (without the rest of the repository files).

## Figma

For the Figma users out there, you can also snag the [icons from Figma](https://www.figma.com/file/JeBqM2fRcfIe7wMDgNZG6d/Bootstrap-Icons-v1.2.0?node-id=0%3A1).
