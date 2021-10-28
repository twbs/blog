---
author: mdo
date: "2021-10-28T21:30:00Z"
title: Bootstrap v4.6.1
video: wBl2QGAIx1s
video_start: 135
---

Bootstrap v4.6.1 has finally arrived! Biggest change here is a re-implementation of our Sass division functions and updates from v5, as well as some accessibility improvements and general bug fixes.

Read on for the highlights or [head to the v4.6.x docs](https://getbootstrap.com/docs/4.6/) to see the latest in action.

## What's changed

- Replace Sass division with multiplication and custom `divide()` function
- fix(forms): input-group and validation icons
- Fix minor visual bug in FF caused by moz-focusring
- Adjust `SAFE_URL_PATTERN` regex for use with test method of regexes
- Add `sms` in the `SAFE_URL_PATTERN` for sanitizer
- Adjust feedback icon position and padding for `select.form-control`
- Carousel: use buttons, not links, for prev/next controls
- v4: Sass docs for default variables
- Handle complex expressions in `add()` & `subtract()`
- More concise improvements for `add()` and `subtract()`
- Remove aria-haspopup from dropdowns
- Dropdown: support `.dropdown-item` wrapped in `<li>` tags
- Update Node versions in JS tests (drop Node 10, add Node 16) and add variables for `vertical-align` in spinners
- Replace Freenode with Libera IRC server
- Fix repetition in the Navbar docs description
- Enable `0.x` with negative margins in utilities
- Remove print `thead` rule
- Fix prevented `show` event disabling modals with fade class from being displayed again
- Input group validation with custom-file input
- Add eslint-plugin-qunit and tighten JS tests
- Update our tests to Node 16 and npm 8
- Disabled link cleanup

[Review the GitHub v4.6.1 release changelog](https://github.com/twbs/bootstrap/releases/tag/v4.6.1) for more details.

## Next up

We'll be flipping back to v5 development after this release, focusing on v5.2.0 with some additional updates to using more CSS variables and other awesome features. Sometime after that, we hope to ship a v4.7.0 release with some additional backported features and improvements to v4.

Please keep the feedback coming on what we can improve, how our releases are performing, and any other suggestions.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
