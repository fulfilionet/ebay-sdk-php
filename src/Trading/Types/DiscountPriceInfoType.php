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
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $OriginalRetailPrice
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $MinimumAdvertisedPrice
 * @property \FulfilioNet\eBaySDK\Trading\Enums\MinimumAdvertisedPriceExposureCodeType $MinimumAdvertisedPriceExposure
 * @property \FulfilioNet\eBaySDK\Trading\Enums\PricingTreatmentCodeType $PricingTreatment
 * @property boolean $SoldOneBay
 * @property boolean $SoldOffeBay
 * @property \FulfilioNet\eBaySDK\Trading\Types\AmountType $MadeForOutletComparisonPrice
 */
class DiscountPriceInfoType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OriginalRetailPrice' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginalRetailPrice'
        ],
        'MinimumAdvertisedPrice' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumAdvertisedPrice'
        ],
        'MinimumAdvertisedPriceExposure' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumAdvertisedPriceExposure'
        ],
        'PricingTreatment' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PricingTreatment'
        ],
        'SoldOneBay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldOneBay'
        ],
        'SoldOffeBay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldOffeBay'
        ],
        'MadeForOutletComparisonPrice' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MadeForOutletComparisonPrice'
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
