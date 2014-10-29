---
layout: post
title: Bootstrap 2.0.3 released

---

Today we're releasing [Bootstrap 2.0.3](http://getbootstrap.com), another bugfix release that aims to squash as many regressions and documentation inaccuracies as possible. There are almost 100 closed issues in the [2.0.3 milestone](https://github.com/twbs/bootstrap/issues?sort=created&direction=desc&state=closed&page=1&milestone=10) on GitHub, but below is a comprehensive list of the most important fixes with clear explanations of what's changed.

## Makefile

In the spirit of always improving the LESS functionality and build tools, we've updated our makefile to utilize [JSHint](http://jshint.com) and [Recess](http://twitter.github.com/recess), linters for javascript and CSS. To continue to run `make` via Terminal, do the following:

{% highlight bash %}
$ npm install -g recess jshint
{% endhighlight %}

We've also removed the bootstrap.zip file from the repository, so make runs much faster as it has no need to compress any files. For more info, see the [updated readme](https://github.com/twbs/bootstrap/blob/master/README.md).

## HTML and CSS

- Overhauled the responsive utility classes to simplify required CSS, add `!important` to all declarations, and use `display: inherit` in place of `display: block` to account for different types of elements.
- Removed `>` from fluid grid column selectors, meaning every element with a `.span*` class within a `.row-fluid` will use percentage widths instead of fixed-pixels.
- Fixed regression in responsive images support as of 2.0.1. We've re-added `max-width: 100%;` to images by default. We removed it in our last release since we had folks complaining about Google Maps integration and other projects, but we're taking a different stance now on these things and will require developers to make these tweaks on their end.
- Added variable `@navbarBrandColor` for the brand element in navbars, which defaults to `@navbarLinkColor`.
- Font-family mixins now use variables for their stacks.
- Fixed an unescaped `filter` on the `.reset-filter()` mixin that was causing some errors depending on your compiler.
- Fixed regression in `.form-actions` background, which was too dark, by adding a new variable `@formActionsBackground` and changing the color to `#f5f5f5` instead of `#eee`.
- Fixed an issue on button group dropdowns where the background color was not using the button's darker color when the dropdown is open.
- Generalized and simplified the open dropdown classes while adding smarter defaults. Instead of `.dropdown.open`, we now use just `.open`. On the defaults side, all dropdown menus now have rounded corners to start.
- Improved active `.dropdown-toggle` styles (for dropdown buttons) by darkening the background and sharpening the inset shadow to match the active state of buttons.
- Direction of animation on progress bars reversed.
- Fixed input-prepend/append issue with uneditable inputs: `.uneditable-input` was being floated and a missing comma meant its `border-radius` for the append option wasn't being applied properly.
- Removed `height: auto;` from `img` since it was overriding dimensions set via HTML attributes.
- Fixed an issue of double borders on the top of tables with captions or colgroups.
- Fixed issue with anchor buttons in the `.navbar-text`. Instead of a general styling on all anchors within an element with that class, we now have a new class to specifically apply appropriate link color.
- Added support for `@navbarHeight` on the brand/project name and nav links for complete navbar height customization.
- Fixed the black borders on buttons problem in IE7 by removing the border, increasing the line-height, and providing darker background colors.
- Removed excess padding on `.search-query` inputs in IE7 since it doesn't have border-radius.
- Updated alert messages in Components to use `button` elements as close icons instead of `a`. Both can be used, but an `a` will require `href="#"` for dismissal on iOS devices.
- Fixed an issue with prepended/appended inputs in Firefox where `select` elements required two clicks to toggle the dropdown. Resolved by moving the `position: relative` to the `select` by default instead of on `:focus`.
- Added a new mixin, `.backface-visibility`, to help refine CSS 3D tranforms. Examples and explanation of usage can be found on [CSS Tricks](http://css-tricks.com/almanac/properties/b/backface-visibility/).
- Changed specificity of grid classes in responsive layouts under 767px to accurately target `input`, `select`, and `textarea` elements that use `.span*` classes.
- Horizontal description lists, `.dl-horizontal`, now truncate terms that are too long to fit in their fixed-width column. In the < 767px responsive layout, they change to their default stacked layout.
- Changed tabbable tabs to prevent issues in left and right aligned tabs. `.tab-content` would not growing to its parent's full width due to `display: table`. We removed that and the `width: 100%` and instead just set `overflow: auto` to clear the left and right aligned tabs.
- Updated thumbnails to support fluid grid column sizing.
- Added `>` to most of the button group selectors
- Added new variable, `@inputBorderRadius`, to all form controls that previously made use of the static `3px` value everywhere.
- Changed the way we do `border-radius` for tables. Instead of the regular mixin that zeros out all other corners, we specify one corner only so they can be combined for use on single column table headers.
- Updated Glyphicons Halflings from 1.5 to 1.6, introducing 20 new icons.
- Added an `offset` paramater to the `.makeColumn`.
- Increased the specificity of all tabbable nav selectors to include `.nav-collapse` to appropriately scope the responsive navbar behavior.
- Fixed uneditable inputs: text now cuts off and does not wrap, making it behave just like a default `input`.
- Labels and badges are now `vertical-align: baseline;` so they line up with surrounding text.

## Javascript

- Add jshint support
- Add travis-ci support w/ headless phantom integration
- Replace UA sniffing in bootstrap-transitions.js
- Add MSTransitionEnd event to transition plugin
- Fix pause method in carousel (shouldn't restart when hovering over controls)
- Fix crazy opera bug #1776
- Don't open dropdown if target element is disabled
- Always select last item in scrollspy if you've reached the bottom of the document or element
- Typeahead should escape regexp special chars
- If interval is false on carousel, do not auto-cycle
- Add preventDefault support for all initial event types (show, close, hide, etc.)
- Fix collapse bug in ie7+ for initial collapse in
- Fix nested collapse bug
- If transitioning collapse, don't start new transition
- Try to autodetect when to use html/text method in tooltip/popovers to help prevent xss
- Add bootstrap + bootstrap.min.js to gh-pages for @remy and jsbin support

## Documentation and repo

- Combined badges and labels into a single LESS file, badges-labels.less, to reduce repeated CSS.
- Separated responsive features into multiple files. We now have a file for each grouping of media queries (tablets and down, tablets to desktops, and large desktops). Additionally, the visible/hidden utility classes and the responsive navbar are in their own files. The output is the same in the compiled CSS, but this should give folks a bit more flexibility.
- Added a new CSS Tests page in the docs (not in the top nav) for better testing of edge cases and extending the use of standard components.
- Removed the bootstrap.zip file from the repo and the make process for faster building and a lighter repo. From now on, the zip will only be in the documentation branch.
- Fixed incorrect use of class instead of ID for tabs example and added documentation for multiple ways of toggling tabs.
- Fixed required markup listed for the specialized navbar search field.
- Removed all mention of `@siteWidth`, a variable no longer in use.
- Removed mentions of unused `@buttonPrimaryBackground` variable, which is no longer in use.
- Updated LESS docs page to include all the new variables we added in previous releases.
- Removed broken "dropup" menus from tabs and pills examples (shouldn't have been there in the first place).
- Replaced `.badge-error` with `.badge-important`. The error option is not a valid class and was a typo in the docs.
- Fixed mention of how to add plain text to the navbar. Previously the docs stated you only needed a `p` tag, but the required HTML is any element with class `.navbar-text`.
- Clarified the use of `.tabbable` for tabs. The wrapping class is only required for left and right tabs to clear their floats. Also added mention of `.fade` to fade in tabs.
- Updated forms documentation:
    - Remove unnecessary duplicate help text in first example
    - Added mention of required `input` class, `.search-query`, for the search form variation
    - Removed incorrect mention of form fields being `display: block;` to start as fields are `inline-block` to start.
- Added mention of `data-target` attribute for the dropdowns javascript plugin to show how to keep custom URLs intact on links with `.dropdown-toggle` class.
- Updated the Kippt screenshot on the homepage to reflect their recent responsive redesign and upgrade to 2.0.2.

-----

We're continually updating issues and tracking them for our next release in the [2.1 milestone](https://github.com/twbs/bootstrap/issues?milestone=7&state=open), which will focus on adding a few new features and tackle the inevitable bugs and edge cases from this release.
