---
author: mdo
date: "2023-04-03T14:40:00Z"
title: Bootstrap 5.3.0-alpha3
keywords:
  - bootstrap
  - release
---

Hot on the heels of our second alpha, we're releasing a third (and unexpected) alpha for v5.3.0 today with some fixes for some Node Sass compilation errors. In addition, we've added a handful of other updates. We're still on target to ship our stable release soon!

Once again, if you're new to the v5.3.0 alpha releases, please read through the [Migration guide](https://getbootstrap.com/docs/5.3/migration/#v530-alpha1) for the first alpha and last month's [second alpha](https://getbootstrap.com/docs/5.3/migration/#v530-alpha2).

Here's a look at what's changed in this quick release:

- Added a check for interpolated variables to fix compilation errors with Node Sass when using Sass variables in `calc()` functions.
- Started using `--bs-border-radius` variables across more components.
- Added `.d-inline-grid` utility class.
- Fixed `.tooltip-inner` placement when using variations in `fallbackPlacements`.
- Fix selectors for dark mode carousel overrides when compiling with `$color-mode-type: media-query`.
- Updated the styling of floating labels when "floated" to include a `background-color` to help with multiple lines of text in textareas. This also fixes the colors when form elements are disabled in floating forms.
- Updated RFS to v10.0.0.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.0-alpha3
```

[Read the GitHub v5.3.0-alpha3 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.0-alpha3) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
