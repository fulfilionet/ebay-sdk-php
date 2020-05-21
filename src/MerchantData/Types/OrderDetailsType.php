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
 * @property string $OrderID
 * @property string $BuyerUserID
 * @property string $BuyerFirstName
 * @property string $BuyerLastName
 * @property string $BuyerEmail
 * @property string $BuyerPhone
 * @property string $ShipRecipientName
 * @property string $ShipStreet1
 * @property string $ShipStreet2
 * @property string $ShipCityName
 * @property string $ShipStateOrProvince
 * @property string $ShipPostalCode
 * @property string $ShipCountryName
 * @property string $ShippingService
 * @property \DateTime $PaymentClearedTime
 * @property integer $CheckoutSiteID
 * @property \DateTime $OrderCreationTime
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $OrderSalePrice
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $TaxAmount
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $InsuranceCost
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $ShippingCost
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $OrderTotalCost
 * @property integer $SellingManagerSaleRecordID
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\OrderItemDetailsType $OrderItemDetails
 * @property string $BuyerStaticAlias
 * @property string $ShippingServiceToken
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\CheckoutStatusType $CheckoutStatus
 * @property \FulfilioNet\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property string $ShipReferenceId
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 */
class OrderDetailsType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'BuyerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ],
        'BuyerFirstName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerFirstName'
        ],
        'BuyerLastName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerLastName'
        ],
        'BuyerEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerEmail'
        ],
        'BuyerPhone' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPhone'
        ],
        'ShipRecipientName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipRecipientName'
        ],
        'ShipStreet1' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipStreet1'
        ],
        'ShipStreet2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipStreet2'
        ],
        'ShipCityName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipCityName'
        ],
        'ShipStateOrProvince' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipStateOrProvince'
        ],
        'ShipPostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipPostalCode'
        ],
        'ShipCountryName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipCountryName'
        ],
        'ShippingService' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ],
        'PaymentClearedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentClearedTime'
        ],
        'CheckoutSiteID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutSiteID'
        ],
        'OrderCreationTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderCreationTime'
        ],
        'OrderSalePrice' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderSalePrice'
        ],
        'TaxAmount' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxAmount'
        ],
        'InsuranceCost' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ],
        'ShippingCost' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ],
        'OrderTotalCost' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderTotalCost'
        ],
        'SellingManagerSaleRecordID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSaleRecordID'
        ],
        'OrderItemDetails' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\OrderItemDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderItemDetails'
        ],
        'BuyerStaticAlias' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerStaticAlias'
        ],
        'ShippingServiceToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceToken'
        ],
        'CheckoutStatus' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\CheckoutStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'ExternalTransaction' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'ShipReferenceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipReferenceId'
        ],
        'PickupDetails' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\PickupDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ],
        'PickupMethodSelected' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\PickupMethodSelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
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
