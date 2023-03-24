---
author: mdo
date: "2023-03-24T14:40:00Z"
title: Bootstrap 5.3.0-alpha2
keywords:
  - bootstrap
  - release
---

Our second alpha release of v5.3.0 has landed with a ton of enhancements and bug fixes for our new color modes! There's still more to come, but we've held off shipping until we ironed out enough issues. Huzzah, we have!

This v5.3.0 release is a monumental update for Bootstrap 5. It's big enough that it could've been a v6 on its own, but we wanted to do right by the community and get color modes out the door without the massive major release upgrade. We're getting super close now, so bear with us as we continue to chip away at this.

And, in the meantime, here's the rundown on what's changed since our first alpha. Have a read through the [Migration guide](https://getbootstrap.com/docs/5.3/migration/#v530-alpha1) for the first alpha, or [the blog post for the release announcement](/2022/12/24/bootstrap-5-3-0-alpha1/), if you're just getting into v5.3.0.

### CSS variables

- Removed several duplicate and unused root CSS variables.

### Color modes

- Dark mode colors are now derived from our theme colors (e.g., `$primary`) in Sass, rather than color-specific tints or shades (e.g., `$blue-300`). This allows for a more automated dark mode when customizing the default theme colors.

- Added Sass maps for generating theme colors for dark mode text, subtle background, and subtle border.

- [Snippet examples](https://getbootstrap.com/docs/5.3/examples/#snippets) are now ready for dark mode with updated markup and reduced custom styles.

- Added `color-scheme: dark` to dark mode CSS to change OS level controls like scrollbars

- Form validation `border-color` and text `color` states now respond to dark mode, thanks to new Sass and CSS variables.

- Dropped recently added form control background CSS variables and reassigned the Sass variables to use CSS variables instead. This simplifies the styling across color modes and avoids an issue where form controls in dark mode wouldn't update properly.

- Our `box-shadow`s will once again always stay dark instead of inverting to white when in dark mode.

- Improved HTML and JavaScript for our color mode toggle script. The selector for changing the active SVG has been improved, and the markup made more accessible with ARIA attributes.

- Improved docs code syntax colors and more across light and dark modes.

- Removed the ability to nest light mode components within dark mode. This was super incomplete unfortunately and just isn't practical without quadrupling our selectors for every component. Maybe in v6!

### Typography

- We no longer set a color for `$headings-color-dark` or `--bs-heading-color` for dark mode. To avoid several problems of headings within components appearing the wrong color, we've set the Sass variable to `null` and added a `null` check like we use on the default light mode.

### Components

- Cards now have a `color` set on them to improve rendering across color modes.

- Added a new `.nav-underline` variant for our navigation with a simpler bottom border under the active nav link. [See the docs for an example.](https://getbootstrap.com/docs/5.3/components/navs-tabs/#underline)

- Navs now have new `:focus-visible` styles that better match our custom button focus styles.

### Helpers

- Added a new `.icon-link` helper to quickly place and align Bootstrap Icons alongside a textual link. Icon links support our new link utilities, too.

- Added a new focus ring helper for removing the default `outline` and setting a custom `box-shadow` focus ring.

### Utilities

- Renamed Sass and CSS variables `${color}-text` to `${color}-text-emphasis` to match their associated utilities.

- Added new `.link-body-emphasis` helper alongside our [colored links](https://getbootstrap.com/docs/5.3/helpers/colored-links/). This creates a colored link using our color mode responsive emphasis color.

- Added new link utilities for link color opacity, underline offset, underline color, and underline opacity. [Explore the new links utilities.](https://getbootstrap.com/docs/5.3/utilities/link/)

- CSS variable-based `border-width` utilities have been reverted to set their property directly (as was done before v5.2.0). This avoids inheritance issues across nested elements, including tables.

- Added new `.border-black` utility to match our `.text-black` and `.bg-black` utilities.

- <span class="badge text-warning-emphasis bg-warning-subtle">Deprecated</span> Deprecated the `.text-muted` utility and `$text-muted` Sass variable. It's been replaced by `.text-body-secondary` and `$body-secondary-color`.

### Docs

- Updated docs page table of contents to use Scrollpy (shoutout to our v3 docs!).
- Revamped syntax highlighting colors for code snippets across color modes.
- Improved content and rendering of several docs callouts.
- Document more color mode features and usage suggestions.
- Added theme toggling to examples pages.
- Updated dependencies across the board, including in our guides.

## Known issues

While not an exhaustive list, here's some of the stuff we're going to be working on before calling this release stable. You can track these and more in the [v5.3.0-stable project on GitHub](https://github.com/orgs/twbs/projects/18).

- Add new functionality to utilities with mixins and functions.
- Some components need another pass at enabling full-color mode responsiveness. _Bear in mind, some components like buttons won't get full-color mode adaptivity until v6._
- Labels in disabled floating forms have incorrect rendering.
- Docs need to be updated for modifying theme colors across color modes.
- Examples need another pass for dark mode support, new screenshots, and more.
- Improve click/tap area for range inputs.

Up next will be the stable release of v5.3.0. Originally this was planned as a beta, but I think we're getting close enough to call this final with one more release.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.0-alpha2
```

[Read the GitHub v5.3.0-alpha2 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.0-alpha2) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
