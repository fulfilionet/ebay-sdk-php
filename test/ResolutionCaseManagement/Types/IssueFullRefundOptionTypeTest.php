<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\ResolutionCaseManagement\Types;

use FulfilioNet\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundOptionType;

class IssueFullRefundOptionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IssueFullRefundOptionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\ResolutionCaseManagement\Types\IssueFullRefundOptionType', $this->obj);
    }

    public function testExtendsBaseActivityOptionType()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\ResolutionCaseManagement\Types\BaseActivityOptionType', $this->obj);
    }
}
