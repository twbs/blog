/* global bootstrap:false */

import ClipboardJS from 'clipboard'

const btnTitle = 'Copy to clipboard'

const btnHtml = [
  '<div class="bd-code-snippet">',
  '  <div class="bd-clipboard">',
  `    <button type="button" class="btn-clipboard" title="${btnTitle}">`,
  '      <svg class="bi" role="img" aria-label="Copy"><use xlink:href="#clipboard"/></svg>',
  '    </button>',
  '  </div>',
  '</div>'
].join('')

document.querySelectorAll('.highlight')
  .forEach(element => {
    if (!element.closest('.bd-example-snippet')) { // Ignore examples made be shortcode
      element.insertAdjacentHTML('beforebegin', btnHtml)
      element.previousElementSibling.append(element)
    }
  })

document.querySelectorAll('[data-bs-toggle="tooltip"]')
  .forEach(tooltip => {
    new bootstrap.Tooltip(tooltip)
  })

window.addEventListener('load', () => {
  document.querySelectorAll('.btn-clipboard').forEach(btn => {
    bootstrap.Tooltip.getOrCreateInstance(btn, { btnTitle })
  })
})

const clipboard = new ClipboardJS('.btn-clipboard', {
  target: trigger => trigger.closest('.bd-code-snippet').querySelector('.highlight'),
  text: trigger => trigger.closest('.bd-code-snippet').querySelector('.highlight').textContent.trimEnd()
})

clipboard.on('success', event => {
  const iconFirstChild = event.trigger.querySelector('.bi').firstElementChild
  const tooltipBtn = bootstrap.Tooltip.getInstance(event.trigger)
  const namespace = 'http://www.w3.org/1999/xlink'
  const originalXhref = iconFirstChild.getAttributeNS(namespace, 'href')
  const originalTitle = event.trigger.title

  tooltipBtn.setContent({ '.tooltip-inner': 'Copied!' })
  event.trigger.addEventListener('hidden.bs.tooltip', () => {
    tooltipBtn.setContent({ '.tooltip-inner': btnTitle })
  }, { once: true })
  event.clearSelection()
  iconFirstChild.setAttributeNS(namespace, 'href', originalXhref.replace('clipboard', 'check2'))

  setTimeout(() => {
    iconFirstChild.setAttributeNS(namespace, 'href', originalXhref)
    event.trigger.title = originalTitle
  }, 2000)
})

clipboard.on('error', event => {
  const modifierKey = /mac/i.test(navigator.userAgent) ? '\u2318' : 'Ctrl-'
  const fallbackMsg = `Press ${modifierKey}C to copy`
  const tooltipBtn = bootstrap.Tooltip.getInstance(event.trigger)

  tooltipBtn.setContent({ '.tooltip-inner': fallbackMsg })
  event.trigger.addEventListener('hidden.bs.tooltip', () => {
    tooltipBtn.setContent({ '.tooltip-inner': btnTitle })
  }, { once: true })
})
