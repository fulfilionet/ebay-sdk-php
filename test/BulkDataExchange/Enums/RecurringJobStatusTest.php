<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\BulkDataExchange\Enums;

use FulfilioNet\eBaySDK\BulkDataExchange\Enums\RecurringJobStatus;

class RecurringJobStatusTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RecurringJobStatus();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\BulkDataExchange\Enums\RecurringJobStatus', $this->obj);
    }
}
