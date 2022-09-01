---
author: mdo
date: "2022-09-02T16:00:00Z"
title: Bootstrap 5.2.1
video:
keywords:
  - bootstrap
  - release
---

Bootstrap v5.2.1 is here with fixes from our latest minor release, v5.2. As a patch release, these changes are limited to bug fixes, documentation updates, and some dependency updates.

## Highlights

- Added a `transparent` default hover border color CSS variable for buttons to fix a visual regression
- Horizontal list groups with only one child now render the correct `border-radius`
- Input groups have updated `z-index` values to ensure proper rendering of validated form fields
- Modified the `list-group-item` selectors to better support nested imports of Bootstrap's CSS
- Floating labels now reset their `text-align` to ensure consistent styling
- Updated Autoprefixer to fix warnings of the `color-adjust` property (thanks to @julien-deramond on our team for reporting an issue upstream here)
- Fixed incorrect `border-radius` values inside pagination components
- Moved our search functionality out of the hidden sidebar on narrow viewports and mobile devices
- Removed links to and mentions of Slack from across the codebase, as we intend to shutter Slack in favor of GitHub Discussions
- Scrollspy threshold option is now configurable
- Fixed modal event listeners during dismiss click, allowing you to once again click scrollbars without dismissing the modal
- Reverted some tooltip plugin updates to prevent issues with `selector`, dynamic content, and disposed tooltips using `title`
- Reintroduced proper `outline` styles for docs code samples and buttons when `:not(:focus-visible)`
- Searching our docs on mobile has been improved with the search field always visible on narrow viewports
- Removed links to Slack from our docs as we've closed it down in favor of GitHub Discussions

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.2.1
```

[Read the GitHub v5.2.1 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.2.1) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
