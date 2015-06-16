---
layout: post
title: Bootstrap 3.0.3 released
video: young mc bust a move
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/xy4FXhkm6Nw?rel=0" width="760" height="428" allowfullscreen></iframe>
</div>

Today we're shipping another patch release, v3.0.3, to fix a few dozen bugs and improve our documentation.

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.0.3.zip">Download Bootstrap 3.0.3</a> or hit the [GitHub repository](https://github.com/twbs/bootstrap)

-----

### Key changes

There are a few dozen bug fixes and changes in this release, but we've called out the ones we think matter most:

* Padding of `.navbar-collapse` and alignment of `.navbar-right:last-child` elements has been reworked.
* Added a `max-width: 100%;` to `.container`s.
* Restored the twelfth column's `float: left;` at all grid tiers.

See the list below for more information on those changes and more.

### Specific bug fixes and changes

- [#9927](https://github.com/twbs/bootstrap/issues/9927): Update non-responsive example to prevent `.navbar-collapse` border from increasing height and increase specificity of nav selectors to keep dropdowns looking the same.
- [#10147](https://github.com/twbs/bootstrap/issues/10147): Remove outline from carousel controls on focus.
- [#10353](https://github.com/twbs/bootstrap/issues/10353): Tell Bower to ignore development and documentation files.
- [#10483](https://github.com/twbs/bootstrap/issues/10483), [#10357](https://github.com/twbs/bootstrap/issues/10357): Make .container mixin-friendly by moving the width declarations within one class.
- [#10662](https://github.com/twbs/bootstrap/issues/10662): Enable individually linked images within thumbnails.
- [#10744](https://github.com/twbs/bootstrap/issues/10744): Use `border-style: solid;` on `.caret`s to undo a previous Firefox fix that appears to no longer work.
- [#10936](https://github.com/twbs/bootstrap/issues/10936): Increase height of large inputs to fix Firefox inconsistencies by using `ceil()` instead of `floor()`.
- [#10941](https://github.com/twbs/bootstrap/issues/10941): Fix Glyphicons path for those importing `bootstrap.less` from another directory.
- [#10979](https://github.com/twbs/bootstrap/issues/10979): Don't use `.img-thumbnail` as a mixin for `.thumbnail` to avoid duplicate and unnecessary styles.
- [#11217](https://github.com/twbs/bootstrap/issues/11217): Fix vertical alignment of labels within buttons, just like badges in buttons.
- [#11268](https://github.com/twbs/bootstrap/issues/11268): Account for badges within buttons by matching background to text color and text color to background.
- [#11277](https://github.com/twbs/bootstrap/issues/11277): Drop the `abbr` element from the `.initialism` selector.
- [#11299](https://github.com/twbs/bootstrap/issues/11299): Support `.h1` in jumbotrons.
- [#11351](https://github.com/twbs/bootstrap/issues/11351): Correct grid class reset on input groups by using attribute selector, not an old class from v3 betas.
- [#11357](https://github.com/twbs/bootstrap/issues/11357): Vertically center `.btn-sm` and `.btn-xs` variations of `.navbar-btn`s in the navbar.
- [#11376](https://github.com/twbs/bootstrap/issues/11376): Don't deselect radio buttons when double clicking.
- [#11387](https://github.com/twbs/bootstrap/issues/11387): Improve nesting on table classes to enable easier use of mixins.
- [#11388](https://github.com/twbs/bootstrap/issues/11388): Simplify contextual table styles mixin (also drops the `border` parameter since we longer apply that anyway).
- [#11390](https://github.com/twbs/bootstrap/issues/11390): Add `max-width: 100%;` to containers within jumbotrons to avoid horizontal scrollbar.
- [#11402](https://github.com/twbs/bootstrap/issues/11402): Set `width: auto;` on `select.form-control` within `.form-inline`.
- [#11414](https://github.com/twbs/bootstrap/issues/11414): Add `.small` support to blockquote citations.
- [#11425](https://github.com/twbs/bootstrap/issues/11425): Use `margin` instead of `padding` on `.modal-dialog` to click-thru to `.modal-backdrop`.
- [#11432](https://github.com/twbs/bootstrap/issues/11432): Corrected color contrast to WCAG 2.0 AA for `@state-` variables (applies to forms and labels).
- [#11444](https://github.com/twbs/bootstrap/issues/11444): Use `@navbar-padding-vertical` for nav links vertical padding.
- [#11449](https://github.com/twbs/bootstrap/issues/11449): Prefer Menlo over Monaco for monospaced fonts.
- [#11468](https://github.com/twbs/bootstrap/issues/11468): Prevent default gradient `background-image` on `.navbar-toggle` in Firefox for Android.
- [#11476](https://github.com/twbs/bootstrap/issues/11476): Remove unnecessary prefixed keyframe declarations for animated progress bars. Given our browser support requirements, we can drop the `-moz-` prefix as the last several versions don't require it.
- [#11477](https://github.com/twbs/bootstrap/issues/11477): Use namespace events for dropdowns and carousel.
- [#11493](https://github.com/twbs/bootstrap/issues/11493): Ensure proper width of dropdown buttons within vertical button groups.
- [#11499](https://github.com/twbs/bootstrap/issues/11499): Switch from `overflow-y: auto;` to `overflow-y: visible;` to prevent vertical scrollbar in some navbar situations.
- [#11502](https://github.com/twbs/bootstrap/issues/11502): Add missing data namespace for dropdown plugin.
- [#11513](https://github.com/twbs/bootstrap/issues/11513): Float `navbar-text` elements only when screen width is above `@grid-float-breakpoint`.
- [#11515](https://github.com/twbs/bootstrap/issues/11515): Reorder the headings with body text and text emphasis classes.
- [#11516](https://github.com/twbs/bootstrap/issues/11516): Invert dropdown divider border in navbars.
- [#11530](https://github.com/twbs/bootstrap/issues/11530): Reworked `padding` on `.navbar-collapse` and negative `margin` for right-aligned navbar content to ensure proper alignment on the right side.
- [#11536](https://github.com/twbs/bootstrap/issues/11536): Add support for button dropdowns within justified button groups.
- [#11544](https://github.com/twbs/bootstrap/issues/11544): Add `color: inherit;` to `.panel-title` to ensure proper text color when customizing `@headings-color`.
- [#11551](https://github.com/twbs/bootstrap/issues/11551): Remove color from `outline` reset for improved outlines on focus.
- [#11553](https://github.com/twbs/bootstrap/issues/11553): Prevent double border on tables in panels without `thead` content.
- [#11598](https://github.com/twbs/bootstrap/issues/11598): Remove line breaks in minified CSS.
- [#11599](https://github.com/twbs/bootstrap/issues/11599): Explicitly call out font files in `bower.json` to avoid npm errors.
- [#11610](https://github.com/twbs/bootstrap/issues/11610): Add `@grid-float-breakpoint-max` to better link navbar behavior across viewports and improve customization when setting `@grid-float-breakpoint`.
- [#11614](https://github.com/twbs/bootstrap/issues/11614): Account for responsive tables within panels.
- [#11617](https://github.com/twbs/bootstrap/issues/11617): Include jspm package configuration in `package.json`.
- [#11623](https://github.com/twbs/bootstrap/issues/11623): Reset `position` to `static` for grid columns within tables to prevent borders from hiding in IE9, IE10, and Firefox.
- [#11648](https://github.com/twbs/bootstrap/issues/11648): Restore twelfth column's float.
- [#11658](https://github.com/twbs/bootstrap/issues/11658): Increase `min-height` of `.radio`/`.checkbox` for horizontal forms to ensure alignment of content below.
- [#11693](https://github.com/twbs/bootstrap/issues/11693): Adds `.table` to responsive visibility mixin.
- [#11694](https://github.com/twbs/bootstrap/issues/11694): Remove unnecessary prefixes for gradient mixins given our stated browser support.
- [#11712](https://github.com/twbs/bootstrap/issues/11712): Better support for .table-responsive within .panel's.
- Removed browser default top margin from `dl`s. [Commit](https://github.com/twbs/bootstrap/commit/841da88f3fc93740cca07b6e4581a333d77964f0)

### Docs changes

Be sure to run `npm install` if you're running `grunt` locally—we've updated our build process and have some new dependencies.

- [#9898](https://github.com/twbs/bootstrap/issues/9898): Improve scrollspy and affix plugin documentation.
- [#10716](https://github.com/twbs/bootstrap/issues/10716): Update "What's included" docs section with info on full source code download directory structure.
- [#11303](https://github.com/twbs/bootstrap/issues/11303): Add link to the docs site in compiled assets, and remove personal usernames.
- [#11330](https://github.com/twbs/bootstrap/issues/11330): Add `overflow-x: hidden;` to `body` in offcanvas example to prevent horizontal scrolling.
- [#11369](https://github.com/twbs/bootstrap/issues/11369): Speed up jQuery and Twitter widgets on docs pages by using Google's CDN for jQuery and the async snippet from the Twitter dev site for the widgets.
- [#11385](https://github.com/twbs/bootstrap/issues/11385): Warn about Webkit bug for justified nav example.
- [#11409](https://github.com/twbs/bootstrap/issues/11409): Add release checklist to contributing guidelines.
- [#11412](https://github.com/twbs/bootstrap/issues/11412): Add `word-wrap: break-word;` to docs Glyphicons class names to ensure proper wrapping in IE10-11.
- [#11434](https://github.com/twbs/bootstrap/issues/11434): Mention form validation class changes in migration docs.
- [#11534](https://github.com/twbs/bootstrap/issues/11534): Document that modal `show()` and `hide()` return before animation finishes.
- [#11634](https://github.com/twbs/bootstrap/issues/11634): Add warning to docs to not combine icon classes with other elements.
- [#11671](https://github.com/twbs/bootstrap/issues/11671): Updated third party asset libraries (for Customizer and Holder, our thumbnail utility).
- [#11701](https://github.com/twbs/bootstrap/issues/11701): Switch to Sauce Labs for our cross-browser JS unit testing needs.
- Removed mention of Chrome from Webkit rendering bug for justified nav. [Commit](https://github.com/twbs/bootstrap/commit/4cbc8d49b10f707029019aaa5eba50e56390a3c5)

As always, get the details from the [v3.0.3 milestone](https://github.com/twbs/bootstrap/issues?milestone=24&page=1&state=closed).


## Up next

Next up is v3.1.0, the first new feature release for Bootstrap 3. Stay tuned for more information on what'll be in that release as we continue to plan out subsequent releases.

-----

<3,

[@mdo](https://twitter.com/mdo) and [team](https://github.com/twbs?tab=members)
