---
layout: post
title: Bootstrap 5 Alpha 3
video: god7hAPv8f0
date: 2020-11-11 11:00:00
---

Our third alpha release has landed with tons of updates to our components, utilities, docs, forms, JavaScript, and more. This is a larger alpha release for us and sets us up for our first beta where we'll introduce some final breaking changes and features.

We're trying to move fast and keep the future of the project and the web in general in mind, so this release is an important milestone for us. We're balancing practical migration from v4 with meaningful changes that reflect the ever-changing front-end community.

We think you'll love this release, so keep on reading and let us know what you think!

## Components

We've improved a handful of components in this release, and even dropped one for some new and improved utilities.

### New accordion

We've dropped the `.card` based accordion for a brand new `.accordion` component, solving several bugs in the process. Our new accordion still uses the Collapse JavaScript plugin, but with custom HTML and CSS to support it, it's better and easier than ever to use.

![New Bootstrap accordion](/assets/img/2020/11/accordion.png)

The new accordion includes Bootstrap Icons as chevron icons indicating state and click-ability. We've included support for a flush accordion (add `.accordion-flush`) to remove the outer borders, allowing for easier placement inside parent elements.

[See the PR](https://github.com/twbs/bootstrap/pull/32013) for extra details on what's new, or [visit the new docs page](https://v5.getbootstrap.com/docs/5.0/components/accordion/).

### New block buttons

![New block buttons](/assets/img/2020/11/block-buttons.png)

Block buttons are no more in v5—we've dropped the `.btn-block` class for `.d-grid` and `.gap-*` utilities. This allows for the same behavior and style, but with much greater control over spacing, alignment, and even responsive layout options.

[See the buttons docs page for details.](https://v5.getbootstrap.com/docs/5.0/components/buttons/#block-buttons)

## Docs improvements

We're always looking for new ways to improve our documentation, and this release is no different. We have a ton of changes big and small.

![Docs search](/assets/img/2020/11/docs-search.png)

We've added a keyboard shortcut to focus you on the search field. Hit <kbd>Ctrl</kbd> + <kbd>/</kbd> to trigger it.

We've also rewritten the docs sidebar to use actual `<button>` elements instead of anchors, and improved the focus styling.

Content-wise, we've renamed the "Navs" page to "Navs & Tabs" to help folks find our tab JavaScript features better. We've also made some style changes, improving the focus styles of heading anchor links and removing text wrapping from code snippets for shorter and easier to read code.

## Sass

Three important and helpful changes to our Sass source code:

- We've switched to Dart Sass with LibSass being deprecated. We've been testing our builds with Dart Sass for a while and decided to make the switch with LibSass being deprecated just a couple of weeks ago. We're holding on the Sass modules for now.

- The color system which worked with `color-level()` and `$theme-color-interval` was removed in favor of a new color system. All `lighten()` and `darken()` functions in our codebase are replaced by `tint-color()` and `shade-color()`. These functions will mix the color with either white or black instead of changing its lightness by a fixed amount. The `scale-color()` will either tint or shade a color depending on whether its weight parameter is positive or negative. [See #30622](https://github.com/twbs/bootstrap/pull/30622) for more details.

- We've added a Sass variable for CSS custom property prefixes.

## JS

Ahead of some larger and necessary JavaScript changes in Beta 1, we've shipped a few updates to our plugins.

- Simplified dropdown's placement
- Removed redundant polyfills since we dropped IE and Legacy Edge
- Fixed the carousel `data-interval` bug by checking for `data-interval` on the first slide
- Removed `Manipulator.toggleClass` to simplify some code since we only used it one place

## Utilities

Utility classes are incredibly powerful in Bootstrap, especially with our new [utilities API](https://v5.getbootstrap.com/docs/5.0/utilities/api/).

![New utilities API docs](/assets/img/2020/11/utilities-api-docs.png)

With our first beta, we've overhauled our API docs to provide clearer examples and information on adding, modifying, removing, and extending our default utilities.

In addition, we've added some new default utilities to make life a little easier:

- Added `.d-grid` for `display: grid`
- Added `.fs` utilities for `font-size`
- Renamed `font-weight` utilities to `.fw`
- Added `.rounded-1`, `.rounded-2`, and `.rounded-3` for new small, medium, and large `border-radius` utilities
- Added `.overflow-visible` and `.overflow-scroll` utilities

Our next release will also add another powerful feature to our utilities, pseudo-class support!

## Forms

Forms have some exciting changes thanks to the addition of floating labels as a fully-fledged form layout option and a new file input.

### Floating labels

![New floating labels](/assets/img/2020/11/floating-forms.png)

[Floating labels](https://v5.getbootstrap.com/docs/5.0/forms/floating-labels/) include support for textual inputs, selects, and textareas. We have one limitation with textareas where multiple lines of text can be obscured by the floating label. We're working on fixes for this, so if you have ideas, please let us know!

### New file input

![New file input](/assets/img/2020/11/file-input.png)

We've dropped our custom `.form-file` class for additional styles on the `.form-control` class. This means we no longer require additional JavaScript to make our file input styles functional—the [new form file](https://v5.getbootstrap.com/docs/5.0/forms/form-control/#file-input) is all CSS!

### Input group rounded corners

Beyond that, we've finally resolved ourselves to adding a new class to fix the rounded corners on input groups when using validation. Add the `.has-feedback` class to the `.input-group` to enable validation messages inside input groups without any visual regressions. The good news is this is also being [backported to v4](https://github.com/twbs/bootstrap/pull/31953) in our next release.

### And more

In addition, we've made a few other form related improvements:

- Removed explicit `height` from most of our form controls.
- Fixed the disabled checkbox toggle buttons
- Added docs examples for disabled `.form-control`, `.form-select`, and `.form-range` elements

Have some form feature requests or improvements we should consider? Please open an issue!

## Quality of life

Lastly, across the board we've made some minor updates to browser support, Reboot styling, components, and more

- Moved our preferred CDN from BootstrapCDN to jsDelivr
- Dropped support for Legacy Edge (woohoo!)
- Updated to Node.js 14 and PostCSS 8.x
- Removed obsolete prefixes in our CSS
- Added `cursor: pointer` and heights to color inputs
- Removed `background-clip` on `.btn-close` so the `background-image` is no longer clipped
- Improved `sans-serif` font selection in Ubuntu
- Spinners now slow down when reduced motion is enabled rather than stopping outright
- Fix inconsistent whitespace in breadcrumbs

See all the changes in the [v5 Alpha 3 project board](https://github.com/twbs/bootstrap/projects/22) and be sure to [read the Migration guide](https://v5.getbootstrap.com/docs/5.0/migration/) for details on what's changed since Alpha 2.

## Coming in Beta 1

Beta 1 will be a more narrowly focused release and we're hoping to ship these final breaking changes as part of it.

- **RTL!** [RTL is still coming!](https://github.com/twbs/bootstrap/pull/30980) The PR is being reviewed by our team would like it to land in Beta 1 to ensure we can get some testing from the community.

- **Updating to Popper.js v2.** Still on our radar, but moving slower than we anticipated due to some of the differences in the major release. [See the PR for details.](https://github.com/twbs/bootstrap/pull/31178)

- **Namespaced data attributes** to help keep our functionality clearly separated from your own. [See the PR.](https://github.com/twbs/bootstrap/pull/31827)

- **Updated utilities API with pseudo-classes support via a `state` option.** Add any space-separated list of states to get additional utilities for that pseudo-class. [See the work-in-progress PR for details.](https://github.com/twbs/bootstrap/pull/31643)

For a more up to date list of changes, be sure to follow along with the [v5 Beta project board](https://github.com/twbs/bootstrap/projects/26).

## Get started

**Head to <https://v5.getbootstrap.com> to explore the new release.** We've also published this updated as a pre-release to npm, so if you're feeling bold or are curious about what's new, you can pull the latest in that way.

```sh
npm i bootstrap@next
```

## Support the team

Visit our [Open Collective page](https://opencollective.com/bootstrap) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.

<3,<br>

[@mdo](https://github.com/mdo) & [team](https://github.com/twbs)
