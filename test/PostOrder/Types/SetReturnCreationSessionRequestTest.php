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

use FulfilioNet\eBaySDK\PostOrder\Types\SetReturnCreationSessionRequest;

class SetReturnCreationSessionRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SetReturnCreationSessionRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\PostOrder\Types\SetReturnCreationSessionRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\BaseType', $this->obj);
    }
}
