<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Shopping\Types;

use FulfilioNet\eBaySDK\Shopping\Types\GetShippingCostsRequestType;

class GetShippingCostsRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetShippingCostsRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Shopping\Types\GetShippingCostsRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Shopping\Types\AbstractRequestType', $this->obj);
    }
}
