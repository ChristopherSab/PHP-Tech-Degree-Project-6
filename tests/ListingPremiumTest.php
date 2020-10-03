<?php

require_once __DIR__ .'/../classes/ListingBasic.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{

        /** @test */
        function theGetStatusMethodReturnsPremium()
        {
    
            $data = ["id" => 1, "title" => "test"];
            $listingPremium = new ListingPremium($data);
    
            $expected = "premium";
            $actual = $listingPremium->getStatus();
    
            $this->assertEquals($expected, $actual);    
    
        }


        /** @test */
        function theGetDescriptionMethodReturnsCorrectResult()
        {

    
            $data = ["id" => 1, "title" => "test"];
            $listingPremium = new ListingPremium($data);
    
            $listingPremium->setDescription('dog');
            $expected = 'dog';
            $actual = $listingPremium->getDescription();
    
            $this->assertEquals($expected, $actual);    
    
        }

}