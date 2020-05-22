<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Product\Types;

use FulfilioNet\eBaySDK\Product\Types\ErrorParameter;

class ErrorParameterTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorParameter();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Product\Types\ErrorParameter', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\StringType', $this->obj);
    }
}
