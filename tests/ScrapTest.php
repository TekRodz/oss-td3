<?php

use Tekro\OssTd3\Scrap;
use PHPUnit\Framework\TestCase;

class ScrapTest extends TestCase
{
    public function testGetStarWarsCharacters()
    {
        $scrap = new Scrap();
        $this->assertIsArray($scrap->getStarWarsCharacters());

        foreach($scrap->getStarWarsCharacters() as $swchar){
            $this->assertIsString($swchar);
        }
    }
}