---
author: julien-deramond
date: "2023-09-14T14:30:00Z"
title: Bootstrap 5.3.2
keywords:
  - bootstrap
  - release
---

Bootstrap v5.3.2 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!

## Highlights

- Passing a percentage unit to the global `abs()` is deprecated since Dart Sass v1.65.0. It resulted in a deprecation warning when compiling Bootstrap with Dart Sass. This has been fixed internally by changing the values passed to the `divide()` function. The `divide()` function has not been fixed itself so that we can keep supporting node-sass cross-compatibility. In v6, this won't be an issue as we plan to drop support for node-sass.
- Using multiple ids in a collapse target wasn't working anymore and has been fixed.

## Color modes

- Increased color contrast of form range track background in light and dark modes.
- Fixed table state rendering for color modes with a focus on the striped table in dark mode to increase color contrast.
- Allow `<mark>` color customization for color modes.

## Docs

- Added alternative CDNs section in [Getting started -> Download](https://getbootstrap.com/docs/5.3/getting-started/download/#alternative-cdns).
- Added Discord and Bootstrap subreddit links in [README](https://github.com/twbs/bootstrap/blob/main/README.md) and [Getting started -> Introduction](https://getbootstrap.com/docs/5.3/getting-started/introduction/):
  - [Discord](https://discord.gg/bZUvakRU3M) maintained by the community
  - [Bootstrap subreddit](https://www.reddit.com/r/bootstrap/)

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.2
```

[Read the GitHub v5.3.2 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.2) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
