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
 * @property string[] $PictureURL
 * @property integer $ExtensionInDays
 */
class ExtendSiteHostedPicturesRequestType extends \FulfilioNet\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PictureURL' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PictureURL'
        ],
        'ExtensionInDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtensionInDays'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'ExtendSiteHostedPicturesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
