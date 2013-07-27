---
layout: post
title: Bootstrap 2.1.1 released
---

[Two weeks later](http://blog.getbootstrap.com/2012/08/20/bootstrap-2-1-0-released/), we've closed another 500 issues against Bootstrap. That includes all the dupes—you nerds like reporting typos—and invalid issues that don't end up making it on the official release milestone. But, what's awesome is that we have 2.1.1 ready to rock with 73 bugfixes.


## Get it

Head on over to [http://getbootstrap.com](http://getbootstrap.com) and get your fix, or download the [latest master ZIP right from GitHub](https://github.com/twbs/bootstrap/zipball/master).


## What's changed

Here's the rundown:

* New feature: alert text. We documented these new classes, like `.text-success`, at the bottom of the [Typography section](http://twitter.github.com/bootstrap/base-css.html#typography) along with the long undocumented `.muted`.
* Fixed a lot of typos in the docs. Spelling is hard.
* Made the `.box-shadow()` mixin more durable. It no longer requires escaping for multiple shadows, meaning you can easily use variables and functions in them once again.
* Widened `.dl-horizontal dt` and `.horizontal-form .control-group` to better handle the increased font-size.
* Dropdown submenus improved: now you only see the next level, not all levels, on hover of the submenu toggle.
* Clarified jQuery and Bootstrap template requirements in Getting Started section.
* `select` now utilizes `@inputBorder`.
* `.lead` now scales up from `@baseFontSize` instead of being a fixed font-size and line-height.
* Fixed the vertical three color gradient in latest Firefox.
* Reordered some variables that caused errors in certain Less compilers.

There's a bunch more, so do run through the [2.1.1 milestone](https://github.com/twbs/bootstrap/issues?milestone=14&state=closed) when you can, but those are the big ones.


## Next up

**More bug fixes, more feature improvements.** 2.1.2 will be coming shortly and we'll work to improve a handful of issues that we punted on for 2.1.1. Beyond that, we've scoped out the [next few releases](https://github.com/twbs/bootstrap/issues/milestones) around a set of key components like modals and carousels.

We'll continue to add new features as appropriate, but we're primarily focused on improving current functionality in the next few months.