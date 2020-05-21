<?php
namespace FulfilioNet\eBaySDK\Test\Mocks;

class RestService extends \FulfilioNet\eBaySDK\Test\Mocks\BaseRestService
{
    protected static $operations =  [
        'foo' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }
}
