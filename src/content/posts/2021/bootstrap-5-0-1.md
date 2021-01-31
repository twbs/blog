---
author: mdo
date: "2021-05-13T00:00:00Z"
title: Bootstrap 5.0.1
video: gAjR4_CbPpQ
---

Our first patch release for Bootstrap 5 has landed with v5.0.1! We've fixed a handful of bugs in our CSS and JS while also resolving a few issues with our docs and examples.

## Changelog

- Fixed an issue where dropdowns wouldn't close after clicking into an `<input>`
- Validated inputs in `.input-group`s no longer render behind sibling elements
- Prevent `accent-bg` from leaking in nested tables
- Modal backdrops no longer throw Uncaught TypeError when initialized through JS
- Refactored disposing properties into the base component
- Extracted static `DATA_KEY` and `EVENT_KEY` to the base component
- Merged `transitionend` listener callbacks into one method
- Popovers and tooltips have a streamlined config property
- Toasts no longer automatically hide on focus or hover
- No longer redefining `$list-group-color` in the list group loop

Our docs and examples also received a few updates:

- Fixed Sidebars example not rendering correctly in Chrome
- Fixed RTLCSS `stringMap` configuration snippet
- Updated offcanvas navbar example to prevent console error
- Fixed miscellaneous typos, grammatical errors, and links in the Migration guide

<hr class="my-5">

Head to GitHub for a complete [list of issues and pull requests in v5.0.1](https://github.com/twbs/bootstrap/issues?q=is%3Aclosed+project%3Atwbs%2Fbootstrap%2F38). You can also review the [v5.0.1 project board](https://github.com/twbs/bootstrap/projects/38).

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap
```

[Review the GitHub v5.0.1 release changelog](https://github.com/twbs/bootstrap/releases/tag/v5.0.1) for a complete list of changes since our last release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
