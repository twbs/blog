---
layout: post
title: Bootstrap 3.1.1 released
video: rhythym is a dancer
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/WMPM1q_Uyxc?rel=0" width="760" height="428" allowfullscreen></iframe>
</div>

Today we're releasing Bootstrap v3.1.1. As our first patch release for the v3.1.x release series, we've focused on CSS bug fixes, documentation improvements, and further refinements to our build tools. See the included changelog for more details.

## Download Bootstrap

Download Bootstrap directly from GitHub:

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.1.1.zip">Download Bootstrap 3.1.1</a>

Hit the [project repository](https://github.com/twbs/bootstrap) or [Sass repository](https://github.com/twbs/bootstrap-sass) for more options.

## Bootstrap CDN

Update your CDN links to point to the v3.1.1 files:

{% highlight html %}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
{% endhighlight %}


## Full changelog

### CSS

- [#11659](https://github.com/twbs/bootstrap/issues/11659), [#12349](https://github.com/twbs/bootstrap/issues/12349), [#12698](https://github.com/twbs/bootstrap/issues/12698): Always show the input above appended buttons in input groups for proper focus and disabled state borders.
- [#12025](https://github.com/twbs/bootstrap/issues/12025): Ensure responsive utility classes can be combined with one another.
- [#12195](https://github.com/twbs/bootstrap/issues/12195): Apply `.btn:focused` styles to `.btn.active:focused` for improved accessibility.
- [#12412](https://github.com/twbs/bootstrap/issues/12412): Refactored and renamed our internal grid mixins for generating custom number of grid columns.
- [#12433](https://github.com/twbs/bootstrap/issues/12433): Use negative `margin` on `.list-inline`s so we don't override the `padding-left` on the first list item.
- [#12448](https://github.com/twbs/bootstrap/issues/12448): Use `@navbar-height` instead on `.navbar-brand` to prevent element from being shorter than navbar height. Corrects a change introduced in v3.1.0.
- [#12462](https://github.com/twbs/bootstrap/issues/12462): Add `border-radius` to tables when in panels for proper rounding with all background settings.
- [#12470](https://github.com/twbs/bootstrap/issues/12470): Scope large modal styles to minimum viewport width.
- [#12486](https://github.com/twbs/bootstrap/issues/12486): Restore full-width inputs for input groups in inline forms and navbars.
- [#12502](https://github.com/twbs/bootstrap/issues/12502): Remove long-deprecated `:-moz-placeholder` styles.
- [#12532](https://github.com/twbs/bootstrap/issues/12532): Scope popover arrow styles to immediate children.
- [#12552](https://github.com/twbs/bootstrap/issues/12552): Fixes two typos in `carousel.less` for the Glyphicon classes.
- [#12620](https://github.com/twbs/bootstrap/issues/12620), [#12621](https://github.com/twbs/bootstrap/issues/12621): Use `:extend(.img-responsive)` instead of mixin in thumbnail and carousel.
- [#12625](https://github.com/twbs/bootstrap/issues/12625): Only remove top and bottom borders on list groups in panels if the list group is the first or last element.
- [#12629](https://github.com/twbs/bootstrap/issues/12629): Override the default rounded corners in iOS's search input with `-webkit-appearance: none;`.
- [#12633](https://github.com/twbs/bootstrap/issues/12633): Properly reset borders on table cells in panels.
- [#12639](https://github.com/twbs/bootstrap/issues/12639): Drop the unsupported by Opera `-o-user-select`.
- [#12659](https://github.com/twbs/bootstrap/issues/12659): Add `@blockquote-font-size` variable for calculated text size.
- [#12673](https://github.com/twbs/bootstrap/issues/12673): Use `@popover-arrow-width` for popover offsets.
- [#12674](https://github.com/twbs/bootstrap/issues/12674): Update popover `border` colors to use computed values rather than static ones.

### Sass

- [#523](https://github.com/twbs/bootstrap-sass/issues/523): Rails 3.2 compatibility
- [#518](https://github.com/twbs/bootstrap-sass/issues/518): `scale` mixin Sass compatibility issue
- Updated Bower docs

### JavaScript

- [#12436](https://github.com/twbs/bootstrap/issues/12436): Update docs, examples, and tests to use jQuery v1.11.0.

### Docs

- [#12437](https://github.com/twbs/bootstrap/issues/12437): Note specific versions of IE where progress bar animation is supported.
- [#12439](https://github.com/twbs/bootstrap/issues/12439): Correct docs error about available grid resets.
- [#12477](https://github.com/twbs/bootstrap/issues/12477): Clarify supported versions of Internet Explorer (we do v8-11) in browser support docs.
- [#12494](https://github.com/twbs/bootstrap/issues/12494): Update docs to reflect modal remote change from #11933.
- [#12497](https://github.com/twbs/bootstrap/issues/12497): Remove manual full-width container callout now that there's `.container-fluid`.
- [#12512](https://github.com/twbs/bootstrap/issues/12512): Improve alignment of the Dashboard example placeholder images.
- [#12519](https://github.com/twbs/bootstrap/issues/12519): Add Bower badge to README.
- [#12527](https://github.com/twbs/bootstrap/issues/12527): Clarify that dropdowns always require `data-toggle="dropdown"`.
- [#12543](https://github.com/twbs/bootstrap/issues/12543), [#12544](https://github.com/twbs/bootstrap/issues/12544), [#12545](https://github.com/twbs/bootstrap/issues/12545), [#12546](https://github.com/twbs/bootstrap/issues/12546): Various fixes to the v2.x to v3.x migration docs.
- [#12555](https://github.com/twbs/bootstrap/issues/12555): Rearrange variables to place grids and containers closer together in Customizer.
- [#12564](https://github.com/twbs/bootstrap/issues/12564): Distribution zip folder renamed to be more descriptive.
- [#12589](https://github.com/twbs/bootstrap/issues/12589): Add "Back to top" link to bottom of sidenav.
- [#12590](https://github.com/twbs/bootstrap/issues/12590): Add link to Korean translation.
- [#12610](https://github.com/twbs/bootstrap/issues/12610): Better and more consistent prefixing of docs CSS with `.bs-docs-`.
- [#12611](https://github.com/twbs/bootstrap/issues/12611): Mention limitation of one JavaScript plugin's data attributes per element.
- [#12614](https://github.com/twbs/bootstrap/issues/12614): Add progress bar example with visible label.
- [#12645](https://github.com/twbs/bootstrap/issues/12645): Omit semicolons consistently in JS examples.
- [#12655](https://github.com/twbs/bootstrap/issues/12655): Upgrade holder.js to v2.3.1 so docs images are rendered properly in Internet Explorer >=9.

### Examples

- [#12455](https://github.com/twbs/bootstrap/issues/12455): Fix typo in Dashboard example's CSS.
- [#12512](https://github.com/twbs/bootstrap/issues/12512): Improve alignment of the Dashboard example's placeholder images.
- [#12526](https://github.com/twbs/bootstrap/issues/12526): Add scrollbars when necessary to the Dashboard example's sidebar.
- [#12579](https://github.com/twbs/bootstrap/issues/12579): Improve sticky footer examples to avoid any wrappers and improve rendering in IE8.
- [#12695](https://github.com/twbs/bootstrap/issues/12695): Fixed transitions on offcanvas example by adding initial left and right values.

### Build tools

- [#12466](https://github.com/twbs/bootstrap/issues/12466): Add the examples' CSS to the `csslint` task.
- [#12531](https://github.com/twbs/bootstrap/issues/12531): Add `/docs/dist/` to the `clean` task.
- [#12534](https://github.com/twbs/bootstrap/issues/12534): Allow the bootstrap package in npm to directly expose CSS and Less files.
- [#12568](https://github.com/twbs/bootstrap/issues/12568): Add the examples' CSS to the `csscomb` task.
- [#12581](https://github.com/twbs/bootstrap/issues/12581), [#12583](https://github.com/twbs/bootstrap/issues/12583): Reorganize all Grunt tasks into one directory so that `grunt` runs properly in Bower installations.
- [#12605](https://github.com/twbs/bootstrap/issues/12605): Use license object instead of licenses array in Grunt.

For an even more complete list of changes, see the [v3.1.1 milestone](https://github.com/twbs/bootstrap/issues?milestone=25&page=1&state=closed).

<3
