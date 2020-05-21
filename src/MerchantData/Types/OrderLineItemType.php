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
 * @property string $OrderLineItemID
 * @property \DateTime $TransactionTime
 * @property \DateTime $OriginalChargeTime
 * @property string $ItemID
 * @property string $ItemTitle
 * @property string $SerialNumber
 * @property string $SKU
 * @property string $GlobalCategoryDescription
 * @property string $SiteDescription
 * @property integer $QuantitySold
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $SalePrice
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $TaxAmount
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $ShippingCost
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $TotalCost
 * @property \DateTime $PaymentClearedTime
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $InsuranceCost
 * @property integer $ListingSiteID
 * @property \DateTime $SaleTime
 * @property string $Memo
 * @property string $SecondDescription
 * @property string $FeeDescription
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $FeeAmount
 * @property integer $SellingManagerSaleRecordID
 * @property string $BuyerPaymentTransactionNumber
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\MerchantDataVariationType $Variation
 * @property string $TaxCategory
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\TaxesType $Taxes
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\TransactionStatusType $Status
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\AmountType $ActualShippingCost
 * @property \FulfilioNet\eBaySDK\MerchantData\Types\UnpaidItemType $UnpaidItem
 */
class OrderLineItemType extends \FulfilioNet\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ],
        'TransactionTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionTime'
        ],
        'OriginalChargeTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginalChargeTime'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'ItemTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemTitle'
        ],
        'SerialNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SerialNumber'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'GlobalCategoryDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalCategoryDescription'
        ],
        'SiteDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SiteDescription'
        ],
        'QuantitySold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ],
        'SalePrice' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SalePrice'
        ],
        'TaxAmount' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxAmount'
        ],
        'ShippingCost' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCost'
        ],
        'TotalCost' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalCost'
        ],
        'PaymentClearedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentClearedTime'
        ],
        'InsuranceCost' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuranceCost'
        ],
        'ListingSiteID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingSiteID'
        ],
        'SaleTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SaleTime'
        ],
        'Memo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Memo'
        ],
        'SecondDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondDescription'
        ],
        'FeeDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeDescription'
        ],
        'FeeAmount' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeAmount'
        ],
        'SellingManagerSaleRecordID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerSaleRecordID'
        ],
        'BuyerPaymentTransactionNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaymentTransactionNumber'
        ],
        'Variation' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\MerchantDataVariationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variation'
        ],
        'TaxCategory' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
        ],
        'Taxes' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\TaxesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Taxes'
        ],
        'Status' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\TransactionStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'ActualShippingCost' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ],
        'UnpaidItem' => [
            'type' => 'FulfilioNet\eBaySDK\MerchantData\Types\UnpaidItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
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
