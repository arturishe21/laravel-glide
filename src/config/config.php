<?php

return [
    /*
     * Glide will search for images in this directory
     *
     */
    'source' => [
        'path' => public_path(),
    ],

    'cache' => [
        'path' => public_path() .'/glide',
    ],

    /*
     * URLs to generated images will start with this string
     *
     */
    'baseURL' => 'img',

    /*
     * The maximum allowed total image size in pixels
     */
    'maxSize' => 2000 * 2000
];
