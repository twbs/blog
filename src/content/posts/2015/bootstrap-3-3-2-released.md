---
author: mdo
date: "2015-01-19T00:00:00Z"
title: Bootstrap 3.3.2 released
video: RGLhCXyuWg4
keywords:
  - bootstrap
  - release
---

Bootstrap 3.3.2 is here! This release has been all about bug fixes, accessibility improvements, and documentation updates. We've had over 300 commits from 19 contributors since our last release. Woohoo!

Here are some of the highlights:

- Updated Glyphicons to v1.9.
- Reverted support for delegating multiple tooltips via a single element, because it caused nasty regressions.
- Fixed a regression that broke `wrap: false` for the carousel plugin.
- Added manual vendor prefixing back to carousel CSS to avoid a regression among folks not yet using [Autoprefixer](https://github.com/postcss/autoprefixer).
- Improved accessibility of our examples and added more accessibility guidance to our docs.

We've also deployed two new bots to aid Bootstrap's development:

- [Savage](https://github.com/twbs/savage), a bot to automatically run Sauce cross-browser tests on JavaScript pull requests.
- [@twbs-grunt](https://github.com/twbs-grunt), a bot to automatically keep our compiled `/dist/` files up-to-date

For a complete breakdown, [read the release changelog](https://github.com/twbs/bootstrap/releases/tag/v3.3.2) or the [v3.3.2 milestone](https://github.com/twbs/bootstrap/issues?q=milestone%3Av3.3.2+is%3Aclosed).

## New team member

We're stoked to welcome [Patrick](https://github.com/patrickhlauke) to the Bootstrap team! Patrick brings with him terrific accessibility expertise and has already contributed many improvements to Bootstrap's components and documentation.

## Download Bootstrap

Download the latest release—source code, compiled assets, and documentation—as a zip file directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.3.2.zip">Download Bootstrap 3.3.2</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options. Also, remember [we're available on npm](https://www.npmjs.com/package/bootstrap), too.

## Bootstrap CDN

After reviewing the changelog, update your CDN links to point to the v3.3.2 files:

```html
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
```
