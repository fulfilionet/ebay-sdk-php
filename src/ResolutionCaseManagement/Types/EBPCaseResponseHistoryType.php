<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property string $note
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType $author
 * @property string $activity
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType $activityDetail
 * @property \DateTime $creationDate
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\ResponseHistoryAttributesType $attributes
 */
class EBPCaseResponseHistoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'note' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'note'
        ],
        'author' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'author'
        ],
        'activity' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'activity'
        ],
        'activityDetail' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'activityDetail'
        ],
        'creationDate' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'attributes' => [
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\ResponseHistoryAttributesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'attributes'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}