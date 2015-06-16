---
layout: post
title: Bootstrap 3.3.0 released
version: 3.3.0
video: corona the rhythym of the night
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Zr9R7hN1YSs?rel=0" width="760" height="428" allowfullscreen></iframe>
</div>

Bootstrap 3.3.0 is here! This release has been all about bug fixes, accessibility improvements, and documentation updates. We've had over 700 commits from 28 contributors since our last release. Woohoo!

Here are some of the highlights:

- Added a handful of new Less variables for easier customization.
- Removed recent progress bar changes for low percentages.
- Removed all instances of `translate3d` as they improved repaint performance, but also added several cross browser bugs.
- Added `transform`s to improve carousel performance in modern browsers.
- Updated Normalize.css and our H5BP print styles to their latest releases.
- Improved accessibility for navs, panels, tooltips, buttons, and more.
- Resolved dozens of JavaScript and documentation bugs.

For a complete breakdown, [read the release changelog](https://github.com/twbs/bootstrap/releases/tag/v3.3.0) or the [v3.3.0 milestone](https://github.com/twbs/bootstrap/issues?q=milestone%3Av3.3.0+is%3Aclosed).

## Download Bootstrap

Download the latest release—source code, compiled assets, and documentation—as a zip file directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.3.0.zip">Download Bootstrap 3.3.0</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options. Also, remember [we're available on npm](https://www.npmjs.org/package/bootstrap), too.

*An update for the Bootstrap CDN will be available shortly.*

## New tools

Since our last release, we've open sourced two new tools:

- [Bootlint](/2014/09/23/bootlint/), a custom linter for all your Bootstrap projects.
- [Rorschach](/2014/10/13/rorschach/), a bot for checking new pull requests for common mistakes.

They join [LMVTFY](/2014/06/25/lmvtfy/), our bot for quickly validating HTML in live examples. As the project, team, and community continue to grow, look for even more awesome tools to be open sourced.

## Onward to Bootstrap 4

Perhaps the best part of releasing v3.3.0 today is that we can start to tell you more about Bootstrap 4! While the first alpha is a couple weeks off, here's a quick preview of what's to come:

- Updated grid system with at least one additional tier for handheld devices.
- A brand new component to replace panels, thumbnails, and wells.
- A completely new, simpler navbar.
- Switch all pixel values over to rems and ems for easier and better type and component sizing.
- Dropped support for IE8.
- Tons of form updates, including custom form controls.
- New component animations and transitions for several components.
- UMD support throughout our JavaScript plugins.
- Improved JavaScript positioning for tooltips, popovers, and dropdowns.
- Brand new documentation (written in Markdown, too!).
- A new approach to configuring global theming options.
- And hundreds more changes across the board.

We'd love to tell you more, but the dust still has to settle before we open our first pull request with a live alpha release. In addition to launching in v4 in the coming months, we'll be maintaining v3 with small bugfixes for the first few months after the new version ships.

<3,

[@mdo](https://twitter.com/mdo) & [team](https://github.com/orgs/twbs/people)
