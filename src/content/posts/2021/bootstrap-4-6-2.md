---
author: mdo
date: "2022-07-14T21:30:00Z"
title: Bootstrap v4.6.2
video: RDTzFnYcIqj6I
video_start: 135
keywords:
  - bootstrap
  - release
---

After several months, we've finally shipped Bootstrap v4.6.2, one of our last releases for the v4. It's a bit of a maintenance patch featuring all bug fixes, dependency updates, and some docs updates.

Read on for the highlights or [head to the v4.6.x docs](https://getbootstrap.com/docs/4.6/) to see the latest in action.

## What's changed

There are two big highlights in v4.6.2:

- First, we've added an example to our Collapse plugin docs to show how to use horizontal collapsing. This has long been possible via our JS, but we never had an official class to utitlize it.

- Second, we've replaced the deprecated `color-adjust` with `print-color-adjust` as part of the Autoprefixer v10.4.6 issues. This should quiet the issues folks have seen from that dependency change.

Beyond that, we've addressed a few other things:

- Tweaked the size of `small` and `.small` to compute to a whole pixel value (was `12.8px` and now is `14px`).
- Improved accessibility around our dropdowns, color contrast, and `role` attributes.
- Fixed some broken links to supporting documentation.
- Updated dependencies across the board.

[Review the GitHub v4.6.2 release changelog](https://github.com/twbs/bootstrap/releases/tag/v4.6.2) for more details.

From here, we don't expect to ship any meaningful updates to v4.6.x other than major security or dependency updates. Everything will focus on v5 and beyond after this release, starting with the stable release of v5.2.0 in the next couple of weeks.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
