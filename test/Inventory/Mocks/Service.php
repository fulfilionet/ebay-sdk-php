<?php
namespace FulfilioNet\eBaySDK\Test\Inventory\Mocks;

use FulfilioNet\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \FulfilioNet\eBaySDK\Inventory\Services\InventoryBaseService
{
    protected static $operations = [
        'testOperation' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', new ComplexClass())->wait();
    }
}
