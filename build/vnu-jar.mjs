#!/usr/bin/env node

/*!
 * Script to run vnu-jar if Java is available.
 * Copyright 2017-2023 The Bootstrap Authors
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */

import { execFile, spawn } from 'node:child_process'
import vnu from 'vnu-jar'

execFile('java', ['-version'], (error, stdout, stderr) => {
  if (error) {
    console.error('Skipping vnu-jar test; Java is probably missing.')
    console.error(error)
    return
  }

  console.log('Running vnu-jar validation...')

  const is32bitJava = !/64-Bit/.test(stderr)

  // vnu-jar accepts multiple ignores joined with a `|`.
  // Also note that the ignores are string regular expressions.
  const ignores = [
    // TODO report the issue upstream in Hugo
    'Duplicate ID.*',
    'The first occurrence of ID.*',
    'Trailing slash on void elements has no effect and interacts badly with unquoted attribute values.*'
  ].join('|')

  const args = [
    '-jar',
    `"${vnu}"`,
    '--asciiquotes',
    '--skip-non-html',
    '--Werror',
    `--filterpattern "${ignores}"`,
    '_site/'
  ]

  // For the 32-bit Java we need to pass `-Xss512k`
  if (is32bitJava) {
    args.splice(0, 0, '-Xss512k')
  }

  console.log(`command used: java ${args.join(' ')}`)

  return spawn('java', args, {
    shell: true,
    stdio: 'inherit'
  })
    .on('exit', process.exit)
})
