---
layout: post
title: Bootstrap 2.0.4 released
---

Following up on the large 2.0.3 release a few weeks ago, we have a fresh update to address some documentation issues and basic CSS bugs. 2.0.4 includes around thirty closed issues and is our first version under our updated release approach (shorter, more concise releases).

As always, here's a quick overview of some of the top changes.

## Docs

- Added `type="button"` to all dismiss buttons in alerts and modals  to avoid a bug in which they prevent their parent's `form` from properly submitting.
- Added simple documentation to Base CSS for `.lead`.
- Added new CSS test to illustrate how the navbar, static and fixed, behaves.
- Clarified grid sizing copy to include mention of responsive variations.
- Reformatted the LESS docs page to prevent terrible table displays at smaller grid sizes.
- Miscellaneous typos and tweaks.

## CSS

- Refactored forms.less to make our selectors more specific for fewer overrides and less code. Instead of a generic `input` selector and various resets, we target each type of input like `input[type="text"]`, `input[type="password"]`, etc.
- Form field state (e.g., success or error) now applies to checkbox and radio labels.
- Removed redundant CSS on `&lt;p&gt;` for `font-family`, `font-size`, and `line-height`.
- Removed redundant `color` declaration from the `&lt;label&gt;` element.
- Added variables for dropdown dividers border colors.
- `legend` and `.form-actions` share the same `border-color`, `#e5e5e5`.
- Fixed some responsive issues with input-prepend and -append, notably with the fluid grid.
- Added special CSS to prevent `max-width: 100%;` on images from messing up Google Maps rendering.
- Scope opened dropdowns to only immediate children to avoid unintended cascade.
- Similarly, scope floated-right dropdowns to immediate children with `.pull-right > .dropdown-menu`.
- Updated `.placeholder()` mixin to use `&` operator in Less for proper output when compiling.
- Added `-ms-input-placeholder` to `.placeholder()` mixin.
- Added CSS3 hyphens mixin.
- Fixed a bug in IE7/8 where certain form controls would not show text if the parent had a filter opacity set.

For a full changelog, visit the now complete [2.0.4 milestone on GitHub](https://github.com/twbs/bootstrap/issues?milestone=11&state=closed).
