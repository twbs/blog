---
author: mdo
date: "2023-07-26T07:35:00Z"
title: Bootstrap 5.3.1
keywords:
  - bootstrap
  - release
video:
---

Bootstrap v5.3.1 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!

- **Color modes:**
  - Increased color contrast for dark mode by replacing `$gray-500` with `$gray-300` for the body color.
  - Added our color mode switcher JavaScript to our examples ZIP download

- **Components:**
  - Improved disabled styling for all `.nav-link`s, providing `.disabled` and `:disabled` for use with anchors and buttons.
  - Add support for `Home` and `End` keys for navigating tabs by keyboard
  - Added some basic styling to toggle buttons when no modifier class is present.
  - Fixed carousel colors in dark mode

- **Forms:**
  - Fixed floating label disabled text color

- **Utilities:**
  - `.text-bg-*` utilities now use CSS variables

- **Sass:**
  - Add new `$navbar-dark-icon-color` Sass variable
  - Removed duplicate `$alert` Sass variables
  - Added a new variable for `$vr-border-width` to customize the vertical rule helper width.

- **Documentation:**
  - Added search to our homepage
  - Improved responsive behavior on Dashboard example
  - Improved dark mode rendering of Cheatsheet examples

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.1
```

[Read the GitHub v5.3.0 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.1) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
