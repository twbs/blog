---
layout: post
title: Bootstrap 3.3.7 released
version: 3.3.7
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p0OX_8YvFxA?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

Bootstrap 3.3.7 is here! We've had over 220 commits and 80 closed issues and pull requests from nearly 30 contributors since our last release. Woohoo!

Here are some of the highlights:

- Added support for jQuery 3.
- Added inline source files into sourcemap eliminating `4xx` errors on the CDN.
- Updated several devDependencies and gems.
- Removed unsupported vendor prefixes for `@viewport`.

For a complete breakdown, [read the release changelog](https://github.com/twbs/bootstrap/releases/tag/v3.3.7) and the [v3.3.7 milestone](https://github.com/twbs/bootstrap/issues?q=milestone%3Av3.3.7+is%3Aclosed).

## Download Bootstrap

Download the latest release—source code, compiled assets, and documentation—as a ZIP file directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.3.7.zip">Download Bootstrap 3.3.7</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options. Also, remember [we're available on npm](https://www.npmjs.org/package/bootstrap), too.

## Bootstrap CDN

After reviewing the changelog, update your CDN links to point to the v3.3.6 files:

{% highlight html %}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
{% endhighlight %}

<3,

[@cvrebert](https://twitter.com/cvrebert) & [team](http://getbootstrap.com/about/#team)
