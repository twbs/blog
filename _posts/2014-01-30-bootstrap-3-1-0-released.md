---
layout: post
title: Bootstrap 3.1.0 released
video: rob base & dj ez rock it takes two
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/phOW-CZJWT0?rel=0" width="760" height="428" allowfullscreen></iframe>
</div>

Today we're stoked to ship Bootstrap v3.1. We've got a handful of new features, plenty of bug fixes and improvements, and updated build tools.

### New docs

[![New Bootstrap docs](https://f.cloud.github.com/assets/98681/2042089/1229e80e-89cd-11e3-9829-0c9ce4db29cb.png)](http://getbootstrap.com/getting-started)

We've made tons of changes across the board, most notably to our documentation. Just like v2.1 brought a brand new design, v3.1 overhauls the docs to refocus on the actual documentation rather than the chrome around it. Our new homepage restores the quick run through of key features and showcases some awesome examples from the Expo.

### Official Sass port

[![Bootstrap for Sass](https://f.cloud.github.com/assets/98681/2041999/ec0664be-89cb-11e3-85cc-388a952e1ee0.png)](https://github.com/twbs/bootstrap-sass)

The best part about v3.1 is that we're shipping with an official Sass port. A few weeks ago we moved over the most popular port on GitHub and made it official—Bootstrap is now available in Sass. Rather than bloat the main project with support for Less and Sass—and all the documentation for both—we've kept them separate for the time being. Prominent links in the docs are included though, so enjoy!

### New examples

![New examples](https://f.cloud.github.com/assets/98681/1796777/3a111d22-6a8a-11e3-8587-77dc46197a57.jpg)

We've added three new examples: Blog, Cover, and Dashboard. Each example provides a single page of awesomeness for you to quickly get started on a project built with Bootstrap. They're responsive and ready to go.

### Improved features

A handful of features that aren't exactly new to Bootstrap have seen an update in v3.1:

- Modals now include optional sizes
- Dropdowns now have their own alignment classes for easier customization
- Form feedback styles for validation states now include optional icons to reinforce color changes

All-in-all these make components more focused, more durable, and easier to work with. See the changelog included with [the GitHub release](https://github.com/twbs/bootstrap/releases/tag/v3.1.0) for the complete list of new features.

### Remote modal content

One of the more important improved features is for our modals. If you currently use the modal's `remote` option, be aware this release may break your modals. Yes, this is a breaking change, but it's first and foremost a **bug fix** that corrects a rather longstanding and overlooked error. Our apologies for any headaches it may cause, but it's been missed in the last few patch releases.

See the [#11933](https://github.com/twbs/bootstrap/issues/11933) pull request for details on the code changes.


### New license

We've been talking about it for what seems like forever, but thanks to all our contributors and the core team, we've finally done it. As of v3.1, Bootstrap ships under the MIT license to allow as many people to utilize Bootstrap as possible. Thanks to all our contributors for helping make it happen.

### Improved build tools

We're constantly trying to improve our tools for developing Bootstrap and v3.1 brings a slew of updates to do just that.

* We've switched from Recess to grunt-contrib-less for our compiler, giving us access to Less 1.6.x (as opposed to 1.3.x with Recess).
* Our compiled code is virtually identical in formatting and organization thanks to [CSScomb](http://csscomb.com) and some other Grunt-fu.
* Tests also run a tad faster with the help of some magical caching and parallelization.
* The web Customizer is now generated from a Grunt task, meaning we'll never miss updating or adding a variable again. If you contribute to Bootstrap regularly, just run `grunt` and commit to update the page.

**Heads up!** If you develop Bootstrap locally, be sure to nuke your `node_modules/` directory and run `npm install` before getting started with v3.1.

### Download Bootstrap

Get downloading now, or see the list below for more information on what's new in this release. Download it from GitHub or snag it from the CDN:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.1.0.zip">Download Bootstrap 3.1.0</a>

Or, hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass).

{% highlight html %}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
{% endhighlight %}

-----


## Full changelog

### New features

- Three new templates: Blog, Cover, and Dashboard.
- [#10884](https://github.com/twbs/bootstrap/issues/10884): Add `.info` variant to contextual table classes.
- [#11138](https://github.com/twbs/bootstrap/issues/11138): Add contextual styles to list groups.
- [#11162](https://github.com/twbs/bootstrap/issues/11162): Add new sizes, `.modal-lg` and `.modal-sm`, to modals for quicker settings on modals. Only applies to modals above the small breakpoint.
- [#11193](https://github.com/twbs/bootstrap/issues/11193): Add `<kbd>` element styles to indicate user input via keyboard.
- [#11244](https://github.com/twbs/bootstrap/issues/11244): Add `.animation()` mixins.
- [#11572](https://github.com/twbs/bootstrap/issues/11572): Add contextual `background-color` classes to match our existing text classes. (This also moves both sets of classes to the Helper Classes section of the CSS docs.)
- [#11675](https://github.com/twbs/bootstrap/issues/11675): Add `.text-justify` class to round out the text alignment classes.
- [#11836](https://github.com/twbs/bootstrap/issues/11836): Add new form control feedback classes to toggle icons for each validation state. Works on regular forms, horizontal, and inline.

While we originally wanted v3.1 to include RTL support, we decided to hold back on that for some potentially beneficial unreleased tooling. We'll share more on that when we know more, but suffice to say it's been bumped to v3.2.


### CSS changes

- [#10951](https://github.com/twbs/bootstrap/issues/10951): Add `outline: 0` to `.modal` to prevent a focus outline from appearing in Chrome for Windows.
- [#11107](https://github.com/twbs/bootstrap/issues/11107): Add `@modal-backdrop-opacity` variable for customizable modal backdrop.
- [#11266](https://github.com/twbs/bootstrap/issues/11266): Apply a pixel-based `line-height` that matches the `height` to date inputs for iOS 7 for proper vertical alignment of text in the form control.
- [#11286](https://github.com/twbs/bootstrap/issues/11286): Add `@well-border` variable.
- [#11302](https://github.com/twbs/bootstrap/issues/11302): Refactor the responsive utility classes to cut a few hundred lines of CSS (more context in #11214).
- [#11435](https://github.com/twbs/bootstrap/issues/11435): Prevent the double borders between multiple buttons in an input group.
- [#11561](https://github.com/twbs/bootstrap/issues/11561): Add `float: left;` to `.form-control`s within input groups to prevent IE9 from screwing up placeholder text and select menu arrows.
- [#11588](https://github.com/twbs/bootstrap/issues/11588): Scope `font-size` to only `<p>` elements in `.jumbotron`s and remove the super-sized `line-height` from the base class to avoid interference with sub-components.
- [#11676](https://github.com/twbs/bootstrap/issues/11676): Add `-webkit-overflow-scrolling: touch;` to modals for smooth scrolling on iOS devices.
- [#11744](https://github.com/twbs/bootstrap/issues/11744): Clean up some incompatible properties in `forms.less`: block level inputs no longer receive `vertical-align: middle;` unless necessary, e.g. in inline forms.
- [#11748](https://github.com/twbs/bootstrap/issues/11748): Updated `.scale()` mixin so that it accepts optional vertical scale as second parameter.
- [#11750](https://github.com/twbs/bootstrap/issues/11750): Reverts v3.0.3's refactor to contextual table classes to ensure they work with striped tables.
- [#11757](https://github.com/twbs/bootstrap/issues/11757): Darken default navbar toggle bars to meet WCAG criteria.
- [#11766](https://github.com/twbs/bootstrap/issues/11766): Use `@color` variable in `.button-variant()` mixin to set `background-color` on `.badge`s in buttons for proper default button badge styles.
- [#11741](https://github.com/twbs/bootstrap/issues/11741): Don't set `@headings-font-family` to the same font stack as the `<body>`; instead, just use `inherit` for same default CSS.
- [#11786](https://github.com/twbs/bootstrap/issues/11786): Nest media queries within print utilities for mixin-friendliness.
- [#11790](https://github.com/twbs/bootstrap/issues/11790): With upgrade to Less v1.6.0, remove duplicate CSS generated from the nested `.clearfix` class and mixin by switching to `&:extend(.clearfix all)`.
- [#11801](https://github.com/twbs/bootstrap/issues/11801): Use correct variables for grid containers.
- [#11817](https://github.com/twbs/bootstrap/issues/11817): Rework input groups to use the `font-size: 0;` and `white-space: nowrap` hack for a more durable component with regards to code formatting and custom font size changes.
- [#11829](https://github.com/twbs/bootstrap/issues/11829): Add `.make-xs-column` mixins to complement the recently added extra small predefined grid classes.
- [#11836](https://github.com/twbs/bootstrap/issues/11836): Along with the form validation update, we reset some key form and icon styles:
  * All `.form-control`s within inline forms are set to `width: auto;` to prevent stacking of `.form-label` within a `.form-group`.
  * Removes all `select.form-control` settings since those are now inherited by the above change
  * Removes the `width: 1em;` from the Glyphicons because it was virtually impossible to override.
- [#11841](https://github.com/twbs/bootstrap/issues/11841): Breadcrumb padding values now use variables.
- [#11859](https://github.com/twbs/bootstrap/issues/11859): Restore `@dropdown-caret-color` variable, but deprecate it.
- [#11861](https://github.com/twbs/bootstrap/issues/11861): Add `@list-group-active-text-color` variable for improved customization on active list group items.
- [#11868](https://github.com/twbs/bootstrap/issues/11868): Cleanup modal `z-index` values in `modals.less`.
- [#11990](https://github.com/twbs/bootstrap/issues/11990), #12159: Make range inputs block level and 100% wide by default.
- [#12073](https://github.com/twbs/bootstrap/issues/12073): Make order of component variations consistent throughout the repo.
- [#12164](https://github.com/twbs/bootstrap/issues/12164): Fix value of SVG font ID and removed hard coded value.
- [#12171](https://github.com/twbs/bootstrap/issues/12171): Ensure panel groups have a bottom margin since we nuke it on child panels.
- [#12247](https://github.com/twbs/bootstrap/issues/12247): Add and use `.text-emphasis-variant()` mixin for emphasis classes. Also updated emphasis classes to only apply `:hover` styles to linked content.
- [#12248](https://github.com/twbs/bootstrap/issues/12248): Add and use `.bg-variant()` mixin to generate background classes.
- [#12249](https://github.com/twbs/bootstrap/issues/12249): Add and use `@modal-md` Less variable for uniformity.
- [#12250](https://github.com/twbs/bootstrap/issues/12250): Remove print `margin`s per upstream H5BP change, thus deferring to browser defaults,  or users' custom values should they set them.
- [#12286](https://github.com/twbs/bootstrap/issues/12286): Only remove appropriate `border-radius` from first and last tables or list groups in panels.
- [#12353](https://github.com/twbs/bootstrap/issues/12353): Scope table border reset in panels to first-child rows.
- [#12359](https://github.com/twbs/bootstrap/issues/12359): Reset `min-width` on `<fieldset>`s so they don't break responsive tables and behave more like standard block level elements.
- [#12406](https://github.com/twbs/bootstrap/issues/12406): Upgrade to Normalize v3.
- [#12422](https://github.com/twbs/bootstrap/issues/12422): Reset height on `select[multiple]` in `.input-size()` mixin.
- [#12424](https://github.com/twbs/bootstrap/issues/12424): Given Normalize v3 upgrade, account for change on `<figure>` element so that we don't cause backward compatibility issues.
- [#12388](https://github.com/twbs/bootstrap/issues/12388): Apply a fixed `height` to `.navbar-brand` to ensure adding a Glyphicon doesn't increase it's height.
- Updated `<blockquote>` to no longer thin text or modify `line-height` for improved readability.


### JavaScript changes

- [#9318](https://github.com/twbs/bootstrap/issues/9318), [#9459](https://github.com/twbs/bootstrap/issues/9459), [#10105](https://github.com/twbs/bootstrap/issues/10105): Properly place remote content within the `.modal-content` instead of `.modal-body` (see note above).
- [#10044](https://github.com/twbs/bootstrap/issues/10044): Check that `href` id's are followed by valid characters in dropdowns.
- [#10134](https://github.com/twbs/bootstrap/issues/10134): Don't use jQuery `offset` directly because it uses sub pixel rendering.
- [#10199](https://github.com/twbs/bootstrap/issues/10199): Correct `hidden.bs` and `shown.bs` events firing too early in tooltips and popovers.
- [#10205](https://github.com/twbs/bootstrap/issues/10205): Enable support of arbitrary characters in Scrollspy targets.
- [#10236](https://github.com/twbs/bootstrap/issues/10236): Properly calculate offset positioning for affix plugin when reloading a scrolled window.
- [#10260](https://github.com/twbs/bootstrap/issues/10260), #10568, #10740: Properly hide tooltips and popovers if no animation is set.
- [#10283](https://github.com/twbs/bootstrap/issues/10283): Prevent IE8 from complaining about `$.support.transition.end`.
- [#10327](https://github.com/twbs/bootstrap/issues/10327): Correctly reset carousel when the slide event is prevented.
- [#10359](https://github.com/twbs/bootstrap/issues/10359): Pass `$element` to offset top/bottom calc funcs for better dynamic offsets.
- [#10658](https://github.com/twbs/bootstrap/issues/10658): Don't let popover content lose bound events on second `setContent` call.
- [#10675](https://github.com/twbs/bootstrap/issues/10675): Ensure scrollspy target in tab content works properly.
- [#10709](https://github.com/twbs/bootstrap/issues/10709): Be consistent about type of quotes in our JS—switches double quotes to single quotes throughout.
- [#10761](https://github.com/twbs/bootstrap/issues/10761): Don't create new tooltip/popover objects just to destroy them immediately.
- [#10798](https://github.com/twbs/bootstrap/issues/10798): Modal namespacing.
- [#10801](https://github.com/twbs/bootstrap/issues/10801): Restore `.collapse` to `.in` after collapsing animation finishes in collapse plugin.
- [#10834](https://github.com/twbs/bootstrap/issues/10834): Only `preventDefault` on click on `[data-toggle="modal"]` when the element is a link.
- [#10890](https://github.com/twbs/bootstrap/issues/10890): Calling `$().button(state)` shouldn't enable a disabled button.
- [#10911](https://github.com/twbs/bootstrap/issues/10911): Add `loaded` event for use with modal's `remote` option.
- [#10921](https://github.com/twbs/bootstrap/issues/10921): Input groups within button toolbars are now supported.
- [#11203](https://github.com/twbs/bootstrap/issues/11203): Improve scrollspy's handling of hidden targets.
- [#11288](https://github.com/twbs/bootstrap/issues/11288): Save vertical scroll position of modal between openings.
- [#11362](https://github.com/twbs/bootstrap/issues/11362): Update affix and scrollspy on speedy scroll to top of page.
- [#11373](https://github.com/twbs/bootstrap/issues/11373): Add related target to dropdown events.
- [#11379](https://github.com/twbs/bootstrap/issues/11379): Fix carousel `this.sliding` not getting reset if `$next.hasClass('active')`.
- [#11416](https://github.com/twbs/bootstrap/issues/11416): Use the transition duration from the CSS for the carousel.
- [#11496](https://github.com/twbs/bootstrap/issues/11496): Clear tooltip timeout on destroy.
- [#11555](https://github.com/twbs/bootstrap/issues/11555): Add `@tooltip-opacity` variable.
- [#11720](https://github.com/twbs/bootstrap/issues/11720): Add events (affix, affixed, affix-top, etc) to affix plugin.
- [#11722](https://github.com/twbs/bootstrap/issues/11722): Use document scroll height instead of offset height in affix plugin.
- [#11788](https://github.com/twbs/bootstrap/issues/11788): Use `focusin`/`focusout` instead of `focus`/`blur` for tooltip and popover focus trigger for Firefox and Safari.
- [#11825](https://github.com/twbs/bootstrap/issues/11825): Add dropdown ARIA roles.
- [#12270](https://github.com/twbs/bootstrap/issues/12270): Add namespace `.bs` also to the event `dismiss.modal`.


### Deprecations

- [#10370](https://github.com/twbs/bootstrap/issues/10370): Deprecated the `.pull-right` method for aligning dropdown menus. Includes the following changes:
  * Removed an old and unused pair of selectors that didn’t properly target the right-aligned navbar alignment of dropdown menus.
  * Deprecates the `.pull-right` alignment in favor of a more specific and unique class name.
  * Adds `.dropdown-menu-right` as the new alignment class. This is then mixin-ed into the `.navbar-right.navbar-nav` dropdown menus for auto-alignment (keeping the current behavior we have today).
  * Adds new ability to override that auto-alignment though with the new `.dropdown-menu-left`, which is mixin-ed in the same way to provide the appropriate specificity of an override. This should never need to be used except for within right-aligned `.navbar-nav` components.
- [#11660](https://github.com/twbs/bootstrap/issues/11660): Deprecate `small` and `.small` in `blockquote` citation in favor of `footer` element.
- [#12398](https://github.com/twbs/bootstrap/issues/12398): Deprecate `.box-shadow()` mixin.


### Documentation

- [#10486](https://github.com/twbs/bootstrap/issues/10486): Add note about `data-toggle` dropdown dependency.
- [#10505](https://github.com/twbs/bootstrap/issues/10505): Document more of our Less variables and mixins (not all, but the commonly used ones).
- [#11158](https://github.com/twbs/bootstrap/issues/11158): Customizer's variables are now generated via Grunt task from the `variables.less` file.
- [#11447](https://github.com/twbs/bootstrap/issues/11447): Document that modal remote URL is only loaded once.
- [#11655](https://github.com/twbs/bootstrap/issues/11655): Normalize disabled inputs and buttons in iOS with `opacity: 1;`.
- [#11723](https://github.com/twbs/bootstrap/issues/11723): Mention removal of `.pill-content` and `.pill-pane` in the migration guide.
- [#11738](https://github.com/twbs/bootstrap/issues/11738), [#11765](https://github.com/twbs/bootstrap/issues/11765): Load minified assets in the docs to improve performance.
- [#11742](https://github.com/twbs/bootstrap/issues/11742): Add link to French translation in About page (v3.0.3 saw Ukrainian added as well).
- [#11760](https://github.com/twbs/bootstrap/issues/11760): Remove mailing list links from readme and about pages.
- [#11764](https://github.com/twbs/bootstrap/issues/11764): Add `meta` tags to docs for description, keywords, and authors.
- [#11770](https://github.com/twbs/bootstrap/issues/11770): Move component-animations.less to the utility section of import list to match Customizer
- [#11830](https://github.com/twbs/bootstrap/issues/11830), [#11832](https://github.com/twbs/bootstrap/issues/11832): More help for Windows users installing Jekyll with requirement of Python and link to [@juthilo](https://github.com/juthilo)'s guide, [Run Jekyll on Windows](https://github.com/juthilo/run-jekyll-on-windows/).
- [#11876](https://github.com/twbs/bootstrap/issues/11876): Enable `failHard` grunt-html-validation option.
- [#11977](https://github.com/twbs/bootstrap/issues/11977): Concatenate and minify all docs assets.
- [#12037](https://github.com/twbs/bootstrap/issues/12037): Move docs `.html` pages and assets into `docs/` subfolder to clean up project root directory. Also moves `.csscomb.json` and `.csslintrc` to `less/` to further clean up project root.
- [#12073](https://github.com/twbs/bootstrap/issues/12073): Make order of component variations consistent throughout the repo.
- [#12244](https://github.com/twbs/bootstrap/issues/12244): Move v2.x to v3.x migration docs to a separate page.
- [#12311](https://github.com/twbs/bootstrap/issues/12311): Expand information on how to handle overflowing content in navbars.
- [#12314](https://github.com/twbs/bootstrap/issues/12314): Add warning about modal markup placement affecting modal appearance/functionality.
- [#12345](https://github.com/twbs/bootstrap/issues/12345): Add note about printer viewport weirdness.
- [#12380](https://github.com/twbs/bootstrap/issues/12380): Add link to unofficial German translation, <http://holdirbootstrap.de>.
- Updated browser and device support documentation:
  * [#11055](https://github.com/twbs/bootstrap/issues/11055): add mention of select menu styling on Android stock browsers with included optional fix.
  * Update IDs and docs nav to include bookmark links to each section.
  * Add callout to navbar docs about fixed position, inputs, and virtual keyboard.

### Build system & packaging

- [#11761](https://github.com/twbs/bootstrap/issues/11761): Add JavaScript Code Style checker integration.
- [#11739](https://github.com/twbs/bootstrap/issues/11739): Lint `docs-assets/js/application.js` and `docs-assets/js/customizer.js`.
- [#11780](https://github.com/twbs/bootstrap/issues/11780): Don't ignore `Gruntfile.js` or `package.json` in `bower.json` as they're required for compilation.
- [#11790](https://github.com/twbs/bootstrap/issues/11790): Switch from Recess to grunt-contrib-less.
  * Dropped `grunt-recess` for `grunt-contrib-less` to get the latest version of Less (v1.6.x) since Recess was still quite behind.
  * Adds CSScomb to take place of Recess's CSS linting. Includes custom `.csscomb.json` in project root with basically the same property order as Recess.
  * Fixes duplicate CSS generation from the nested `.clearfix` class and mixin by switching to `&:extend(.mixin all)` (also mentioned in changes section).
  * Compiled CSS looks only slightly different—yay!
- [#11804](https://github.com/twbs/bootstrap/issues/11804): Enable CSS source maps in `grunt-contrib-less`.
- [#12003](https://github.com/twbs/bootstrap/issues/12003): Customizer now compiles `theme.less` with updated values.
- [#12315](https://github.com/twbs/bootstrap/issues/12315): Add npm caching based on `npm-shrinkwrap.canonical.json`.
