---
layout: post
title: Bootstrap 3 RC2
---

We've just cut a new release for Bootstrap 3, RC2. It's a big RC2 and lots more has changed, but that should all be for the better. Thanks everyone who's given feedback and submitted pull requests thus far—we're getting super close!

## Key changes from RC1

Without listing all the minor changes, here's a quick overview of the changes. For a full set of commits since RC1, [compare the last commits of each release](https://github.com/twbs/bootstrap/compare/9c63ffa00fd55c7e61c51b58778b06b28f93e1a8...6b850132d056a136dc4734c4d68c9e1c23b7843e).

* **Docs changes:**
  * The Customizer is back!
  * Added new mention to our [browser compatibility docs](http://getbootstrap.com/getting-started/#browsers) to highlight the workaround for Internet Explorer 10 in Windows Phone 8 not picking up media queries. [See #9171.](https://github.com/twbs/bootstrap/pull/9171)
  * Added new section to the Getting Started page for documenting [third party and addon compatibility](http://getbootstrap.com/getting-started/#third-parties) issues. [See #9175.](https://github.com/twbs/bootstrap/pull/9175)
  * Huge accessibility update to the docs and components. Adds [new Accessibility section](http://getbootstrap.com/getting-started/#accessibility), lots of new aria and and role attributes, and more for improved 508 and WCAG compliancy. [See #9186.](https://github.com/twbs/bootstrap/pull/9186)

* **BS2 Theme:**
  * The first pass at the v2 theme has been added.
  * Adds gradients, shadows, and more to key components to mimic the style of Bootstrap 2.

* **Global CSS changes:** 
    * Update vertical and horizontal gradients to make start and end color parameters come first, then start and end positions. [Fixes #9049.](https://github.com/twbs/bootstrap/issues/9049)
    * Make `.pull-right` and `.pull-left` classes use `!important` to avoid needing overrides due to specificity (like in navbar, button groups, etc). [See #8697.](https://github.com/twbs/bootstrap/issues/8697)
    * Lots of variable additions to components.
  * Updated gradients to not include `background-color` for improved use of `rgba()` colors within mixins. [See #8877](https://github.com/twbs/bootstrap/pull/8877)
  
* **Buttons:**
  * Buttons and inputs, and their large counterparts, are now a bit shorter.
  * New default button styles and higher contrast on `:hover` and `:active` states. [Fixes #8786.](https://github.com/twbs/bootstrap/issues/8786)
  * New classes for size modifier classes—instead of `.btn-mini`, `.btn-small`, or `.btn-large`, we now have `.btn-xs`, `.btn-sm`, and `.btn-lg`. [See #9056.](https://github.com/twbs/bootstrap/pull/9056)

* **Forms:**
  * Similar to the new button classes, we have new input size classes: `.input-sm` and `.input-lg`. [See #9056.](https://github.com/twbs/bootstrap/pull/9056)
  * Input focus states now generated via variable and mixin. Use the `@input-focus-border` variable and `.form-control-focus` mixin to generate a custom `border-color` and `box-shadow`. [See commit .](http://) * Size modifier classes for large and small components—including buttons, form inputs, pagination, and wells—have all been standardized to use `-sm` or `-lg`. [See #9056 for details.](https://github.com/twbs/bootstrap/pull/9056)
  * Added `.static-form-control` to account for static, placeholder text in horizontal form layouts. [Fixes #8150.](https://github.com/twbs/bootstrap/issues/8150)

* **Grid system:**
  * `.row`s only have negative left and right margins if they sit within a `.container`. This resolves the horizontal scrollbar issue for folks with full page containers (restoring the full behavior of the old fluid container from 2.x). [See #8959 for details.](https://github.com/twbs/bootstrap/issues/8959)
  * Grid now includes offset, push, and pull classes for each break point [See #8974 for details.](https://github.com/twbs/bootstrap/pull/8974)
  * Updated mixins to include ability to specify gutter width as a second parameter. [See #8935 for details.](https://github.com/twbs/bootstrap/pull/8935)

* **Navbar:**
  * Added new `.nav-collapse-scrollable` to account for navbers with hella content. Add it to your responsive navbar's `.nav-collapse` and you'll get some `overflow` and scrolling awesome sauce. See for details. (Note that this couldn't be applied to the entire navbar because it fubars `z-index` in iOS.)
  * Fixed overlap of navbar nav and toggle when no brand is present. [See #8749.](https://github.com/twbs/bootstrap/issues/8749)

* **Miscellaneous component changes:**
  * Dropped `.alert-block` for a simpler `.alert`.
  * Linked panel titles now inherit their color. Fixes [#9061](https://github.com/twbs/bootstrap/issues/9061).
  * List groups in panels no longer require `.list-group-flush`.
  * Labels now require `.label-default` for the "default" gray option. [See #9123.](https://github.com/twbs/bootstrap/pull/9123)
  * Labels now collapse automatically (not in IE8) when empty. [See #9241.](https://github.com/twbs/bootstrap/issues/9241)

-----

Head on over to the docs to download and explore the new hotness in RC2.

<3
