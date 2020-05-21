<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\PostOrder\Types;

/**
 *
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\CancelActivityHistory[] $activityHistories
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\DateTime $buyerResponseDueDate
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\DateTime $cancelCloseDate
 * @property string $cancelCloseReason
 * @property string $cancelId
 * @property string $cancelReason
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\DateTime $cancelRequestDate
 * @property string $itemId
 * @property string $legacyOrderId
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\OrderCancelLineItem[] $lineItems
 * @property \FulfilioNet\eBaySDK\PostOrder\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $paymentStatus
 * @property string $requestorType
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\Amount $requestRefundAmount
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\DateTime $sellerResponseDueDate
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\DateTime $shipmentDate
 * @property string $cancelState
 * @property string $cancelStatus
 * @property string $transactionId
 */
class CancelDetail extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'activityHistories' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\CancelActivityHistory',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'activityHistories'
        ],
        'buyerResponseDueDate' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponseDueDate'
        ],
        'cancelCloseDate' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelCloseDate'
        ],
        'cancelCloseReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelCloseReason'
        ],
        'cancelId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelId'
        ],
        'cancelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelReason'
        ],
        'cancelRequestDate' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelRequestDate'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'legacyOrderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyOrderId'
        ],
        'lineItems' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\OrderCancelLineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'paymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentStatus'
        ],
        'requestorType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'requestorType'
        ],
        'requestRefundAmount' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'requestRefundAmount'
        ],
        'sellerResponseDueDate' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerResponseDueDate'
        ],
        'shipmentDate' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipmentDate'
        ],
        'cancelState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelState'
        ],
        'cancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelStatus'
        ],
        'transactionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'transactionId'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
