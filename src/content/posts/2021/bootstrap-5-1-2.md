---
author: mdo
date: "2021-10-05T00:00:00Z"
title: Bootstrap 5.1.2
video: HoQN7K6HdRw
---

Bootstrap v5.1.2 is here with a handful of improvements across our components, plus a fix for an issue in another project that prevented our Sass from compiling properly. Keep reading for the highlights.

## Highlights

- Temporarily patched a [postcss-values-parser](https://github.com/shellscape/postcss-values-parser/issues/138) issue by rearranging our `calc()` functions that use negative numbers. This should restore the ability to import and compile Bootstrap's Sass in `create-react-app`.
- Added `border-radius` sizes to small and large `.form-select`s
- Added `align-self: center` to buttons for improved rendering in flex containers
- Fixed Collapse regression that prevented toggling between sibling children
- Updated JS Sanitizer to add `sms` in the `SAFE_URL_PATTERN`
- Improved docs around `.img-fluid`
- Added `role="switch"` to our form switches in our docs
- Implemented GitHub Issue forms to replace our previous issue templates.

## Up next

Up next is our v5.2.0 release, adding more utility improvements and fixing an issue with how [Sass handles re-assigned maps and variables](https://github.com/twbs/bootstrap/issues/34756). Alongside that we'll be shipping an update to v4 soon as well.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap
```

[Review the GitHub v5.1.2 release changelog](https://github.com/twbs/bootstrap/releases/tag/v5.1.2) for a complete list of changes since our last release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
