<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Fulfillment\Services;

class FulfillmentService extends \FulfilioNet\eBaySDK\Fulfillment\Services\FulfillmentBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetOrders' => [
            'method' => 'GET',
            'resource' => 'order',
            'responseClass' => '\FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestResponse',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'orderIds' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetAnOrder' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}',
            'responseClass' => '\FulfilioNet\eBaySDK\Fulfillment\Types\GetAnOrderRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateAShippingFulfillment' => [
            'method' => 'POST',
            'resource' => 'order/{orderId}/shipping_fulfillment',
            'responseClass' => '\FulfilioNet\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetShippingFulfillments' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}/shipping_fulfillment',
            'responseClass' => '\FulfilioNet\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAShippingFulfillment' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}/shipping_fulfillment/{fulfillmentId}',
            'responseClass' => '\FulfilioNet\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse',
            'params' => [
                'fulfillmentId' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request
     * @return \FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestResponse
     */
    public function getOrders(\FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request)
    {
        return $this->getOrdersAsync($request)->wait();
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsync(\FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request)
    {
        return $this->callOperationAsync('GetOrders', $request);
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request
     * @return \FulfilioNet\eBaySDK\Fulfillment\Types\GetAnOrderRestResponse
     */
    public function getAnOrder(\FulfilioNet\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request)
    {
        return $this->getAnOrderAsync($request)->wait();
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAnOrderAsync(\FulfilioNet\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request)
    {
        return $this->callOperationAsync('GetAnOrder', $request);
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request
     * @return \FulfilioNet\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestResponse
     */
    public function createAShippingFulfillment(\FulfilioNet\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request)
    {
        return $this->createAShippingFulfillmentAsync($request)->wait();
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAShippingFulfillmentAsync(\FulfilioNet\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request)
    {
        return $this->callOperationAsync('CreateAShippingFulfillment', $request);
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request
     * @return \FulfilioNet\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestResponse
     */
    public function getShippingFulfillments(\FulfilioNet\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request)
    {
        return $this->getShippingFulfillmentsAsync($request)->wait();
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingFulfillmentsAsync(\FulfilioNet\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request)
    {
        return $this->callOperationAsync('GetShippingFulfillments', $request);
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request
     * @return \FulfilioNet\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse
     */
    public function getAShippingFulfillment(\FulfilioNet\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request)
    {
        return $this->getAShippingFulfillmentAsync($request)->wait();
    }

    /**
     * @param \FulfilioNet\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAShippingFulfillmentAsync(\FulfilioNet\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request)
    {
        return $this->callOperationAsync('GetAShippingFulfillment', $request);
    }
}
