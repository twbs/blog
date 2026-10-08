// Mirrors Astro's `MarkdownHeading`, spelled out here because `.astro` files
// can't resolve types that come from the `astro` package.
export interface Heading {
  depth: number
  slug: string
  text: string
}

// h2s carry the outline and h3s nest under them; deeper headings are noise in a
// rail this narrow.
const TOC_MIN_DEPTH = 2
const TOC_MAX_DEPTH = 3

// Below this, a post is short enough that an "On this page" nav is just noise:
// patch release notes run to a couple of sections that are visible without it.
const TOC_MIN_SECTIONS = 3

// Generate a tree like structure from a list of headings.
export function generateToc(allHeadings: Heading[]) {
  const headings = allHeadings.filter(
    (heading) => heading.depth >= TOC_MIN_DEPTH && heading.depth <= TOC_MAX_DEPTH
  )

  const toc: TocEntry[] = []

  for (const heading of headings) {
    if (toc.length === 0) {
      toc.push({ ...heading, children: [] })
      continue
    }

    const previousEntry = toc[toc.length - 1]

    if (heading.depth === previousEntry.depth) {
      toc.push({ ...heading, children: [] })
      continue
    }

    const children = getEntryChildrenAtDepth(previousEntry, heading.depth - previousEntry.depth)
    children.push({ ...heading, children: [] })
  }

  return toc
}

// The docs give every page a table of contents; posts have to earn one.
export function getPostToc(allHeadings: Heading[]) {
  // The autolink plugin appends a text node to each heading, so `text` can
  // carry a trailing space.
  const headings = allHeadings.map((heading) => ({ ...heading, text: heading.text.trim() }))
  const toc = generateToc(headings)

  return toc.length >= TOC_MIN_SECTIONS ? toc : []
}

function getEntryChildrenAtDepth(entry: TocEntry, depth: number): TocEntry['children'] {
  if (!entry) {
    return []
  }

  return depth === 1 ? entry.children : getEntryChildrenAtDepth(entry.children[entry.children.length - 1], depth - 1)
}

export interface TocEntry extends Heading {
  children: TocEntry[]
}
