<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\RelatedItemsManagement\Types;

use FulfilioNet\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest;

class UpdateBundlesRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateBundlesRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\RelatedItemsManagement\Types\BaseRequest', $this->obj);
    }
}
