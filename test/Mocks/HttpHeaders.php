<?php
namespace FulfilioNet\eBaySDK\Test\Mocks;

use FulfilioNet\eBaySDK\HttpHeadersTrait;

class HttpHeaders
{
    use HttpHeadersTrait;

    public function __construct(array $headers)
    {
        $this->setHeaders($headers);
    }
}
