<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\ReturnManagement\Enums;

use FulfilioNet\eBaySDK\ReturnManagement\Enums\TrackingStatusType;

class TrackingStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TrackingStatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\ReturnManagement\Enums\TrackingStatusType', $this->obj);
    }
}
