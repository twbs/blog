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

export function themeColorTitle(name: string): string {
  return name.charAt(0).toUpperCase() + name.slice(1)
}
