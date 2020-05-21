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
 * @property \FulfilioNet\eBaySDK\Trading\Types\CategoryArrayType $CategoryArray
 * @property integer $CategoryCount
 * @property \DateTime $UpdateTime
 * @property string $CategoryVersion
 * @property boolean $ReservePriceAllowed
 * @property double $MinimumReservePrice
 * @property boolean $ReduceReserveAllowed
 */
class GetCategoriesResponseType extends \FulfilioNet\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CategoryArray' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\CategoryArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryArray'
        ],
        'CategoryCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryCount'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ],
        'CategoryVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryVersion'
        ],
        'ReservePriceAllowed' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReservePriceAllowed'
        ],
        'MinimumReservePrice' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumReservePrice'
        ],
        'ReduceReserveAllowed' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReduceReserveAllowed'
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
