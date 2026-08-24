import { getCollection, type CollectionEntry } from 'astro:content'

export type Post = CollectionEntry<'posts'>

export const POSTS_PER_PAGE = 12

export const allPosts = await getCollection('posts')

// `draft` posts are written but not yet published, so they're excluded from
// every listing, feed, and route (their pages 404 until the flag is removed).
export const sortedPosts = allPosts
  .filter(post => !post.data.draft)
  .sort((a, b) => new Date(b.data.date).getTime() - new Date(a.data.date).getTime())

export const totalPages = Math.max(1, Math.ceil(sortedPosts.length / POSTS_PER_PAGE))

export function getPostsForPage(page: number): Post[] {
  const start = (page - 1) * POSTS_PER_PAGE

  return sortedPosts.slice(start, start + POSTS_PER_PAGE)
}

export function getPostSlug(post: Post): string {
  const date = new Date(post.data.date)
  const year = date.getUTCFullYear()
  const month = String(date.getUTCMonth() + 1).padStart(2, '0')
  const day = String(date.getUTCDate()).padStart(2, '0')

  // post.id is like "2025/bootstrap-5-3-8.md" - extract filename without extension
  const filename = post.id.replace(/^.*\//, '').replace(/\.md$/, '')

  return `${year}/${month}/${day}/${filename}`
}

// Google truncates meta descriptions somewhere north of this.
const META_DESCRIPTION_MAX_LENGTH = 160

/**
 * Removes the parts of an `.mdx` body that aren't prose: JSX comments, the
 * component imports at the top, and the markup passed to components as
 * template-literal props. Without this they leak into the lede and the meta
 * description, and inflate the reading time.
 */
function stripMdxSyntax(body: string): string {
  return body
    .replace(/\{\/\*[\s\S]*?\*\/\}/g, '')
    .replace(/^(?:import|export)\s+[\s\S]*?$/gm, '')
    .replace(/\{`[\s\S]*?`\}/g, '')
}

function markdownToPlainText(markdown: string): string {
  return markdown
    .replace(/<(https?:[^>]+)>/g, '$1') // autolinks, before tags are stripped
    .replace(/!\[[^\]]*\]\([^)]*\)/g, '')
    .replace(/\[([^\]]*)\]\([^)]*\)/g, '$1')
    .replace(/\[([^\]]*)\]\[[^\]]*\]/g, '$1')
    .replace(/<[^>]+>/g, '')
    .replace(/`([^`]+)`/g, '$1')
    .replace(/(\*\*|__)(.+?)\1/g, '$2')
    .replace(/(\*|_)(.+?)\1/g, '$2')
    .replace(/\\([\\`*_{}[\]()#+\-.!])/g, '$1')
    .replace(/\s+/g, ' ')
    .trim()
}

function truncateAtWord(text: string, maxLength: number): string {
  if (text.length <= maxLength) {
    return text
  }

  const clipped = text.slice(0, maxLength)
  const lastSpace = clipped.lastIndexOf(' ')

  return `${(lastSpace > 0 ? clipped.slice(0, lastSpace) : clipped).replace(/[,;:.!?-]+$/, '')}…`
}

/**
 * Teaser shown under each post on the index: an explicit `description` when the
 * post sets one, otherwise its opening paragraph flattened to plain text.
 */
export function getPostLede(post: Post): string | undefined {
  if (post.data.description) {
    return post.data.description
  }

  // Skip leading blocks that carry no prose, e.g. posts opening with an image.
  for (const block of stripMdxSyntax(post.body ?? '').split(/\r?\n\s*\r?\n/)) {
    const text = markdownToPlainText(block)

    if (text) {
      return text
    }
  }

  return undefined
}

/** Same text as the lede, trimmed to a sensible length for `<meta name="description">`. */
export function getPostDescription(post: Post): string | undefined {
  const lede = getPostLede(post)

  return lede ? truncateAtWord(lede, META_DESCRIPTION_MAX_LENGTH) : undefined
}

const WORDS_PER_MINUTE = 200

/** Rounded-up minutes to read the post, for the byline on post pages. */
export function getReadingTime(post: Post): number {
  // Fenced code isn't read at prose speed, so it shouldn't pad the estimate.
  const prose = stripMdxSyntax(post.body ?? '').replace(/^```[\s\S]*?^```/gm, '')
  const words = markdownToPlainText(prose).split(/\s+/).filter(Boolean).length

  return Math.max(1, Math.ceil(words / WORDS_PER_MINUTE))
}

export function formatDate(date: Date): string {
  return date.toLocaleDateString('en-US', {
    year: 'numeric',
    month: 'long',
    day: '2-digit',
    timeZone: 'UTC'
  })
}

export function formatDateShort(date: Date): string {
  return date.toLocaleDateString('en-US', {
    year: 'numeric',
    month: 'short',
    day: '2-digit',
    timeZone: 'UTC'
  })
}

export function formatDateISO(date: Date): string {
  return date.toISOString().replace(/T.*$/, '')
}
