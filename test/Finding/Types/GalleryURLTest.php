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

use FulfilioNet\eBaySDK\Finding\Types\GalleryURL;

class GalleryURLTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GalleryURL();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Finding\Types\GalleryURL', $this->obj);
    }

    public function testExtendsURIType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\URIType', $this->obj);
    }
}
