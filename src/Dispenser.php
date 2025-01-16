<?php

namespace Serials\Communications;

use Serials\Communications\Factories\ProtocolFactory;
use Serials\Communications\Factories\ConnectorFactory;

class Dispenser
{
    protected $protocol;

    public function __construct(string $type, string $brand, array $configs)
    {
         $connector = ConnectorFactory::create($type, $configs);

         $this->protocol = ProtocolFactory::create($brand, $connector);
    }

    public function send(array $frames)
    {
        return $this->protocol->send($frames);
    }
}
