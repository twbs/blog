---
author: mdo
date: "2022-07-19T16:00:00Z"
title: Bootstrap 5.2.0
video: L93-7vRfxNs
keywords:
  - bootstrap
  - release
---

**Bootstrap v5.2.0 is finally stable!** We've ironed out more bugs, improved more documentation, written new guides and built out new functional environment examples, and so much more!

Keep reading for highlights from both beta and stable releases.

## Docs redesign

As previewed in our beta release, the docs have been redesigned! It starts with [our new homepage](https://getbootstrap.com)  where we have a more complete representation of Bootstrap's features and an updated design.

[![New homepage](/assets/img/2022/05/docs-home.png)](https://getbootstrap.com)

The docs sidebar navigation has been overhauled to have always expanded groups for easier browsing, a brand new DocSearch experience with search history, and new responsive offcanvas drawers for both sidebar and navbar on mobile.

[![New docs page](/assets/img/2022/05/docs-quick-start.png)](https://getbootstrap.com/docs/5.2/getting-started/introduction/)

![New search](/assets/img/2022/05/docs-search.png)

We even updated our version picker in the navbar to cross-link between minor releases!

![Docs version picker](/assets/img/2022/05/docs-version-picker.png)

## Updated buttons and inputs

With our docs redesign, we refreshed buttons and inputs with modified `padding` and `border-radius`. Here's a look at the before and after of [our buttons](https://getbootstrap.com/docs/5.2/components/buttons/):

![Updated buttons](/assets/img/2022/05/buttons-compared.png)

## Tons of new CSS variables

Nearly all our components now have CSS variables for real real-time customization, easier theming, and (soon) color mode support starting with dark mode. You can see what CSS variables are available on every docs page, like [our buttons](https://getbootstrap.com/docs/5.2/components/buttons/#css):

```scss
--#{$prefix}btn-padding-x: #{$btn-padding-x};
--#{$prefix}btn-padding-y: #{$btn-padding-y};
--#{$prefix}btn-font-family: #{$btn-font-family};
@include rfs($btn-font-size, --#{$prefix}btn-font-size);
--#{$prefix}btn-font-weight: #{$btn-font-weight};
--#{$prefix}btn-line-height: #{$btn-line-height};
--#{$prefix}btn-color: #{$body-color};
--#{$prefix}btn-bg: transparent;
--#{$prefix}btn-border-width: #{$btn-border-width};
--#{$prefix}btn-border-color: transparent;
--#{$prefix}btn-border-radius: #{$btn-border-radius};
--#{$prefix}btn-box-shadow: #{$btn-box-shadow};
--#{$prefix}btn-disabled-opacity: #{$btn-disabled-opacity};
--#{$prefix}btn-focus-box-shadow: 0 0 0 #{$btn-focus-width} rgba(var(--#{$prefix}btn-focus-shadow-rgb), .5);
```

Values for virtually every CSS variables are assigned via Sass variable, so customization via CSS and Sass are both well supported. Also included for several components are examples of customizing via CSS variables.

![Custom button](/assets/img/2022/05/custom-button.png)

## New `_maps.scss`

Bootstrap v5.2.0 introduced a new Sass file with `_maps.scss` that pulls out several Sass maps from `_variables.scss` to fix an issue where updates to an original map were not applied to secondary maps that extend it. It's not ideal, but it resolves a longstanding issue for folks when working with customized maps.

For example, updates to `$theme-colors` were not being applied to other maps that relied on `$theme-colors` (like the `$utilities-colors` and more), which created broken customization workflows. To summarize the problem, **Sass has a limitation where once a default variable or map has been _used_, it cannot be updated**. _There's a similar shortcoming with CSS variables when they're used to compose other CSS variables._

This is also why variable customizations in Bootstrap have to come after `@import "functions";`, but before `@import "variables";` and the rest of our import stack. The same applies to Sass maps—you must override the defaults before they get used. The following maps have been moved to the new `_maps.scss`:

- `$theme-colors-rgb`
- `$utilities-colors`
- `$utilities-text`
- `$utilities-text-colors`
- `$utilities-bg`
- `$utilities-bg-colors`
- `$negative-spacers`
- `$gutters`

Your custom Bootstrap CSS builds should now look like this with a separate maps import.

```diff
  // Functions come first
  @import "functions";

  // Optional variable overrides here
+ $custom-color: #df711b;
+ $custom-theme-colors: (
+   "custom": $custom-color
+ );

  // Variables come next
  @import "variables";

+ // Optional Sass map overrides here
+ $theme-colors: map-merge($theme-colors, $custom-theme-colors);
+
+ // Followed by our default maps
+ @import "maps";
+
  // Rest of our imports
  @import "mixins";
  @import "utilities";
  @import "root";
  @import "reboot";
  // etc
```

## New helpers and utilities

We've updated our helpers and utilities to make it easier to quickly build and modify custom components:

- Added new `.text-bg-{color}` helpers. Instead of setting individual `.text-*` and `.bg-*` utilities, you can now use [the `.text-bg-*` helpers](https://getbootstrap.com/docs/5.2/helpers/color-background/) to set a `background-color` with contrasting foreground `color`.

- Expanded [`font-weight` utilities](https://getbootstrap.com/docs/5.2/utilities/text/#font-weight-and-italics) to include `.fw-semibold` for semibold fonts.

- Expanded [`border-radius` utilities](https://getbootstrap.com/docs/5.2/utilities/borders/#sizes) to include two new sizes, `.rounded-4` and `.rounded-5`, for more options.

Expect more improvements here as v5's development continues.

## Responsive offcanvas

Our Offcanvas component now has [responsive variations](https://getbootstrap.com/docs/5.2/components/offcanvas/#responsive). The original `.offcanvas` class remains unchanged—it hides content across all viewports. To make it responsive, change that `.offcanvas` class to any `.offcanvas-{sm|md|lg|xl|xxl}` class.

## New Examples repo and guides

Since the beta, we've completely rewritten our [Webpack guide](https://getbootstrap.com/docs/5.2/getting-started/webpack/) and [Parcel guide](https://getbootstrap.com/docs/5.2/getting-started/parcel/). We've also added a new [Vite guide](https://getbootstrap.com/docs/5.2/getting-started/vite/).

![Bootstrap guides](/assets/img/2022/07/bootstrap-guides@2x.png)

In addition, we've turned every one of those guides into a fully functioning example in our new [twbs/examples](https://github.com/twbs/examples) repo. We've even added a couple more examples to the repo, with plans to create even more.

- [Starter](https://github.com/twbs/examples/tree/main/starter/) – CDN links for our CSS and JS
- [Sass & JS](https://github.com/twbs/examples/tree/main/sass-js/) — Import Sass, Autoprefixer, Stylelint, and our JS bundle via npm
- [Sass & ESM JS](https://github.com/twbs/examples/tree/main/sass-js-esm/) — Import Sass, Autoprefixer, and Stylelint via npm, and then load our ESM JS with a shim
- [Webpack](https://github.com/twbs/examples/tree/main/webpack/) - Import and bundle Sass and JS with Webpack
- [Parcel](https://github.com/twbs/examples/tree/main/parcel/) - Sass, JS via Parcel
- [Vite](https://github.com/twbs/examples/tree/main/vite/) - Sass, JS via Vite
- [Bootstrap Icons font](https://github.com/twbs/examples/tree/main/icons-font) - Import Bootstrap Icons via icon font

Each guide matches up to a new example in that repo, and nearly all of them can be immeditely available in Stackblitz. Now you don't even need to have a development environment configured on your computer to get started with Bootstrap.

![Examples Stackblitz repo](/assets/img/2022/07/guides-stackblitz.png)

And did we mention that nearly all our code snippets now have an open in Stackblitz button?

![Code snippets Stackblitz](/assets/img/2022/07/snippets-stackblitz.png)

## And more!

- **Introduced new `$enable-container-classes` option. —** Now when opting into the experimental CSS Grid layout, `.container-*` classes will still be compiled, unless this option is set to `false`. Containers also now keep their gutter values.

- **Thicker table dividers are now opt-in. —** We've removed the thicker and more difficult to override border between table groups and moved it to an optional class you can apply, `.table-group-divider`. [See the table docs for an example.](https://getbootstrap.com/docs/5.2/content/tables/#table-group-dividers)

- **[Scrollspy has been rewritten](https://github.com/twbs/bootstrap/pull/33421) to use the Intersection Observer API**, which means you no longer need relative parent wrappers, deprecates `offset` config, and more. Look for your Scrollspy implementations to be more accurate and consistent in their nav highlighting.

- Added `.form-check-reverse` modifier to flip the order of labels and associated checkboxes/radios.

- Added [striped columns](https://getbootstrap.com/docs/5.2/content/tables/#striped-columns) support to tables via the new `.table-striped-columns` class.

- Added a new experimental [reserved data attribute `data-bs-config`](https://getbootstrap.com/docs/5.2/components/tooltips/#options) that can house simple component configuration as a JSON string.

- Added new `smooth-scroll` to Scrollspy.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.2.0
```

[Read the GitHub v5.2.0 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.2.0) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
