<?php
namespace FulfilioNet\eBaySDK\Test\OAuth\Types;

use FulfilioNet\eBaySDK\OAuth\Types\RefreshUserTokenRestRequest;

class RefreshUserTokenRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RefreshUserTokenRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\OAuth\Types\RefreshUserTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->refresh_token = 'bar';
        $this->obj->scope = ['foo', 'bar', 'baz'];

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->refresh_token);
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\RepeatableType', $this->obj->scope);
    }
}
