<?php
namespace FulfilioNet\eBaySDK\Test\Mocks;

use FulfilioNet\eBaySDK\StatusCodeTrait;

class StatusCode
{
    use StatusCodeTrait;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
