---
author: mdo
date: "2018-07-24T00:00:00Z"
title: Bootstrap 4.1.3
video: LqB9lhHqmsE
---

Hot on the heels of v4.1.2, we're shipping another patch release to address an issue with our browserslist config, fix some CSS bugs, make JavaScript plugins UMD ready, and improve form control rendering. Up next will be v4.2, our second minor release where we add some new features.

But first, here are the highlights for v4.1.3. Pay attention to the change to `.form-control`s which adds a new fixed `height`.

- **Fixed:** Moved the browserslist config from our `package.json` to a separate file to avoid unintended inherited browser settings across npm projects.
- **Fixed:** Removed the `:not(:root)` selector from our `svg` Reboot styles, resolving an issue that caused all inline SVGs ignore `vertical-align` styles via single class due to higher specificity.
- **Fixed:** Buttons in custom file inputs are once again clickable when focused.
- **Improved:** Bootstrap's plugins can now be imported separately in any contexts because they are now UMD ready.
- **Improved:** `.form-control`s now have a fixed `height` to compensate for differences in computed height across different `type`s. This also fixes some IE alignment issues.
- **Improved:** Added `Noto Color Emoji` to our system font stack for better rendering in Linux OSes.

Checkout the full [v4.1.3 ship list](https://github.com/twbs/bootstrap/issues/26867) and [GitHub project](https://github.com/twbs/bootstrap/projects/15) for the full details. Up next is [v4.2](https://github.com/twbs/bootstrap/projects/6), so stay tuned for some awesome new features like toasts, dismissible badges, negative margins (responsive grid gutters!), spinners, and more!

[Head to the v4.1.x docs]({{< param "main" >}}/docs/4.1/) to see the latest in action. The full release has been published to npm and will soon appear on the Bootstrap CDN and Rubygems.
