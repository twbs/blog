import fs from 'node:fs'
import path from 'node:path'
import { defineConfig } from 'astro/config'
import type { AstroIntegration } from 'astro'
import sitemap from '@astrojs/sitemap'
import { unified } from '@astrojs/markdown-remark'
import bootstrapLight from 'bootstrap-vscode-theme/themes/bootstrap-light.json'
import bootstrapDark from 'bootstrap-vscode-theme/themes/bootstrap-dark.json'
import { transformerNotationDiff, transformerNotationHighlight } from '@shikijs/transformers'

import { getAliasRedirects } from './src/libs/aliases'
import { getConfig } from './src/libs/config'
import rehypeFigures from './src/libs/rehype-figures'

// Serve the Pagefind search index in `astro dev` by copying the index from the
// last `dist/` build into `public/pagefind/`. It's a no-op until `npm run build`
// has generated one, in which case dev simply returns no search results.
function pagefindDev(): AstroIntegration {
  return {
    name: 'pagefind-dev',
    hooks: {
      'astro:config:setup': ({ command }) => {
        if (command !== 'dev') {
          return
        }

        const source = path.join(process.cwd(), 'dist', 'pagefind')
        const destination = path.join(process.cwd(), 'public', 'pagefind')

        fs.rmSync(destination, { force: true, recursive: true })

        if (fs.existsSync(source)) {
          fs.cpSync(source, destination, { recursive: true })
        }
      }
    }
  }
}

const isDev = process.env.NODE_ENV === 'development'

const site = isDev
  ? 'http://localhost:4000'
  : process.env.DEPLOY_PRIME_URL !== undefined
    ? process.env.DEPLOY_PRIME_URL
    : getConfig().baseURL

// https://astro.build/config
export default defineConfig({
  // Paginated index pages are noindex, so keep them out of the sitemap too.
  integrations: [sitemap({ filter: (page) => !/\/page\/\d+\/$/.test(page) }), pagefindDev()],
  markdown: {
    processor: unified({ smartypants: false, rehypePlugins: [rehypeFigures] }),
    syntaxHighlight: 'shiki',
    shikiConfig: {
      themes: {
        light: { ...bootstrapLight, name: '', type: 'light' },
        dark: { ...bootstrapDark, name: '', type: 'dark' }
      },
      defaultColor: 'light-dark()',
      transformers: [
        transformerNotationDiff(),
        transformerNotationHighlight(),
        {
          name: 'add-language-attribute',
          pre(node) {
            const lang = this.options.lang
            if (lang) {
              node.properties['dataLanguage'] = lang
            }
          }
        }
      ]
    }
  },
  devToolbar: {
    enabled: false
  },
  redirects: getAliasRedirects(),
  vite: {
    css: {
      preprocessorOptions: {
        scss: {
          loadPaths: ['node_modules']
        }
      }
    }
  },
  server: {
    port: 4000
  },
  site
})
