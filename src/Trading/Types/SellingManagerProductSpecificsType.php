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
 * @property string $PrimaryCategoryID
 * @property \FulfilioNet\eBaySDK\Trading\Types\VariationsType $Variations
 * @property \FulfilioNet\eBaySDK\Trading\Types\NameValueListArrayType $ItemSpecifics
 */
class SellingManagerProductSpecificsType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PrimaryCategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategoryID'
        ],
        'Variations' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\VariationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ],
        'ItemSpecifics' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
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
