<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Taxonomy\Types;

use FulfilioNet\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse;

class GetACategoryTreeRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetACategoryTreeRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Taxonomy\Types\GetACategoryTreeRestResponse', $this->obj);
    }

    public function testExtendsCategoryTree()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Taxonomy\Types\CategoryTree', $this->obj);
    }
}
