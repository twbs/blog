---
layout: post
title: Bootstrap 3 RC2
---

<iframe width="600" height="450" src="//www.youtube.com/embed/wiyYozeOoKs?rel=0" frameborder="0" allowfullscreen></iframe>

We've just cut a new release for Bootstrap 3, RC2. It's a big release as lots has changed, but that should all be for the better. Thanks everyone who's given feedback and submitted pull requests thus far—we're getting super close!


## Key changes from RC1

Without listing all the minor changes (there have been over 500 commits since RC1!), here's a quick overview of the changes.

* **Docs changes:**
  * The Customizer is back! Still needs some work, but functionality has been rewritten and will be improved as we head to final release.
  * Added new mention to our [browser compatibility docs](http://getbootstrap.com/getting-started/#browsers) to highlight the workaround for Internet Explorer 10 in Windows Phone 8 not picking up media queries. [See #9171.](https://github.com/twbs/bootstrap/pull/9171)
  * Added new section to the Getting Started page for documenting [third party and addon compatibility](http://getbootstrap.com/getting-started/#third-parties) issues. [See #9175.](https://github.com/twbs/bootstrap/pull/9175)
  * Added [new Accessibility section](http://getbootstrap.com/getting-started/#accessibility), lots of new aria and role attributes, and more for improved 508 and WCAG compliancy. [See #9186.](https://github.com/twbs/bootstrap/pull/9186) Also improved used of more semantic HTML5 elements in docs per [#9332](https://github.com/twbs/bootstrap/pull/9332), [#9347](https://github.com/twbs/bootstrap/pull/9347), and [#9352](https://github.com/twbs/bootstrap/pull/9352).
  * Added HTML validation tests, and made any existing failures pass. [See #9396.](https://github.com/twbs/bootstrap/pull/9396)

* **Global CSS changes:**
  * Update vertical and horizontal gradients to make start and end color parameters come first, then start and end positions. [Fixes #9049.](https://github.com/twbs/bootstrap/issues/9049)
  * Make `.pull-right` and `.pull-left` classes use `!important` to avoid needing overrides due to specificity (like in navbar, button groups, etc). [See #8697.](https://github.com/twbs/bootstrap/issues/8697)
  * Lots of variable additions to components.
  * Updated gradients to not include `background-color` for improved use of `rgba()` colors within mixins. [See #8877](https://github.com/twbs/bootstrap/pull/8877)

* **Grid system:**
  * Overhauled grid system to include four tiers instead of the original three of RC1. We now have `.col-xs` (phones), `.col-sm` (tablets), `.col-md` (desktops), and `.col-lg` (large desktops). Responsive utilities have been updated to match these new tiers as well. [See relevant commit](https://github.com/twbs/bootstrap/commit/a2b9988eb908e5b95fb253aac7fde0fbd61c375e).
  * `.row`s only have negative left and right margins if they sit within a `.container`. This resolves the horizontal scrollbar issue for folks with full page containers (restoring the full behavior of the old fluid container from 2.x). [See #8959.](https://github.com/twbs/bootstrap/issues/8959)
  * Grid now includes offset, push, and pull classes for each break point [See #8974.](https://github.com/twbs/bootstrap/pull/8974)
  * Updated mixins to include ability to specify gutter width as a second parameter. [See #8935.](https://github.com/twbs/bootstrap/pull/8935)

* **Buttons:**
  * Buttons and inputs, and their large counterparts, are now a bit shorter.
  * New default button styles and higher contrast on `:hover` and `:active` states. [Fixes #8786.](https://github.com/twbs/bootstrap/issues/8786)
  * New classes for size modifier classes—instead of `.btn-mini`, `.btn-small`, or `.btn-large`, we now have `.btn-xs`, `.btn-sm`, and `.btn-lg`. [See #9056.](https://github.com/twbs/bootstrap/pull/9056)
  * New button group sizing classes: just add `.btn-group-xs`, `.btn-group-sm`, or `.btn-group-lg` to any `.btn-group` and you're good to go. [See #9295.](https://github.com/twbs/bootstrap/pull/9295)

* **Forms:**
  * Similar to the new button classes, we have new input size classes: `.input-sm` and `.input-lg`. [See #9056.](https://github.com/twbs/bootstrap/pull/9056)
  * Input focus states now generated via variable and mixin. Use the `@input-focus-border` variable and `.form-control-focus` mixin to generate a custom `border-color` and `box-shadow`. [See commit .](http://) * Size modifier classes for large and small components—including buttons, form inputs, pagination, and wells—have all been standardized to use `-sm` or `-lg`. [See #9056.](https://github.com/twbs/bootstrap/pull/9056)
  * Inline forms now require the use of `.form-group`, [per #9382](https://github.com/twbs/bootstrap/issues/9382), to properly align and size all (native and custom) form controls. This also helps make form markup more consistent and flexible (just swap a class), so woohoo!
  * Added `.static-form-control` to account for static, placeholder text in horizontal form layouts. [Fixes #8150.](https://github.com/twbs/bootstrap/issues/8150)
  * New input group sizing classes: just add `.input-group-sm` or `.input-group-lg` to any `.input-group` and you're good to go. [See #9295.](https://github.com/twbs/bootstrap/pull/9295)

* **Dropped accordion for updated panel.**
  * We've removed the accordion and instead chosen to extend the panel component to provide the same functionality. [See #9404](https://github.com/twbs/bootstrap/pull/9404).

* **Navbar:**
  * Overhauled navbar to always be responsive and mobile first.
    * Navbars now require a `.navbar-header` to wrap up brand and toggle.
    * `.nav-collapse` has been renamed to `.navbar-collapse` and automatically hits a max-height and will overflow to keep your nav content in the same viewport.
    * [See details in #9403.](https://github.com/twbs/bootstrap/pull/9403)
  * Navbar's no longer use `.pull-left` or `.pull-right`, but rather `.navbar-left` and `.navbar-right`. This avoids issues with specificity due to chaining classes and enables easier styling.


* **Miscellaneous component changes:**
  * Alerts that are to be dismissed now require `.alert-dismissable` to properly pad the alert and align the close button. [See #9310](https://github.com/twbs/bootstrap/issues/9310).
  * Responsive utilities are now mixin-able thanks to [#9211](https://github.com/twbs/bootstrap/issues/9211).
  * Dropped `.alert-block` for a simpler `.alert`.
  * Linked panel titles now inherit their color. Fixes [#9061](https://github.com/twbs/bootstrap/issues/9061).
  * List groups in panels no longer require `.list-group-flush`.
  * Labels now require `.label-default` for the "default" gray option. [See #9123.](https://github.com/twbs/bootstrap/pull/9123)
  * Labels now collapse automatically (not in IE8) when empty. [See #9241.](https://github.com/twbs/bootstrap/issues/9241)


## What's left?

RC2 takes care of nearly all our bugs that have been filed thus far, but we have a few more to address before our final release. [Check the issues](https://github.com/twbs/bootstrap/issues?state=open) to see what's there already if you run into any problems. If you do find something, open a new issue with an example to reproduce it (jsbin or jsfiddle are awesome!) or submit a pull request.

-----

[Head on over to the docs](http://getbootstrap.com) to download and explore the new hotness in RC2.

<3
