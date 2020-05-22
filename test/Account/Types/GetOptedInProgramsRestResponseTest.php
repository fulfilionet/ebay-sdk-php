<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Account\Types;

use FulfilioNet\eBaySDK\Account\Types\GetOptedInProgramsRestResponse;

class GetOptedInProgramsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetOptedInProgramsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Account\Types\GetOptedInProgramsRestResponse', $this->obj);
    }

    public function testExtendsPrograms()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Account\Types\Programs', $this->obj);
    }
}
