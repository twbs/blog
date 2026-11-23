import { getPostSlug, type Post } from './content'

export interface SocialCard {
  url: string
  type: string
  width: number
  height: number
}

/**
 * Site-wide fallback for pages without a card of their own. Its dimensions are
 * declared here so `og:image:width`/`height` match the actual file.
 */
export const defaultSocialCard: SocialCard = {
  url: '/assets/img/bootstrap-social.png',
  type: 'image/png',
  width: 2000,
  height: 1000
}

/**
 * Use a post's custom social image or its generated 1200x630 card.
 */
export function getPostSocialCard(post: Post): SocialCard {
  return post.data.social_image ?? {
    url: `/open-graph/${getPostSlug(post)}.png`,
    type: 'image/png',
    width: 1200,
    height: 630
  }
}
