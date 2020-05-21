<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Order\Types;

use FulfilioNet\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestResponse;

class UpdateGuestPaymentInfoRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateGuestPaymentInfoRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestResponse', $this->obj);
    }

    public function testExtendsCheckoutSessionResponse()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Order\Types\CheckoutSessionResponse', $this->obj);
    }
}
