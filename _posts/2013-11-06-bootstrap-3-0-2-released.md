---
layout: post
title: Bootstrap 3.0.2 released
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/-eSN8Cwit_s?rel=0" width="760" height="428" allowfullscreen></iframe>
</div>

Today we're shipping a quick v3.0.2 patch to fix incorrect version numbers in our JavaScript files, restore missing grid classes, and make a few improvements to our documentation.

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.0.2.zip">Download Bootstrap 3.0.2</a> or hit the [GitHub repository](https://github.com/twbs/bootstrap)

-----

## Key changes

Here's the rundown on what's changed:

* [#10039](https://github.com/twbs/bootstrap/issues/10039): Remove `window.jQuery` for `jQuery`.
* [#11273](https://github.com/twbs/bootstrap/issues/11273): Add branch alias for `composer.json`.
* [#11295](https://github.com/twbs/bootstrap/issues/11295): Restore offset, push, and pull zero classes (e.g., `.col-md-offset-0`)
* [#11315](https://github.com/twbs/bootstrap/issues/11315): Add navigation role to example navbars.
* [#11327](https://github.com/twbs/bootstrap/issues/11327): Improve nesting of `.thumbnail` styles.
* [#11334](https://github.com/twbs/bootstrap/issues/11334): Remove unnecessary `&` from CSS nesting for panels.
* [#11335](https://github.com/twbs/bootstrap/issues/11335): Add Grunt task to update version numbers across entire project. (**Note:** If you run our docs locally, you'll need to run `npm install` in order to run `grunt`).
* [#11336](https://github.com/twbs/bootstrap/issues/11336): Don't use nonstandard `window.location.origin` in Customizer.
* [#11345](https://github.com/twbs/bootstrap/issues/11345): Remove duplicate class changes in migration instructions.
* [#11349](https://github.com/twbs/bootstrap/issues/11349): Add screen reader text for navbar toggles.
* [#11378](https://github.com/twbs/bootstrap/issues/11378): Use `.navbar-*` alignment classes in `.navbar-text` example.
* Update Node to v0.10.x (current stable)
* Fix links to same-page anchors
* Drop `media` type on basic template example
* Correct download links in readme

As always, get the details from the [v3.0.2 milestone](https://github.com/twbs/bootstrap/issues?milestone=23&page=1&state=closed).


## Up next

This release was unplanned, and as such it bumps a lot of planned fixes to a v3.0.3 release. We've already updated the relevant issues to be under the new v3.0.3 milestone. Look for that release, and perhaps another patch, before v3.1.0 ships in the coming months.

-----

<3,

[@mdo](https://twitter.com/mdo) and [team](https://github.com/twbs?tab=members)
