---
author: mdo
date: "2021-06-22T00:00:00Z"
title: Bootstrap 5.0.2
video: 6S3ISlvlEbs
keywords:
  - bootstrap
  - release
---

Our latest patch release has arrived to improve our JavaScript plugins, address the `/` deprecation in Dart Sass, fix a few CSS bugs, and make some documentation improvements.

## Sass division

One of the biggest fixes in Bootstrap v5.0.2 patches the deprecation of `/` for performing division in Sass. The Dart Sass team deprecated it due to the use of `/` characters in actual CSS (e.g., [separating `background` values](https://developer.mozilla.org/en-US/docs/Web/CSS/background)). The bad news was this shipped with deprecation notices, which in our case heavily polluted the build process for everyone. Our potential solutions included:

1. Ignore it entirely and silence the deprecation warnings
2. Drop implicit support for LibSass and use the Dart Sass math module
3. Figure out a custom fix to keep the widest possible Sass support

We chose the third option—keeping support for both LibSass and Dart Sass, even though the former is deprecated. There are many projects out there that simply haven't or cannot update to Dart Sass (including Hugo, which we use to build our docs).

Our solution meant rolling a custom `divide()` function and replacing division with multiplication wherever possible. We wanted to limit the use of a custom function, so the situations where we used `$value / 2` were replaced with `$value * .5`. This custom function has also been added to the [RFS project](https://github.com/twbs/rfs) in a new release. While the precision in our compiled CSS has been reduced by two decimal places, the output remains otherwise unchanged.

If you have any ideas or suggestions on further improvements, please don't hesitate to [open an issue](https://github.com/twbs/bootstrap/issues/new/choose).

## Highlights

Here are some highlights from the changelog.

### CSS

- Fixed deprecation warnings in Sass for `/` division. Replaced most `/` division with multiplication and added a custom `divide()` function to avoid adding Dart Sass modules (as this would negate the usage of LibSass).
- Individual `.col-*` grid classes can now override `.row-cols`.
- Updated `line-height` for floating forms to fix cut-off select menu text.
- Added missing transition to `.form-select`.
- Fixed `.dropdowns-menu-*` position in RTL.
- Decoupled `--bs-table-bg` and `--bs-table-accent-bg` to separate table accent highlights.
- Improved support for complex expressions in `add()` and `subtract()` functions.
- Fixed horizontal padding for select elements in Firefox.
- Updated border color for popover header to match the outer border.
- Fixed offcanvas header alignment for RTL.

### JavaScript

- Popovers now remove titles or content when they're empty instead of returning empty HTML elements.
- Dropdown items are now automatically selected when using arrow keys.
- We now register only one `DOMContentLoaded` event listener in `onDOMContentLoaded` utility function.
- Fixed arrow keys breaking animation when the carousel sliding.
- Fixed handling of transitioned events dispatched by nested elements (e.g., modals didn’t transition when clicking buttons).
- Fixed backdrop errors with stale body cause by unnecessary default and `removeChild`.
- Fixed issue where the `show.bs.modal` event with the `.fade` class prevented modals from being displayed again.
- Fixed `isVisible` false positives.
- Added `getOrCreateInstance` method in our base component that is applied to all components.

### Docs

- Documented how to make utilities responsive using the API. Also added `!important` to the sample output CSS and mentioned the `$enable-important-utilities` global setting.
- Added a mention of the breakpoint mixins changes from v4 to the migration guide.
- Added a new example of positioned badges to the docs.
- Clarified variable overrides in the Customizing > Sass page.
- Replaced Freenode with Libera IRC server.

<hr class="my-4">

Head to GitHub for a complete [list of issues and pull requests in v5.0.2](https://github.com/twbs/bootstrap/issues?q=is%3Aclosed+project%3Atwbs%2Fbootstrap%2F41). You can also review the [v5.0.2 project board](https://github.com/twbs/bootstrap/projects/41).

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap
```

[Review the v5.0.2 release changelog](https://github.com/twbs/bootstrap/releases/tag/v5.0.2) for a complete list of changes.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
