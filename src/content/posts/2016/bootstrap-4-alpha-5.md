---
author: mdo
date: "2016-10-19T00:00:00Z"
title: Bootstrap 4 Alpha 5
video: MxGEVIvSFeY
---

[Alpha 5 has arrived](https://v4-alpha.getbootstrap.com/) just over a month after Alpha 4 with some major feature improvements and a boat load of bug fixes. We still have a lot of work to do, but we're closing the gap and getting more stable with each release. Keep reading for the highlights and plans for Alpha 6.

### New CSS bundles

We've updated our build process to include compiled versions of all our CSS bundles. In addition to the longstanding default compiled and minified bundles, we now include compiled CSS files for our flexbox mode, grid system only, and Reboot only bundles. Each bundle includes a compiled, minified, and Sass map, just like the default compiled CSS.

### Grid updates

Our grid system has been updated and is more flexible than ever. New in Alpha 5 are breakpoint specific grid gutters. That's right, now you can customize the width of your gutters across each and every grid tier by modifying the Sass map.

The `.container` behaviors have changed slightly in Alpha 5. We now set the `width` of each container alongside a `max-width: 100%;` to ensure proper rendering across browsers in both our default and flexbox modes. Similarly, we fixed a bug in our flexbox grid where columns didn't properly collapse at lower breakpoints.

Lastly, we've changed a few breakpoint and container dimensions. The `sm` tier's container is now smaller than it's viewport dimensions and the `lg` tier has changed from `940px` to `960px` for grid columns that more cleanly by 12.

### Utilities overhaul

Utility classes got a ton of attention with Alpha 5 and will continue to in Alpha 6. Major changes in this release include:

- Simpler `margin` and `padding` syntax (e.g., now `mx-auto` instead of `m-x-auto`).

- Renamed `.pull-*-left` and `.pull-*-right` to their CSS properties (e.g., now `.float-*-left` and `.float-*-right`).

- Separated `background` and `color` utilities for more explicit styling.

- Renamed image utilities, moving from `.img-rounded` and `.img-circle` to `.rounded` and `.rounded-circle`, respectively.

- Removed the `display: block;` from `.img-fluid` as it's unnecessary for creating responsive images (the `inline-block` default works great as-is).

- Added new `vertical-align` utilities with `.align-top`, `.align-middle`, and more.

Be sure to scope out the open issues in [the Alpha 6 milestone](https://github.com/twbs/bootstrap/milestone/39). There are more updates coming to utilities to add more responsive variations, more consistent naming, and more.

### Navbar updates

We've put a [ton of time into the navbar for Alpha 5](https://github.com/twbs/bootstrap/pull/19890), but honestly it's still not done. Rather than hold back the progress we've made for it until Alpha 6, we're including a somewhat half-baked iteration.

Here's a look at what's new, how it works, and what might change in our next release.

- First up, the navbar has a **brand new toggler** that features a customizable SVG-based `background-image`. With the power of Sass variables, that allows us to easily change the color of those hamburger menu icons.

- Second, the **default styles for the brand and navigation have largely been tweaked**. There's less custom styling overall and an emphasis on positioning and flexibility.

- Building on that, we **overhauled the collapse plugin integration for responsive navbars**. With the help of some utility classes and collapse classes for each grid tier, you can easily pick the breakpoint for collapsing your navbar without having to recompile your Sass. Also included is the auto restyling of dropdown menus for mobile so they no longer hide other navbar content when toggled.

- Lastly, we've **updated the styling and documentation for various navbar subcomponents**. There's more flexibility and examples of the `.navbar-brand`, better form control support, higher nav contrast, themed responsive toggles, and more.

The navbar is a tricky one—there's so much functionality and styling that can go into them. We've [outlined the next major pieces for the navbar](https://github.com/twbs/bootstrap/issues/20937), but there's likely more we're missing. Be sure to give the updated component a whirl and report back with your feedback.

### Getting to Alpha 6

We're planning on one more major alpha release before getting into the slightly more stable beta ships. There's still more to do around our major components—the navbar, flexbox variants, utilities, and accessibility—before we button things up.

Once done, we'll review all on our docs and update all our example templates to the latest and greatest. From there we'll need your help to test these changes and report bugs. Stay tuned for more updates as we get closer to that release.

Until then, have at it with Alpha 5!

---

For more details on this release's changes, take a look at the [Alpha 5 ship list issue](https://github.com/twbs/bootstrap/issues/20630), as well as the [closed Alpha 5 milestone](https://github.com/twbs/bootstrap/milestone/36?closed=1). Be sure to [join our official Slack room!](https://bootstrap-slack.herokuapp.com) and dive into [our issue tracker](https://github.com/twbs/bootstrap/issues/) with bug reports, questions, and general feedback whenever possible.

**Using the Bootstrap CDN?** Review the changelog and update your CDN links to point to the latest files:

```html
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
```
