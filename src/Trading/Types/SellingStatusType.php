<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Trading\Types;

/**
 *
 * @property integer $BidCount
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $BidIncrement
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $ConvertedCurrentPrice
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $CurrentPrice
 * @property \FulfilioNet\eBaySDK\Trading\Types\UserType $HighBidder
 * @property integer $LeadCount
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $MinimumToBid
 * @property integer $QuantitySold
 * @property boolean $ReserveMet
 * @property boolean $SecondChanceEligible
 * @property integer $BidderCount
 * @property \FulfilioNet\eBaySDK\Trading\Enums\ListingStatusCodeType $ListingStatus
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $FinalValueFee
 * @property \FulfilioNet\eBaySDK\Trading\Types\PromotionalSaleDetailsType $PromotionalSaleDetails
 * @property boolean $AdminEnded
 * @property boolean $SoldAsBin
 * @property integer $QuantitySoldByPickupInStore
 * @property \FulfilioNet\eBaySDK\Trading\Types\SuggestedBidValueType $SuggestedBidValues
 */
class SellingStatusType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ],
        'BidIncrement' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidIncrement'
        ],
        'ConvertedCurrentPrice' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ],
        'CurrentPrice' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ],
        'HighBidder' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ],
        'LeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ],
        'MinimumToBid' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ],
        'QuantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ],
        'ReserveMet' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ],
        'SecondChanceEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceEligible'
        ],
        'BidderCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidderCount'
        ],
        'ListingStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ],
        'FinalValueFee' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ],
        'PromotionalSaleDetails' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\PromotionalSaleDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleDetails'
        ],
        'AdminEnded' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdminEnded'
        ],
        'SoldAsBin' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldAsBin'
        ],
        'QuantitySoldByPickupInStore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ],
        'SuggestedBidValues' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\SuggestedBidValueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SuggestedBidValues'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
