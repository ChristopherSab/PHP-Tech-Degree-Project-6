<?php

require __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{

    /** @test */
    function listingBasicMustReceiveData()
    {
        $this->expectExeption(InvalidArgumentException::class);
        $listingBasic = new ListingBasic($data = []);
    }

}