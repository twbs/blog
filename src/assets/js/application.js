/* eslint-env browser */

/* global ClipboardJS:false */

import ClipboardJS from 'clipboard';

const btnTitle = 'Copy to clipboard'

const btnHtml = [
'<div class="bd-clipboard">',
  '<button type="button" class="btn-clipboard" title="' + btnTitle + '">',
    '<svg class="bi" role="img" aria-label="Copy"><use xlink:href="#clipboard"/></svg>',
  '</button>',
'</div>'].join('');

document.querySelectorAll('div.highlight')
  .forEach((element) => {
    element.insertAdjacentHTML('beforebegin', btnHtml)
  })

window.addEventListener('load', () => {
  document.querySelectorAll('.btn-clipboard').forEach(btn => {
    bootstrap.Tooltip.getOrCreateInstance(btn, { btnTitle })
  })
})

const clipboard = new ClipboardJS('.btn-clipboard', {
  target: trigger => trigger.parentNode.nextElementSibling,
  text: trigger => trigger.parentNode.nextElementSibling.textContent.trimEnd()
})

clipboard.on('success', (event) => {
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
