<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Catalog\Types;

use FulfilioNet\eBaySDK\Catalog\Types\CorrectionProductAttribute;

class CorrectionProductAttributeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CorrectionProductAttribute();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Catalog\Types\CorrectionProductAttribute', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\BaseType', $this->obj);
    }
}
