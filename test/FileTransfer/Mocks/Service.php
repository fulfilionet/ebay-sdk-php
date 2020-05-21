<?php
namespace FulfilioNet\eBaySDK\Test\FileTransfer\Mocks;

use FulfilioNet\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \FulfilioNet\eBaySDK\FileTransfer\Services\FileTransferBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\FulfilioNet\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
