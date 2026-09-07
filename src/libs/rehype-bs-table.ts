import type { Element, Root } from 'hast'
import { SKIP, visit } from 'unist-util-visit'

/**
 * Applies CSS classes to tables authored in markdown (or MDX) when wrapped in a
 * `<BsTable />` component. Also injects `data-cell` attributes on `<td>` elements
 * from their corresponding `<th>` headers to support the `.table-stacked`
 * responsive variant.
 */
export default function rehypeBsTable() {
  return (tree: Root) => {
    visit(tree, 'element', (node, _index, parent) => {
      if (node.tagName !== 'table' || parent?.type !== 'mdxJsxFlowElement' || parent.name !== 'BsTable') {
        return SKIP
      }

      const classAttribute = parent.attributes.find(
        attribute => attribute.type === 'mdxJsxAttribute' && attribute.name === 'class'
      )

      if (classAttribute && typeof classAttribute.value !== 'string') {
        return SKIP
      }

      const tableClass = typeof classAttribute?.value === 'string' ? classAttribute.value : 'table sm:table-stacked'

      node.properties = {
        ...node.properties,
        class: tableClass
      }

      // Collect header labels from <thead> for data-cell attributes.
      const headers: string[] = []
      const thead = node.children.find(
        (child): child is Element => child.type === 'element' && child.tagName === 'thead'
      )

      if (thead) {
        const headerRow = thead.children.find(
          (child): child is Element => child.type === 'element' && child.tagName === 'tr'
        )

        if (headerRow) {
          for (const th of headerRow.children) {
            if (th.type === 'element' && th.tagName === 'th') {
              headers.push(getTextContent(th))
            }
          }
        }
      }

      // Inject data-cell on each <td> from the corresponding header.
      if (headers.length > 0) {
        for (const child of node.children) {
          if (child.type !== 'element' || child.tagName !== 'tbody') {
            continue
          }

          for (const tr of child.children) {
            if (tr.type !== 'element' || tr.tagName !== 'tr') {
              continue
            }

            let colIndex = 0
            for (const td of tr.children) {
              if (td.type === 'element' && td.tagName === 'td') {
                if (colIndex < headers.length) {
                  td.properties = {
                    ...td.properties,
                    dataCell: headers[colIndex]
                  }
                }

                colIndex++
              }
            }
          }
        }
      }

      return SKIP
    })
  }
}

function getTextContent(node: Element): string {
  let text = ''

  for (const child of node.children) {
    if (child.type === 'text') {
      text += child.value
    } else if (child.type === 'element') {
      text += getTextContent(child)
    }
  }

  return text
}
