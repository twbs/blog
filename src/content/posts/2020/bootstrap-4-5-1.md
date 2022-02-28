---
author: mdo
date: "2020-08-04T00:00:00Z"
title: Bootstrap 4.5.1
video: iIpfWORQWhU
keywords:
  - bootstrap
  - release
---

We're shipping our latest patch release today to fix a handful of bugs in Bootstrap 4. While our focus remains on v5's second alpha release (coming in the next couple weeks), we want to keep v4 as stable and reliable as possible.

Our next couple releases for Bootstrap 4 will continue this trend, focusing on bug fixes, documentation improvements, and (later on) features that help bridge the gap to v5.

## Changes

Also available in the [v4.5.1 release on GitHub](https://github.com/twbs/bootstrap/releases/tag/v4.5.1).

### CSS

- #30808: Simplify `list-group` borders in cards
- #30810: Add `z-index` to `.custom-check` to fix their rendering in CSS columns
- #30817: Add `border-radius` to `.card-img-overlay`
- #30830: Prevent conflicts with components with classes
- #30922: Fix color on disabled checked state for custom controls
- #30932: Restore `word-break: break-word;` on `.text-break` utility.
- #30940: Prevent `.row` from shrinking in flex containers
- #30957: Nullify custom form states' `box-shadow`
- #30959: Toasts in IE11
- #30960: Fix IE11 validation tooltip alignment in input groups
- #30965: Improve floating labels example in IE
- #30966: Improve floating labels with Edge and a general refactor
- #30969: Remove duplicated container breakpoints in compiled CSS
- #30999: Revert `min-width: 0` on `.col` due to unforeseen side effects
- #31148: Remove duplicate properties on custom controls
- #31165: Remove `backdrop-filter` from docs subnav and toasts
- #31339: Add link to view docs pages on GitHub
- #31347: Turn off scroll anchoring for accordions
- #31381: Remove `overflow: hidden` from toasts

### JavaScript

- #30326: Prevent overflowing static backdrop modal animation
- #30936: Add `role="dialog"` in modals via JavaScript
- #30992: Avoid preventing input event onclick
- #31155: Clear timeout before showing the toast

### Build

- #30797: Fix release script docs
- #31011: Updated Babel config
- #31296: Update to Ruby 2.7 and Bundler 2.x

### Docs

- #30809: Update docs callout for responsive SVG images
- #30813: Mention Bootstrap Icons in `extend/icons.md` page
- #30896: Improve wording on Downloads page
- #30897: Prevent skip links from overlapping header in docs
- #30973: Update some nav examples by removing `.nav-item` from `.nav-link` to be more consistent
- #31070: Fix some broken examples and typos
- #31135: Move color utility callouts to start of page
- #31234: Clean up docs forms for accessibility
- #31344: Mention toasts in the _components requiring JavaScript_ page

[Head to the v4.5 docs](https://getbootstrap.com/docs/4.5/) to see the latest in action. The full release has been published to npm and will soon appear on the BootstrapCDN and Rubygems.

## Next up

We'll be shipping our second alpha of v5 in the next few weeks. We've been a little delayed as we focus on ourselves during these unprecedented times and have all been taking a bit of time off here and there. We're sorry to keep y'all waiting on v5 and hope you can understand.

After v5's second alpha, we'll be targeting a final alpha before our first beta, as well as more patches for v4. We'll also be releasing the Bootstrap Icons soon. So stay tuned for more!

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
