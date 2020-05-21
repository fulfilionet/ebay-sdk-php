<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\BusinessPoliciesManagement\Types;

use FulfilioNet\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest;

class AddSellerProfileRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddSellerProfileRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest', $this->obj);
    }
}
