---
author: mdo
date: "2021-03-29T21:30:00Z"
title: Bootstrap Icons v1.4.1
video: zO6D_BAuYCI
---

Our latest [Bootstrap Icons](https://icons.getbootstrap.com) update has arrived to fix a few bugs and improve our build tooling. Keep reading for what's new.

## Key changes

Here are the highlights from this release:

- Updated: PowerPoint icons now look more capitalized
- Fixed: `skip-forward` and `skip-backward` icons are now properly named
- Fixed: `mic` and `record` icons no longer appear filled
- Fixed: Codepoints for icon font will no longer change between versions
- Upgraded SVGO to v2.3.0, bringing some minor SVG optimizations to ~200 icons

The update to codepoints is the most important change in this release. It ensures the `content` property values for each icon doesn't change. This gives our icon font more stability between versions, allowing for easier upgrades and maintenance.

[Check out the release notes](https://github.com/twbs/icons/releases/tag/v1.4.1) for more changes in v1.4.1.

## Install

To get started, install via npm:

```sh
npm i bootstrap-icons
```

You can also [download the release from GitHub](https://github.com/twbs/icons/releases/tag/v1.4.1), or [download just the SVGs and fonts](https://github.com/twbs/icons/releases/download/v1.4.1/bootstrap-icons-1.4.1.zip) (without the rest of the repository files).

## Figma

For the Figma users out there, you can also snag the [icons from Figma](https://www.figma.com/file/YjjMzXhECL1MIb6Qlm7VJO/Bootstrap-Icons-v1.4.1).
