---
author: mdo
date: "2025-05-05T15:22:00Z"
title: Bootstrap 5.3.6
keywords:
  - bootstrap
  - release
---

Bootstrap v5.3.6 was just released to migrate our documentation to Astro from Hugo. Also included are a few bug fixes and documentation updates.

Here are some highlights:

- Ported the docs from Hugo to Astro for our own sanity!
- Added usage docs for Accordion JavaScript
- Prevent `.visually-hidden` overflowing children to become focusable
- Limit `.card-group` selectors to immediate children to fix some inheritance issues

Most importantly, a massive thank you and shoutout to Bootstrap maintainer [Julien](https://github.com/julien-deramond) for all the work that went into our Astro migration. [What a massive ship.](https://www.reddit.com/r/interestingasfuck/comments/1g3db1e/the_blue_marlin_the_ship_that_ships_shipping_ships/)

[Read the GitHub v5.3.6 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.6) for a full list of changes (including a ton of documentation and dependency updates) in this release.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.6
```

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
