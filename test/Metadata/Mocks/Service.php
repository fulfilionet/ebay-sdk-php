<?php
namespace FulfilioNet\eBaySDK\Test\Metadata\Mocks;

use FulfilioNet\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \FulfilioNet\eBaySDK\Metadata\Services\MetadataBaseService
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
