<?php
namespace FulfilioNet\eBaySDK\Test\Order\Mocks;

use FulfilioNet\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \FulfilioNet\eBaySDK\Order\Services\OrderBaseService
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
