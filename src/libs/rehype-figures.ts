import type { Element, ElementContent, Root } from 'hast'

/**
 * Turns paragraphs that hold nothing but images into figures, so post media can
 * break out past the copy measure and carry a caption. Captions come from the
 * markdown image title: `![alt](src "caption")`.
 */
export default function rehypeFigures() {
  return (tree: Root) => {
    transformChildren(tree)
  }
}

function transformChildren(parent: Root | Element) {
  for (const [index, child] of parent.children.entries()) {
    const images = imagesOf(child)

    if (images) {
      parent.children[index] = toFigure(images)
    } else if (child.type === 'element') {
      transformChildren(child)
    }
  }
}

/** The images of a paragraph that contains only images, otherwise undefined. */
function imagesOf(node: ElementContent | Root['children'][number]): Element[] | undefined {
  if (node.type !== 'element' || node.tagName !== 'p') {
    return undefined
  }

  const children = node.children.filter(
    child => !(child.type === 'text' && child.value.trim() === '')
  )

  const images = children.filter(
    (child): child is Element => child.type === 'element' && child.tagName === 'img'
  )

  return images.length > 0 && images.length === children.length ? images : undefined
}

// The semantic `post-figure*` hooks stay so the grid variant can reach its
// descendants; everything else is a Bootstrap utility.
const FIGURE_CLASSES = ['post-figure', 'd-flex', 'flex-column', 'gap-6', 'm-0']
const MEDIA_CLASSES = ['post-figure-media', 'w-100', 'overflow-hidden', 'rounded-8']
const CAPTIONS_CLASSES = ['post-figure-captions', 'd-flex', 'flex-column', 'gap-6']
const CAPTION_CLASSES = ['post-figure-caption', 'fs-sm', 'fg-3', 'text-center']

function toFigure(images: Element[]): Element {
  const captions = images.map(image => takeCaption(image))
  const grid = images.length > 1

  const media = images.map(image => element('span', MEDIA_CLASSES, [image]))

  const children: ElementContent[] = [...media]

  if (captions.some(Boolean)) {
    children.push(
      grid
        ? element(
            'figcaption',
            CAPTIONS_CLASSES,
            captions.map(caption => element('span', CAPTION_CLASSES, text(caption)))
          )
        : element('figcaption', CAPTION_CLASSES, text(captions[0]))
    )
  }

  return element('figure', grid ? [...FIGURE_CLASSES, 'post-figure-grid'] : FIGURE_CLASSES, children)
}

/** Reads an image's title as its caption and drops it, so no tooltip fires. */
function takeCaption(image: Element): string | undefined {
  const { title } = image.properties
  delete image.properties.title

  return typeof title === 'string' && title.trim() !== '' ? title : undefined
}

function element(tagName: string, className: string[], children: ElementContent[]): Element {
  return {
    type: 'element',
    tagName,
    properties: { className },
    children
  }
}

function text(value: string | undefined): ElementContent[] {
  return value ? [{ type: 'text', value }] : []
}
