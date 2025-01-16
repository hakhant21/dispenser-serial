<?php

use Serials\Communications\Connectors\SerialConnector;
use Serials\Communications\Factories\ConnectorFactory;

it('can create a new connector with type and configs', function(){
    $connector = ConnectorFactory::create('serial', [
        'port' => '/dev/ttyUSB0',
        'rate' => 9600,
        'parity' => 'none',
        'length' => 8,
        'stop' => 1,
        'flow' => 'none',
    ]);

    expect($connector)->toBeInstanceOf(SerialConnector::class);
});