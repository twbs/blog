# Bootstrap blog [![CI](https://github.com/twbs/blog/actions/workflows/ci.yml/badge.svg)](https://github.com/twbs/blog/actions/workflows/ci.yml?query=workflow%3ACI+branch%3Amain)

All content within `src/content/posts/` is copyright Bootstrap. Do not reuse any part without written permission.

Made by [@mdo](https://twitter.com/mdo), built on [Astro](https://astro.build), and hosted on [GitHub Pages](https://pages.github.com/).

## Running locally

1. Run `npm install` to install dependencies, including Bootstrap 6 from npm.
2. Run `npm start` and open <http://localhost:4000>.
3. Run `npm test` to build the site and run all linters.

## Converting post images

Export a PNG and an `@2x` PNG next to it, then pass the 1x file to:

```sh
npm run image:webp -- public/assets/img/2026/09/example.png
```

The converter checks that the retina image is exactly twice the width and
height, then creates 1x and 2x AVIF images with near-lossless WebP fallbacks.
Add the files to the post front matter with `banner`, `banner_2x`,
`banner_avif`, and `banner_avif_2x`.

<3
