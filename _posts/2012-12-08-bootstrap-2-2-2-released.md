---
layout: post
title: Bootstrap 2.2.2 released
---

Today we're launching [Bootstrap 2.2.2](http://getbootstrap.com), another larger bugfix release that focuses mostly on CSS and documentation fixes, with a few key JS issues mixed in as well. Here's the rundown on what's new in this release:

- **Docs:**
  - Assets (illustrations and examples) are now retina-ready.
  - Replaced [Placehold.it](http://placehold.it) with [Holder.js](http://imsky.github.com/holder/), a client-side and retina-ready placeholder image tool.
- **Dropdowns:** Temporary fix added for dropdowns on mobile to prevent them from closing early.
- **Popovers:**
  - No longer inherits `font-size: 0;` when placed in button groups.
  - Arrows refactored to work in IE8, and use less code.
  - Plugin no longer inserts popover content into a `<p>`, but rather directly into `.popover-content`.
- **Labels and badges:** Now [automatically collapse](https://github.com/twbs/bootstrap/commit/ead5dbeba5cd7acfa560bfb353f5e7c4f4a19256) if they have no content.
- **Tables:** Nesting support with `.table-bordered` and `.table-striped` greatly improved.
- **Typeahead:**
  - Now [inserts dropdown menu after the input](https://github.com/twbs/bootstrap/commit/1747caf19d59cad7fdc90ae56a00e0e2849f95f4) instead of at the close of the document.
  - Hitting escape will place focus back on the `<input>`.
- Print styles, from HTML5 Boilerplate, have been added.

Get a more complete list by viewing the [2.2.2 milestone on GitHub](https://github.com/twbs/bootstrap/issues?milestone=17&state=closed). Most of the issues not mentioned above are minor CSS tweaks and documentation typos.

<a class="btn-link" href="https://github.com/twbs/bootstrap/zipball/master">Download Bootstrap 2.2.2</a> <span class="muted">(latest master ZIP)</span>

-----

We have a 2.2.3 release slated for further bugs and improvements we couldn't tackle in this version, but most of our ongoing efforts are going to transition to development on 3.0.0. More details on that will come next week.
