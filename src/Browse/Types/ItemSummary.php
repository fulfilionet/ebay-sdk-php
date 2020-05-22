<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Browse\Types;

/**
 *
 * @property \FulfilioNet\eBaySDK\Browse\Types\Image[] $additionalImages
 * @property integer $bidCount
 * @property string[] $buyingOptions
 * @property \FulfilioNet\eBaySDK\Browse\Types\Category[] $categories
 * @property string $condition
 * @property string $conditionId
 * @property \FulfilioNet\eBaySDK\Browse\Types\ConvertedAmount $currentBidPrice
 * @property \FulfilioNet\eBaySDK\Browse\Types\TargetLocation $distanceFromPickupLocation
 * @property string $energyEfficiencyClass
 * @property string $epid
 * @property \FulfilioNet\eBaySDK\Browse\Types\Image $image
 * @property string $itemAffiliateWebUrl
 * @property string $itemGroupHref
 * @property string $itemGroupType
 * @property string $itemHref
 * @property string $itemId
 * @property \FulfilioNet\eBaySDK\Browse\Types\ItemLocationImpl $itemLocation
 * @property string $itemWebUrl
 * @property \FulfilioNet\eBaySDK\Browse\Types\MarketingPrice $marketingPrice
 * @property \FulfilioNet\eBaySDK\Browse\Types\PickupOptionSummary[] $pickupOptions
 * @property \FulfilioNet\eBaySDK\Browse\Types\ConvertedAmount $price
 * @property \FulfilioNet\eBaySDK\Browse\Types\Seller $seller
 * @property \FulfilioNet\eBaySDK\Browse\Types\ShippingOptionSummary[] $shippingOptions
 * @property \FulfilioNet\eBaySDK\Browse\Types\Image[] $thumbnailImages
 * @property string $title
 */
class ItemSummary extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImages' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'additionalImages'
        ],
        'bidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bidCount'
        ],
        'buyingOptions' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyingOptions'
        ],
        'categories' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\Category',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categories'
        ],
        'condition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'condition'
        ],
        'conditionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'conditionId'
        ],
        'currentBidPrice' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentBidPrice'
        ],
        'distanceFromPickupLocation' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\TargetLocation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'distanceFromPickupLocation'
        ],
        'energyEfficiencyClass' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'energyEfficiencyClass'
        ],
        'epid' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'epid'
        ],
        'image' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'itemAffiliateWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemAffiliateWebUrl'
        ],
        'itemGroupHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupHref'
        ],
        'itemGroupType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemGroupType'
        ],
        'itemHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemHref'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'itemLocation' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\ItemLocationImpl',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemLocation'
        ],
        'itemWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemWebUrl'
        ],
        'marketingPrice' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\MarketingPrice',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketingPrice'
        ],
        'pickupOptions' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\PickupOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'pickupOptions'
        ],
        'price' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'price'
        ],
        'seller' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'shippingOptions' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\ShippingOptionSummary',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shippingOptions'
        ],
        'thumbnailImages' => [
            'type' => 'FulfilioNet\eBaySDK\Browse\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'thumbnailImages'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
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
