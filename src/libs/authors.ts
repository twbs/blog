interface Author {
  name: string
  role?: string
}

/**
 * Display names for the handles used in post frontmatter, for the signature at
 * the end of a post. Anything unmapped falls back to the handle itself.
 */
const AUTHORS: Record<string, Author> = {
  mdo: { name: 'Mark Otto', role: 'Creator of Bootstrap' },
  cvrebert: { name: 'Chris Rebert', role: 'Bootstrap team alumnus' },
  connors: { name: 'Connor Sears', role: 'Bootstrap team alumnus' },
  'julien-deramond': { name: 'Julien Déramond', role: 'Bootstrap core team' }
}

export function getAuthor(handle: string): Author {
  return AUTHORS[handle] ?? { name: `@${handle}` }
}
