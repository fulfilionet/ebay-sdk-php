<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \FulfilioNet\eBaySDK\Sdk();

$trading = new \FulfilioNet\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \FulfilioNet\eBaySDK\Sdk::VERSION;
