/*!
 * JavaScript for the Bootstrap Blog table of contents (https://blog.getbootstrap.com/)
 * Copyright 2024-2026 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 * For details, see https://creativecommons.org/licenses/by/3.0/.
 */

// Ported from the v6 docs (`site/src/assets/partials/toc*.js`), where the same
// nav is a bottom drawer on narrow viewports and a sticky rail beside the copy
// on wide ones. Highlighting is ScrollSpy's job, configured by the data
// attributes on `<body>`.

// v6's JavaScript is ESM-only, so there's no `window.bootstrap` to reuse: the
// plugins have to be imported for their data APIs to be wired up at all.
import { Drawer, ScrollSpy } from 'bootstrap'

const SIDEBAR_SELECTOR = '#bdTocSidebar'
// Length of the fade at each edge of the scrolling rail, in pixels.
const FADE = 24

// Follow a link and the drawer has served its purpose.
const dismissOnNavigate = (sidebar) => {
  sidebar.addEventListener('click', (event) => {
    if (event.target.closest('.nav-link')) {
      Drawer.getInstance(sidebar)?.hide()
    }
  })
}

// Fade whichever edge of the rail has content scrolled past it, so a clipped
// list reads as clipped rather than as one that simply ends there.
const trackOverflow = (sidebar) => {
  const update = () => {
    const { scrollTop, scrollHeight, clientHeight } = sidebar
    const maxScroll = scrollHeight - clientHeight

    // No overflow → no fade at either edge.
    const top = maxScroll > 1 ? Math.min(scrollTop, FADE) : 0
    const bottom = maxScroll > 1 ? Math.min(maxScroll - scrollTop, FADE) : 0

    sidebar.style.setProperty('--bd-toc-fade-top', `${top}px`)
    sidebar.style.setProperty('--bd-toc-fade-bottom', `${bottom}px`)
  }

  return update
}

// The rail is as tall as the viewport, so it would slide over the footer at the
// end of a post. Give back whatever the footer has scrolled into view.
const trackFooter = (toc, footer) => {
  const update = () => {
    // Negative while the footer is still below the fold, hence the clamp.
    const overlap = window.innerHeight - footer.getBoundingClientRect().top

    toc.style.setProperty('--bd-toc-footer-overlap', `${Math.max(0, overlap)}px`)
  }

  return update
}

// One rAF-throttled pass for every listener, since they all read layout.
const onNextFrame = (update) => {
  let ticking = false

  return () => {
    if (!ticking) {
      ticking = true
      window.requestAnimationFrame(() => {
        ticking = false
        update()
      })
    }
  }
}

export default function initToc() {
  const sidebar = document.querySelector(SIDEBAR_SELECTOR)
  const toc = sidebar?.closest('.bd-toc')
  const footer = document.querySelector('.bd-footer')

  if (!sidebar || !toc || !footer) {
    return
  }

  dismissOnNavigate(sidebar)
  ScrollSpy.getOrCreateInstance(document.body)

  const fade = trackOverflow(sidebar)
  const overlap = trackFooter(toc, footer)
  const update = onNextFrame(() => {
    fade()
    overlap()
  })

  fade()
  overlap()

  sidebar.addEventListener('scroll', update, { passive: true })
  window.addEventListener('scroll', update, { passive: true })
  window.addEventListener('resize', update, { passive: true })
}
