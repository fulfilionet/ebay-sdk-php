<?php
namespace FulfilioNet\eBaySDK\Test\Trading\Mocks;

use FulfilioNet\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \FulfilioNet\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
