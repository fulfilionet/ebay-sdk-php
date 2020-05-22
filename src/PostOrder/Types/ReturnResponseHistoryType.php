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
 * @property string $activity
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\ResponseHistoryAttributesType $attributes
 * @property string $author
 * @property \FulfilioNet\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property string $fromState
 * @property string $notes
 * @property string $toState
 */
class ReturnResponseHistoryType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'activity' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'activity'
        ],
        'attributes' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\ResponseHistoryAttributesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'attributes'
        ],
        'author' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'author'
        ],
        'creationDate' => [
            'type' => 'FulfilioNet\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'fromState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fromState'
        ],
        'notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'notes'
        ],
        'toState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'toState'
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
