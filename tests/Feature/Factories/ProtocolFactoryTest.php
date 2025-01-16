<?php

use Serials\Communications\Factories\ProtocolFactory;
use Serials\Communications\Protocols\TatsunoProtocol;
use Serials\Communications\Factories\ConnectorFactory;

it('can create a new protocol with a brand and connector', function(){
    $connector = ConnectorFactory::create('serial', [
        'port' => '/dev/ttyUSB0',
        'rate' => 9600,
        'parity' => 'none',
        'length' => 8,
        'stop' => 1,
        'flow' => 'none',
    ]);

    $protocol = ProtocolFactory::create('tatsuno', $connector);

    expect($protocol)->toBeInstanceOf(TatsunoProtocol::class);
});