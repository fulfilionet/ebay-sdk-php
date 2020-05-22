<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\ResolutionCaseManagement\Types;

use FulfilioNet\eBaySDK\ResolutionCaseManagement\Types\GetVersionResponse;

class GetVersionResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetVersionResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\ResolutionCaseManagement\Types\GetVersionResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\ResolutionCaseManagement\Types\BaseResponse', $this->obj);
    }
}
