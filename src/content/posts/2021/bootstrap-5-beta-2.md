---
author: mdo
date: "2021-02-10T11:00:00Z"
title: Bootstrap 5 Beta 2
video: pUj9frKY46E
---

Our second beta has arrived for Bootstrap 5! We delayed its release to iron out some issues with third-party libraries and stabilize our major changes. We've also once again shipped some awesome updates to our documentation.

Next up is our final beta, which we may even promote to a stable release depending on how development proceeds. Stay tuned for that!

## Dropdowns

[![Dropdown docs screenshot](/assets/img/2021/02/bootstrap-v5b2-dropdowns.png)](https://getbootstrap.com/docs/5.0/components/dropdowns/)

Dropdowns saw a lot of work in Beta 2 because of how much has changed in both our JavaScript and in Popper.js (which we depend on for most dropdown, popover, and toolip positioning). We've modified our dropdown plugin to add a new data attribute to help separate our own positioning styles with that of Popper's. The issues we saw—like a `.dropstart` menu overlapping a button or an incorrect responsive `.dropdown-menu-end` class—were largely the result of competing positioning.

Now when dropdown menus have `data-bs-display="static"`, we'll add `data-bs-popper="static"` via JavaScript to their associated `.dropdown-menu`. When dropdowns are in our navbars, their menus will have `data-bs-popper="none"` added. This separates two different positioning libraries, ours and Poppers, and ensures all behaviors are supported. You can see [all the options in a new example in our docs](https://getbootstrap.com/docs/5.0/components/dropdowns/#alignment-options). We updated our CSS selectors to use these new data attributes, too.

In addition, we've removed the initial `margin`s from dropdowns and popovers, instead of relying on Popper's offsets. These also conflicted with the default styling for elements positioned by Popper.js. Relatedly, there was a bug in how popover arrows were aligned that has now been resolved.

## Color utility docs

[![Sass docs screenshot](/assets/img/2021/02/bootstrap-v5b2-sass-docs.png)](https://getbootstrap.com/docs/5.0/utilities/colors/)

We've overhauled our color utility documentation, separating the text `color` classes from our `background-color` ones. We've also made extensive use of our `scss-docs` shortcode to include tons more code snippets in our docs.

- [Text color utilities](https://getbootstrap.com/docs/5.0/utilities/colors/) remain on their existing page.
- [Background utilities](https://getbootstrap.com/docs/5.0/utilities/background/) have moved to a new page.

Both pages now include a new Sass section, showing relevant snippets of our source code that are related to each set of utilities. We list all our available color variables, our theme color variables and maps, associated mixins and loops, and even where these utilities are generated in the utilities API.

Expect this kind of documentation improvements to continue into our next release. Follow along in the [draft pull request that adds Sass docs to all our components](https://github.com/twbs/bootstrap/pull/32747) on GitHub.

## JS updates

We've spent a significant amount of time in Beta 2 improving our JavaScript plugins to fix bugs and improve behaviors since dropping jQuery.

- Dropdown now emits events on the `.dropdown-toggle` instead of the `.dropdown`.
- Restored the offset option for dropdowns.
- Fixed modal toggling when clicking on `data-bs-toggle="modal"`.
- We now build our base component as a separate `.js` file.
- We now prevent `getSelector` from returning URLs as selector which caused errors in dropdown and scrollspy plugins.
- Refactored components to use a utility function to define jQuery plugins

## Miscellaneous updates

Across the board, we've made a few small changes to other components that are worth a brief mention here.

- **Navbars:**
  - Added a new `.navbar-nav-scroll` class to enable vertical scrolling when a collapsed navbar is opened. It's customizable via Sass and a CSS variable. [Read more in the docs.](https://getbootstrap.com/docs/5.0/components/navbar/#scrolling)
  - We've re-added `flex-grow` to the `.navbar-collapse` to restore the flexbox behaviors from v4 and prevent some content from being inadvertently squished.
- **Forms:**
  - Removed `vertical-align` from `.form-select`
  - Form validation mixin updated with additional parameters
  - Fixed validation icon placement in `.form-select`
  - Checkboxes and radio buttons are aligned better in input groups
- **Buttons:**
  - Added variables for tinting and shading button state colors
  - Suppressed the default focus outline for buttons in Chromium
- **Toasts:**
  - Added `word-break` to `.toast-body`
  - Added a live example to the docs to trigger a real toast
- **Bundles:**
  - Added our helpers to the utilities CSS bundle
- **Carousels:**
  - Updated docs examples to use `<button>`s wherever possible instead of `<a>` elements.
  - CSS selectors changed for using `<button>`s as indicators (from `.carousel-indicators li` to `.carousel-indicators [data-bs-target]`).

For a more complete list of changes, check out the [v5 Beta 2 project board](https://github.com/twbs/bootstrap/projects/33) or [list of issues and PRs](https://github.com/twbs/bootstrap/issues?q=is%3Aclosed+project%3Atwbs%2Fbootstrap%2F33) in this [release](https://github.com/twbs/bootstrap/releases/tag/v5.0.0-beta2).

## Get started

**Head to <https://getbootstrap.com> to explore the new release.** We've also published this updated as a pre-release to npm, so if you're feeling bold or are curious about what's new, you can pull the latest in that way.

```sh
npm i bootstrap@next
```

## What's next

We have three releases coming up next for the team:

- Bootstrap v5.0.0-beta3 (possibly promoted to v5 stable)
- Bootstrap v4.6.1 (bringing in some more bugfixes and alignment with the latest in v5)
- Bootstrap Icons v1.4.0

Our v5 Beta 3 will continue to focus on JavaScript issues and documentation improvements. Tooltips in particular need some attention after our fixes to dropdowns and popovers. After v5 goes stable, we'll look to adding some of the awesome features we've built up in our backlog. Check out the [v5.1 project](https://github.com/twbs/bootstrap/projects/31) for an idea of what's being planned.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
