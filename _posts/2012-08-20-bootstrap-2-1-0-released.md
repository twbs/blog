---
layout: post
title: Bootstrap 2.1.0 released
---

After a smaller 2.0.4 release, we've got another huge update that resolves tons of bugs, improves the flexibility and durability of our code, and introduces a few awesome new features. It's a big release wrapped in a brand new set of docs and we couldn't be more stoked to launch it.

## tl;dr

New docs, affix plugin, submenus on dropdowns, block buttons, image styles, fluid grid offsets, new navbar, increased font-size and line-height, 120+ closed bugs, and more. [Go get it.](http://getbootstrap.com)

## Improved documentation

In addition to sporting a fresh visual style, the content of our docs has been overhauled once again. Good-bye long-winded marketing copy and multiple columns, hello succinct and directive single-column documentation. We've got a new tagline, new layout and navigation, and (more) clearer examples.

## Key changes and new features

We had higher expectations for the number of new features in 2.1, but we toned it back to get this release out the door in a manageable form. We've still added some great new features and fixed tones of bugs, so here's a brief overview of what's new.

* **Submenu support on dropdowns.** We avoided this for some time as we thought it would unnecessarily complicate things, but we've backtracked on that and opted to add them in. See the docs for more info.
* **Affix JavaScript plugin.** Make anything stick to the top of the viewport as you scroll with our newest plugin, built to power our new docs navigation.
* **Block level buttons.** Add `.btn-block` to a button to make it full-width.
* **State classes on table rows.** Better convey success, warning, and error messages in tables.
* **Improved disabled states on navs and dropdowns.** Where by "improve" we mean actually present&mdash;just add `.disabled` to the `li`.
* **The navbar component is now white by default, with an optional class to darken it.** In order to have two options for the navbar, light and dark, we needed to have better defaults. Having a lighter default navbar means fewer lines of code as we don't need to override anything for the basic navbar functionality and the override it again to restore the default styles. Missing the black? Just add `.navbar-inverse` to get the dark gray navbar back.
* **Improved prepended and appended inputs.** No need to place the `input` and `.add-on` on the same line of code (sorry about that by the way). Break them up as you like and they'll still stick together with some crafty `font-size` working.
* **New base font-size and line-height.** 13px/18px is out, 14px/20px is in. This also has changed the size, line-height, and margin of our heading elements, buttons, and more.
* **Added variable for navbar collapse trigger point.** Instead of a fixed pixel width of `980px` for triggering the collapsed navbar, we now use a variable so you can customize it for your projects.
* **Fluid grid offsets.** Thanks to our contributors, the fluid grid now has offset support to match our fixed (pixel) grid.
* **Fluid grid system variables are no longer fixed percentages.** Instead, they are calculated in LESS with `percentage()` based on the default, fixed-width grid variables. Math!
* **Removed LESS docs page.** We will no longer document variables and mixins in two places&mdash;rewriting that stuff was painful and took too much time. Instead, just checkout the .less files.

## Thanks, nerds

Once again, we couldn't have done this without all you nerds out there supporting us with your contributions, bugfixes, and feature requests. You keep this project going strong and we thank you deeply for your support.

<3

-----

For the full changelog, visit the [GitHub wiki page](https://github.com/twbs/bootstrap/wiki/Changelog) and the [2.1.0 milestone](https://github.com/twbs/bootstrap/issues?milestone=7&page=1&state=closed). We've already begun slating things for 2.2, but currently have no estimates on when that will be released or what exactly will make it in. We also may do a 2.1.1, but again, no promises at this point. [Live in the now!](http://youtu.be/1vaQ-Y6kLOM?t=4s)
