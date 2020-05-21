<?php
namespace FulfilioNet\eBaySDK\Test\Mocks;

class BaseRestService extends \FulfilioNet\eBaySDK\Services\BaseRestService
{
    protected static $endPoints = [
        'sandbox'    => 'http://sandbox.com',
        'production' => 'http://production.com'
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => 'v1',
                'required' => true
            ]
        ];
    }

    protected function getEbayHeaders()
    {
        return [];
    }
}
