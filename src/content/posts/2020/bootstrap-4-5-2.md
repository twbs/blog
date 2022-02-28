---
author: mdo
date: "2020-08-06T00:00:00Z"
title: Bootstrap 4.5.2
video: ccenFp_3kq8
keywords:
  - bootstrap
  - release
---

Today's patch release is aimed at addressing some small issues introduced over the last few versions of Bootstrap 4. Read on for details and update when you're ready.

From the addition of responsive containers in v4.4.0 to the most recent row and column adjustments, we had been making incremental changes to our grid system. While our changes have solved some issues, they've broken other behaviors and introduced new complexities.

Today's release rolls back and restores a few things:

- **[#31438](https://github.com/twbs/bootstrap/pull/31438) restores the `make-container-max-widths` mixin.** We won't be using the mixin ourselves, but it will remain in the codebase for the rest of v4 with today's release. We've added a deprecation notice as well.

- **[#31439](https://github.com/twbs/bootstrap/pull/31439) removes `flex: 1 0 100%` from `.row`s.** This was added to address shrinking rows inside the navbar component after our responsive containers were added in v4.4.0. Removing this rolls us back to the expected grid and flex behavior—your row will shrink unfortunately without further changes. We could add extra custom CSS to address this, but it seems shortsighted to rush into that. Instead, apply `.flex-fill` to the `.row` and your row will behave as usual.

Similarly, **v4.5.1 already removed the `min-width: 0` on `.col`s**. This change was introduced to fix `<pre>` elements not fitting to a column. This an issue with how flexbox works, where a flex container cannot shrink beyond its children's content. Rather than force this on every column, we recommend you apply this as needed with a custom utility. (We'll also aim to add this as a new utility in v5.)

We know this kind of hiccups set you back, so please accept our apologies for the bugs. Be sure to read the referenced pull requests above to get up to speed on what happened and how we fixed it. [This CodePen demo](https://codepen.io/emdeoh/pen/LYNYmPR?editors=1100) has all the known grid issues and fixes implemented in it.
