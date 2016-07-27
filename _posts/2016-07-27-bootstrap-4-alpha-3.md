---
layout: post
title: Bootstrap 4 Alpha 3
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/xFrGuyw1V8s?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

Alpha 3 has landed! We have an overhauled grid, updated form controls, a new font stack, tons of bug fixes, and more. It's been several months since our last update, but the size of this update should help get us back on track.

Work on Alpha 3 started rather broadly, addressing bug fixes and docs updates of all shapes and sizes, but finished with a narrow focus on our form controls and grid system. If you've followed the development in our `v4-dev` branch, you might already be familiar with some of these bigger changes.

[Skip to the updated alpha docs site](http://v4-alpha.getbootstrap.com), or keep reading for the highlights.

## Grid system

The grid system was overhauled with three major pull requests—[#19099](https://github.com/twbs/bootstrap/pull/19099), [#20349](https://github.com/twbs/bootstrap/pull/20349), and [#20361](https://github.com/twbs/bootstrap/pull/20361). Those PRs largely focused on the following changes:

- Our ready-made grid classes (containers and columns) are now behind a Sass variable, meaning **grid classes can easily be disabled via Sass variable**. Update the boolean `$enable-grid-classes` variable and recompile to remove them.

- **Grid modifier classes are simpler** and no longer require the `col-` prefix. For example, instead of `.col-offset-*-*`, `.col-push-*-*`, and `.col-pull-*-*`, we now have `.offset-*-*`, `.push-*-*`, and `.pull-*-*`.

- **Mixins have been changed**, and then changed again, to in an effort to keep generated classes simple and cooperative between standard and flexbox modes. Our two primary column mixins are now `make-col-ready`, which houses the `position`, `padding-*`s, and `min-height` (to prevent collapsing empty columns), and `make-col` for setting the `float` and `width`.

- **Added a grid customization section to the docs** to explain how to change the number of columns, grid tier breakpoints, container widths, and more.

These changes are available in our standard grid, as well as our flexbox grid. More on that below.

## Flexbox

<img alt="Flexbox auto-layout" src="https://cl.ly/0n1E3L2Y2222/Screen%20Shot%202016-07-25%20at%205.22.36%20PM.png" style="padding: 4px; border: 1px solid #eee;">

Flexbox mode has been updated across the board in Alpha 3, starting from the grid system (it uses the same variable and the updated Sass mixins) and moving through our utilities and components.

- **New flexbox grid docs.** In addition to the standard grid docs, we now have a dedicated docs page for our flexbox grid as it behaves slightly differently than the standard grid. This new page includes details on how and why this grid works the way it does, as well as additional code examples.

- **Automatic equal-width column sizing** with new `.col-{breakpoint}` classes. For example, for three equal-width columns at the `xs` breakpoint, you'd create three columns each with just `.col-xs`.

- **New flexbox alignment utility classes** for vertically and horizontally distributing items. Works with our flexbox grid, as well as just about any other custom component.

## Forms

<img alt="Form validation states" src="https://cl.ly/453m1x2M033G/Screen%20Shot%202016-07-25%20at%205.11.56%20PM.png" style="padding: 4px; border: 1px solid #eee;">

Forms saw a ton of activity early on in Alpha 3's development. Documentation, class names, layout options, and validation styles have all been drastically improved.

- **New classes for checkboxes, radios, input sizing, and legends.** While not 100% final, all our form controls are named more clearly and consistently across our CSS.

- **Replaced the base64 PNG background images [with inline SVGs](https://github.com/twbs/bootstrap/pull/17222)** for our custom form controls and validation states. Scale those form controls to your heart's content!

- Speaking of validation states, we have **brand new form validation and help text options**. Validation states can now be applied on a per-input basis (with `.form-control-{state}`) and optional validation feedback can be shown with `.form-control-feedback`. Independent form help text can now be controlled with the new `.form-text` class.

{% highlight html %}
<div class="form-group has-success">
  <label class="col-form-label" for="inputSuccess1">
    Input with success
  </label>
  <input type="text" class="form-control form-control-success" id="inputSuccess1">
  <div class="form-control-feedback">
    Success! You've done it.
  </div>
  <small class="form-text text-muted">
    Example help text that remains unchanged.
  </small>
</div>
{% endhighlight %}

- Fixed a few form related bugs, like the horizontal label padding in [#17498](https://github.com/twbs/bootstrap/issues/17498), misuse of `<fieldset>`s for form groups, sizing classes not applying to `<select>`s, and more.

- **Documentation for forms has been overhauled.** We have simpler examples of our available form controls, clearer guidance on validation states (and when to use each), and more.

## System fonts

We've replaced the decades old Helvetica/Arial font stack [with a system font stack](https://github.com/twbs/bootstrap/pull/19098), utilizing newer, more readable, and more powerful fonts that companies like Apple, Google, and Microsoft have specifically designed for today's devices.

Originally this was planned to affect Linux users, but font usage and support is rather inconsistent across distros and user preferences. For that reason, there's no *intended* font change for folks on Linux.

## And so much more...

There were nearly 1,200 commits to Alpha 3 and this post barely scratches the surface. We've fixed dozens of other bugs and worked hard to improve our documentation across the board.

- [Improved form and button sizing](https://github.com/twbs/bootstrap/pull/19121)
- [Cleaned up nav component variables](https://github.com/twbs/bootstrap/pull/18783)
- [Renamed outline buttons](https://github.com/twbs/bootstrap/pull/18772) and [outline cards](https://github.com/twbs/bootstrap/pull/18774)
- New classes, variables, and tons more!

For more details on this release's changes, take a look at the [Alpha 3 ship list issue](https://github.com/twbs/bootstrap/issues/18480), as well as the [closed Alpha 3 milestone](https://github.com/twbs/bootstrap/milestone/35?closed=1).

**Anxious to jump in? Then [head to the v4 alpha docs!](http://v4-alpha.getbootstrap.com)**

Be sure to [join our official Slack room!](https://bootstrap-slack.herokuapp.com) and dive into [our issue tracker](https://github.com/twbs/bootstrap/issues/) with bug reports, questions, and general feedback whenever possible.

## What's next?

More exploration, more bugfixes, more docs updates, and, best of all, more alphas. The daily grind keeps us super busy these days, but we'll do our best to keep the momentum going. Stay tuned!

<3,<br>
[@mdo](https://twitter.com/mdo) & [team](https://github.com/twbs)
