<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace FulfilioNet\eBaySDK\Test\Finding\Types;

use FulfilioNet\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest;

class GetSearchKeywordsRecommendationRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetSearchKeywordsRecommendationRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\FulfilioNet\eBaySDK\Finding\Types\BaseServiceRequest', $this->obj);
    }
}
