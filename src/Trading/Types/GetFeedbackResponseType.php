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
 * @property \FulfilioNet\eBaySDK\Trading\Types\FeedbackDetailArrayType $FeedbackDetailArray
 * @property integer $FeedbackDetailItemTotal
 * @property \FulfilioNet\eBaySDK\Trading\Types\FeedbackSummaryType $FeedbackSummary
 * @property integer $FeedbackScore
 * @property \FulfilioNet\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 * @property integer $EntriesPerPage
 * @property integer $PageNumber
 */
class GetFeedbackResponseType extends \FulfilioNet\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'FeedbackDetailArray' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\FeedbackDetailArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailArray'
        ],
        'FeedbackDetailItemTotal' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailItemTotal'
        ],
        'FeedbackSummary' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\FeedbackSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackSummary'
        ],
        'FeedbackScore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ],
        'PaginationResult' => [
            'type' => 'FulfilioNet\eBaySDK\Trading\Types\PaginationResultType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
        ],
        'EntriesPerPage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EntriesPerPage'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
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
