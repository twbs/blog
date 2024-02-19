---
author: julien-deramond
date: "2024-02-19T07:30:00Z"
title: Bootstrap 5.3.3
keywords:
  - bootstrap
  - release
---

Bootstrap v5.3.3 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!

## Highlights

- Fixed a breaking change introduced with color modes where it was required to manually import `variables-dark.scss` when building Bootstrap with Sass. Now, `_variables.scss` will automatically import `_variables-dark.scss`. If you were already importing `_variables-dark.scss` manually, you should keep doing it as it won't break anything and will be the way to go in v6.
- Fixed a regression in the selector engine that wasn't able to handle multiple IDs anymore.

## Color modes

- Badges now use the `.text-bg-*` text utilities to be certain that the text is always readable (especially when the customized colors are different in light and dark modes).
- Fixed our `color-modes.js` script to handle the case where the OS is set to light mode and the auto color mode is used on the website. If you copied the script from our docs, you should apply [this change](https://github.com/twbs/bootstrap/commit/73e1dcf43eff8371dde52ce41bd1d9fdc2b47d1f) to your own script.
- Fixed color schemes description in the color modes documentation to show that `color-scheme()` only accept `light` and `dark` values as parameters.

## Miscellaneous

- Allowed `<dl>`, `<dt>` and `<dd>` in the sanitizer.
- Dropped evenly items distribution for modal and offcanvas headers.
- Fixed the accordion CSS selectors to avoid inheritance issues when nesting accordions.
- Fixed the focus box-shadow for the validation stated form controls.
- Fixed the focus ring on focused checked buttons.
- Fixed the product example mobile navbar toggler.
- Changed the RTL processing of carousel control icons.

## Docs

- Dropped unnecessary right margin for example code blocks.
- Fixed emphasis text utilities usage in [background utilities examples](https://getbootstrap.com/docs/5.3/utilities/background/#background-color) section.
- Added an technical explanation on how to render an accordion expanded by default.
- Changed Vite config path import in Vite guide.
- Enhanced the card image description of the `.card-img-*` classes.
- Mentioned `shift-color()` function in the Sass customization page among `tint-color()` and `shade-color()`.
- Added missing `type="button"` attribute to the Cheatsheet examples navigation buttons.
- Updated the colors table in the customization page to be responsive.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.3
```

[Read the GitHub v5.3.3 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.3) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
