---
layout: post
title: New Bootstrap 4 alpha
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/J_kokTee01k?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

Bootstrap 4 alpha 2 is now available. Since [our last release]({% post_url 2015-08-19-bootstrap-4-alpha %}), nearly 100 people have pushed over 900 commits to v4 and we've closed over 400 issues and pull requests. Those numbers are outrageously awesome to see, and we've still got a ton of work ahead of us this year for v4.

As mentioned in [our last post]({% post_url 2015-08-19-bootstrap-4-alpha %}), the general plan for v4's development starts with a few alpha releases. We're a little behind on that, but should be getting caught up as the year winds down. Expect another alpha or two this month to really round things out.

Here's a look at a handful of the changes since our last alpha:

- Overhauled spacing utilities to use a numerical tiering (to avoid confusion with grid tiers).
- Continued refactoring efforts to replace markup-specific selectors with classes across several components (including pagination, lists, and more). *Still more to do here with additional components.*
- Reverted media queries and grid containers from rems to pixels as viewports are not affected by font-size. See [#17403](https://github.com/twbs/bootstrap/pull/17403) for details. *We've got a ton of grid work left, too. Feel free to follow along with [#18471](https://github.com/twbs/bootstrap/issues/18471).*
- Reverted `.0625rem` width borders to `1px` for more consistent component borders that avoid zoom and font-size bugs across browsers.
- Renamed `.img-responsive` to `.img-fluid` to avoid future confusion on the various responsive image solutions out there.
- Replaced ZeroClipboard with clipboard.js for Flash-independent copy buttons.
- Inputs and buttons now share the same border variable to ensure components are always sized similarly.
- Updated all pseudo-element selectors to use the spec's preferred double colon (e.g., `::before` as opposed to `:before`).
- Cards now have outline variants and mixins to support extending base classes further.
- Utility classes for floats and text alignment now have responsive ranges. *This means we've dropped the non-responsive classes to avoid duplication.*
- Added support for jQuery 2.
- And hundreds more Sass improvements, bug fixes, documentation updates, and more.

We highly encourage folks to skim through [the second alpha's milestone on GitHub](https://github.com/twbs/bootstrap/issues?q=milestone%3Av4.0.0-alpha.2+is%3Aclosed) for a better idea of what's changed across the board. You can also follow along with other v4 efforts with the [`v4` label](https://github.com/twbs/bootstrap/labels/v4) on our issue tracker.

**Ready to dive in? Then [head to the v4 alpha docs!](http://v4-alpha.getbootstrap.com)**

Be sure to [join our official Slack room!](https://bootstrap-slack.herokuapp.com) and dive into [our issue tracker](https://github.com/twbs/bootstrap/issues/) with bug reports, questions, and general feedback whenever possible.

<3,

[@mdo](https://twitter.com/mdo) & [team](https://github.com/twbs)
