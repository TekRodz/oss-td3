<?php

declare(strict_types=1);

namespace Tekro\OssTd3;

use Symfony\Component\DomCrawler\Crawler;

class Scrap {

    public function getStarWarsCharacters(): array
    {
        $res = [];

        $html = (string)file_get_contents("https://www.starwars-holonet.com/encyclopedie/liste-personnages.html");
            
        $crawler = new Crawler($html);
        $crawler = $crawler->filter('.lstv2_nom');
    
        foreach($crawler as $domElement){
            array_push($res, $domElement->nodeValue);
        }
        
        return $res;
    }
}