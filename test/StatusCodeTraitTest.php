<?php
namespace FulfilioNet\eBaySDK\Test;

use FulfilioNet\eBaySDK\Test\Mocks\StatusCode;

class StatusCodeTraitTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetStatusCode()
    {
        $s = new StatusCode(200);

        $this->assertEquals(200, $s->getStatusCode());
    }
}
