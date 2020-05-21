<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\PostOrder\Types;

use FulfilioNet\eBaySDK\PostOrder\Types\CheckReturnEligibilityRestResponse;

class CheckReturnEligibilityRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CheckReturnEligibilityRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\PostOrder\Types\CheckReturnEligibilityRestResponse', $this->obj);
    }

    public function testExtendsCheckEligibilityResponse()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\PostOrder\Types\CheckEligibilityResponse', $this->obj);
    }
}
