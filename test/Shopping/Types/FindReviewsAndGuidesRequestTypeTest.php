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

use FulfilioNet\eBaySDK\Shopping\Types\FindReviewsAndGuidesRequestType;

class FindReviewsAndGuidesRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindReviewsAndGuidesRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Shopping\Types\FindReviewsAndGuidesRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Shopping\Types\AbstractRequestType', $this->obj);
    }
}
