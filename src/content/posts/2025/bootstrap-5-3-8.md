---
author: mdo
date: "2025-08-25T15:22:00Z"
title: Bootstrap 5.3.8
keywords:
  - bootstrap
  - release
---

Bootstrap v5.3.8 is out with a reversion for a dropdown focus bug, some CSS updates, and several docs updates. The plan is for this to be the last patch release before v5.4.0 drops.

To start, there's a brief update on Bootstrap Themes, with more communication to come. The team has decided to sunset <https://themes.getbootstrap.com>. As such, we've removed links to and mentions of the Themes site from our docs in this release to start. Stay tuned for more info.

Now, here are the release highlights:

### Docs

- Streamline release prep script
- Restore local dev port to 9001
- Use Example shortcode instead of divs with only `.bd-example` class
- Fix scss autorecompile in dev mode
- OSSF Scorecard
- Workflows: Use SHA-1 for third-party actions
- Unminify downloadable example HTML files
- Add tooltips to buttons when `<Example>` is used, not just `<Code>`
- Migrate MyGet script to GH actions
- Minor range example code optimization
- Remove Themes from docs
- Release v5.3.8

### CSS

- Fix `color-contrast()` function for WCAG 2.1 compliance
- Set cursor pointer on input search cancel button
- Prevent spinner distortion in flex containers with multiline content

### JavaScript

- Revert "Attempt to return focus explicitly to dropdown trigger"

[Read the GitHub v5.3.8 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.3.8) for a full list of changes (including a ton of documentation and dependency updates) in this release.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.3.8
```

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
