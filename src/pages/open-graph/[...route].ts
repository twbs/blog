import { OGImageRoute } from 'astro-og-canvas'

import { getPostDescription, getPostSlug, allPosts, sortedPosts, type Post } from '../../libs/content'

// Bootstrap 6's palette, converted from the oklch() source values in
// bootstrap/scss/_colors.scss since canvaskit only takes RGB.
const INDIGO: [number, number, number] = [119, 64, 255]
const INK: [number, number, number] = [10, 8, 20]
const INK_TINTED: [number, number, number] = [27, 11, 69]
const WHITE: [number, number, number] = [255, 255, 255]
const MUTED: [number, number, number] = [176, 172, 196]

// Match the post routes: drafts get cards in dev previews only, not in prod.
const posts = import.meta.env.DEV ? allPosts : sortedPosts
const pages = Object.fromEntries(posts.map((post: Post) => [getPostSlug(post), post]))

export const { getStaticPaths, GET } = await OGImageRoute({
  pages,

  // Keys are already the post's URL path, so the default handling (which strips
  // a `/src/pages/` prefix and an extension) would only risk mangling them.
  getSlug: (path) => `${path}.png`,

  getImageOptions: (_path, post: Post) => ({
    title: post.data.title,
    description: getPostDescription(post),
    logo: {
      path: './public/assets/brand/bootstrap-logo-shadow.png',
      size: [124]
    },
    bgGradient: [INK, INK_TINTED],
    border: {
      color: INDIGO,
      width: 24,
      side: 'block-end'
    },
    padding: 72,
    font: {
      title: {
        color: WHITE,
        size: 68,
        lineHeight: 1.2,
        weight: 'Bold',
        families: ['Geist']
      },
      description: {
        color: MUTED,
        size: 30,
        lineHeight: 1.5,
        families: ['Geist']
      }
    },
    // Vendored rather than fetched so builds don't depend on a font CDN. Matches
    // the Geist the site loads for body copy.
    fonts: ['./src/assets/fonts/Geist-400.ttf', './src/assets/fonts/Geist-700.ttf']
  })
})
