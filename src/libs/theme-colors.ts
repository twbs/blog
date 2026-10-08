// Mirrors the `$theme-colors` keys in Bootstrap 6's scss/_theme.scss, in the
// same order the docs list them. The docs read this from site/data/theme-colors.yml;
// the blog only needs the names, so they're inlined here.
export const themeColors = [
  'primary',
  'accent',
  'success',
  'danger',
  'warning',
  'info',
  'inverse',
  'secondary'
] as const

export type ThemeColor = (typeof themeColors)[number]

// The nine semantic keys every theme color exposes, matching the `themeTokens`
// list in the v6 Theme docs and the roles declared per color in `_theme.scss`.
export const themeTokens = [
  'base',
  'fg',
  'fg-emphasis',
  'bg',
  'bg-subtle',
  'bg-muted',
  'border',
  'focus-ring',
  'contrast'
] as const

export function themeColorTitle(name: string): string {
  return name.charAt(0).toUpperCase() + name.slice(1)
}
