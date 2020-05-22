<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Trading\Types;

use FulfilioNet\eBaySDK\Trading\Types\GetItemResponseType;

class GetItemResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetItemResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Trading\Types\GetItemResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
