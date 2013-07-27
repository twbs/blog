---
layout: post
title: Bootstrap 2.3 released
---

It has been far too long, friends. Nearly three months has gone by since we pushed out a new version of Bootstrap, but fret not, for that void comes to a most excellent halt tonight. After numerous delays, including a bout with the flu, we're happy to announce the release of [Bootstrap 2.3](http://getbootstrap.com).

## Oh shit what

Bootstrap 2.3 includes some new features, as well as the standard bunch of bug fixes and docs improvements. Here are the highlights:

- **Repository changes:**
  - **Local instead of global dependencies** for our makefile and install process. Now getting started is way easier—just run `npm install`.
  - Upgraded to jQuery 1.9. No changes were needed, but we did upgrade the included jQuery file to the latest release.
  - Moved changelog to be within the repo instead of as a wiki page.
- **New and improved features:**
  - **Added carousel indicators!** Add the HTML and it automagically works.
  - **Added `container` option to tooltips.** The default option is still `insertAfter`, but now you may specify where to insert tooltips (and by extension, popovers) with the optional container parameter.
  - Improved popovers now utilize `max-width` instead of `width`, have been widened from 240px to 280px, and will automatically hide the title if one has not been set via CSS `:empty` selector.
  - Improved tooltip alignment on edges with [#6713](https://github.com/twbs/bootstrap/pull/6713).
  - **Improved accessibility for links in all components.** After merging [#6441](https://github.com/twbs/bootstrap/pull/6441), link hover states now apply to the `:focus` state as well. This goes for basic `<a>` tags, as well as buttons, navs, dropdowns, and more.
  - Added print utility classes to show and hide content between `screen` and `print` via CSS.
  - Updated input groups to make them behave more like default form controls. Added `display: inline-block;`, increased `margin-bottom`, and added `vertical-align: middle;`  to match `<input>` styles.
  - Added `.horizontal-three-colors()` gradient mixin (with example in the CSS tests file).
  - Added `.text-left`, `.text-center`, and `.text-right` utility classes for easy typographic alignment.
  - Added `@ms-viewport` so IE10 can use responsive CSS when in split-screen mode.
- **Docs changes:**
  - Added [new justified navigation example](https://f.cloud.github.com/assets/98681/25869/5e2f812c-4afa-11e2-9293-501cd689232d.png).
  - Added sticky footer with fixed navbar example.

As always, you can see a more complete list of changes by viewing the [2.3.0 milestone](https://github.com/twbs/bootstrap/issues?milestone=18&state=closed) or [2.3.0 pull request](https://github.com/twbs/bootstrap/pull/6346) on GitHub. Most of the issues not mentioned above are minor CSS tweaks and documentation typos.

<a class="btn-link" href="https://github.com/twbs/bootstrap/zipball/master">Download Bootstrap 2.3.0</a> <span class="muted">(latest master ZIP)</span>

## A note on tooltips

When we [released 2.2.2](/2012-12-08/bootstrap-2-2-2-released), we changed the insertion strategy for tooltips and popovers. Instead of appending to the `<body>` by default, they used `insertAfter`. This change fixed number `z-index` issues and ultimately makes controlling and styling tooltips much easier for folks.

Unfortunately, this also resulted in a few bugs, namely breaking input groups by interfering with [adjacent CSS selectors](http://css-tricks.com/child-and-sibling-selectors/). Instead of reverting the insertion method, **we've added a new `container` option**. If you run into a situation where `insertAfter` doesn't work for you, go ahead and set that option to whatever element works best for you.

## Bootstrap 3 update

As we've previously mentioned, v2.3 is our last planned release before moving onto v3 fulltime (pending any catastrophic fuckups). For the latest, [follow the Bootstrap 3 pull request](https://github.com/twbs/bootstrap/pull/6342). **Otherwise, here's the lowdown:**

- Bootstrap 3 will be mobile first.
- No more separate responsive CSS file—all in one now, baby.
- Dropping support for IE7 and Firefox 3.x.
- Grids have been overhauled—now simpler and fluid by default.
- Modals are all responsive and shit now.
- Dropping submenu support.
- Carousel has been redesigned.
- Renamed all of the variables to use dashes instead of camelCase.
- Dropped image icons in favor of icon font.
- JavaScript events are going to be namespaced.
- Docs are getting a bit of a reorganization—Scaffolding and Base CSS have been merged into a single page, CSS.
- Added a new gallery page to showcase more awesome Bootstrap implementations.
- And a whole mess of other changes.

And that's just some of the highlights. Again, [peep the pull request](https://github.com/twbs/bootstrap/pull/6342) for the most up to date changes as we continue to chip away at this bad boy. Feel free to comment on that, or hit us up on Twitter, for feedback of any kind.

<3,

[@mdo](http://twitter.com/mdo) and [@fat](http://twitter.com/fat)

