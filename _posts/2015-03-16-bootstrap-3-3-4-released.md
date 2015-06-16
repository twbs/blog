---
layout: post
title: Bootstrap 3.3.4 released
version: 3.3.4
video: real mccoy run away
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/_dx0qWHL7dc?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

Bootstrap 3.3.4 is here! This release has been focused on bug fixes and documentation improvements. We've had over 325 commits from 29 contributors since our last release! Nice.

Here are some of the highlights:

- Fixes for a few significant bugs in the Modal plugin.
- Fixes for a couple annoying bugs in the ScrollSpy plugin.
- [Bootstrap is now also available as a Meteor package in the Atmosphere package index.](https://atmospherejs.com/twbs/bootstrap)
- Convenience aliases have been added for currency symbol Glyphicons based on their related 3-letter ISO currency codes. For example, `.glyphicon-rub` is a new alias for `.glyphicon-ruble`, the currency symbol for the Russian ruble (RUB).
- We have deployed [AnchorJS](http://bryanbraun.github.io/anchorjs/) in our documentation to make it easier to link to specific sections within the docs.

For a complete breakdown, [read the release changelog](https://github.com/twbs/bootstrap/releases/tag/v3.3.4) or the [v3.3.4 milestone](https://github.com/twbs/bootstrap/issues?q=milestone%3Av3.3.4+is%3Aclosed).

## What happened to v3.3.3?

Since our previous release was v3.3.2, you're probably wondering why this release isn't v3.3.3 instead. Basically, [the official Sass port of Bootstrap](https://github.com/twbs/bootstrap-sass) had [a Sass-specific bug](https://github.com/twbs/bootstrap-sass/commit/daeb43dcc7b0ab06328acaca0549ee68c039aaa6) in their v3.3.2 release, so they immediately issued a follow-up release to fix the bug. This bugfix release was initially numbered as v3.3.2+1. However, this 4-digit version number scheme has caused grief with some tools, so with the blessing of the Core Team, the Sass Team took this opportunity to switch to a more vanilla 3-digit SemVer numbering scheme. Thus, bootstrap-sass v3.3.2+1 was re-released as [bootstrap-sass v3.3.3](https://github.com/twbs/bootstrap-sass/releases/tag/v3.3.3), with only the version number changed compared to v3.3.2+1.

To avoid confusion regarding which bootstrap-sass release(s) correspond to which upstream Bootstrap release, Bootstrap's version numbering will henceforth skip over any bootstrap-sass patch release version numbers. Thus, the patch digit (i.e. the 3rd digit) of bootstrap-sass's version number may be ahead of Bootstrap's due to Sass-specific fixes, and the next Bootstrap release's number will always be greater than the previous bootstrap-sass release's number.

## Download Bootstrap

Download the latest release—source code, compiled assets, and documentation—as a ZIP file directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.3.4.zip">Download Bootstrap 3.3.4</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options. Also, remember [we're available on npm](https://www.npmjs.org/package/bootstrap), too.

## Bootstrap CDN

After reviewing the changelog, update your CDN links to point to the v3.3.4 files:

{% highlight html %}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
{% endhighlight %}

<3,

[@cvrebert](https://github.com/cvrebert) & [team](https://github.com/orgs/twbs/people)
