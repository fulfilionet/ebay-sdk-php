<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\BulkDataExchange\Types;

use FulfilioNet\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse;

class AbortRecurringJobExecutionResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AbortRecurringJobExecutionResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }
}
