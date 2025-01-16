<?php

namespace Serials\Communications\Factories;

use Serials\Communications\Contracts\ProtocolInterface;
use Serials\Communications\Contracts\ConnectorInterface;

class ProtocolFactory
{
    public static function create(string $brand, ConnectorInterface $connector): ProtocolInterface
    {
        $protocol = ucfirst($brand);

        $classname = "Serials\\Communications\\Protocols\\{$protocol}Protocol";

        if (!class_exists($classname)) {
            throw new \Exception("{$protocol} protocol is not supported.");
        }
        
        return new $classname($connector);
    }
}