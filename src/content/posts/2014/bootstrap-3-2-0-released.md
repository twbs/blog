---
author: mdo
date: "2014-06-26T00:00:00Z"
title: Bootstrap 3.2.0 released
video: LaTGrV58wec
keywords:
  - bootstrap
  - release
---

Today we're shipping Bootstrap v3.2.0, a monster of a release that's been in the works for four months. There's lots of new hotness, hundreds of bug fixes, plenty of documentation improvements, and some build tool improvements. All told, there have been over 1,000 commits since our last release.

## Download Bootstrap

Download the latest release—source code, compiled assets, and documentation—as a zip file directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.2.0.zip">Download Bootstrap 3.2.0</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options. Also, remember [we're available on npm](https://www.npmjs.com/package/bootstrap), too.

## Bootstrap CDN

After reviewing the changelog, update your CDN links to point to the v3.2.0 files:

```html
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
```

## What's new

Here's a look at some of the highlights of this release.

### Responsive embeds

As seen in [SUIT CSS](https://suitcss.github.io/), we've added a few classes for creating responsive embeds. They're great for proportionally scaling down YouTube videos and other `iframe` or `embed` elements. [Head to the docs]({{< param "main" >}}/components/#responsive-embed) to check them out.

### New responsive utility classes

We've had responsive utility classes—e.g., `.visible-xs`—for awhile now. Today, they level up a bit. We've added `block`, `inline-block`, and `inline` variations for each grid tier. For example, `.visible-xs-block` is now a thing.

### Copy docs snippets

Our documentation snippets just got an upgrade with the help of [ZeroClipboard](https://github.com/zeroclipboard/zeroclipboard), the open source Flash-based copy-paste button. It'll appear in the top right of nearly every example in the docs. Just click, and paste.

### LMVTFY

[We blogged about this yesterday]({{< relref "/posts/2014/lmvtfy" >}}), but we have a new bot hanging out in our issues and pull requests on GitHub. Whenever someone pastes in a live example—like those from JS Bin or jsFiddle—we now validate their HTML. If it's invalid, we tell folks what's wrong so they can fix it.

### Browser bugs

We've also begun tracking unresolved browser bugs that currently impact Bootstrap's development in some way. We call it the [Wall of browser bugs]({{< param "main" >}}/browser-bugs/). One of the coolest parts of developing Bootstrap is finding and reporting browser bugs to their developers. We're literally helping to make the web a better place, and that's pretty awesome in our book.

### And dozens more...

With over 1,000 commits, a lot has changed, and all of it for the better. A few more notable changes include:

- The docs have been rearranged and updated to be more specific and easier to develop.
- The progress bar component has been improved for increased flexibility.
- CSS repaint performance (most notably through scrolling) has been enhanced for several components.
- Keyboard navigation (forward and backward) is now available for the carousel.
- Modals should no longer shift left when being opened.

For a complete breakdown, [read the release changelog](https://github.com/twbs/bootstrap/releases/tag/v3.2.0) or the [v3.2.0 milestone](https://github.com/twbs/bootstrap/issues?milestone=26&q=is%3Aclosed).

## What's next

Well, we'll probably have a patch release (v3.2.1), and then I imagine it's onward to v4. We have a v3.3.0 milestone on GitHub, but it's still unclear if we'll ship that before jumping to v4. We've been building a list of things we'd like to see in the new version, but we don't have anything ready for the public yet. We'll share more details as we have them though. Until then, enjoy!
