import js from '@eslint/js'
import globals from 'globals'

/** @type {import('eslint').Linter.FlatConfig[]} */
export default [
  // global ignores
  {
    ignores: [
      '.astro/**',
      '.cache/**',
      '.netlify/**',
      'dist/**',
      'node_modules/**',
      // Vendored from Bootstrap's dist, linted upstream.
      'public/assets/js/**'
    ],
  },
  {
    languageOptions: {
      ecmaVersion: 2022,
      sourceType: 'module',
      globals: {
        ...globals.browser
      }
    },
    linterOptions: {
      reportUnusedDisableDirectives: 'error'
    }
  },
  js.configs.recommended,
  {
    files: [
      '**/*.js',
      '**/*.mjs'
    ],
    rules: {
      'no-return-await': 'error',
      'object-curly-spacing': [
        'error',
        'always'
      ],
      'prefer-template': 'error',
      semi: [
        'error',
        'never'
      ],
      strict: 'error'
    }
  },
  {
    files: [
      'scripts/**'
    ],
    languageOptions: {
      globals: {
        ...globals.nodeBuiltin
      }
    }
  },
  {
    files: [
      '**/*.cjs'
    ],
    languageOptions: {
      sourceType: 'commonjs',
      globals: {
        ...globals.node
      }
    },
    rules: {
      strict: 'off'
    }
  }
]
