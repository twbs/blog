---
layout: post
title: Bootstrap 3.3.5 released
version: 3.3.5
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/vCadcBR95oU?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

Bootstrap 3.3.5 is here! This release has focused on bug fixes, accessibility improvements, and documentation updates. We've had over 330 commits and 160 closed issues and pull requests from over 40 contributors since our last release! Hell yeah.

Here are some of the highlights:

- Updated to Normalize.css v3.0.3.
- [Updated `main` in `bower.json` to comply with recent update to the `bower.json` specification](https://github.com/twbs/bootstrap/pull/16359)
- List groups now support `<button>` elements.
- Cleaned up some extraneous `padding` on jumbotrons across various viewports.
- Fixed input group sizing classes on all supported elements for real this time.
- Applied a few tooltip and popover positioning fixes.
- Fixed behavior when using tooltips and popovers that are triggered by multiple events.
- Fixed some memory leakage in the tooltip and popover plugins.
- Fixed incorrect Affix positioning when a webpage has a sticky footer.
- Fixed npm package to include all Grunt scripts, so that `grunt dist` works if you installed Bootstrap from npm.

For a complete breakdown, [read the release changelog](https://github.com/twbs/bootstrap/releases/tag/v3.3.5) and the [v3.3.5 milestone](https://github.com/twbs/bootstrap/issues?q=milestone%3Av3.3.5+is%3Aclosed).

## Bootstrap Slack

Since we last shipped a release, we made an official Slack for folks to hang out with other Bootstrappers. Registration is completely open thanks to the [Slackin open source project](https://github.com/rauchg/slackin). We have two channels to start—general and help—and nearly 1,000 members to date!

**[Sign up here](https://bootstrap-slack.herokuapp.com/)** to join.

## wiredep and Bower
Due to vagueness in Bower's specification, wiredep made some questionable assumptions about how the `main` field in `bower.json` works. Recently, [Bower updated their spec to address this and clarify how `main` should work](https://github.com/bower/bower.json-spec/pull/43), and we [updated our `bower.json` accordingly](https://github.com/twbs/bootstrap/pull/16359). Unfortunately, [wiredep broke as a result](https://github.com/twbs/bootstrap/issues/16663) if you were using it with Bootstrap's vanilla precompiled CSS. Bower is [working to further update their spec](https://github.com/bower/bower.json-spec/issues/47) to address this problem and better assist tools like wiredep.

In the meantime, a quick-and-dirty workaround to get wiredep to work with Bootstrap again is to add the following to your project's `bower.json`:

{% highlight json %}
"overrides": {
  "bootstrap": {
    "main": [
      "dist/js/bootstrap.js",
      "dist/css/bootstrap.css",
      "less/bootstrap.less"
    ]
  }
}
{% endhighlight %}

## Download Bootstrap

Download the latest release—source code, compiled assets, and documentation—as a ZIP file directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.3.5.zip">Download Bootstrap 3.3.5</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options. Also, remember [we're available on npm](https://www.npmjs.org/package/bootstrap), too.

## Bootstrap CDN

After reviewing the changelog, update your CDN links to point to the v3.3.5 files:

{% highlight html %}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
{% endhighlight %}

<3,

[@cvrebert](https://github.com/cvrebert) & [team](http://getbootstrap.com/about/#team)
