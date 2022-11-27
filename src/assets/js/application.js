/* eslint-env browser */

/* global ClipboardJS:false */

import ClipboardJS from 'clipboard';

const btnHtml = [
'<div class="bd-clipboard">',
  '<button type="button" class="btn-clipboard" title="Copy to clipboard">',
    '<svg class="bi" width="1em" height="1em" fill="currentColor">',
      '<use xlink:href="#clipboard"/>',
    '</svg>',
  '</button>',
'</div>'].join('');

document.querySelectorAll('div.highlight')
  .forEach((element) => {
    element.insertAdjacentHTML('beforebegin', btnHtml)
  })

const clipboard = new ClipboardJS('.btn-clipboard', {
  target: trigger => trigger.parentNode.nextElementSibling,
  text: trigger => trigger.parentNode.nextElementSibling.textContent.trimEnd()
})

clipboard.on('success', (event) => {
  const iconFirstChild = event.trigger.querySelector('.bi').firstElementChild
  const namespace = 'http://www.w3.org/1999/xlink'
  const originalXhref = iconFirstChild.getAttributeNS(namespace, 'href')
  const originalTitle = event.trigger.title

  event.clearSelection()
  iconFirstChild.setAttributeNS(namespace, 'href', originalXhref.replace('clipboard', 'check2'))
  event.trigger.title = 'Copied!'

  setTimeout(() => {
    iconFirstChild.setAttributeNS(namespace, 'href', originalXhref)
    event.trigger.title = originalTitle
  }, 2000)
})

/*clipboard.on('error', () => {
  const modifierKey = /mac/i.test(navigator.userAgent) ? '\u2318' : 'Ctrl-'
  const fallbackMsg = 'Press ' + modifierKey + 'C to copy'
  const errorElement = document.getElementById('copy-error-callout')

  if (!errorElement) {
    return
  }

  errorElement.classList.remove('d-none')
  errorElement.insertAdjacentHTML('afterbegin', fallbackMsg)
})*/
