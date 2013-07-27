---
layout: post
title: Bootstrap 2.2.0 released
---

Aww yeah, our first release since leaving Twitter is here with Bootstrap 2.2.0! We originally planned to release this as 2.1.2, but given the timing and scope we’re bumping the version. Included in this release are dozens of bug fixes, documentation enhancements, and a few new and improved features.

## tl;dr

2.1.2 is now 2.2.0: four new example templates, added media component, new typographic scale, fixed that box-shadow mixin bug, fixed z-index issues, and [more](https://github.com/twbs/bootstrap/issues?milestone=15&page=1&state=closed).

## Highlights

- **Added four new example templates** to the docs, including a narrow marketing page, sign in form, sticky footer, and a fancy carousel (created for an upcoming .net magazine article).
- **Added the media component**, to create larger common components like comments, Tweets, etc.
- **New variable-driven typographic scale** based on `@baseFontSize` and `@baseLineHeight`.
- Revamped mini, small, and large padding via new variables for inputs and buttons so everything is the same size.
- Reverted 2.1.1's `.box-shadow();` mixin change that caused compiler errors.
- Improved dropdown submenus to support dropups and left-aligned submenus.
- Fixed z-index issues with tooltips and popovers in modals.
- Hero unit now sets basic type styles for the entire component, rather than on `.hero-unit p { ... }`.
- Updated JavaScript plugins and docs to jQuery 1.8.1.
- Added Contributing.md file.
- Added support for installing Bootstrap via [Bower](http://twitter.github.com/bower).
- Miscellaneous variable improvements across the board.
- Miscellaneous documentation typos fixed.

For the full list of issues included in this release, visit the [2.2.0 milestone on GitHub](https://github.com/twbs/bootstrap/issues?milestone=15&page=1&state=closed). Otherwise, be sure to [visit the docs](http://getbootstrap.com) or download the latest to get your hands on 2.2.0.

<a class="btn-link" href="https://github.com/twbs/bootstrap/zipball/master">Download Bootstrap 2.2.0</a> <span class="muted">(latest master ZIP)</span>


## Next steps

As a quick side note, we’re still working on moving Bootstrap to its own organization on GitHub. That will come with a couple other big changes, but more on that soon. We’ll be jumping on the next release shortly for more bugfixes, but until then enjoy the fixes and new hotness!

Lastly, thanks everyone again for submitting issues and contributing—you rock!

<3,

[@mdo](http://twitter.com/mdo) and [@fat](http://twitter.com/fat)
