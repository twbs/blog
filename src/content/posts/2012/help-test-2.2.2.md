---
author: mdo
date: "2012-12-02T00:00:00Z"
title: Help test Bootstrap 2.2.2
---

In the next week or so, we plan on releasing `v2.2.2`. To date, there are over 50 CSS and documentation related issues already closed, and we want to get those out in your hands. We still have some significant JavaScript issues to work out, but those will be punted to 2.2.3 so we don't hold up development. Our hope is to have that release out by end of year at the latest.

## Key changes

- Added retina assets in the docs.
- Added HTML5 Boilerplate print styles.
- Swapped placehold.it for [Holder.js](http://holderjs.com/).
- Fixed issues with popovers inheriting `font-size: 0;` in button groups.
- Refactorered popover arrows to fix IE8 display bug and use less code.
- Updated popover plugin to remove the `<p>` within `.popover-content`. Popover text and HTML now directly inserts into `.popover-content`.
- Enabled badges and labels to [automatically collapse when empty](https://github.com/twbs/bootstrap/commit/ead5dbeba5cd7acfa560bfb353f5e7c4f4a19256).

For a more complete set of changes, [view the 2.2.2 milestone on GitHub](https://github.com/twbs/bootstrap/issues?milestone=17&q=is%3Aclosed). Most of the issues not mentioned above are minor CSS tweaks and documentation typos.

## How to help

We would love to have folks help test these changes to prevent further regressions.

- Checkout the `2.2.2-wip` branch, or browse the release candidate docs so you can easily load it up on devices and such for testing. **Note: downloads on the RC docs do not work.**
- Take a look at the docs and give 'em a run on the docs, on your phone, your (least?) favorite browser, etc.
- [Open a new issue on GitHub](https://github.com/twbs/bootstrap/issues?sort=created&direction=desc&state=open) to report bugs. Please include as much context and information as possible. If it's a visual bug, please include a screenshot. If it pertains to JavaScript, consider including a [jsfiddle](https://jsfiddle.net/).

If you're submitting a pull request against 2.2.2-wip, be sure to read the [Contributing to Bootstrap](https://github.com/twbs/bootstrap/wiki/Contributing-to-Bootstrap) wiki page first.
