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

use FulfilioNet\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest;

class CreateChangeRequestRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateChangeRequestRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest', $this->obj);
    }

    public function testExtendsCreateChangeRequestPayload()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Catalog\Types\CreateChangeRequestPayload', $this->obj);
    }
}
