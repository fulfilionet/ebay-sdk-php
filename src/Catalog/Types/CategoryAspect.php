<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Catalog\Types;

/**
 *
 * @property string $aspectHelpText
 * @property \DTS\eBaySDK\Catalog\Types\ProductAspectConstraint[] $constraint
 * @property string $name
 * @property \DTS\eBaySDK\Catalog\Types\CategoryAspectValue[] $values
 */
class CategoryAspect extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspectHelpText' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspectHelpText'
        ],
        'constraint' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\ProductAspectConstraint',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'constraint'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'values' => [
            'type' => 'DTS\eBaySDK\Catalog\Types\CategoryAspectValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'values'
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
