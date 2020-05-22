<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Finding\Types;

/**
 *
 * @property \FulfilioNet\eBaySDK\Finding\Types\SearchResult $searchResult
 * @property \FulfilioNet\eBaySDK\Finding\Types\PaginationOutput $paginationOutput
 * @property string $itemSearchURL
 */
class BaseFindingServiceResponse extends \FulfilioNet\eBaySDK\Finding\Types\BaseServiceResponse
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'searchResult' => [
            'type' => 'FulfilioNet\eBaySDK\Finding\Types\SearchResult',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'searchResult'
        ],
        'paginationOutput' => [
            'type' => 'FulfilioNet\eBaySDK\Finding\Types\PaginationOutput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationOutput'
        ],
        'itemSearchURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemSearchURL'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
