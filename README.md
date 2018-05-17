# Element: Photoswipe gallery
An ElementalList of images for a photoswipe gallery. 

Photoswipe thumbnails are configurable from 2-4 columns. 

[PhotoSwipe](https://github.com/dimsemenov/photoswipe) needs to be icorporated into your front-end build process.

This can be achieved by including the following in your `package.json` ...

    "dependencies": {
      "photoswipe": "^4.1.2"
    }

and some files will need to be inluded ...

    'node_modules/photoswipe/dist/photoswipe.js'
    'node_modules/photoswipe/dist/photoswipe-ui-default.js'
    'node_modules/photoswipe/dist/photoswipe.css'
    'node_modules/photoswipe/dist/default-skin/default-skin.css'
    'node_modules/photoswipe/dist/default-skin/default-skin.png'
    'node_modules/photoswipe/dist/default-skin/default-skin.svg'
    'node_modules/photoswipe/dist/default-skin/preloader.gif'

#### Styling
Check the "examples" folder for padding/layout starter styling.

The example styling progressivley increases columns from 1 to the maximum selected in the CMS through standard breakpoints.
