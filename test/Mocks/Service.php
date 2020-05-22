<?php
namespace FulfilioNet\eBaySDK\Test\Mocks;

class Service extends \FulfilioNet\eBaySDK\Test\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
