<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\MerchantData\Types;

use FulfilioNet\eBaySDK\MerchantData\Types\VerifyAddItemRequestType;

class VerifyAddItemRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new VerifyAddItemRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\MerchantData\Types\VerifyAddItemRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\MerchantData\Types\AbstractRequestType', $this->obj);
    }
}
