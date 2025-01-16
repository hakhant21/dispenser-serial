<?php

namespace Serials\Communications\Factories;

use Serials\Communications\Contracts\ConnectorInterface;

class ConnectorFactory
{
    public static function create(string $type, array $configs): ConnectorInterface 
    {
        $connector = ucfirst($type);

        $className = "Serials\\Communications\\Connectors\\{$connector}Connector";

        if (!class_exists($className)) {
            throw new \Exception("{$connector} connector is not supported.");
        }
        
        return new $className($configs);
    }
}