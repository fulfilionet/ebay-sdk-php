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

use FulfilioNet\eBaySDK\PostOrder\Types\EscalateReturnRestRequest;

class EscalateReturnRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EscalateReturnRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\PostOrder\Types\EscalateReturnRestRequest', $this->obj);
    }

    public function testExtendsEscalateRequest()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\PostOrder\Types\EscalateRequest', $this->obj);
    }
}
