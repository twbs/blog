---
layout: post
title: Bootstrap 3 plans
---

With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project, Bootstrap 3. Things are coming together and we want to give you an update on what's next and give you a chance to share your thoughts.

## Specifics of v3

Overall, **Bootstrap 3 will be rather narrow in focus** compared to the last major update. In short, we'll drop legacy code, improve responsive CSS, and centralize community efforts. **Specifically, v3 will address the following:**

- Migrate [twitter/bootstrap](https://github.com/twbs/bootstrap/), [twitter/bootstrap-server](https://github.com/twbs/bootstrap-server/), and mdo/bootstrap-blog (currently a private repo) to the [twbs](https://github.com/twbs) organization.
- Change site URLs to [http://getbootstrap.com](http://getbootstrap.com) (more on that below).
- Compile all Less code, including responsive styles, into a single CSS file.
- Drop IE7/FF3x support entirely.
- Use the `@font-face` version of Glyphicons instead of the current PNGs.
- [Switch to the MIT license](https://github.com/twbs/bootstrap/issues/2054) instead of Apache.
- Drop the `*-wip` branch style of development.
- Use tags for all versioned downloads, use smaller feature branches for dev work, and merge right into master (after 3.0 launches).

To help communicate and track changes, we've opened a [Bootstrap 3 pull request](https://github.com/twbs/bootstrap/pull/6342). Follow along with what we're working on, ask questions, or contribute by using that pull request as a reference point. We'll be keeping it up to date as development progresses.

In addition, we're going to try to **accelerate versioning** by focusing on individual components for major releases after 3.0 (e.g., modals or the carousel could be punted to a 4.0 release). Given this approach, it's less important for us to stuff a lot of feature work into 3.0.

Beyond that, we're open to addressing a couple of things with 3.0 like form styles and mobile enhancements. We want to limit these kind of changes for 3.0 though, so let us know what features are most important to you.

## New GitHub organization

We mentioned this a few times in recent months, but with 3.0 we'll be transitioning to a new organization on GitHub, [twbs](https://github.com/twbs). The username is homage to [H5BP](https://github.com/h5bp), one of the most notable front-end tools out there, and of course, [Twitter](https://github.com/twitter). The move shouldn't present any problems to you fine folks.

## New URLs

With the move to the new organization, the URLs of the Bootstrap docs must change. We host our docs on GitHub Pages and those URLs are based on user or organization names. To better future-proof things, we'll be making [http://getbootstrap.com](http://getbootstrap.com) our base URL instead of just a redirect.

For us, this will be the most painful part of the move. Given how prolific links are, we'll also try to setup something at the old URLs to redirect folks, but we're unsure how we will do that just yet. Perhaps a shell repository with dummy pages pointing to their replacements? Time will tell.

## Strengthening the community

The larger goal behind the organization move is to **bolster the Bootstrap community**. To start, we'll be transferring the main Bootstrap repo, the Heroku customizer app, and the blog to the new organization. But more importantly, we want to **bring community projects into the organization as official projects**.

From language ports to extensions to snippets, we want to work with leaders of key community efforts to see if this makes sense. We're still working on the criteria for this and have yet to reach out to anyone.

If you think your project fits, hit us up. We'll be looking to add projects shortly after 3.0.

## Growing the team

Bringing additional projects into the fold is going to be a huge undertaking as managing the existing code is already a hefty task between Jacob and myself. To that end, we'll be looking to add one or two people to the team to help us manage issues, pull requests, etc. This is a huge deal for us and we'll be taking our time on figuring it all out.

Growing the team with official contributors, other than the two of us, is also a goal. Similarly, we're super nervous about this and have no clear timetable for it as well.

## Wrapping up

Bootstrap is still just getting started. There is so much more awesome stuff to do and we want to work with you awesome folks to do it all as best we can. We hope you're as excited as we are.

Please reach out to us on Twitter or GitHub with any questions or feedback.

<3,

@mdo and @fat

