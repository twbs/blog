---
author: mdo
date: "2020-10-13T00:00:00Z"
title: Bootstrap 4.5.3
video: Y3ywicffOj4
keywords:
  - bootstrap
  - release
---

We've updated Bootstrap 4 with a new patch release to fix some bugs, backport some iterative changes from v5, and more. Enjoy!

As you may already know, we're alternating between v4 and v5 releases to keep both versions moving in tandem. This helps us close the gap between v4 and v5 and make updating to v5 as easy as possible.

Read on for the highlighted changes.

## Changes

Also available in the [v4.5.3 release on GitHub](https://github.com/twbs/bootstrap/releases/tag/v4.5.3).

### CSS

- [#31653](https://github.com/twbs/bootstrap/pull/31653): Add a comment to our `escape-svg` function to note that data URIs must be quoted.
- [#31693](https://github.com/twbs/bootstrap/pull/31693): Use the `custom-control` shadow variable instead of the generic `input-focus-box-shadow`.
- [#31793](https://github.com/twbs/bootstrap/pull/31793): Backport some v5 changes (improved `th` styling in Reboot, custom form field styling when printing, and improvements to `.text-break`).
  - [#29714](https://github.com/twbs/bootstrap/pull/29714): Keep custom check, radio, and switch theme when printing.
  - [#30781](https://github.com/twbs/bootstrap/pull/30781): Reboot's `th` updates: Inherit `font-weight: bold` that comes from user agent stylesheets.
  - [#30932](https://github.com/twbs/bootstrap/pull/30932): `.text-break` changes to drop `overflow-wrap` and use `word-wrap` once again
  - [#31754](https://github.com/twbs/bootstrap/pull/31754): Improve versions page rendering (also reversed the order while I was here)
- [#31846](https://github.com/twbs/bootstrap/pull/31846): Backports the z-index change to `.close` buttons in dismissible `.alert`s.

### JS

- [#31000](https://github.com/twbs/bootstrap/pull/31000): Avoid multiple change event trigger in buttons plugin. _Not applicable to v5 since our button JS plugin has been mostly replaced with pure CSS._
- [#31673](https://github.com/twbs/bootstrap/pull/31673): Fix dropdown variable always evaluating to true.
- [#31696](https://github.com/twbs/bootstrap/pull/31696): Ensure `hidePrevented.bs.modal` can be prevented.
- [#31718](https://github.com/twbs/bootstrap/pull/31718): Backports new `$dropdown-padding-x` variable from v5.

### Docs

- [#30811](https://github.com/twbs/bootstrap/pull/30811): Mention GPU acceleration fix in docs callout for popovers. _Doesn't apply to v5 since we're updating to Popper v2._
- [#30838](https://github.com/twbs/bootstrap/pull/30838): Explain the `dispose` method more appropriately.
- [#31706](https://github.com/twbs/bootstrap/pull/31706): Backports updated margins for code snippets for improved readability.
- [#31769](https://github.com/twbs/bootstrap/pull/31769): Backports JS bundle guidance from v5.
- [#31851](https://github.com/twbs/bootstrap/pull/31851): Backports mention of missing `to` and `nextwhenvisible` methods.

### Misc

- [#31297](https://github.com/twbs/bootstrap/pull/31297): Switch to xo ESLint config
- Updated devDependencies versions

## Next up

We'll be back to v5 with our third alpha release coming in a couple of weeks. After that, we'll ship another v4 update with v4.6.0 that continues the v5 backports and feature development. Please keep the feedback coming on what we can improve, how our releases are performing, and any other suggestions.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
