---
author: mdo
date: "2026-04-15T00:00:00Z"
title: Introducing postcss-prefix-custom-properties
category: Community
major: true
keywords:
  - postcss
  - css
  - open source
---

Sharing a small PostCSS plugin we built: [postcss-prefix-custom-properties](https://www.npmjs.com/package/postcss-prefix-custom-properties). This was vibe coded to solve a specific problem in our own workflow and we wanted to put it out there in case others find it useful. Feedback is welcome.

## The problem

In Bootstrap v5, the `--bs-` prefix is baked into the Sass source via `#{$prefix}` interpolation on every custom property declaration and `var()` reference. That means the source is littered with syntax like `--#{$prefix}primary` and `var(--#{$prefix}body-color)` instead of clean, readable CSS. It makes the source harder to read and harder to maintain. We wanted to move the prefix out of the source entirely and handle it as a build step instead.

## You don't need it

Important to note: you can compile Bootstrap without this plugin entirely and just get unprefixed custom properties (`--primary`, `--body-color`, etc.). The plugin is completely optional. But if you want namespaced `--bs-` variables in your output—or any other prefix—this handles it cleanly at build time without polluting the source.

## What it does

The plugin takes a `prefix` string (e.g., `'bs-'`) and rewrites all CSS custom property declarations and `var()` references. It also handles `@property` rules. An `ignore` option (strings or regex) lets you skip properties that should be left alone.

```css
/* Input */
:root {
  --brand-color: #ff4757;
  --fg: #333;
  --bg: #ccc;

  color: light-dark(var(--fg), var(--bg));
}

.button {
  color: var(--brand-color);
}
```

```css
/* Output (prefix: 'bs-') */
:root {
  --bs-brand-color: #ff4757;
  --bs-fg: #333;
  --bs-bg: #ccc;

  color: light-dark(var(--bs-fg), var(--bs-bg));
}

.button {
  color: var(--bs-brand-color);
}
```

## Usage

Add the plugin to your PostCSS configuration:

```js
// postcss.config.cjs
module.exports = {
  plugins: [
    require('postcss-prefix-custom-properties')({
      prefix: 'bs-',
      ignore: [/^--bs-/, /^--shiki-/]
    }),
    require('autoprefixer')
  ]
}
```

It's a standard PostCSS plugin—works with any PostCSS setup (Vite, webpack, PostCSS CLI, etc.).

## Vibe coded

To be upfront, this was vibe coded to scratch our own itch. It's small, focused, and does one thing. We're sharing it in case it's useful to others who namespace their CSS custom properties. Feedback, issues, and PRs are all welcome.

## Install

```sh
npm i -D postcss-prefix-custom-properties
```

[View the source on GitHub.](https://github.com/mdo/postcss-prefix-custom-properties)
