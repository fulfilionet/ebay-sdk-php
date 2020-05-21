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

use FulfilioNet\eBaySDK\PostOrder\Types\CancelReturnRequestRestRequest;

class CancelReturnRequestRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CancelReturnRequestRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\PostOrder\Types\CancelReturnRequestRestRequest', $this->obj);
    }

    public function testExtendsCloseReturnRequest()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\PostOrder\Types\CloseReturnRequest', $this->obj);
    }
}
