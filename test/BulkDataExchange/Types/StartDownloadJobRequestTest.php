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

use FulfilioNet\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest;

class StartDownloadJobRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StartDownloadJobRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}
