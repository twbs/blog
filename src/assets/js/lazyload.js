import LazyLoad from 'vanilla-lazyload/dist/esm/lazyload.js'

const lazyLoadOptions = {
  elements_selector: '.lazy',
  threshold: 150
}

new LazyLoad(lazyLoadOptions)
