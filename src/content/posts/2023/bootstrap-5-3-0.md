---
author: mdo
date: "2023-05-30T07:35:00Z"
title: Bootstrap 5.3.0
keywords:
  - bootstrap
  - release
video: GC5E8ie2pdM
---

It's official, the final stable release of v5.3.0 has landed! It's been a monumental effort to revamp our codebase for CSS variables and color modes, one that will see continued changes leading up to an eventual Bootstrap 6. And we're so excited to finally ship it!

On top of all the work that's gone into this release, a lot has happened behind the scenes since we shipped our pre-releases. Keep reading to learn everything that's new in v5.3.0.

## What's new

- [Dark mode support](#dark-mode)
- [Custom color modes support](#custom-color-modes) for themes beyond light and dark
- [Extended color palette](#refreshed-color-palette) for theme colors that adapt to color modes
- [New link helpers](#new-link-helpers-and-utilities), link utilities, and focus ring helpers
- [New nav underline](#new-nav-underline) variant
- Several new utilities, bug fixes, and [much more](#and-much-more)!

Keep reading for the deep dive on all the top new features.

## Dark mode

Bootstrap's core has been rewritten to provide first-class support for dark mode. Moreover, Bootstrap now supports any number of color modes, allowing you to build your own custom themes or more nuanced color modes. Let's take a look at how our new dark mode works first.

[![New homepage](/assets/img/2022/12/docs-color-modes.png)](https://getbootstrap.com/docs/5.3/customize/color-modes/)

**Bootstrap's new dark mode is opt-in by default**, meaning you'll need to set a `data-bs-theme` attribute on the root `<html>` element to change the entire page's design. *This was done to best support custom color modes beyond light and dark—more on that later. It also helps folks who aren't ready for dark mode in their own designs.*

```html
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <!-- ... -->
</html>
```

Need a more isolated dark mode? You can also set the color mode on a parent element like the `.dropdown` shown below. This will only affect the dropdown and its children instead of the entire page.

<!-- markdownlint-disable no-inline-html -->
{{< example class="d-flex justify-content-between" >}}
<div class="dropdown" data-bs-theme="light">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
    Default dropdown
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>

<div class="dropdown" data-bs-theme="dark">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" aria-expanded="false">
    Dark dropdown
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
{{< /example >}}
<!-- markdownlint-enable no-inline-html -->

### New `color-mode()` mixin

Dark mode styles are written with and generated through the new [`color-mode()` Sass mixin](https://getbootstrap.com/docs/5.3/customize/color-modes/#building-with-sass). The mixin allows you to write styles specific to a particular color mode, like dark mode.

```scss
@include color-mode(dark) {
  .element {
    color: var(--bs-primary-text-emphasis);
    background-color: var(--bs-primary-bg-subtle);
  }
}
```

Together with the new `$color-mode-type` Sass variable, you can also change how color modes behave in Bootstrap. The default value is `data`, which tells Bootstrap to generate CSS selectors that scope the color mode's styles to the `data` attributes you've seen above.

The other supported value is `media-query`, which generates media query selectors instead. This is helpful for those who want light and dark modes, automatically, and without a user override.

```scss
$color-mode-type: media-query;

@include color-mode(dark) {
  .element {
    color: var(--bs-primary-text-emphasis);
    background-color: var(--bs-primary-bg-subtle);
  }
}
```

Which outputs to:

```css
@media (prefers-color-scheme: dark) {
  .element {
    color: var(--bs-primary-text-emphasis);
    background-color: var(--bs-primary-bg-subtle);
  }
}
```

[Read the new color mode docs](https://getbootstrap.com/docs/5.3/customize/color-modes/#building-with-sass) to learn more.

### Toggling color modes

While we haven't written a new JavaScript plugin for toggling color modes, we've written a great script for [toggling color modes via `data-bs-theme`](https://getbootstrap.com/docs/5.3/customize/color-modes/#javascript) in our docs. Our implementation defaults to a user's operating system color mode (auto), but also allows users to override that with a particular mode (light or dark) that's recorded in local storage for easy reference on future page loads. You can use and adapt this script as needed.

### New color mode variables

There's also a new `_variables-dark.scss` stylesheet that houses dark mode-specific Sass variables. This is where we modify mostly global values, and some component-specific values, for dark mode. We recommend creating separate Sass stylesheets for additional custom color modes (e.g., a blue theme might have `_variables-blue.scss`). *We expect this stylesheet to be simplified in our next major release as we continue to streamline the code base.*)

Dark mode colors are all derived from our theme colors, meaning you can easily change the color mode palettes by updating the original theme colors. This means we're not using our already tinted and shaded colors (e.g., `shade-color($danger, 60%)` instead of `red-800` for the new danger emphasis color).

Bootstrap v5.3.0 ships with dark mode enabled, but you can also disable it by updating the boolean `$enable-dark-mode` Sass variable.

[Read more in the new color mode docs.](https://getbootstrap.com/docs/5.3/customize/color-modes/)

### Enabling dark mode

If you're using the CDN or starter template, using the new color modes is straightforward. Add the `data-bs-theme` attribute with `light` or `dark` values to the `<html>` element and you'll be using either the light or dark theme.

```html
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
```

## Custom color modes

When we set out to add dark mode support to Bootstrap, we didn't want to just add a dark mode. We wanted to build the foundations for a color mode system that could be used to create any number of themes and color modes. That's why we lead with the `data-bs-theme` attribute and the new `color-mode()` Sass mixin, and why we've added so many new CSS variables in these latest releases.

To add a custom color mode, create your own `data-bs-theme` selector with a custom value as the name of your color mode, then modify any Sass and CSS variables as needed. We created a separate `_variables-dark.scss` stylesheet to house Bootstrap's dark mode-specific Sass variables, but that's not required for you.

For example, you can create a "blue theme" with the selector `data-bs-theme="blue"`. In your custom Sass or CSS file, add the new selector and override any global or component CSS variables as needed. If you're using Sass, you can also use Sass's functions within your CSS variable overrides.

*Heads up! Applying color modes to elements that aren't the `<html>` or `<body>` elements requires classes like `.text-body` and `.bg-body`. This is because many HTML elements have no set `color` or `background` to style until you add them yourself. We've included them here for you just in case.*

```scss
[data-bs-theme="blue"] {
  // CSS variable overrides and styles
}
```

```html
<div data-bs-theme="blue">
  ...
</div>
```

## Refreshed color palette

We've revamped our color palette to include all new Sass variables, CSS variables, and utilities for setting `color`, `background-color`, and `border-color`. Our foreground and background colors have been expanded to include new secondary, tertiary, and emphasis colors, while our theme colors have been expanded on to include their subtle background colors, subtle border colors, and darker text colors.

[Check out the new colors docs.](https://getbootstrap.com/docs/5.3/customize/color/#colors)

We’ve rebuilt some components (like list groups and alerts) to use these new variables in their source Sass and compiled CSS so that they respond to the color mode changes.

<!-- markdownlint-disable no-inline-html -->
<div class="d-flex gap-3">
  <a href="https://getbootstrap.com/docs/5.3/customize/colors/">
    <img src="/assets/img/2023/05/colors-light-mode.png" alt="New colors in light mode" class="rounded-2 img-thumbnail" loading="lazy" width="1610" height="5778">
  </a>
  <a href="https://getbootstrap.com/docs/5.3/customize/colors/">
    <img src="/assets/img/2023/05/colors-dark-mode.png" alt="New colors in dark mode" class="rounded-2 img-thumbnail" loading="lazy" width="1610" height="5778">
  </a>
</div>
<!-- markdownlint-enable no-inline-html -->

## New link helpers and utilities

Link styling has infinitely better in v5.3.0 with a slew of all-new link helpers and utilities. First up, we've added styles to place icons like [Bootstrap Icons](https://icons.getbootstrap.com) alongside links with [the new icon link helper](https://getbootstrap.com/docs/5.3/helpers/icon-link/).

<!-- markdownlint-disable no-inline-html -->
{{< example >}}
<a class="icon-link" href="#">
  <svg class="bi" aria-hidden="true"><use xlink:href="#archive"></use></svg>
  Icon link
</a>
{{< /example >}}

{{< example >}}
<a class="icon-link" href="#">
  Icon link
  <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right-short"></use></svg>
</a>
{{< /example >}}
<!-- markdownlint-enable no-inline-html -->

Our other new helper is a [new focus ring helper](https://getbootstrap.com/docs/5.3/helpers/focus-ring/) for removing the default `outline` and setting a custom `box-shadow` focus ring.

```html
<a href="#" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2">
  Custom focus ring
</a>
```

On the utilities side, we have new classes for setting link color opacity, underline offset, underline color, and underline opacity. [Explore the new links utilities.](https://getbootstrap.com/docs/5.3/utilities/link/)

```html
<p><a class="link-opacity-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-100" href="#">Link opacity 100</a></p>
```

```html
<p><a href="#">Default link</a></p>
<p><a class="link-offset-1" href="#">Offset 1 link</a></p>
<p><a class="link-offset-2" href="#">Offset 2 link</a></p>
<p><a class="link-offset-3" href="#">Offset 3 link</a></p>

<p><a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Custom link</a></p>
```

Lastly, we've added a new `.link-body-emphasis` helper alongside our [colored links](https://getbootstrap.com/docs/5.3/helpers/colored-links/). This creates a colored link using our color mode responsive emphasis color.

```html
<p><a href="#" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Emphasis link</a></p>
```

## New nav underline

There's a new `.nav` variant and modifier class with `.nav-underline`. Add `.nav-underline` to a `.nav` to get a simpler bottom border under the active nav link. [See the docs for an example.](https://getbootstrap.com/docs/5.3/components/navs-tabs/#underline)

<!-- markdownlint-disable no-inline-html -->
{{< example >}}
<ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
{{< /example >}}
<!-- markdownlint-enable no-inline-html -->

## And much more!

Beyond all the color mode updates, new helpers, and new utilities, we have a ton of other quality-of-life updates in this release. Here's a quick rundown of the highlights:

- Navs now have new `:focus-visible` styles that better match our custom button focus styles.

- CSS variable-based `border-width` utilities have been reverted to set their property directly (as was done before v5.2.0). This avoids inheritance issues across nested elements, including tables.

- Added new `.border-black` utility to match our `.text-black` and `.bg-black` utilities.

- Deprecated the `.text-muted` utility and `$text-muted` Sass variable. It's been replaced by `.text-body-secondary` and `$body-secondary-color`.

- Added a check for interpolated variables to catch compilation errors with Node Sass when using Sass variables in `calc()` functions.

- Started using `--bs-border-radius` variables across more components.

- Added `.d-inline-grid` utility class.

- Fixed `.tooltip-inner` placement when using variations in `fallbackPlacements`.

- Fix selectors for dark mode carousel overrides when compiling with `$color-mode-type: media-query`.

- Updated the styling of floating labels when "floated" to include a `background-color` to help with multiple lines of text in `textarea`s. This also fixes the colors when form elements are disabled in floating forms.

- Updated RFS to v10.0.0.

## Next up

We'll be shipping some patch releases for v5.3.x in the coming weeks to address any issues that come up. We'll also be working on v5.4.0, which will primarily focus on improvements to our utilities API and related code. Stay tuned for more updates on that front!

## Migrating from earlier alphas

Have a read through the [Migration guide](https://getbootstrap.com/docs/5.3/migration/#v530-alpha1) for the first alpha, or [the blog post for the release announcement](/2022/12/24/bootstrap-5-3-0-alpha1/), if you're just getting into v5.3.0.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.0
```

[Read the GitHub v5.3.0 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.0) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
