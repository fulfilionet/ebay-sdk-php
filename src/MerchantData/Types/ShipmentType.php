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
 * @property \DateTime $EstimatedDeliveryDate
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $InsuredValue
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\MeasureType $PackageDepth
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\MeasureType $PackageLength
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property integer $ShipmentID
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $PostageTotal
 * @property \DateTime $PrintedTime
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AddressType $ShipFromAddress
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AddressType $ShippingAddress
 * @property \FulfilioNet\eBaySDK\MerchantData\Enums\ShippingFeatureCodeType[] $ShippingFeature
 * @property \FulfilioNet\eBaySDK\MerchantData\Enums\ShippingPackageCodeType $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\MeasureType $WeightMajor
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\MeasureType $WeightMinor
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\ItemTransactionIDType[] $ItemTransactionID
 * @property \DateTime $DeliveryDate
 * @property \FulfilioNet\eBaySDK\MerchantData\Enums\ShipmentDeliveryStatusCodeType $DeliveryStatus
 * @property \DateTime $RefundGrantedTime
 * @property \DateTime $RefundRequestedTime
 * @property \FulfilioNet\eBaySDK\MerchantData\Enums\ShipmentStatusCodeType $Status
 * @property \DateTime $ShippedTime
 * @property string $Notes
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\ShipmentLineItemType $ShipmentLineItem
 */
class ShipmentType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'EstimatedDeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryDate'
        ],
        'InsuredValue' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuredValue'
        ],
        'PackageDepth' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ],
        'PackageLength' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ],
        'PackageWidth' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ],
        'PayPalShipmentID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalShipmentID'
        ],
        'ShipmentID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipmentID'
        ],
        'PostageTotal' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostageTotal'
        ],
        'PrintedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrintedTime'
        ],
        'ShipFromAddress' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipFromAddress'
        ],
        'ShippingAddress' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingFeature' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingFeature'
        ],
        'ShippingPackage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ],
        'ShippingServiceUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ],
        'WeightMajor' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ],
        'WeightMinor' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
        ],
        'ItemTransactionID' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\ItemTransactionIDType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ItemTransactionID'
        ],
        'DeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDate'
        ],
        'DeliveryStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ],
        'RefundGrantedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundGrantedTime'
        ],
        'RefundRequestedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'Notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Notes'
        ],
        'ShipmentTrackingDetails' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ],
        'ShipmentLineItem' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\ShipmentLineItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipmentLineItem'
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
