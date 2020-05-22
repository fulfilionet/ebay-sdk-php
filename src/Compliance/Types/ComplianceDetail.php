<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Compliance\Types;

/**
 *
 * @property string $reasonCode
 * @property string $message
 * @property \FulfilioNet\eBaySDK\Compliance\Types\VariationDetails $variation
 * @property \FulfilioNet\eBaySDK\Compliance\Types\NameValueList[] $violationData
 * @property \FulfilioNet\eBaySDK\Compliance\Types\CorrectiveRecommendations $correctiveRecommendations
 */
class ComplianceDetail extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'reasonCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reasonCode'
        ],
        'message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'message'
        ],
        'variation' => [
            'type' => 'FulfilioNet\eBaySDK\Compliance\Types\VariationDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'variation'
        ],
        'violationData' => [
            'type' => 'FulfilioNet\eBaySDK\Compliance\Types\NameValueList',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'violationData'
        ],
        'correctiveRecommendations' => [
            'type' => 'FulfilioNet\eBaySDK\Compliance\Types\CorrectiveRecommendations',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'correctiveRecommendations'
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
