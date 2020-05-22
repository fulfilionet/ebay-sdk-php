<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Fulfillment\Types;

use FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestResponse;

class GetOrdersRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetOrdersRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Fulfillment\Types\GetOrdersRestResponse', $this->obj);
    }

    public function testExtendsOrderSearchPagedCollection()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Fulfillment\Types\OrderSearchPagedCollection', $this->obj);
    }
}
