---
layout: post
title: Bootstrap 3.2.0 released
---

<iframe width="760" height="428" src="//www.youtube.com/embed/LaTGrV58wec?rel=0" allowfullscreen></iframe>

Today we're shipping Bootstrap v3.2.0, a monster of a release that's been in the works for four months. There's lots of new hotness, hundreds of bug fixes, plenty of documentation improvements, and some build tool improvements. All told, there have been over 1,000 commits since our last release.

## Download Bootstrap

Download the latest release—source code, compiled assets, and documentation—as a zip file directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.2.0.zip">Download Bootstrap 3.2.0</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options. Also, remember [we're available on npm](https://www.npmjs.org/package/bootstrap), too.

## Bootstrap CDN

After reviewing the changelog, update your CDN links to point to the v3.2.0 files:

{% highlight html %}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
{% endhighlight %}

## What's new

Here's a look at some of the highlights of this release.

### Responsive embeds

As seen in SUIT CSS, we've added a few classes for creating responsive embeds. They're perfect for Youtube videos and more. Head to the docs to check them out.

### New responsive utility classes

We've had responsive utility classes—e.g., `.visible-xs`—for awhile now. Today, they level up a bit. We've added `block`, `inline-block`, and `inline` variations for each grid tier. For example, `.visible-xs-block` is now a thing.

Looking for table styles? Don't fret—the existing classes work on for those. Check out the source code for any questions.

### Copy docs snippets

Our documentation snippets just got an upgrade with the help of ZeroClipboard, the open source Flash-based copy-paste button. It'll appear in the top right of nearly every example in the docs. Just click, and paste.

### LMVTFY

We blogged about this yesterday, but starting last week we have a new bot hanging out in our issues and pull requests on GitHub. Whenever someone pastes in a live example—like those from JS Bin or jsfiddle—we validate the HTML. If it's invalid, we tell folks what's wrong so they can fix it.

### Browser bugs

With today's release, we've begun tracking unresolved browser bugs that currently impact Bootstrap's development in some way. We call it the [Wall of browser bugs](http://getbootstrap.com/browser-bugs). One of the coolest parts of developing Bootstrap is finding and reporting browser bugs to their developers. At several levels, we're literally helping make the web a better place. Aww yeah.

For a complete breakdown, [read the release changelog](https://github.com/twbs/bootstrap/releases/tag/v3.2.0) or the [v3.2.0 milestone](https://github.com/twbs/bootstrap/issues?milestone=26&page=1&state=closed)

## What's next


<3
