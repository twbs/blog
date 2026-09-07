import { z, defineCollection } from 'astro:content'
import { glob } from 'astro/loaders'

const postsSchema = z.object({
  author: z.string(),
  date: z.coerce.date(),
  title: z.string(),
  category: z.enum(['Release', 'Icons', 'Community']).optional(),
  description: z.string().optional(),
  // Gives the post a full-width card on the index instead of a half-width one.
  major: z.boolean().optional(),
  // Written but not yet published: hidden from every listing, feed, and route
  // until removed. Series navigation shows it as an upcoming (unlinked) entry.
  draft: z.boolean().optional(),
  keywords: z.string().array().optional(),
  video: z.string().optional(),
  video_start: z.number().optional(),
  banner: z.string().optional(),
  // Historical URLs for this post; turned into redirects in astro.config.ts.
  aliases: z.string().array().optional(),
  extra_js: z
    .object({
      async: z.boolean().optional(),
      defer: z.boolean().optional(),
      src: z.string(),
      integrity: z.string().optional()
    })
    .array()
    .optional()
})

const postsCollection = defineCollection({
  loader: glob({
    base: './src/content/posts',
    pattern: '**/[!_]*.{md,mdx}'
  }),
  schema: postsSchema
})

export const collections = {
  posts: postsCollection
}
