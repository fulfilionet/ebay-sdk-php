<?php
namespace FulfilioNet\eBaySDK\Test\Feed\Mocks;

use FulfilioNet\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \FulfilioNet\eBaySDK\Feed\Services\FeedBaseService
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
