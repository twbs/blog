import fs from 'node:fs'
import path from 'node:path'
import { load as yamlLoad } from 'js-yaml'
import { z } from 'zod'

const configSchema = z.object({
  title: z.string(),
  baseURL: z.string(),
  description: z.string(),
  author: z.string(),
  docs_version: z.string(),
  main: z.string(),
  github_org: z.string(),
  repo: z.string(),
  x: z.string(),
  blog: z.string(),
  icons: z.string(),
  opencollective: z.string(),
  swag: z.string(),
  analytics: z.object({
    fathom_site: z.string()
  })
})

export type Config = z.infer<typeof configSchema>

let config: Config

export function getConfig(): Config {
  if (config) {
    return config
  }

  const configFile = path.join(process.cwd(), 'config.yml')
  const rawConfig = yamlLoad(fs.readFileSync(configFile, 'utf8'))
  const result = configSchema.safeParse(rawConfig)

  if (!result.success) {
    console.error('Invalid config.yml:')
    for (const issue of result.error.issues) {
      console.error(`  ${issue.path.join('.')}: ${issue.message}`)
    }

    throw new Error('Invalid config.yml')
  }

  config = result.data
  return config
}
