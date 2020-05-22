<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Browse\Types;

use FulfilioNet\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse;

class GetItemsByItemGroupRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetItemsByItemGroupRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse', $this->obj);
    }

    public function testExtendsItems()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Browse\Types\Items', $this->obj);
    }
}
