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

We've also continued to iterate on a few other projects to help folks get up and running with Bootstrap with npm, other JS frameworks, and various build tools. Keep reading to learn more.

## Highlights

- **Buttons**
  - Added a `transparent` default hover border color CSS variable for buttons to fix a visual regression
- **Forms**
  - Input groups have updated `z-index` values to ensure proper rendering of validated form fields
  - Floating labels now reset their `text-align` to ensure consistent styling
- **List Groups**
  - Horizontal list groups with only one child now render the correct `border-radius`
  - Modified the `list-group-item` selectors to better support nested imports of Bootstrap's CSS
- **Modals**
  - Fixed modal event listeners during dismiss click, allowing you to once again click scrollbars without dismissing the modal
- **Pagination**
  - Fixed incorrect `border-radius` values inside pagination components
- **Scrollspy**
  - Scrollspy threshold option is now configurable
- **Tooltips**
  - Reverted some tooltip plugin updates to prevent issues with `selector`, dynamic content, and disposed tooltips using `title`

## Dependencies

- Updated Autoprefixer to fix warnings of the `color-adjust` property (thanks to [@julien-deramond](https://github.com/julien-deramond/) on our team for reporting an issue upstream here)

## Docs

- Searching our docs on mobile has been improved with the search field now always visible on responsive, narrow viewports
- Removed links to and mentions of Slack from across the codebase, as we intend to shutter Slack in favor of GitHub Discussions
- Reintroduced proper `outline` styles for docs code samples and buttons when `:not(:focus-visible)`

## Farewell, Slack!

As mentioned over a month ago, we made the decision to close down our community Slack channel. Slack isn't great at managing a large scale community and it's prohibitively expensive as well for a community the size of ours (the Slack was over 45,000 people!). Instead of using Slack or similar tool, we're encouraging folks to use our Discussions tab on GitHub.

**[Explore Bootstrap discussions](https://github.com/twbs/bootstrap/discussions)**

## Examples repo

[![Examples](/assets/img/2022/09/examples.png)](https://github.com/twbs/examples)

Make sure to checkout (pun intended!) our latest project, the [twbs/examples repository](https://github.com/twbs/examples)! The examples project includes functional demos for all sorts of environments and JS frameworks, with more planned! You can even open every example in StackBlitz and edit them in the browser.

- [Starter](https://github.com/twbs/examples/tree/main/starter/) – CDN links for our CSS and JS
- [Sass & JS](https://github.com/twbs/examples/tree/main/sass-js/) — Import Sass, Autoprefixer, Stylelint, and our JS bundle via npm
- [Sass & ESM JS](https://github.com/twbs/examples/tree/main/sass-js-esm/) — Import Sass, Autoprefixer, and Stylelint via npm, and then load our ESM JS with a shim
- [Webpack](https://github.com/twbs/examples/tree/main/webpack/) - Import and bundle Sass and JS with Webpack
- [Parcel](https://github.com/twbs/examples/tree/main/parcel/) - Sass, JS via Parcel
- [Vite](https://github.com/twbs/examples/tree/main/vite/) - Sass, JS via Vite
- [Bootstrap Icons font](https://github.com/twbs/examples/tree/main/icons-font/) - Import and compile Sass, Stylelint, PurgeCSS, and our icon font

**Have an idea for a new starter example?** Feel free to open an issue or pull request!

## v4 starter project

[![npm starter](/assets/img/2022/09/bnpm.png)](https://github.com/twbs/bootstrap-npm-starter)

We've shipped a v2.0.0 update to the [twbs/bootstrap-npm-starter project](https://github.com/twbs/bootstrap-npm-starter). This release includes Bootstrap v4.6.2, Bootstrap Icons v1.9.1, a new live reload feature for local development, and several dependency updates. This project will remain dedicated to Bootstrap 4 while our [twbs/examples](https://github.com/twbs/examples) repo will focus on v5 and future major releases.

## Get the release

**Head to <https://getbootstrap.com> for the latest.** It's also been pushed to npm:

```sh
npm i bootstrap@v5.2.1
```

[Read the GitHub v5.2.1 changelog](https://github.com/twbs/bootstrap/releases/tag/v5.2.1) for a complete list of changes in this release.

## Support the team

Visit our [Open Collective page]({{< param "opencollective" >}}) or our [team members](https://github.com/orgs/twbs/people)' GitHub profiles to help support the maintainers contributing to Bootstrap.
