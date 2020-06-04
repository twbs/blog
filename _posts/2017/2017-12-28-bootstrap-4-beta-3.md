---
layout: post
title: Bootstrap 4 Beta 3
video: 9jK-NcRmVcw
---

Welcome to the final beta of v4! It's been over two months since we shipped our second beta and we've been busy making the last breaking changes before moving to our next stable release, v4.0.0! We have a few more breaking changes than we were planning, but fret not, we've detailed them all.

Beta 3 primarily focuses around our forms, but it also includes key fixes to tables, some global styles, our documentation, and some JavaScript bugs. Following this release, we'll [address a few issues and PRs](https://github.com/twbs/bootstrap/projects/12) before doing a stable v4 release a week or two into the New Year.

Let's dive into all the highlights.

## Breaking changes

As mentioned in [our Beta 2 release]({% post_url 2017/2017-10-19-bootstrap-4-beta-2 %}), we needed to make a few more breaking changes in Beta 3. We've summarized them here and in our [migration docs]({{ site.main }}/docs/4.0/migration/#beta-3-changes)—be sure to read them!

- **Rewrote native and custom check controls.** Both browser default and custom checkboxes and radios now have simpler markup after removing the `<input>` from the `<label>`. Now, all checkboxes and radios have a parent `<div>` and sibling `<input>` and `<label>` pair. This is essential for form validation and disabled inputs because we can use the input's state to style the label.

  In addition, custom checkbox and radio elements no longer have a `.custom-control-indicator`. This is generated from the new `.custom-control-label`.

- **Input groups were rewritten** with specific `.input-group-{prepend|append}` classes. The new approach allows us to support validation styles and messages within input groups, while also adding support for custom selects, custom file inputs, and multiple `.form-control`s.

- **Responsive tables are once again parent classes** to avoid accessiblity issues with changing a `<table>`'s `display`.

- **Deleted the `.col-form-legend` class**, consolidating it's styles into the `.col-form-label` class.

Read the [Migration page]({{ site.main }}/docs/4.0/migration/#beta-3-changes) for further details.

## More highlights

In addition to the breaking changes, we've addressed a few more general issues that may impact your project.

- Restored `cursor: pointer` to non-disabled links, buttons, `.close`, navbar toggler, and pagination links.

- Added a new vertically centered modal option with `.modal-dialog-centered`.

- Added new dropleft and dropright variants for dropdowns in #23860.

- Our npm package no longer includes any files other than our source and dist JavaScript and CSS files. If you previously relied on our running our scripts via the `node_modules` folder, you'll need to update your build tools.

- Print styles have moved to bottom of the import stack to properly override styles.

For more details on this release's changes, take a look at the [Beta 3 ship list issue](https://github.com/twbs/bootstrap/issues/24439), as well as the [Beta 3 project](https://github.com/twbs/bootstrap/projects/10). Be sure to [join our official Slack room!](https://bootstrap-slack.herokuapp.com) and dive into [our issue tracker](https://github.com/twbs/bootstrap/issues/) with bug reports, questions, and specific feedback whenever possible.

## Coming up

Stable v4.0.0 is our next release and we already have a [GitHub project board](https://github.com/twbs/bootstrap/projects/12) to track issues and PRs. There will be no breaking changes from Beta 3 to stable, so our changelog should be short and sweet. Expect some linting, Sass variable improvements, updated docs Examples, and more build tool improvements.

With our next release, the `master` branch will once again become our default branch. We'll merge `v4-dev` into `master`, meaning v3's source code will only be in our `v3-dev` branch and [past releases](https://github.com/twbs/bootstrap/releases).


See you again real soon!

<3,<br>
[@mdo](https://twitter.com/mdo) & [team](https://github.com/twbs)
