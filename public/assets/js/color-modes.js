/*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2026 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 */

(() => {
  'use strict'

  const storageKey = 'theme'
  const cookieMaxAge = 60 * 60 * 24 * 365

  // The docs, blog, and icons sites sit on separate subdomains, so they can't
  // read each other's localStorage. A cookie on the shared parent domain is
  // visible to all of them and still reads synchronously, so the theme resolves
  // before the first paint.
  const cookieAttributes = () => {
    const { hostname, protocol } = window.location
    const isSharedDomain = hostname === 'getbootstrap.com' || hostname.endsWith('.getbootstrap.com')

    return [
      'path=/',
      `max-age=${cookieMaxAge}`,
      'samesite=lax',
      isSharedDomain ? 'domain=.getbootstrap.com' : '',
      protocol === 'https:' ? 'secure' : ''
    ].filter(Boolean).join('; ')
  }

  const getCookieTheme = () => {
    const entry = document.cookie.split('; ').find(row => row.startsWith(`${storageKey}=`))

    return entry ? decodeURIComponent(entry.slice(storageKey.length + 1)) : null
  }

  // Preference set before the cookie handoff, readable on this origin only.
  const getLegacyTheme = () => {
    try {
      return localStorage.getItem(storageKey)
    } catch {
      return null
    }
  }

  const getStoredTheme = () => getCookieTheme() || getLegacyTheme()
  const setStoredTheme = theme => {
    document.cookie = `${storageKey}=${theme}; ${cookieAttributes()}`
  }

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    return 'auto'
  }

  const resolveTheme = theme => {
    if (theme === 'auto') {
      return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    return theme
  }

  const setTheme = theme => {
    const resolved = resolveTheme(theme)

    if (document.documentElement.getAttribute('data-bs-theme') !== resolved) {
      document.documentElement.setAttribute('data-bs-theme', resolved)
    }
  }

  if (!getCookieTheme()) {
    const legacyTheme = getLegacyTheme()
    if (legacyTheme) {
      setStoredTheme(legacyTheme)
    }
  }

  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    themeSwitcher.setAttribute('aria-label', `Toggle theme (${btnToActive.dataset.bsThemeValue})`)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme()
    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          setStoredTheme(theme)

          requestAnimationFrame(() => {
            setTheme(theme)
            showActiveTheme(theme)
          })
        })
      })
  })
})()
