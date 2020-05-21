<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Merchandising\Types;

use FulfilioNet\eBaySDK\Merchandising\Types\Item;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Item();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Merchandising\Types\Item', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\BaseType', $this->obj);
    }
}
