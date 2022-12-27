---
author: mdo
date: "2013-03-01T00:00:00Z"
title: Bootstrap 2.3.1 released
keywords:
  - bootstrap
  - release
---

While Bootstrap 2.3 was the last planned release ahead of 3.0, we've just pushed out a small patch to address a few lingering JavaScript bugs. [Bootstrap 3](https://github.com/twbs/bootstrap/pull/6342) is still under development and is trucking along quite nicely. We'll have more to share there soon.

Until then, **here's what's new with 2.3.1:**

- Fix missing event type in dropdown plugin
- Fix delegated data-attrs for popover/tooltip
- Make carousel actually pause when you click cycle
- Fix jshint ref in makefile
- Fix trying to remove backdrop when no backdrop is set

Check out the [2.3.1 pull request](https://github.com/twbs/bootstrap/pull/7111) for more details on the changes in this release.

<a class="btn-download-link" href="https://github.com/twbs/bootstrap/archive/v2.3.1.zip">Download Bootstrap 2.3.1</a> <span class="muted">(latest master ZIP)</span>

**Side note:** Aside from the fixes in this release, future bugs will only be addressed in 3.0, or punted entirely, as appropriate. This release just fixes a few things left broken that we didn't feel comfortable ignoring for the next several weeks.
