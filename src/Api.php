<?php

namespace Flori\CssTd2;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class Api
{
    public function httpRequest()
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://figurineharrypotter.com/liste-personnages'
        );
        $content = $response->getContent();

        $html = $content;

        $crawler = new Crawler($html);
        $crawler->filter('.fiche > h2 > a')->each(function (Crawler $node, $i){
            var_dump($node->text());
        });



    }
}