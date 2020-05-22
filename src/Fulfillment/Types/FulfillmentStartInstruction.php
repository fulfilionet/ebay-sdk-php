<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Fulfillment\Types;

/**
 *
 * @property boolean $ebaySupportedFulfillment
 * @property \FulfilioNet\eBaySDK\Fulfillment\Types\Address $finalDestinationAddress
 * @property \FulfilioNet\eBaySDK\Fulfillment\Enums\FulfillmentInstructionsType $fulfillmentInstructionsType
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property \FulfilioNet\eBaySDK\Fulfillment\Types\ShippingStep $shippingStep
 */
class FulfillmentStartInstruction extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ebaySupportedFulfillment' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ebaySupportedFulfillment'
        ],
        'finalDestinationAddress' => [
            'type' => 'FulfilioNet\eBaySDK\Fulfillment\Types\Address',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'finalDestinationAddress'
        ],
        'fulfillmentInstructionsType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fulfillmentInstructionsType'
        ],
        'maxEstimatedDeliveryDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxEstimatedDeliveryDate'
        ],
        'minEstimatedDeliveryDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minEstimatedDeliveryDate'
        ],
        'shippingStep' => [
            'type' => 'FulfilioNet\eBaySDK\Fulfillment\Types\ShippingStep',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingStep'
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
