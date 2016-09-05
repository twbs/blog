---
layout: post
title: Bootstrap 4 Alpha 4
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/p0OX_8YvFxA?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

[Alpha 4 is here](http://v4-alpha.getbootstrap.com) to address those pesky build and package errors, a few CSS bugs, and some documentation inconsistencies we introduced in our last release.

This is a super small release compared to our previous alphas, so here's the rundown on what's changed:

- Fixed `package.json` errors
- Additional migration notices for more components
- Fix broken flexbox utilities on flexbox grid page
- Fix inconsistent checkbox and radio markup, as well as validation styles
- Minor tweaks to cards, alerts, utilities, and input groups

At the time of release, the Bootstrap CDN hasn't been updated for Alpha 4. Apologies for the delay, and stay tuned for an update on when they're live.

For more details on this release's changes, take a look at the [Alpha 4 ship list issue](https://github.com/twbs/bootstrap/issues/20373), as well as the [closed Alpha 4 milestone](https://github.com/twbs/bootstrap/milestone/40?closed=1). Be sure to [join our official Slack room!](https://bootstrap-slack.herokuapp.com) and dive into [our issue tracker](https://github.com/twbs/bootstrap/issues/) with bug reports, questions, and general feedback whenever possible.

**Using the Bootstrap CDN?** Review the changelog and update your CDN links to point to the latest files:

{% highlight html %}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
{% endhighlight %}

<3,<br>
[@mdo](https://twitter.com/mdo) & [team](https://github.com/twbs)
