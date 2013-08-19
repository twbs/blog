---
layout: post
title: Bootstrap 3 released
---


<iframe width="600" height="338" src="//www.youtube.com/embed/0hiUuL5uTKc?rel=0" frameborder="0" allowfullscreen></iframe>

Today, on [the two year anniversary](https://twitter.com/mdo/statuses/104620039650557952) of releasing Bootstrap to the world, we're shipping Bootstrap 3.0. It's been a crazy long ride to say the least and we're stoked to finally have this out in the wild. Thanks to everyone who's tested our RCs (er, betas), reported bugs, and contributed code. We couldn't have done it without you beautiful nerds.


## What's new

For those who haven't been following along too closely, here's a recap of all the biggest changes shipping with Bootstrap 3:

* **New design and an optional theme!** With v3, we've gone flat. Don't call it a trend—it's all about customization, folks. Since we simplified the aesthetics though, we thought it'd help to have an optional theme. To use it, check out the [Bootstrap theme example](http://getbootstrap.com/examples/theme/).
* **Mobile first and always responsive!** Nearly everything has been redesigned and rebuilt to start from your handheld devices and scale up.
* **Brand new Customizer!** It's been redesigned, is now compiled in the browser instead of Heroku, has better dependency support, and even has built-in error handling. Better yet, we now save your customizations to an anonymous Gist for easy reuse, sharing, and modifications.
* **Better box model by default.** Everything in Bootstrap gets `box-sizing: border-box`, making for easier sizing options and an enhanced grid system.
* **Super-powered grid system.** With four tiers of grid classes—phones, tablets, desktops, and large desktops—you can do some super crazy awesome layouts.
* **Rewritten JavaScript plugins.** All events are now namespaced, no-conflict stuff works way better, and more.
* **New Glyphicons icon font!** While they were gone for a while, we've since restored the Glyphicons to the main repo. In 2.x, they were images, but now they're in font format and include 40 new glyphs.
* **Overhauled navbar.** It's now always responsive and comes with some super handy and re-arrangable subcomponents.
* **Modals are way more responsive.** We've overhauled the modal code to make it way more responsive on mobile devices. They now scroll the entire viewport instead of having a max-height.
* **Added some components!** New to the mix are panels and list groups.
* **Removed some components!** We've dropped the accordion (replaced with collapsible panels), submenus, typeahead, and a few more small items. (Worth celebrating as much as adding new ones.)
* **More consistent base and sizing classes.** Buttons, tables, forms, alerts, and more have been updated to have more consistent classes for easier customizer and extensibility.
* **Docs have been blown up, yo.** We've added a lot of new documentation, not only for our components, but for browser support (including gotchas and bugs), license FAQs, third party support (and workarounds), accessibility, and more.
* **Dropped Internet Explorer 7 and Firefox 3.6 support.** For Internet Explorer 8, you'll need to include [Respond.js](https://github.com/scottjehl/Respond) for all the media queries to work correctly. You can read more about [browser support](http://getbootstrap.com/getting-started/#browser-support) in the docs.

For our pre-release testers and others who have been following along with the RCs, here's a list of some of the more prominent changes made since RC2:

* Hella bugs have been fixed (duh, right?).
* Restored the Glyphicons icon font.
* Navbars now require a `.navbar-default` for the standard version.
* Panels now require a `.panel-default` for the standard gray variation.
* Alerts now require a modifier class (e.g., `.alert.alert-warning` for the previously default yellow alert).
* Multiple responsive utilities can now be applied to the same element.
* Examples are back in the main repo and have been fully updated.
* Docs have been updated for more consistent placement, naming, etc.
* Customizer compiling bugs have all been fixed.
* The optional theme has been added and is demonstrated in an example.
* Jumbotrons are now made to extend the full width of the viewport with a container inside, but if you reverse that, the jumbotron in a container will be rounded and padded.
* The navbar components have been updated to better account for the presence of containers and more. You'll see some new margin and padding changes, but no markup changes should be required.


## The numbers game

For those keeping track, Bootstrap 3 took nearly nine months to design, develop, and ship. In that time we've had:

* Over 2,700 commits from 319 contributors
* 379 files changed, meaning 84,000 additions and deletions
* Over 900 comments in the pull request
* Over a 20% reduction in minified CSS (from 127kb to 97kb)

Beyond this release, numbers everywhere else are looking amazing. It's been staggering to watch these grow.

* Over 56,000 stars and 19,000 forks on GitHub (still number one, baby!).
* Over 9,800 closed issues (that's over 13 a day since we released Bootstrap).
* Last month, we had nearly 15 million pageviews on our docs (and that barely includes anything from our v3 pre-releases).
* In the last year, we've logged over 3 million downloads just from the docs, 40% of which are from the Customizer.

This was a massive undertaking and it couldn't have come out better. Thanks once again to all our contributors and the rest of the community for helping us make this a reality.


## What about non-responsive sites?

With Bootstrap 3 we've gone deep on responsive and mobile first—it's built in and no longer requires a separate stylesheet. That's great for most folks, but not everyone needs or wants an adaptive web site or application. To help, we've added some documentation and an example that disables the adaptive or responsive features with some extra CSS.

Check out the [Disabling responsiveness section](http://getbootstrap.com/getting-started/#disable-responsive) or head right to the [non-responsive example](http://getbootstrap.com/examples/non-responsive/) to learn more.


## Bootstrap 2.3.2

While we're not actively maintaining or supporting 2.3.2, you can still get to the old documentation. Head to [http://getbootstrap.com/2.3.2/](http://getbootstrap.com/2.3.2/) and you'll find everything right where you left it (including the old customizer). We'll leave this up and available for the foreseeable future.

As a side note, we apologize for all the redirect and 404 problems folks ran into during the last few weeks. This was our first time moving an entire repo on GitHub and we hit a huge snag with old builds of our docs and did our best to deal with those to not further confuse folks. We'll do better next time.


## Coming up next

As always, we'll have one or two patch releases before hitting our next minor release. Beyond that, we have a few things we'd like to tackle for BS3.1 and are already tracking those as potential additions in [#9397](https://github.com/twbs/bootstrap/issues/9397). If you'd like something considered for v3.1, check that list. If it's not there, open a new issue to discuss.

No dates have been set for any patch or minor release yet. As soon as we figure that out, we'll let you know.


## Download!

Woo, all set? Then head to the docs and download yourself some Bootstrap 3!

<a class="btn-link" href="https://github.com/twbs/bootstrap/archive/v3.0.0.zip">Download Bootstrap 3</a> or hit the [GitHub repository](https://github.com/twbs/bootstrap)


-----

<3,

[@mdo](https://twitter.com/mdo), [@fat](https://twitter.com/fat), and [team](https://github.com/twbs/bootstrap/contributors)
