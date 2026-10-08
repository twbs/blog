---
author: mdo
date: "2026-04-15T00:00:00Z"
title: Bootstrap VS Code Theme
category: Community
major: true
keywords:
  - vscode
  - theme
---

We've published a VS Code theme powered by Bootstrap's color palette. It works with VS Code, Cursor, and [Shiki](https://shiki.style) projects. [Check it out on GitHub](https://github.com/twbs/bootstrap-vscode-theme) or install it from the [VS Code Marketplace](https://marketplace.visualstudio.com/items?itemName=bootstrap.bootstrap-vscode-theme).

## Origins in Pierre

The theme is a fork of [Pierre's VS Code Theme](https://github.com/pierrecomputer/theme), which itself was built on top of [GitHub's VS Code Theme](https://github.com/primer/github-vscode-theme). Pierre added more granular language token support and Display P3 color support. We adapted it to use Bootstrap's own OKLCH-based color palette instead of Pierre's.

## How the palette works

Bootstrap's color palette is built in OKLCH color space, which gives us perceptually uniform lightness, consistent chroma across hues, and better contrast ratios for accessibility. The palette includes 16 hues—blue, indigo, violet, purple, pink, red, orange, amber, yellow, lime, green, teal, cyan, brown, gray, and pewter—each with 13 variants (from 025 to 975) created via LAB color mixing to maintain perceptual consistency.

The palette is defined in [`src/palette.ts`](https://github.com/twbs/bootstrap-vscode-theme/blob/main/src/palette.ts) and mapped to semantic "roles" (backgrounds, foregrounds, borders, accents, states, syntax highlighting, and ANSI terminal colors) that the theme consumes. For the standard (non-vibrant) themes, the source OKLCH colors are converted to hex so they work everywhere VS Code expects hex/RGB values. The Vibrant variants keep the source OKLCH colors and convert them to Display P3 with enhanced saturation (15-30%) and luminance (5%), pushing into the wider P3 gamut that sRGB can't reach.

## How theme generation works

A [`makeTheme()`](https://github.com/twbs/bootstrap-vscode-theme/blob/main/src/theme.ts) function takes those semantic roles and maps them onto every VS Code token and UI color. The [build script](https://github.com/twbs/bootstrap-vscode-theme/blob/main/src/build.ts) generates four JSON theme files—Bootstrap Light, Bootstrap Dark, and Vibrant variants of each.

## Four themes included

- **Bootstrap Light** — clean light theme using hex colors
- **Bootstrap Dark** — matching dark theme using hex colors
- **Bootstrap Light Vibrant** — Display P3 color space with enhanced saturation
- **Bootstrap Dark Vibrant** — Display P3 color space with enhanced saturation

Note that the Vibrant themes don't yet work in VS Code as it doesn't support color formats other than hex or RGB. You can, however, use them with [Shiki](https://shiki.style) projects or other tools that support Display P3 colors.

## Install

Install from the [VS Code Marketplace](https://marketplace.visualstudio.com/items?itemName=bootstrap.bootstrap-vscode-theme), or clone the repo and load the extension manually. Once installed, select a theme via `Code > Preferences > Color Theme` (`⌘k ⌘t`).

To override the theme in your personal config, follow the guide in the [color theme documentation](https://code.visualstudio.com/api/extension-guides/color-theme).

## Contribute

1. Clone and open the [repo](https://github.com/twbs/bootstrap-vscode-theme) in VS Code
2. Run `npm install`
3. Press `F5` to open a new window with the extension loaded
4. Pick a "Bootstrap…" theme to test
5. Edit [`src/palette.ts`](https://github.com/twbs/bootstrap-vscode-theme/blob/main/src/palette.ts) or [`src/theme.ts`](https://github.com/twbs/bootstrap-vscode-theme/blob/main/src/theme.ts)
6. Run `npm run build` (or `npm start` for auto-rebuilding)
7. Run `npm test` to validate
8. Open a PR

Feedback, issues, and ideas are welcome on [GitHub](https://github.com/twbs/bootstrap-vscode-theme/issues).
