---
layout: post
title: Bootstrap 4 Beta
video: aQUlA8Hcv4s
---

[Two years in the making](/2015/08/19/bootstrap-4-alpha/), we finally have our first beta release of Bootstrap 4. In that time, we've broken all the things at least twenty-seven times over with nearly 5,000 commits, 650+ files changed, 67,000 lines added, and 82,000 lines deleted. We also shipped six major alpha releases, a trio of official Themes, and even a job board for good measure. Put simply? [It's about time.](https://www.youtube.com/watch?v=_J6-3l3hCm0)

## Beta!?

Long story short, shipping a beta means we're done breaking all your stuff until our next major version (v5). We're not perfect, but we'll be doing our best to keep all the classes, features, and docs URLs as they appear now in this release. We can always add more things, but we cannot take away.

For those who haven't been using the v4 alpha releases, here are some highlights to get you caught up.

- **Moved from Less to Sass.** Bootstrap now compiles faster than ever thanks to Libsass, and we join an increasingly large community of Sass developers.
- **Flexbox and an improved grid system.** We've moved nearly everything to flexbox, added a new grid tier to better target mobile devices, and completely overhauled our source Sass with better variables, mixins, and now maps, too.
- **Dropped wells, thumbnails, and panels for cards.** [Cards](https://getbootstrap.com/docs/4.0/components/card/) are a brand new component to Bootstrap, but they'll feel super familiar as they do nearly everything wells, thumbnails, and panels did, only better.
- **Forked Normalize.css and consolidated all our HTML resets into a new CSS module, Reboot.** Normalize.css has taken a different path than we'd prefer, dropping some core CSS tweaks we've long depended upon. Reboot takes the core of Normalize.css and expands it to include more opinionated resets like `box-sizing: border-box`, margin tweaks, and more all in a single Sass file.
- **Brand new customization options.** Instead of relegating style embellishments like gradients, transitions, shadows, grid classes, and more to a separate stylesheet like v3, we've moved all those options into Sass variables. Want default transitions on everything or to disable rounded corners? Simply update a variable and recompile.
- **Dropped IE8 and IE9 support, dropped older browser versions, and moved to rem units for component sizing** to take advantage of newer CSS support. Aside from our grid, pixels have been swapped for rems and ems where appropriate to make responsive typography and component sizing even easier. Need support for IE8/IE9, Safari 8-, iOS 8-, etc? Keep using Bootstrap 3.
- **Rewrote all our JavaScript plugins.** Every plugin has been rewritten in ES6 to take advantage of the newest JavaScript enhancements with new teardown methods, option type checking, new methods, and more.
- **Improved auto-placement of tooltips, popovers, and dropdowns** thanks to the help of a library called [Popper.js](https://popper.js.org).
- **Redesigned and improved documentation.** We redesigned it, rewrote it all in Markdown, and added a few handy plugins to streamline examples and code snippets to make working with our docs way easier. We also added an amazing new search form!
- **New build tools** completely rewritten in npm scripts instead of Grunt, immensely simplifying the process of developing and contributing to Bootstrap.
- **And so much more!** Custom form controls, a redesigned carousel, an overhauled navbar, HTML5 form validation styles, hundreds of responsive utility classes, new components, and more have also been included.

Okay, phew, want to learn even more? Keep reading, or jump right to [those brand new docs](https://getbootstrap.com/)!

## New look
Bootstrap 4 has been sporting a slightly updated look throughout our alpha releases, but it wasn't until recently that we gave the docs and our components a refresh, too.

[![Bootstrap 4 beta docs](/assets/img/2017/bootstrap-4-beta.png)](https://getbootstrap.com/)

In addition to a new color palette and new systems fonts, we have a brand new layout for our documentation. New with this beta is an amazing search form powered by Algolia's [DocSearch](https://community.algolia.com/docsearch/), an improved page layout with stickied navbar and sidebar, and a new table of contents.

---

For more details on this release's changes, take a look at the [Beta 1 ship list issue](https://github.com/twbs/bootstrap/issues/21568), as well as the [closed Beta 1 milestone](https://github.com/twbs/bootstrap/milestone/41?closed=1). Be sure to [join our official Slack room!](https://bootstrap-slack.herokuapp.com) and dive into [our issue tracker](https://github.com/twbs/bootstrap/issues/) with bug reports, questions, and general feedback whenever possible.

<3,<br>
[@mdo](https://twitter.com/mdo) & [team](https://github.com/twbs)
