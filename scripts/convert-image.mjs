import { access } from 'node:fs/promises'
import path from 'node:path'
import process from 'node:process'
import sharp from 'sharp'

const [input] = process.argv.slice(2)

if (!input || path.extname(input).toLowerCase() !== '.png') {
  console.error('Usage: npm run image:webp -- path/to/image.png')
  process.exit(1)
}

const parsed = path.parse(input)

if (parsed.name.endsWith('@2x')) {
  console.error('Pass the 1x PNG; its @2x sibling is discovered automatically.')
  process.exit(1)
}

const input2x = path.join(parsed.dir, `${parsed.name}@2x${parsed.ext}`)

try {
  await access(input2x)
} catch {
  console.error(`Missing 2x PNG: ${input2x}`)
  process.exit(1)
}

const [metadata1x, metadata2x] = await Promise.all([
  sharp(input).metadata(),
  sharp(input2x).metadata()
])

if (
  !metadata1x.width ||
  !metadata1x.height ||
  metadata2x.width !== metadata1x.width * 2 ||
  metadata2x.height !== metadata1x.height * 2
) {
  console.error(
    `Expected ${input2x} to be exactly ${metadata1x.width * 2}x${metadata1x.height * 2}px.`
  )
  process.exit(1)
}

const formats = [
  {
    extension: '.webp',
    options: {
      effort: 6,
      nearLossless: true,
      quality: 80
    }
  },
  {
    extension: '.avif',
    options: {
      chromaSubsampling: '4:4:4',
      effort: 6,
      quality: 70
    }
  }
]

for (const source of [input, input2x]) {
  for (const { extension, options } of formats) {
    const output = source.replace(/\.png$/i, extension)
    const info = await sharp(source)
      .toFormat(extension.slice(1), options)
      .toFile(output)

    console.log(`${output} (${info.width}x${info.height}px, ${info.size} bytes)`)
  }
}
