<?php
namespace FulfilioNet\eBaySDK\Types\Test;

use FulfilioNet\eBaySDK\Types\BaseType;

class BaseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BaseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Types\BaseType', $this->obj);
    }
}
