---
author: mdo
date: "2020-05-12T00:00:00Z"
title: Bootstrap 4.5.0
video: tNG62fULYgI
keywords:
  - bootstrap
  - release
---

Bootstrap v4.5.0 has landed with dozens of bug fixes, some small new features, and some changes to our development. Originally planned as a v4.4.2 patch release, we've bumped this to a minor release on account of our new features that help bridge the gap between v4 and our upcoming v5.

## Highlights

Here's what you need to know about v4.5.0. Remember that with every minor and major release of Bootstrap, we ship a new URL for our hosted docs to ensure URLs continue to work.

- **New interaction utilities.** Quickly set `user-select` with the new utilities and Sass map.
- **New Reboot style for pointer cursors.** We now include a `role="button"` selector in Reboot to set `cursor: pointer` on non-`<button>` element buttons.
- **Examples are now downloadable.** We've added a script to zip up and offer all our Examples as their own download from the docs.
- **Saved ~5%** from the compressed minified JS builds.
- Added guidance to our docs for how to work around our longstanding input group rounded corner bug.
- Redesigned docs homepage and navbar to increment us towards v5's new docs design.
- Deprecated `bg-gradient-variant` mixin as it's being removed in v5.
- Updated to jQuery v3.5.1, Jekyll v4, and dropped Node.js < 10 for development.

We've shipped a lot more in this release, so be sure to check out the [v4.5.0 GitHub release](https://github.com/twbs/bootstrap/releases/tag/v4.5.0) and the [v4.5.0 project for closed issues and merged pull requests](https://github.com/twbs/bootstrap/projects/20) for more details.

[Head to the v4.5.0 docs](https://getbootstrap.com/docs/4.5/) to see the latest in action. The full release has been published to npm and will soon appear on the BootstrapCDN and Rubygems.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
