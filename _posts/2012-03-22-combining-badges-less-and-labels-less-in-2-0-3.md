---
layout: post
title: Combining badges.less and labels.less in 2.0.3
---

For one reason or another, in 2.0.2 we made badges have separate LESS files. The CSS is 95% the same, but we knew that some folks might need one or the other, or even both. With [2.0.3](https://github.com/twbs/bootstrap/issues?milestone=10&state=open), we'll be simplifying some of those styles into a single .less file and scoping the `:hover` state to anchors only.

Moving forward, we'll have the following as a shared set of base styles. As you can see, when combined, there isn't much extra weight at all for those who want just badges or labels.

{% highlight scss %}
.label,
.badge {
  font-size: @baseFontSize * .846;
  font-weight: bold;
  line-height: 13px; // ensure proper line-height if floated
  color: @white;
  vertical-align: middle;
  white-space: nowrap;
  text-shadow: 0 -1px 0 rgba(0,0,0,.25);
  background-color: @grayLight;
}
{% endhighlight %}

One file, multiple components. We've done it before with our multiple types of navigation, so it's nothing folks familiar with Bootstrap haven't seen before.

On a related note, we've changed how we handle hover states for badges and labels. Instead of having a default hover state on an inherently static element, one made with say a `span`, we relegate the hover state (a cursor and background change) to anchors only.

{% highlight scss %}
a {
  &.label:hover,
  &.badge:hover {
    color: @white;
    text-decoration: none;
    cursor: pointer;
  }
}
{% endhighlight %}

For the alternate colors on badges and labels, we've also relegated those styles to anchors only (those with an `href` attribute).
