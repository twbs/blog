---
layout: post
title: Bootstrap 4 alpha
---

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/4PdU6migsqQ?rel=0" width="760" height="570" allowfullscreen></iframe>
</div>

Today is a special day for Bootstrap. Not only is it [our fourth birthday](https://twitter.com/mdo/statuses/104620039650557952), but after a year of development, we're finally shipping the first alpha release of Bootstrap 4. Hell yeah!

Bootstrap 4 has been a massive undertaking that touches nearly every line of code. We're stoked to share it with you and hear your feedback. We've got a lot of news to share with you, so let's jump right into it.

## What's new

[![Bootstrap 4 alpha](/img/2015/bs4-alpha.png)](http://v4-alpha.getbootstrap.com)

There are a ton of major changes to Bootstrap and it's impossible to cover them all in detail here, so here are some of our favorite highlights:

- **Moved from Less to Sass.** Bootstrap now compiles faster than ever thanks to Libsass, and we join an increasingly large community of Sass developers.
- **Improved grid system.** We've added a new grid tier to better target mobile devices and completely overhauled our semantic mixins.
- **Opt-in flexbox support is here.** The future is now—switch a boolean variable and recompile your CSS to take advantage of a flexbox-based grid system and components.
- **Dropped wells, thumbnails, and panels for cards.** Cards are a brand new component to Bootstrap, but they'll feel super familiar as they do nearly everything wells, thumbnails, and panels did, only better.
- **Consolidated all our HTML resets into a new module, Reboot.** Reboot steps in where Normalize.css stops, giving you more opinionated resets like `box-sizing: border-box`, margin tweaks, and more all in a single Sass file.
- **Brand new customization options.** Instead of relegating style embellishments like gradients, transitions, shadows, and more to a separate stylesheet like v3, we've moved all those options into Sass variables. Want default transitions on everything or to disable rounded corners? Simply update a variable and recompile.
- **Dropped IE8 support and moved to rem and em units.** Dropping support for IE8 means we can take advantage of the best parts of CSS without being held back with CSS hacks or fallbacks. Pixels have been swapped for rems and ems where appropriate to make responsive typography and component sizing even easier. If you need IE8 support, keep using Bootstrap 3.
- **Rewrote all our JavaScript plugins.** Every plugin has been rewritten in ES6 to take advantage of the newest JavaScript enhancements. They also now come with UMD support, generic teardown methods, option type checking, and tons more.
- **Improved auto-placement of tooltips and popovers** thanks to the help of a library called [Tether](http://github.hubspot.com/tether/).
- **Improved documentation.** We rewrote it all in Markdown and added a few handy plugins to streamline examples and code snippets to make working with our docs way easier. Improved search is also on it's way.
- **And tons more!** Custom form controls, margin and padding classes, new utility classes, and more have also been included.

And that barely scratches the surface of the 1,100 commits and 120,000 lines of changes in v4 so far. Plus, we're not even done yet!

Ready to check it out? Then [head to the v4 alpha docs!](http://v4-alpha.getbootstrap.com)

## Development plan

We need your help to make Bootstrap 4 the best it can be. Starting today, the source code for v4 will be available in a [`v4-dev` branch on GitHub](https://github.com/twbs/bootstrap/tree/v4-dev). In addition, we have a [v4 development and tracking pull request](https://github.com/twbs/bootstrap/pull/17021) that includes a master checklist of changes we've made and our remaining possible todos. We'd love for y'all to help chip away at those todos.

The general development and release plan looks something like this:

- A few alpha releases while things are still in flux.
- Two beta releases after features and functionality are locked down to really test things out.
- Two release candidates (RCs) to really test things out closer to production environments.
- Then, the final release!

For those jamming on v4 with us, we also have a dedicated v4 Slack channel. Jump in to talk shop and work with your fellow Bootstrappers. If you haven't yet, [join our official Slack room!](https://bootstrap-slack.herokuapp.com).

If you're not keen on pushing code to v4, we'd love to hear from you in [our issue tracker](https://github.com/twbs/bootstrap/issues/) with bug reports, questions, and general feedback.

## Supporting v3

When we shipped Bootstrap 3, we immediately discontinued all support for v2.x, causing a lot of pain for all our users out there. That was a mistake we won't be making again. For the foreseeable future, **we'll be maintaining Bootstrap 3 with critical bug fixes and documentation improvements**. v3 docs will also continue to be hosted after v4's final release.

## One more thing...

In addition to shipping the first Bootstrap 4 alpha today, we're also launching our latest side project, [Official Bootstrap Themes](http://themes.getbootstrap.com).

[![Official Bootstrap Themes](/img/2015/bs-themes.png)](http://themes.getbootstrap.com)

We've talked about building premium themes for Bootstrap since our earliest releases, but never quite found the time or ideal approach until earlier this year. We've poured hundreds of hours into these themes and consider them to be much more than traditional re-skins of Bootstrap. They've very much their own toolkits, just like Bootstrap.

To start, we’re launching with three themes built on Bootstrap 3: a [dashboard](http://themes.getbootstrap.com/products/dashboard), an [application](http://themes.getbootstrap.com/products/application), and a [marketing](http://themes.getbootstrap.com/products/marketing) site. Each theme contains everything you'd find in Bootstrap, plus stunning real world examples, brand new components and plugins, custom documentation, and simple build tools.

All themes include a [multiple-use license](http://themes.getbootstrap.com/pages/our-license) for the purchaser and free updates for bug fixes and documentation updates for the life of the themes.

[Head to the Bootstrap themes site](http://themes.getbootstrap.com) to check them out.

<3,

[@mdo](https://twitter.com/mdo), [@fat](https://twitter.com/fat), & [team](https://github.com/twbs)
