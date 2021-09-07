---
author: mdo
date: "2021-09-07T00:00:00Z"
title: Bootstrap 5.1.1
video: bRt5z880CFY
---

Bootstrap v5.1.1 has landed with a handful of bug fixes and documentation improvements. Following this release, we'll be shipping another bugfix and docs update before moving onto additional new features. Keep reading for the highlights.

## Highlights

- **Fixed broken `.bg-body` utility.** This was caused by the same `--body-rgb` CSS variable for both text and background. `--body-rgb` is now split into `--body-color-rgb` and `--body-bg-rgb` for proper usage. _While this could be considered a breaking change, the current implementation was outright broken, so we've chosen to address this head-on._
- **All CSS dist builds now include `_root.scss` and all our `:root`-level CSS variables.** The goal here is consistency across the distribution files so that no matter what CSS build you use, you have the same level of customization potential.
- Updated [global options page](https://getbootstrap.com/docs/5.1/customize/options/) to document `$enable-smooth-scroll` variable.
- Added callout to the [Stacks page](https://getbootstrap.com/docs/5.1/helpers/stacks/) about `gap` browser support with flexbox.
- Cleaned up documentation and usage of [disabled links](https://getbootstrap.com/docs/5.1/components/buttons/#disabled-state), especially for `<a>` based buttons.
- Fixed toggle between modal regression. [See docs example.](https://getbootstrap.com/docs/5.1/components/modal/#toggle-between-modals)
- Fixed regression in tooltips where content doesn't update after the first `show()`.
- Fixed collapse toggle unintentionally hiding descendant tab panels.
- Improved Alerts live example documentation.
- Updated `$dropdown-link-hover-color` to modify the `$dropdown-link-color` instead of base `$gray-900` variable for improved customization.
- Clarified [JavaScript import usage](https://getbootstrap.com/docs/5.1/getting-started/webpack/#importing-javascript) for our Webpack guide.

## About Sass compilers

We've had a number of Visual Studio users mention that Sass compiling for Bootstrap 5.1.0 is broken when using the [Web Compiler extension](https://github.com/madskristensen/WebCompiler). This extension hasn't been updated in more than five years, so we recommend moving to a newer alternative. Some users mentioned the [Sass Compiler extension](https://github.com/madskristensen/SassCompiler) as a successful alternative. If you have additional recommendations, [please leave a comment to share](https://github.com/twbs/bootstrap/issues/34738).

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap
```

[Review the GitHub v5.1.1 release changelog](https://github.com/twbs/bootstrap/releases/tag/v5.1.1) for a complete list of changes since our last release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
