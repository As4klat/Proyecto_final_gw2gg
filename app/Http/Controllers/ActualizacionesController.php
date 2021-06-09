<?php

namespace App\Http\Controllers;

use App\Models\Actualizaciones;
use Carbon\Carbon;
use Exception;
use Goutte\Client;

class ActualizacionesController extends Controller
{
    public function index(Client $client)
    {
        try {
            $crawler = $client->request('GET', 'https://www.guildwars2.com/es/news/');

            $crawler->filter("[class='blog-post']")->each(function($blogNode){
                $title = $blogNode->filter('[class="hd"]')->text();
                $meta = $blogNode->filter('[class="meta"]')->text();
                $preview = $blogNode->filter('[class="bd"]')->text();
    
                $newUrl = $blogNode->filter('[class="hd"]')->children()->children()->attr('href');
    
                if(!Actualizaciones::where('title', $title)->exists())
                {
                    $newclient = new Client;   
                    $newcrawler = $newclient->request('GET', "$newUrl");
                    
                    $nodo = $newcrawler->filter('[class="blog-post screenshots media-listing"]');
    
                    $url = strtr($title, " ", "-");
                    $url = strtolower($url);
    
                    Actualizaciones::create([
                        'title' => $title,
                        'url' => $url,
                        'meta' => $meta,
                        'preview' => $preview,
                        'body' => $nodo->html()
                    ]);
                }
                else
                {
                    throw new Exception('División por cero.');
                }
            });
        }
        catch(Exception $e){
            
        }

        $actualizaciones = Actualizaciones::orderBy('id')->paginate(8);
        return view('actualizaciones.index', compact('actualizaciones'));
    }

    public function show(Actualizaciones $actualizacion)
    {
        return view('actualizaciones.show', [
            'actualizacion' => $actualizacion
        ]);
    }
}
