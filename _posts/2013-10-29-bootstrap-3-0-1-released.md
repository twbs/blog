---
layout: post
title: Bootstrap 3.0.1 released
video: tag team whoomp there it is
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/fdKsgBNEHUU?rel=0" width="760" height="428" allowfullscreen></iframe>
</div>

Today we're shipping v3.0.1, a huge patch release with over 750 commits since v3 was released two months ago. We've outlined most of the changes below, including documentation updates, bug fixes, and even a few deprecations (our first in the history of the project).

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.0.1.zip">Download Bootstrap 3.0.1</a> or hit the [GitHub repository](https://github.com/twbs/bootstrap)

-----

## Changes

Compared to previous releases, we're going into a bit more detail here with the docs and bug fixes. Expect more of this with future releases.

### Docs

- [#9880](https://github.com/twbs/bootstrap/issues/9880): Use medium grid classes on jumbotron example
- [#9887](https://github.com/twbs/bootstrap/issues/9887): Document `.show` and `.hide` classes
- [#9908](https://github.com/twbs/bootstrap/issues/9908): Add `type="submit"` to Customizer compile button to prevent accidental submissions
- [#9915](https://github.com/twbs/bootstrap/issues/9915): Fix inaccurate comment in media query docs
- [#9917](https://github.com/twbs/bootstrap/issues/9917): Updated broken download link in README
- [#9924](https://github.com/twbs/bootstrap/issues/9924): Removed non-ASCII character from non-responsive example CSS
- [#9928](https://github.com/twbs/bootstrap/issues/9928), [#9932](https://github.com/twbs/bootstrap/issues/9932): Update carousel example to work in IE10 and correctly display navbar in narrow viewports
- [#9931](https://github.com/twbs/bootstrap/issues/9931): Add ARIA `role="toolbar"` to elements with `.btn-toolbar` in docs examples
- [#9991](https://github.com/twbs/bootstrap/issues/9991): Better docs for tabbable tab markup and its fade option
- [#10011](https://github.com/twbs/bootstrap/issues/10011): Update Grunt instruction links and wording
- [#10012](https://github.com/twbs/bootstrap/issues/10012): Add David to project readme to monitor dependency currentness
- [#10034](https://github.com/twbs/bootstrap/issues/10034): Use npm-registered recent version of `grunt-html-validation` instead of its git repo
- [#10040](https://github.com/twbs/bootstrap/issues/10040): Better cross referencing of default and navbar pull utilities
- [#10042](https://github.com/twbs/bootstrap/issues/10042): Updated JS Fiddle tooltip delegation example linked in docs
- [#10045](https://github.com/twbs/bootstrap/issues/10045): Use v2.3.2 release ZIP instead of master zip for downloads from old docs
- [#10081](https://github.com/twbs/bootstrap/issues/10081): Documents workaround for tooltips+popovers on disabled elements
- [#10082](https://github.com/twbs/bootstrap/issues/10082): Documents `.navbar-form`
- [#10087](https://github.com/twbs/bootstrap/issues/10087): Add version number to all docs pages (in the footer)
- [#10088](https://github.com/twbs/bootstrap/issues/10088): Updates accessibility docs regarding nesting heading elements
- [#10112](https://github.com/twbs/bootstrap/issues/10112): More `role` attributes in the docs, this time on link buttons
- [#10126](https://github.com/twbs/bootstrap/issues/10126): Update responsive test cases to properly highlight hidden class examples
- [#10131](https://github.com/twbs/bootstrap/issues/10131): Corrects button group selector in JavaScript docs
- [#10136](https://github.com/twbs/bootstrap/issues/10136): Broken image link in Carousel example
- [#10146](https://github.com/twbs/bootstrap/issues/10146): Document `data-ride` carousel feature
- [#10209](https://github.com/twbs/bootstrap/issues/10209): Fixed broken dismissable alert example
- [#10215](https://github.com/twbs/bootstrap/issues/10215): More compressed touch icons, updates Respond.js to v1.3.0 and html5shiv.js to v3.6.2, adds `bugs` to package.json
- [#10249](https://github.com/twbs/bootstrap/issues/10249): Correct component name of jumbotron component in Jumbotron example
- [#10272](https://github.com/twbs/bootstrap/issues/10272): Removed unused link for nav alignment in Components page
- [#10277](https://github.com/twbs/bootstrap/issues/10277): Mention removal of navbar vertical dividers in migration docs
- [#10278](https://github.com/twbs/bootstrap/issues/10278): Change Google Maps compatibility warning to a general `box-sizing` warning with optional reset
- [#10282](https://github.com/twbs/bootstrap/issues/10282): Cross reference tabs and tabs plugin
- [#10298](https://github.com/twbs/bootstrap/issues/10298): Add progress bar to migration docs
- [#10299](https://github.com/twbs/bootstrap/issues/10299), [#10323](https://github.com/twbs/bootstrap/issues/10323): Getting Started wording changes
- [#10316](https://github.com/twbs/bootstrap/issues/10316): Document .active and :active for buttons
- [#10324](https://github.com/twbs/bootstrap/issues/10324), [#10338](https://github.com/twbs/bootstrap/issues/10338): Restore opt-in warning for tooltips and popovers
- [#10342](https://github.com/twbs/bootstrap/issues/10342): Update affix docs to better communicate plugin behavior
- [#10344](https://github.com/twbs/bootstrap/issues/10344): Update IE8-9 support section with table of specific CSS3 and HTML5 features and their support in Bootstrap
- [#10372](https://github.com/twbs/bootstrap/issues/10372): Homepage now shows two download buttons, one for our assets (CSS, JS, and fonts) and one for the source code (the entire repo)
- [#10382](https://github.com/twbs/bootstrap/issues/10382): Update Disabling responsiveness docs section for brevity
- [#10411](https://github.com/twbs/bootstrap/issues/10411): Color coded IE8-9 browser support table
- [#10414](https://github.com/twbs/bootstrap/issues/10414): Carousel now uses Glyphicons as default left/right chevron icons (text icons are still supported)
- [#10417](https://github.com/twbs/bootstrap/issues/10417): Document `.hidden` in the Helper classes *Screen reader content* section
- [#10419](https://github.com/twbs/bootstrap/issues/10419): Add nav lists to migration guide
- [#10453](https://github.com/twbs/bootstrap/issues/10453): Add additional screen reader text to button group dropdown toggles
- [#10459](https://github.com/twbs/bootstrap/issues/10459): Update Customization section in Getting started page
- [#10492](https://github.com/twbs/bootstrap/issues/10492): Account for responsive tables in panels
- [#10497](https://github.com/twbs/bootstrap/issues/10497), [#10584](https://github.com/twbs/bootstrap/issues/10584): Fix Windows 8 and Windows Phone 8 behavior in Internet Explorer 10 and applies "bug fix" to docs
- [#10528](https://github.com/twbs/bootstrap/issues/10528): Add new About page to the docs with backstory, core team, community links, and translations
- [#10573](https://github.com/twbs/bootstrap/issues/10573): Un-hardcode tooltip arrow widths and padding for easier customization
- [#10591](https://github.com/twbs/bootstrap/issues/10591): Add modal `remote` option semantics change to migration docs
- [#10693](https://github.com/twbs/bootstrap/issues/10693): Include a copy of the docs license as a file in the repo
- [#10711](https://github.com/twbs/bootstrap/issues/10711): Address 100% fluid layouts in grid docs and the required padding
- [#10768](https://github.com/twbs/bootstrap/issues/10768): Fix mention of renamed `.img-polaroid` class in Migration docs
- [#10770](https://github.com/twbs/bootstrap/issues/10770): Rename `/assets` to `/docs-assets` to reduce confusion between `/dist` and docs dependencies
- [#10790](https://github.com/twbs/bootstrap/issues/10790): Disable IE compatibility mode in all docs pages and examples
- [#10856](https://github.com/twbs/bootstrap/issues/10856): Update grid docs to better explain the sizing and interactions when using multiple grid tier classes
- [#11013](https://github.com/twbs/bootstrap/issues/11013): Use CDNs for jQuery and HTML5 shiv
- Add blog link back to docs homepage
- Remove links to navbar examples from example navbars in Theme example
- Delete smaller touch icons and only include one
- Remove unused mention of `.prettyprint` styles from `code.less` (we no longer use that plugin and the class is undocumented, so we're nuking it)
- Remove unnecessary `left` and `right` properties from `.modal-dialog` since we use `margin` to center the modal
- Add Linux Firefox to supported browsers list
- Update outdated JSFiddle example


### Bug fixes and changes

- [#9855](https://github.com/twbs/bootstrap/issues/9855): Partial fix for open modal content shifting: removed all `margin` settings to prevent some of the content shifting. Still needs JS love to detect scrollbars and adjust content accordingly (will address in v3.0.2).
- [#9877](https://github.com/twbs/bootstrap/issues/9877): Add improved `.active` state to navbar nav in theme
- [#9879](https://github.com/twbs/bootstrap/issues/9879): Add hover state (move gradient up 15px) to theme buttons]
- [#9909](https://github.com/twbs/bootstrap/issues/9909): Add `@component-active-color` variable to complement `@component-active-bg` (and apply it to dropdowns, nav pills, and list group items)
- [#9964](https://github.com/twbs/bootstrap/issues/9964): Add fonts directory to bower.json `main` files list
- [#9968](https://github.com/twbs/bootstrap/issues/9968): Simplify striped progress bar mixin to remove unused color
- [#9969](https://github.com/twbs/bootstrap/issues/9969): Add support for `output` element by styling it more like our `.form-control`
- [#9973](https://github.com/twbs/bootstrap/issues/9973): Removed unnecessary `-ms-linear-gradient` prefix
- [#9981](https://github.com/twbs/bootstrap/issues/9981): Account for hover and focus states on pagination disabled items
- [#9989](https://github.com/twbs/bootstrap/issues/9989): Set monospace `font-family` on `<kbd>` and `<samp>` to match browser defaults
- [#9999](https://github.com/twbs/bootstrap/issues/9999): Make `.table-hover` styling apply to `<th>` within contextual table rows too
- [#10013](https://github.com/twbs/bootstrap/issues/10013): Position carousel left and right controls from the left and right, respectively
- [#10014](https://github.com/twbs/bootstrap/issues/10014), [#10406](https://github.com/twbs/bootstrap/issues/10406): Update grid to use `width` on `.container`s instead of `max-width` as IE8 doesn't fully support `box-sizing: border-box` when combined with min/max width/height
- [#10022](https://github.com/twbs/bootstrap/issues/10022): Add `width: 1em;` to all empty Glyphicons to prevent loading flicker
- [#10024](https://github.com/twbs/bootstrap/issues/10024): Use negative margin to fix the border between button and input in input groups
- [#10025](https://github.com/twbs/bootstrap/issues/10025): Add additional transform mixins
- [#10057](https://github.com/twbs/bootstrap/issues/10057): Autohiding scrollbars in responsive tables for Windows Phone 8
- [#10059](https://github.com/twbs/bootstrap/issues/10059): Add `.transition-property()` mixin
- [#10079](https://github.com/twbs/bootstrap/issues/10079): Native-style scrolling in responsive tables for iOS
- [#10101](https://github.com/twbs/bootstrap/issues/10101), [#10541](https://github.com/twbs/bootstrap/issues/10541), [#10565](https://github.com/twbs/bootstrap/issues/10565): Generate CSS file banners via Gruntfile
- [#10111](https://github.com/twbs/bootstrap/issues/10111): Use different colors for dropdown link hover and active states
- [#10115](https://github.com/twbs/bootstrap/issues/10115): Default carousel controls and Glyphicon controls should behave the same on small devices and up
- [#10153](https://github.com/twbs/bootstrap/issues/10153): Restore `@headings-color` variable
- [#10154](https://github.com/twbs/bootstrap/issues/10154): Add `.small` to pair with our heading classes (e.g., `h1` and `.h1`)
- [#10164](https://github.com/twbs/bootstrap/issues/10164): Document `.center-block()` mixin and update CSS to include it as a class
- [#10169](https://github.com/twbs/bootstrap/issues/10169): Remove old `@navbar-inverse-search-*` variables
- [#10223](https://github.com/twbs/bootstrap/issues/10223): Add `@input-color` to `.input-group-addon` to match the form controls
- [#10227](https://github.com/twbs/bootstrap/issues/10227): Use correct `max-width` on Offcanvas example media query and add `overflow-x: hidden` to prevent scrollbar on narrow devices
- [#10232](https://github.com/twbs/bootstrap/issues/10232): Scope `.table` styles to immediate `thead`, `tbody`, and `tfoot` elements
- [#10245](https://github.com/twbs/bootstrap/issues/10245): Add `@breadcrumb-separator` variable for customizing breadcrumbs
- [#10246](https://github.com/twbs/bootstrap/issues/10246): Use correct variable for link hover color in Customizer
- [#10256](https://github.com/twbs/bootstrap/issues/10256): Use `@navbar-default-brand-color` within the `@navbar-default-brand-hover-color` variable
- [#10257](https://github.com/twbs/bootstrap/issues/10257): Remove `filter` on navbars in `theme.less` so that dropdowns can be triggered in IE<10
- [#10265](https://github.com/twbs/bootstrap/issues/10265): Scope `background-image` reset to Bootstrap buttons and form controls only to avoid Android Firefox bug
- [#10336](https://github.com/twbs/bootstrap/issues/10336): Replace non-ASCII dash in LESS source file
- [#10341](https://github.com/twbs/bootstrap/issues/10341): Don't change border color on contextual table classes
- [#10399](https://github.com/twbs/bootstrap/issues/10399): Add hover styles to text emphasis classes
- [#10407](https://github.com/twbs/bootstrap/issues/10407): Add line-height to progress bar for proper text alignment within
- [#10436](https://github.com/twbs/bootstrap/issues/10436): Use `@screen-sm` variable instead of hardcoded pixel value in type.less
- [#10484](https://github.com/twbs/bootstrap/issues/10484): Allow for `.table-bordered` in panels by removing side and bottom margins
- [#10516](https://github.com/twbs/bootstrap/issues/10516): Use auto positioning for dropdowns in justified nav to fix Firefox rendering
- [#10521](https://github.com/twbs/bootstrap/issues/10521): Only remove `bottom-border` from last row of cells in `tbody` and `tfoot` within responsive tables
- [#10522](https://github.com/twbs/bootstrap/issues/10522): Enable use of form validation class on .radio, .checkbox, .radio-inline, and .checkbox-inline
- [#10526](https://github.com/twbs/bootstrap/issues/10526): Remove custom background on responsive tables and set it in the docs where it should've been originally
- [#10560](https://github.com/twbs/bootstrap/issues/10560): Remove `display: block;` from `address` element since browsers set that to start
- [#10590](https://github.com/twbs/bootstrap/issues/10590): Mention required jQuery version in docs
- [#10601](https://github.com/twbs/bootstrap/issues/10601): Use `overflow-y: auto;` for `.navbar-collapse` instead of `visible` to better enable scrolling on Android 4.x devices (see issue for more details on support and gotchas)
- [#10620](https://github.com/twbs/bootstrap/issues/10620): Remove `filter` on buttons for IE9 in `theme.less` due to bleed-through with rounded corners (matches behavior and style of Bootstrap 2.x)
- [#10641](https://github.com/twbs/bootstrap/issues/10641): Remove unused `.accordion-toggle` class from docs example
- [#10656](https://github.com/twbs/bootstrap/issues/10656): Inherit link and caret colors for textual dropdowns in panel headers
- [#10694](https://github.com/twbs/bootstrap/issues/10694): Remove unnecessary `content` property from `.caret`
- [#10695](https://github.com/twbs/bootstrap/issues/10695): Ensure carets in `.nav-pills` dropdown links inherit active color
- [#10729](https://github.com/twbs/bootstrap/issues/10729): Removed the unnecessary override and the `!important` from `.wrap` in the sticky footer examples
- [#10755](https://github.com/twbs/bootstrap/issues/10755): Don't remove quotes around `q` element by default
- [#10778](https://github.com/twbs/bootstrap/issues/10778): Use newly-updated Glyphicons to workaround old Android WebKit bug
- [#10763](https://github.com/twbs/bootstrap/issues/10763): Update html5shiv to v3.7.0
- [#10863](https://github.com/twbs/bootstrap/issues/10863): Fix check for presence of jQuery
- [#10893](https://github.com/twbs/bootstrap/issues/10893): Remove comma separating the color and the color-stop in `-webkit-linear-gradient` in `#gradient > .vertical` mixin
- [#10927](https://github.com/twbs/bootstrap/issues/10927): Scope `padding-top` on `.form-control-static` to horizontal forms only
- [#10949](https://github.com/twbs/bootstrap/issues/10949): Use variable for jumbotron `font-size` instead of hard-coded value
- [#10959](https://github.com/twbs/bootstrap/issues/10959): Round `.lead` `font-size` to nearest whole pixel
- [#10997](https://github.com/twbs/bootstrap/issues/10997): Move `.hidden` from responsive utilities to utilities (where it belongs, especially on account of deprecated `.hide` per #10769)
- [#11050](https://github.com/twbs/bootstrap/issues/11050): Restore grid mixins
- [#11126](https://github.com/twbs/bootstrap/issues/11126): Remove `box-shadow` from `.btn-link.dropdown-toggle`
- [#11127](https://github.com/twbs/bootstrap/issues/11127): `.navbar-fixed-bottom` should have a top border, not a bottom border
- [#11139](https://github.com/twbs/bootstrap/issues/11139): Add `position: relative;` to `.modal-dialog` so that the `z-index` takes effect
- [#11151](https://github.com/twbs/bootstrap/issues/11151): Remove rogue H5BP `.ir` class from print styles
- [#11186](https://github.com/twbs/bootstrap/issues/11186): Add `background-color` hacks so that clicking carousel indicators in IE8-9 works as intended
- [#11188](https://github.com/twbs/bootstrap/issues/11188): Refactor `z-index` on navbars. Removes the default `z-index: 1000;` and instead only applies it to static-top, fixed-top, and fixed-bottom. Also fixes up the broken default navbar example's fubared padding.
- [#11206](https://github.com/twbs/bootstrap/issues/11206): Remove `padding-left` from first list item within `.list-inline`
- [#11244](https://github.com/twbs/bootstrap/issues/11244): Adds `.animation()` mixin to replace `.progress-bar`'s regular CSS animation properties (and drops the `-moz`, `-ms`, and `-o` prefies as they are not needed per http://caniuse.com/#feat=css-animation).
- [#11248](https://github.com/twbs/bootstrap/issues/11248): Apply `background-color: #fff;` to `select`s in print styles to fix Chrome bug
- Audited Customizer variables section and rearranged content

### Deprecated

- [#9963](https://github.com/twbs/bootstrap/issues/9963), [#10567](https://github.com/twbs/bootstrap/issues/10567): Deprecate `@screen-*` variables for `@screen-*-min` to better match the `@screen-*-max` variables and provide more context to their actual uses.
- [#10005](https://github.com/twbs/bootstrap/issues/10005): Finish removing uses of `@screen-{device}` variables by deprecating them for `@screen-*-min` wherever possible.
- [#10100](https://github.com/twbs/bootstrap/issues/10100): Deprecate `.hide-text` mixin for `.text-hide`. This matches our class-mixin strategy elsewhere (e.g., `.clearfix`) and ensures the class and mixin use the same name to avoid confusion.
- [#10125](https://github.com/twbs/bootstrap/issues/10125): Deprecate inconsistent container variables for new `@container-{screen-size}` variables (e.g., use `@container-sm` instead of `@container-tablet`)
- [#10769](https://github.com/twbs/bootstrap/issues/10769): Deprecate `.hide` for `.hidden` so we don't duplicate functionality.

For even more details, see the [3.0.1 milestone](https://github.com/twbs/bootstrap/issues?milestone=22&page=1&state=closed).


## Moving to MIT license

We've been looking to move to the MIT license for quite some time, and today's release takes us that much closer. Starting with v3.0.1, all *new* contributions to Bootstrap will be dual-licensed as Apache 2 and MIT. The intent is to move the entire project (including all prior contributions) to the MIT license in a future version (hopefully v3.1.0).

To make the change, every contributor to Bootstrap must consent to relicense their changes (since we have no [CLA](http://en.wikipedia.org/wiki/Contributor_License_Agreement)). We're making excellent progress on that front with the community's help and will address holdouts as they come up.

As a heads up, we've placed notices in the contributing guidelines and our project readme about the pending change and transition period.

*It goes without saying that we don't need to do this, but we want to make Bootstrap available to all communities who cannot currently use it due to licensing conflicts. Theoretically these communities could change their licenses, but when you step back and objectively look at the situation, it's much easier for us to change. We hope you understand and stick it out with us as we make the move.*


## Growing the team

The Bootstrap core team doubled a few months ago when we added [Chris](https://github.com/cvrebert) and [Julian](https://github.com/juthilo) to the project. They've helped manage issues, written some awesome code, and provided critical input in the direction of the project. As Bootstrap grows, so too must our core team, and we're once again actively seeking new team members.

It'll be a slow process, much like last time, but we need the help on several fronts to keep us shipping and iterating. In particular, we'll be keeping an eye out for folks with top notch CSS and JavaScript skills.


## Up next

We're already tracking issues for a v3.0.2 release and its changes will be along the same lines as today's release—bugs and docs. v3.1.0 will likely ship after that sometime with a few new features. As always, no dates have been set yet for any future releases.

-----

<3,

[@mdo](https://twitter.com/mdo) and [team](https://github.com/twbs?tab=members)
