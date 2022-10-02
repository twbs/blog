---
author: mdo
date: "2022-10-03T16:00:00Z"
title: Bootstrap 5.2.2
keywords:
  - bootstrap
  - release
---

Bootstrap v5.2.2 has landed with new bug fixes and documentation updates—keep reading to see what's changed!

## Highlights

- **Accordion**
  - Use Sass variable for the accordion color instead of an invalid CSS variable
- **Buttons**
  - Undo changes to `.btn:hover` from v5.2.1. We now explicitly target `.btn-check` styles instead.
- **Tables**
  - Don't redefine `$border-color` in `table-variant()` mixin
- **Dropdowns**
  - Temporarily restore ability for dropdowns to work without an explicit `data` atttribute (will be removed again in v6)
- **Modals**
  - Improve modal event listeners
  - Use `<h1>` for all `.modal-title` instances in our docs
- **Tabss**
  - Ensure Tab plugin has proper keyboard functionality
  - Tabs no longer autofocus and cause pages to jump on `tab.show()`
  - Fix `.active` class toggling of tabs within dropdowns
- **Toasts**
  - Properly set toast `z-index` on `.toast-container` as opposed to individual `.toast`s that don't receive any other positioning
- **Tooltips & Popovers**

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.2.2
```

[Read the GitHub v5.2.2 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.2.2) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
