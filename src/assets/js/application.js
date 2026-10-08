import { Tooltip } from 'bootstrap'
import ClipboardJS from 'clipboard'

const btnTitle = 'Copy to clipboard'

const btnHtml = [
  '<div class="bd-code-snippet">',
  '  <div class="bd-clipboard">',
  `    <button type="button" class="btn-clipboard" title="${btnTitle}">`,
  '      <svg class="bi" role="img" aria-label="Copy"><use href="#clipboard"/></svg>',
  '    </button>',
  '  </div>',
  '</div>'
].join('')

// Shiki emits `.astro-code`. Example shortcodes ship their own copy button, so
// skip anything already inside a snippet wrapper.
document.querySelectorAll('.astro-code')
  .forEach(element => {
    if (!element.closest('.bd-example-snippet, .bd-code-snippet')) {
      element.insertAdjacentHTML('beforebegin', btnHtml)
      element.previousElementSibling.append(element)
    }
  })

document.querySelectorAll('[data-bs-toggle="tooltip"]')
  .forEach(tooltip => {
    new Tooltip(tooltip)
  })

document.querySelectorAll('.content [href="#"]')
  .forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault()
    })
  })

window.addEventListener('load', () => {
  document.querySelectorAll('.btn-clipboard').forEach(btn => {
    Tooltip.getOrCreateInstance(btn, { btnTitle })
  })
})

const clipboard = new ClipboardJS('.btn-clipboard', {
  target: trigger => trigger.closest('.bd-code-snippet').querySelector('.astro-code'),
  text: trigger => trigger.closest('.bd-code-snippet').querySelector('.astro-code').textContent.trimEnd()
})

clipboard.on('success', event => {
  const iconFirstChild = event.trigger.querySelector('.bi').firstElementChild
  const tooltipBtn = Tooltip.getInstance(event.trigger)
  const originalHref = iconFirstChild.getAttribute('href')
  const originalTitle = event.trigger.title

  tooltipBtn.setContent({ '.tooltip-inner': 'Copied!' })
  event.trigger.addEventListener('hidden.bs.tooltip', () => {
    tooltipBtn.setContent({ '.tooltip-inner': btnTitle })
  }, { once: true })
  event.clearSelection()
  iconFirstChild.setAttribute('href', originalHref.replace('clipboard', 'check2'))

  setTimeout(() => {
    iconFirstChild.setAttribute('href', originalHref)
    event.trigger.title = originalTitle
  }, 2000)
})

clipboard.on('error', event => {
  const modifierKey = /mac/i.test(navigator.userAgent) ? '\u2318' : 'Ctrl-'
  const fallbackMsg = `Press ${modifierKey}C to copy`
  const tooltipBtn = Tooltip.getInstance(event.trigger)

  tooltipBtn.setContent({ '.tooltip-inner': fallbackMsg })
  event.trigger.addEventListener('hidden.bs.tooltip', () => {
    tooltipBtn.setContent({ '.tooltip-inner': btnTitle })
  }, { once: true })
})
