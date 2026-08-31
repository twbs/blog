import fs from 'node:fs'
import path from 'node:path'
import { load as yamlLoad } from 'js-yaml'

const postsDir = path.join(process.cwd(), 'src', 'content', 'posts')

interface PostFrontmatter {
  date?: string | Date
  aliases?: string[]
}

function readFrontmatter(file: string): PostFrontmatter | undefined {
  const source = fs.readFileSync(file, 'utf8')
  const match = /^---\r?\n([\s\S]*?)\r?\n---/.exec(source)

  return match ? (yamlLoad(match[1]) as PostFrontmatter) : undefined
}

function listPosts(dir: string): string[] {
  return fs.readdirSync(dir, { withFileTypes: true }).flatMap((entry) => {
    const full = path.join(dir, entry.name)

    if (entry.isDirectory()) {
      return listPosts(full)
    }

    return /\.mdx?$/.test(entry.name) && !entry.name.startsWith('_') ? [full] : []
  })
}

/**
 * Builds redirects from `aliases` frontmatter so historical post URLs stay
 * alive after the move from Hugo.
 */
export function getAliasRedirects(): Record<string, string> {
  const redirects: Record<string, string> = {}

  for (const file of listPosts(postsDir)) {
    const data = readFrontmatter(file)

    if (!data?.aliases?.length || !data.date) {
      continue
    }

    const date = new Date(data.date)
    const year = date.getUTCFullYear()
    const month = String(date.getUTCMonth() + 1).padStart(2, '0')
    const day = String(date.getUTCDate()).padStart(2, '0')
    const name = path.basename(file).replace(/\.mdx?$/, '')
    const target = `/${year}/${month}/${day}/${name}/`

    for (const alias of data.aliases) {
      redirects[alias.replace(/\/?$/, '/')] = target
    }
  }

  return redirects
}
