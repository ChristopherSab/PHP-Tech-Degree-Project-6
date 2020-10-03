<?php

require_once __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{

    /** @test */
    function listingBasicMustReceiveData()
    {
        $this->expectException(Exception::class);
        $listingBasic = new ListingBasic($data = []);
    }

    /** @test */
    function needsValidIdToCreateAListing()
    {
        $this->expectException(Exception::class);

        $data = ["id" => null, "title" => "test"];
        $listingBasic = new ListingBasic($data);
        $listingBasic->setValues($data = ["id" => null, "title" => "test"]); 
    }

    /** @test */
    function needsValidTitleToCreateAListing()
    {
        $this->expectException(Exception::class);
        $data = ["id" => 1, "title" => null];
        $listingBasic = new ListingBasic($data);
        $listingBasic->setValues($data = ["id" => 1, "title" => null]);
    }

    /** @test */
    function anObjectIsCreatedWithTheMinimumRequiredIdAndTitle()
    {
        $data = ["id" => 1, "title" => "test"];
        $listingBasic = new ListingBasic($data);
        $this->assertIsObject($listingBasic);
    }

    /** @test */
    function theGetStatusMethodReturnsBasic()
    {

        $data = ["id" => 1, "title" => "test"];
        $listingBasic = new ListingBasic($data);

        $expected = "basic";
        $actual = $listingBasic->getStatus();

        $this->assertEquals($expected, $actual);  
         

    }


}