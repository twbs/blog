import * as htmlparser2 from 'htmlparser2'

const placeholderRegex = /<Placeholder\s+([^>]*?)\/>/g

interface PlaceholderOptions {
  /** CSS classes appended to `bd-placeholder-img`. */
  class?: string
  /** SVG fill behind the label. */
  background: string
  /** Label color. */
  color: string
  height: string
  /** Pass `false` to hide the label. */
  text: string | false
  width: string
}

const defaults: PlaceholderOptions = {
  background: 'var(--bs-bg-2)',
  color: 'var(--bs-fg-3)',
  height: '180',
  text: false,
  width: '100%'
}

/**
 * Expands `<Placeholder />` tags inside an example's raw HTML string into inline
 * SVGs.
 *
 * Example markup is passed to `Example` as a string rather than a slot, because
 * it has to reach the DOM byte-for-byte for the displayed source to match the
 * preview. That rules out letting MDX render a real `Placeholder` component, so
 * the tag is substituted here instead.
 */
export function replacePlaceholdersInHtml(html: string): string {
  return html.replace(placeholderRegex, match => {
    const document = htmlparser2.parseDocument(match, { xmlMode: true })
    const element = document.firstChild

    if (
      document.children.length > 1 ||
      !element ||
      element.type !== htmlparser2.ElementType.Tag ||
      element.name !== 'Placeholder'
    ) {
      throw new Error(`Invalid Placeholder element: ${match}`)
    }

    return renderPlaceholder({ ...defaults, ...parseAttributes(element.attribs) })
  })
}

function renderPlaceholder(options: PlaceholderOptions): string {
  const { background, class: className, color, height, text, width } = options

  const classList = ['bd-placeholder-img', className].filter(Boolean).join(' ')
  const label = text === false ? `${width}x${height}` : text

  const attributes = [
    `class="${classList}"`,
    `width="${width}"`,
    `height="${height}"`,
    'preserveAspectRatio="xMidYMid slice"',
    text === false ? 'aria-hidden="true"' : `role="img" aria-label="${label}"`,
    'xmlns="http://www.w3.org/2000/svg"'
  ].join(' ')

  const rect = `<rect width="100%" height="100%" fill="${background}"/>`
  const caption =
    text === false ? '' : `<text x="50%" y="50%" fill="${color}" dy=".3em" text-anchor="middle">${text}</text>`

  return `<svg ${attributes}>${rect}${caption}</svg>`
}

/** Turns MDX-style `{false}` / `{true}` attribute values into real booleans. */
function parseAttributes(attributes: Record<string, string>) {
  const parsed: Record<string, string | false> = {}

  for (const [key, value] of Object.entries(attributes)) {
    if (value === '{false}') {
      parsed[key] = false
    } else if (value !== '{true}') {
      parsed[key] = value
    }
  }

  return parsed
}
