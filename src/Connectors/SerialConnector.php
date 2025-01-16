<?php

namespace Serials\Communications\Connectors;

use Serials\Communications\Serials\Serial;
use Serials\Communications\Contracts\ConnectorInterface;

class SerialConnector implements ConnectorInterface
{
    protected $serial;
    protected array $configs;
    public function __construct(array $configs)
    {
        $this->configs = $configs;
        $this->serial = new Serial;
    }

    public function read(int $count = 0)
    {
        return $this->serial->readPort($count);
    }

    public function write(string $message, float $waitForReply = 0.1)
    {
        $this->serial->sendMessage($message, $waitForReply);
    }

    public function close()
    {
        $this->serial->deviceClose();
    }

    private function configure()
    {
        $this->serial->deviceSet($this->configs['port']);
        $this->serial->confBaudRate($this->configs['rate']);
        $this->serial->confParity($this->configs['parity'] ?? 'none');
        $this->serial->confCharacterLength($this->configs['length'] ?? 8);
        $this->serial->confStopBits($this->configs['stop'] ?? 1);
        $this->serial->confFlowControl($this->configs['flow'] ?? 'none');
        $this->serial->deviceOpen();   
    }
}