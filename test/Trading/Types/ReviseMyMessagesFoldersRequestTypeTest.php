<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Trading\Types;

use FulfilioNet\eBaySDK\Trading\Types\ReviseMyMessagesFoldersRequestType;

class ReviseMyMessagesFoldersRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReviseMyMessagesFoldersRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Trading\Types\ReviseMyMessagesFoldersRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
