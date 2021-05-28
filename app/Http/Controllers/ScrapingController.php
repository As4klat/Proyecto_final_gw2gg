<?php

namespace App\Http\Controllers;
use App\Models\Actualizaciones;
use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingController extends Controller
{
    public function escraping(Client $client)
    {
        $crawler = $client->request('GET', 'https://www.guildwars2.com/es/news/');

        $nodos = $crawler->filter('[class="blog-post"]');
        $title = $nodos->filter('[class="hd"]')->text();
        $meta = $nodos->filter('[class="meta"]')->text();
        $preview = $nodos->filter('[class="bd"]')->text();

        $newUrl = $nodos->filter('[class="hd"]')->children()->children()->attr('href');

        if(!Actualizaciones::where('title', $title)->exists())
        {
            $crawler = $client->request('GET', "$newUrl");

            $nodos = $crawler->filter('[id="commerce-items"]');

            $url = strtr($title, " ", "-");
            $url = strtolower($url);

            Actualizaciones::create([
                'title' => $title,
                'url' => $url,
                'meta' => $meta,
                'preview' => $preview,
                'body' => $nodos->html()
            ]);

        }

        /*
        $crawler->filter("[class='$inlineBlogStyles']")->each(function($blogNode){
            $title = $blogNode->filter('[class="hd"]');
            $meta = $blogNode->filter('[class="meta"]');
            $preview = $blogNode->filter('[class="bd"]');
            if(!Actualizaciones::where('title', $title->text())->exists())
            {
                Actualizaciones::create([
                    'title' => $title->text(),
                    'meta' => $meta->text(),
                    'preview' => $preview->text(),
                    'body' => 'hola'
                ]);
            }
            else
            {
                echo 'no se ha guardado'.'<br>';
            }
        });
        */
    }
}
