<?php

return [
    'type' => env('TYPE', 'serial'),
    'brand' => env('BRAND', 'tatsuno'),
    'configs' => [
        'port' => env('PORT', '/dev/ttyUSB0'),
        'rate' => env('RATE', 9600),
        'parity' => env('PARITY', 'none'),
        'length' => env('LENGTH', 8),
        'stop' => env('STOP', 1),
        'flow' => env('flow', 'none'),
    ],
];