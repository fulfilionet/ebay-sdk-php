<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Finding\Types;

use FulfilioNet\eBaySDK\Finding\Types\FindItemsByKeywordsResponse;

class FindItemsByKeywordsResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindItemsByKeywordsResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Finding\Types\FindItemsByKeywordsResponse', $this->obj);
    }

    public function testExtendsBaseFindingServiceResponse()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Finding\Types\BaseFindingServiceResponse', $this->obj);
    }
}
