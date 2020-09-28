---
layout: post
title: Bootstrap 5 Alpha 2
video:
date: 2020-09-29 11:00:00
---

We're back at it again with a brand new alpha release of Bootstrap 5! Our second alpha has brought some new and improved features, color contrast improvements, improved helpers and utilities, and some documentation design updates.

Check out the latest in the docs at <https://v5.getbootstrap.com>. [Read the release notes]() for a full list of changes since Alpha 1. Our [migration guide](https://v5.getbootstrap.com/docs/5.0/migration) has also been updated with a new section for Alpha 2.

## Updated docs nav

We've cleaned up the navigation in our docs to make things a little easier to use while on a mobile device or a narrow viewport.

![Updated Bootstrap docs]()

We've redesigned the main navbar to hide links on small devices, and when expanded, those navigation links now have larger tap targets. Our subnav has also be streamlined to take up a single horizontal bad on mobile, giving more space for documentation.

## Dark carousel

![]()

...

## Dark dropdowns

![]()

...

## Redesigned close button

![]()

Close button revamped, now featuring an SVG background-image instead of a multiplication sign, with new focus styles, and a white variant.

## Position utilities

![]()

...

## More highlights

Some other incremental changes to a few components and changes include:

- Container horizontal `padding` has been updated to match the row gutters variables and values.
- Checkboxes and radios downsized to `1em` from `1.25em` for improved font scaling support.
- Improved colors with green and cyan getting new values, plus higher contrast ratios all around.
- Improved toast styling, now without `overflow: hidden`.
- Badge padding increased a smidge.
- Revamped "responsive embed" helpers, now called ratio helpers. New class names across the board, more flexible styles, and a new CSS variable for custom dynamic and responsive ratios.
- Screen reader classes are now "visually hidden" classes.
- New `.border-width` utility.

See all the changes in the [v5 Alpha 2 project board](https://github.com/twbs/bootstrap/projects/21) and be sure to [read the Migration guide]() for details on what's changed since Alpha 1.

## Coming in Alpha 3

We've pushed some additional breaking changes and important component updates to Alpha 3. To give you a heads up, here are some important upcoming moves:

- Offcanvas support is coming thanks to [new side modals](https://github.com/twbs/bootstrap/pull/31285)!
- We're [revamping the input group component](https://github.com/twbs/bootstrap/pull/31666), dropping support for quite a few variations. It's too complex, supports too many variations, and has had the most annoying `border-radius` bug through all of v4. (I'm so sorry for that!)
- We're [upgrading floating labels](https://github.com/twbs/bootstrap/pull/30449) from a docs Example into a fully fledge form layout option, with support for textual inputs, selects, and textareas.
- We're [adding font-size utilities](https://github.com/twbs/bootstrap/pull/30571) and updating our font-weight utilities.
- [RTL is still coming!](https://github.com/twbs/bootstrap/pull/30980) The PR is being reviewed by our team and we're hoping to land it in Alpha 3 so we can get some folks testing with it.

For a more up to date list of changes, be sure to follow along with the [v5 Alpha 3 project board](https://github.com/twbs/bootstrap/projects/22). More docs improvements are planned with the potential for more breaking changes as well. From there it's onto final breaking changes in Beta 3.

## Release expectations

We'll be alternating releases across v4 and v5 to keep the momentum up. We're shipping v4.5.3 next and then moving right back to v5 for Alpha 3. We've noted our intended [release schedule in our release repo](https://github.com/twbs/release#upcoming-release-schedule). We'll also keep updating that repo's readme as we go.

## Get started

**Head to <https://v5.getbootstrap.com> to explore the new release.** We've also published this updated as a pre-release to npm, so if you're feeling bold or are curious about what's new, you can pull the latest in that way.

```sh
npm i bootstrap@next
```

## Support the team

Visit our [Open Collective page](https://opencollective.com/bootstrap) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.

<3,<br>

[@mdo](https://github.com/mdo) & [team](https://github.com/twbs)
