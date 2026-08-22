import { getPostSlug, type Post } from './content'

export interface SocialCard {
  url: string
  width: number
  height: number
}

/**
 * Site-wide fallback for pages without a card of their own. Its dimensions are
 * declared here so `og:image:width`/`height` match the actual file.
 */
export const defaultSocialCard: SocialCard = {
  url: '/assets/img/bootstrap-social.png',
  width: 2000,
  height: 1000
}

/**
 * The card generated for this post by `src/pages/open-graph/[...route].ts`.
 * astro-og-canvas renders at a fixed 1200x630.
 *
 * Posts use this even when they set a `banner`, since banners are authored at
 * whatever size suits the post body and get cropped as social previews.
 */
export function getPostSocialCard(post: Post): SocialCard {
  return {
    url: `/open-graph/${getPostSlug(post)}.png`,
    width: 1200,
    height: 630
  }
}
