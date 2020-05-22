<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\MerchantData\Types;

/**
 *
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\VariationType[] $Variation
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\PicturesType[] $Pictures
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\NameValueListArrayType $VariationSpecificsSet
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\ModifyNameArrayType $ModifyNameList
 */
class VariationsType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Variation' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\VariationType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Variation'
        ],
        'Pictures' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\PicturesType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Pictures'
        ],
        'VariationSpecificsSet' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecificsSet'
        ],
        'ModifyNameList' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\ModifyNameArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModifyNameList'
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
