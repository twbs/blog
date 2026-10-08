import rss from '@astrojs/rss'
import type { APIContext } from 'astro'
import { getConfig } from '../libs/config'
import { sortedPosts, getPostSlug } from '../libs/content'

export async function GET(context: APIContext) {
  const config = getConfig()
  const posts = sortedPosts.slice(0, 10)

  return rss({
    title: config.title,
    description: config.description,
    site: context.site!,
    items: posts.map(post => ({
      title: post.data.title,
      pubDate: new Date(post.data.date),
      link: `/${getPostSlug(post)}/`
    }))
  })
}
