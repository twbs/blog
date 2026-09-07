import { codeToHtml, type ShikiTransformer } from 'shiki'
import bootstrapLight from 'bootstrap-vscode-theme/themes/bootstrap-light.json'
import bootstrapDark from 'bootstrap-vscode-theme/themes/bootstrap-dark.json'

// Astro's markdown pipeline emits `.astro-code` on the `pre`, but Shiki called
// directly emits `.shiki`. Rename it so snippets rendered by `Code.astro` pick
// up the same styles as fenced code blocks in a post.
const astroCodeClass: ShikiTransformer = {
  name: 'astro-code-class',
  pre(node) {
    const { class: className } = node.properties

    if (typeof className === 'string') {
      node.properties.class = className.replaceAll('shiki', 'astro-code')
    }
  }
}

// Mirrors the `shikiConfig` in astro.config.ts so a snippet highlighted here is
// indistinguishable from one highlighted by the markdown pipeline.
export async function highlightCode(
  code: string,
  lang: string,
  transformers: ShikiTransformer[] = []
): Promise<string> {
  return codeToHtml(code, {
    lang,
    themes: {
      light: { ...bootstrapLight, name: '', type: 'light' },
      dark: { ...bootstrapDark, name: '', type: 'dark' }
    },
    defaultColor: 'light-dark()',
    transformers: [...transformers, astroCodeClass]
  })
}
