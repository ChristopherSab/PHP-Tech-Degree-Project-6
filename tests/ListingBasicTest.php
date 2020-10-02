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
        $listingBasic = new ListingBasic();
        $listingBasic->setValues(); 
    }


}