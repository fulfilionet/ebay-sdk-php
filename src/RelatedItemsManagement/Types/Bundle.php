<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\RelatedItemsManagement\Types;

/**
 *
 * @property integer $bundleID
 * @property string $bundleName
 * @property string[] $primarySKU
 * @property \DateTime $scheduledStartTime
 * @property \DateTime $scheduledEndTime
 * @property \FulfilioNet\eBaySDK\RelatedItemsManagement\Types\RelatedProductGroup[] $relatedProductGroup
 * @property \FulfilioNet\eBaySDK\RelatedItemsManagement\Enums\BundleStatusEnum $bundleStatus
 * @property integer $isoCurrencyCode
 * @property string $site
 */
class Bundle extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'bundleID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bundleID'
        ],
        'bundleName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bundleName'
        ],
        'primarySKU' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'primarySKU'
        ],
        'scheduledStartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'scheduledStartTime'
        ],
        'scheduledEndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'scheduledEndTime'
        ],
        'relatedProductGroup' => [
            'type' => 'FulfilioNet\eBaySDK\RelatedItemsManagement\Types\RelatedProductGroup',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'relatedProductGroup'
        ],
        'bundleStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bundleStatus'
        ],
        'isoCurrencyCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isoCurrencyCode'
        ],
        'site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'site'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
