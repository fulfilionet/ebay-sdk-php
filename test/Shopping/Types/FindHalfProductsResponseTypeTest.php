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

use FulfilioNet\eBaySDK\Shopping\Types\FindHalfProductsResponseType;

class FindHalfProductsResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindHalfProductsResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Shopping\Types\FindHalfProductsResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Shopping\Types\AbstractResponseType', $this->obj);
    }
}
