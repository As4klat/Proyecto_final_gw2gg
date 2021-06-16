<?php
use Carbon\CarbonInterval;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}

function useApiKey($apiKey){
    if ($apiKey !== null)
    {
        $url_acount = 'https://api.guildwars2.com/v2/account?access_token='.$apiKey;
        $acount = file_get_contents($url_acount);
        $acount = json_decode($acount);
        $acount->age = conversorSegundosHoras($acount->age);
        $acount->world = world($acount->world);
        $acount->guilds = guilds($acount->guilds);
    }
    else
    {
        $acount = null;
    }
    return $acount;
}

function conversorSegundosHoras($tiempo_en_segundos) {
    return CarbonInterval::seconds($tiempo_en_segundos)->cascade()->forHumans();
}

function world($id_world)
{
    $url_world = 'https://api.guildwars2.com/v2/worlds/'.$id_world.'?lang=es';
    $world = file_get_contents($url_world);
    $world = json_decode($world);
    return $world->name;
}

function guilds($id_guilds){
    $guilds = new ArrayObject;
    foreach ($id_guilds as $id_guild)
    {
        $url_guild = 'https://api.guildwars2.com/v2/guild/'.$id_guild;
        $guild = file_get_contents($url_guild);
        $guild = json_decode($guild);
        $guilds->append($guild);
    }
    
    return $guilds;
}