---
author: mdo
date: "2026-11-11T17:53:55Z"
title: Bootstrap 5.3.9
category: Bootstrap 5
keywords:
  - bootstrap
  - release
---

Bootstrap v5.3.9 is out with a new modal size, fixes for Carousel, ScrollSpy, tooltips, and popovers, and several accessibility and documentation updates. We've also replaced the v5 docs search with Pagefind to get search working again.

Here are the release highlights:

## CSS

- Added `.modal-xxl` for wider modals, with a maximum width of `1320px` at the `xxl` breakpoint. Add it to your `.modal-dialog`, just like the existing modal size classes, or customize the width with the new `$modal-xxl` Sass variable.
- Updated placeholder glow and wave animations to respect `prefers-reduced-motion` when `$enable-reduced-motion` is enabled, which it is by default.
- Fixed the minute field's padding in date and time inputs by correcting a WebKit pseudo-element selector.

## JavaScript

- Fixed Carousel touch handling in browsers without Pointer Events so taps aren't treated as swipes and swipe direction stays consistent.
- Fixed a Carousel error when no indicator is active.
- Fixed ScrollSpy smooth scrolling when clicking an element inside a navigation link, like a `<span>` or icon.
- Preserved literal text in tooltip and popover `data-bs-title` and `data-bs-content` attributes. Values like `9.90` now stay `9.90`, and an empty title no longer interrupts initialization.
- Improved JSDoc for several JavaScript utilities.

## Docs

- Replaced Algolia DocSearch with Pagefind. Search now uses an index built with the v5 docs, keeping results specific to v5.
- Kept the Bootstrap logo link within the v5 docs.
- Restored the sidebar example's dropdown focus outline and corrected accessibility attributes in dropdown and pagination examples.
- Clarified accessible names, variable-width columns, column breaks with vertical gutters, and tables in rounded containers.
- Added a nested Collapse example and fixed Modal, Offcanvas, and Popover examples and option descriptions.

Thanks to [Julien](https://github.com/julien-deramond), [Kevinjohn](https://github.com/Kevinjohn), and everyone who contributed fixes, documentation, and reviews to this release!

[Read the GitHub v5.3.9 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.9) for a full list of changes, including build tooling and dependency updates.

## Get the release

**Head to the [v5.3 docs](https://getbootstrap.com/docs/5.3/) for documentation and downloads.** Install with npm:

```sh
npm i bootstrap@v5.3.9
```

## Support the team

Visit our [Open Collective page](https://opencollective.com/bootstrap) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
