<?php

require_once __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    function theGetStatusMethodReturnsFeatured()
    {
    
        $data = ["id" => 1, "title" => "test"];
        $listingFeatured = new ListingFeatured($data);
    
        $expected = "featured";
        $actual = $listingFeatured->getStatus();
    
        $this->assertEquals($expected, $actual);    
    
    }

    /** @test */
    function theGetCocMethodReturnsCorrectResult()
    {

        $data = ["id" => 1, "title" => "test"];
        $listingFeatured = new ListingFeatured($data);
    
        $listingFeatured->setCoc('dog');
        $expected = 'dog';
        $actual = $listingFeatured->getCoc();
    
        $this->assertEquals($expected, $actual);    
    
    }




    

}