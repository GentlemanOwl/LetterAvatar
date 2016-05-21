<?php
/**
 * letter-avatar.php
 * --
 * @package         LetterAvatar
 * @subpackage      Config
 * --
 * User: Florian GEOFFROY <florian.geoffroy@gmail.com>
 * Date: 20/06/15
 * Time: 22:31
 */

return [
    # Path begin from your public folder
    'path'          => 'gentlemanowl/letter-avatar/img',
    'maxSize'       => 240,
    'minSize'       => 20,
    # Refresh color at every picture generation
    'resetColor'    => true,
    # The default font to use
    'fontFile'   => 'droidsansmono',
    # Fonts can be used
    'fontFiles'  => [
        'droidsansmono' => storage_path('gentlemanowl/letter-avatar/fonts/DroidSansMono.ttf')
    ],
    'fontRatio' => 0.6,
    'shadow'    => false,
    'textColor' => null,
    # Letters ajustement to have a nice look
    'letterCorrections' => [
        'droidsansmono' => [
            'L' => 0.9,
            'F' => 0.9,
            'C' => 0.9,
            'D' => 0.95,
            'E' => 0.9,
            'G' => 0.9,
            'H' => 0.95,
            'I' => 0.9,
            'J' => 0.9,
            'K' => 0.95,
            'M' => 0.95,
            'N' => 0.95,
            'O' => 0.98,
            'P' => 0.95,
            'Q' => 0.95,
            'R' => 0.95,
            'S' => 0.95,
            'U' => 0.95,
            'Z' => 0.95,
        ]
    ]
];