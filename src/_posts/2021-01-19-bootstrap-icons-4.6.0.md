---
layout: post
title: Bootstrap v4.6.0
video: LuN6gs0AJls
date: 2021-01-19 21:30:00
author: mdo
---

Bootstrap v4.6.0 is here with a couple new features, several bugfixes, and some awesome documentation updates to make v4 more maintainable alongside our development of v5.

Read on for the highlighted changes.

## Changes

Also available in the [v4.6.0 release on GitHub](https://github.com/twbs/bootstrap/releases/tag/v4.6.0).

### Highlights

- Tooltips and popovers can have custom clases via `customClass` option.
- Spinners now slow down when `prefers-reduced-motion` is enabled.
- v4.x docs are now built on Hugo for easier maintenance and backports from v5.x.
- Darkened `background-color` of `.dropdown-item` for improved hover state contrast, and ligthened the disabled `.dropdown-item` `color`.
- Improved alignment of form validation tooltips.
- File inputs no longer extend beyond their containers.

### CSS

- [#31557](https://github.com/twbs/bootstrap/pull/31557): Fix form validation tooltip alignment
- [#31657](https://github.com/twbs/bootstrap/pull/31657): Handle the Ubuntu sans-serif case
- [#31700](https://github.com/twbs/bootstrap/pull/31700): Suppress flexbox side effects in breadcrumb
- [#31882](https://github.com/twbs/bootstrap/pull/31882): Slow down spinners when prefers-reduced-motion
- [#31886](https://github.com/twbs/bootstrap/pull/31886): Fixed: Undefined mixin "deprecate" when importing "bootstrap-grid-scss"
- [#32141](https://github.com/twbs/bootstrap/pull/32141): Use correct value order
- [#32145](https://github.com/twbs/bootstrap/pull/32145): Avoid invisible real file input "spilling" out of container
- [#32160](https://github.com/twbs/bootstrap/pull/32160): Add overflow suppression to custom file label
- [#32211](https://github.com/twbs/bootstrap/pull/32211): Move negative margin-bottom from .nav-item to .nav-link
- [#32212](https://github.com/twbs/bootstrap/pull/32212): Remove needless Stylelint disables
- Add two new variables for pagination border-radius values; backport of [#32423](https://github.com/twbs/bootstrap/pull/32423)
- Remove old/unnecessary reboot bug fix; backport of [#32631](https://github.com/twbs/bootstrap/pull/32631)
- Suppress focus outline for buttons when it shouldn't be visible in Chromium; backport of [#32689](https://github.com/twbs/bootstrap/pull/32689)
- Consistently use `outline:0` rather than `outline:none`; backport of [#32751](https://github.com/twbs/bootstrap/pull/32751)
- Darken dropdown item hover style; backport of [#32754](https://github.com/twbs/bootstrap/pull/32754)
- Lighten disabled dropdown text to `$gray-500`

### JS

- [#31820](https://github.com/twbs/bootstrap/pull/31820): Check for data-interval on the first slide of carousel
- [#31834](https://github.com/twbs/bootstrap/pull/31834)/[#32225](https://github.com/twbs/bootstrap/pull/32225): tooltip/popover: add a `customClass` option
- [#32001](https://github.com/twbs/bootstrap/pull/32001): Move `js/src/index.js` one folder up
- [#32045](https://github.com/twbs/bootstrap/pull/32045): tests: fix sanitizer test
- [#32220](https://github.com/twbs/bootstrap/pull/32220): Don't hide modal when `config.keyboard` is false
- [#32312](https://github.com/twbs/bootstrap/pull/32312): build-plugins: switch to "bundled" for babel helpers

### Docs

- [#31861](https://github.com/twbs/bootstrap/pull/31861): Split up dropdown sizing docs to improve rendering
- [#31892](https://github.com/twbs/bootstrap/pull/31892): Remove redundant visually hidden "(current)" from pagination controls
- [#31893](https://github.com/twbs/bootstrap/pull/31893): manifest.json: Switch to relative URLs so that we don't need to change the path with every major/minor release
- [#31898](https://github.com/twbs/bootstrap/pull/31898): switch to suggesting jsDelivr as a CDN
- [#31904](https://github.com/twbs/bootstrap/pull/31904):
  - docs(forms): use a legend for fieldset instead of aria-label
  - docs(forms): fix incorrect legend nesting in fieldset
- [#31936](https://github.com/twbs/bootstrap/pull/31936): forms: change inline custom radio name
- [#31951](https://github.com/twbs/bootstrap/pull/31951): Update anchor-js to v4.3.0
- [#31960](https://github.com/twbs/bootstrap/pull/31960): Explicitly mention emoji fonts, tweak sentence in typography
- [#31981](https://github.com/twbs/bootstrap/pull/31981): list-group.md: fix snippet
- [#32005](https://github.com/twbs/bootstrap/pull/32005): Remove `bugreport.apple.com` since it doesn't work
- [#32015](https://github.com/twbs/bootstrap/pull/32015): Fix redirects
- [#32050](https://github.com/twbs/bootstrap/pull/32050): Make docs anchorjs links darker on keyboard focus
- [#32054](https://github.com/twbs/bootstrap/pull/32054): Add callouts about using light colors ideally on a dark background
- [#32077](https://github.com/twbs/bootstrap/pull/32077): Switch to Hugo
- [#32083](https://github.com/twbs/bootstrap/pull/32083): mention "Liberation Sans"
- [#32087](https://github.com/twbs/bootstrap/pull/32087): download.md: link to JS files comparison too
- [#32094](https://github.com/twbs/bootstrap/pull/32094): Changes to navbar documentation/explanation
- [#32106](https://github.com/twbs/bootstrap/pull/32106): Clarify JS bundle docs once more for v4
- [#32137](https://github.com/twbs/bootstrap/pull/32137): input-group.md: fix wrong class `.visually-hidden`
- [#32138](https://github.com/twbs/bootstrap/pull/32138): navbar.md: remove `loading=lazy` from snippets
- [#32147](https://github.com/twbs/bootstrap/pull/32147): Fix caniuse.com redirects
- [#32151](https://github.com/twbs/bootstrap/pull/32151): Mention user-select-all support in docs
- [#32196](https://github.com/twbs/bootstrap/pull/32196): homepage: split snippets and show copy buttons
- [#32203](https://github.com/twbs/bootstrap/pull/32203): Switch to jsDelivr for the remaining docs assets
- [#32223](https://github.com/twbs/bootstrap/pull/32223): introduction: split comments
- [#32247](https://github.com/twbs/bootstrap/pull/32247): Fix typos in tooltip/popover docs
- [#32253](https://github.com/twbs/bootstrap/pull/32253): Add Russian translation
- [#32363](https://github.com/twbs/bootstrap/pull/32363): Remove useless `.text-left` in Layout / Overview
- [#32399](https://github.com/twbs/bootstrap/pull/32399): Remove duplicated "follow Bootstrap on Twitter" link in Community section
- [#32457](https://github.com/twbs/bootstrap/pull/32457): Add mention of the bs-custom-file-input plugin needed for the custom file input
- [#32461](https://github.com/twbs/bootstrap/pull/32461): style clipboard button on `:focus`, not just `:hover`
- [#32462](https://github.com/twbs/bootstrap/pull/32462): Replace Lorem Ipsum placeholder text with more representative (or at least english language) text
- [#32634](https://github.com/twbs/bootstrap/pull/32634): Remove incorrect mention of dropdowns for dynamic tab behavior
- [#32639](https://github.com/twbs/bootstrap/pull/32639): v4: Add an actual `data-touch="false"` example in the carousel docs
- [#32728](https://github.com/twbs/bootstrap/pull/32728): add v5.0 in versions
- [#32761](https://github.com/twbs/bootstrap/pull/32761): Mention stretched-link constraints with table elements
- [#32789](https://github.com/twbs/bootstrap/pull/32789): Remove `role="button"` from CTA links in carousel example
- [#32791](https://github.com/twbs/bootstrap/pull/32791): Docs v4: Sass implementation and rounding precision
- [#32809](https://github.com/twbs/bootstrap/pull/32809):
  - Clarify Sass import and customize docs for how to modify variable defaults
  - Add an npm starter project callout to a few pages
- [#32827](https://github.com/twbs/bootstrap/pull/32827): Add a live toast example to the docs
- docs(dropdowns): clarify where is `.show` applied
- Require `.has-validation` for input groups with validation
- Fix mobile menu jump & double border
- Remove double spaces from homepage SVGs
- browserconfig.xml: switch to relative image path
- Tweak the wording for collapse to indicate button is preferred/more semantic; backport of [#32632](https://github.com/twbs/bootstrap/pull/32632)
- Clarify the `$enable-shadows` option in our docs; backport of [#32685](https://github.com/twbs/bootstrap/pull/32685)

### Examples

- [#31979](https://github.com/twbs/bootstrap/pull/31979): v4 Examples/Floating-labels: fix bad behavior with autofill
- [#32198](https://github.com/twbs/bootstrap/pull/32198): examples: add the version number in `title`

### Misc

- [#29753](https://github.com/twbs/bootstrap/pull/29753): Improve build/generate-sri.js regex
- [#32003](https://github.com/twbs/bootstrap/pull/32003): CI: switch to Node.js 14
- [#32008](https://github.com/twbs/bootstrap/pull/32008): Update Edge's Rendering Engine on CONTRIBUTING.md
- [#32486](https://github.com/twbs/bootstrap/pull/32486): BrowserStack: test on macOS Catalina instead of High Sierra
- [#32756](https://github.com/twbs/bootstrap/pull/32756): Stylelint: disallow some property values
- **Fix for npm 7.x** package.json: move `version_short` variable under the `config` object; backport of [#32737](https://github.com/twbs/bootstrap/pull/32737)
- Update build-examples script so that the resulting examples zip file includes only the needed files
- Various CI tweaks
- Updated devDependencies

[Head to the v4.6 docs](https://getbootstrap.com/docs/4.6/) to see the latest in action. The full release has been published to npm and will soon appear on jsDelivr and Rubygems.

## Next up

Our second beta of v5 is coming. We're working on ironing on some kinks from the update to Popover 2, which has taken longer than expected. This affects our dropdowns, popovers, and tooltips. Once some of the major issues are resolved, we'll ship our next beta.

Please keep the feedback coming on what we can improve, how our releases are performing, and any other suggestions.

## Support the team

Visit our [Open Collective page](https://opencollective.com/bootstrap) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
