---
layout: post
title: Bootstrap 5 Beta 3
video:
date: 2021-03-22 21:30:00
author: mdo
---

Our final beta for Bootstrap 5 has come with some amazing new changes, including a new component!), documentation updates, and more. We've also fixed some important bugs since our last release, in particular with our dependencies. Next up is our stable release!

Keep reading for a reacp of what's new in Beta 3.

## New offcanvas component

[![Offcanvas example](/assets/img/2021/03/bootstrap-docs-offcanvas.png)](https://getbootstrap.com/docs/5.0/components/offcanvas/)

Thanks to our newest team member, @GeoSot, we have a brand new component to unveil in Beta 3—introducing offcanvas! Built on and sharing fundamental pieces of our modals, the offcanvas comes with configurable backdrop, body scroll, and placement. Offcanvas components can be placed on the left, right, and bottom of the viewport. Configure these options with `data` attributes or via the JavaScript APIs.

We're excited about iterating on the new offcanvas component and building additional examples and demos with you. Please share any feedback in an issue or pull request as you start to use it in your projects.

## New and refreshed examples

[![New examples](/assets/img/2021/03/bootstrap-new-examples.png)](https://getbootstrap.com/docs/5.0/examples/)

Our examples have been updated in Beta 3 as well. We've added four brand new snippet-heavy examples and refreshed a few others. New with this release are several snippets for [headers](https://getbootstrap.com/docs/5.0/examples/headers/), [heroes](https://getbootstrap.com/docs/5.0/examples/heroes/), [features](https://getbootstrap.com/docs/5.0/examples/features/), and [sidebars](https://getbootstrap.com/docs/5.0/examples/sidebars/). These new snippets will continue to grow with new additions over time, showing just how fun and easy it is to build with Bootstrap.

[![New starter example](/assets/img/2021/03/starter-template.png)](https://getbootstrap.com/docs/5.0/examples/starter-template/)

We've also updated our [starter template](https://getbootstrap.com/docs/5.0/examples/starter-template/) with a refreshed, simplified design and more resource links. We'll also incorporate this new look and feel into our [npm starter project](https://github.com/twbs/bootstrap-npm-starter) project, and eventually add a Parcel starter project.

Lastly, we've updated our [pricing](https://getbootstrap.com/docs/5.0/examples/pricing/), [checkout](https://getbootstrap.com/docs/5.0/examples/checkout/), and [sign-in](https://getbootstrap.com/docs/5.0/examples/sign-in/) examples. We've also added a new [jumbotron example](https://getbootstrap.com/docs/5.0/examples/jumbotron/) to show you how to create your own jumbotron since we removed it in Bootstrap 4.

## Improved Sass docs

[![New Sass docs](/assets/img/2021/03/bootstrap-docs-sass.png)](https://getbootstrap.com/docs/5.0/components/alerts/#sass)

Since our last release, we've added a new section to nearly every component and utility documentation page for the [source Sass code](https://getbootstrap.com/docs/5.0/components/alerts/#sass). Where appropriate, we now list Sass variables, maps, loops, and animation keyframes. These are directly linked from our source files, so whenever we ship new code, they'll automatically be up-to-date.

## And more!

Some highlights from the rest of our documentation updates and bugfixes include:

- Added [new `.list-group-numbered` variation](https://getbootstrap.com/docs/5.0/components/list-group/#numbered) to list groups that uses pseudo-elements for numbering list group items.
- Removed explicit focus state suppression in Reboot
- Improved carousel swipe behaviors for RTL
- Updated accordions to improve transitions and borders when animating
- Updated Sass customization docs to show how to properly override default variables
- Fixed tooltips not appearing after rapid focus in and out
- Removed flip option from dropdowns
- Disabled select now render consistently in Chrome
- Button elements now grow in `.nav-fill` and `.nav-justified`
- JavaScript plugin constructors now accept CSS selectors
- De-duped the `.border-0` utility
- Fixed event handler removal in dropdown/carousel dispose
- Added [new Parcel guide](https://getbootstrap.com/docs/5.0/getting-started/parcel/) to the docs
- Added input focus blur Sass variable
- Updated `.browserslistrc` to drop Android and add Safari/iOS 12 as the new minimum version (completing our two latest major releases guideline for supported browsers).

Help wanted: https://github.com/twbs/bootstrap/pull/33399

## Support the team

Visit our [Open Collective page](https://opencollective.com/bootstrap) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
