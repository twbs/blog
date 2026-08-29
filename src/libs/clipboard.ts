import ClipboardJS from 'clipboard'
import { Tooltip } from 'bootstrap'

const btnTitle = 'Copy'
const successIcon = '#check2'

/**
 * Wires up copy buttons for example snippets. `textFn` resolves the text to copy
 * from the button that was clicked.
 *
 * Distinct from the `.btn-clipboard` buttons in assets/js/application.js, which
 * are injected around standalone code blocks; these ship in the toolbar markup
 * that `Code.astro` renders.
 */
export function initCopyButtons(selector: string, textFn: (trigger: Element) => string) {
  const buttons = document.querySelectorAll(selector)

  if (buttons.length === 0) {
    return
  }

  buttons.forEach(button => {
    Tooltip.getOrCreateInstance(button, { title: btnTitle })
  })

  const clipboard = new ClipboardJS(selector, { text: textFn })

  clipboard.on('success', event => {
    const icon = event.trigger.querySelector('.bi use')
    const tooltip = Tooltip.getInstance(event.trigger)
    const originalIcon = icon?.getAttribute('href')

    // Already showing the confirmation, so leave it be.
    if (originalIcon === successIcon) {
      return
    }

    tooltip?.setContent({ '.tooltip-inner': 'Copied!' })
    event.trigger.addEventListener(
      'hidden.bs.tooltip',
      () => {
        tooltip?.setContent({ '.tooltip-inner': btnTitle })
      },
      { once: true }
    )
    event.clearSelection()

    icon?.setAttribute('href', successIcon)

    setTimeout(() => {
      if (icon && originalIcon) {
        icon.setAttribute('href', originalIcon)
      }
    }, 2000)
  })

  clipboard.on('error', event => {
    const modifierKey = /mac/i.test(navigator.userAgent) ? '\u2318' : 'Ctrl-'
    const tooltip = Tooltip.getInstance(event.trigger)

    tooltip?.setContent({ '.tooltip-inner': `Press ${modifierKey}C to copy` })
    event.trigger.addEventListener(
      'hidden.bs.tooltip',
      () => {
        tooltip?.setContent({ '.tooltip-inner': btnTitle })
      },
      { once: true }
    )
  })
}
