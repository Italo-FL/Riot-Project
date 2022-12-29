<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navController extends Controller
{
    public function index($nav = ''){
        $riot = ["Sobre a Riot", "Diversidade-e-Inclusão", "Impacto-Social"];
        $lol = ["Noticias", "Campeões", "Sobre-o-Jogo-lol"];
        $lor = ["Noticias","Cartas", "Sobre-o-Jogo-lor"];
        $tft = ["Noticias","Personagens", "Sobre-o-Jogo-tft"];
        $vava = ["Noticias","Agentes", "Sobre-o-Jogo-valorant"];
        return view($nav,['arr' => $riot]);
        if ($nav === ''){
            return view($nav,['arr' => $riot]);
        }

        elseif (in_array($nav, $riot)) {
        
            return view($nav,['arr' => $riot]);
        }

        elseif (strpos($nav, "League-of-Legends") === True){
            return view($nav,['arr' => $lol]);
        }

        elseif (strpos($nav, "Legends-of-Runeterra") === True){
            return view($nav,['arr' => $lor]);
        }

        elseif (strpos($nav, "Teamfight-Tatics") === True){
            return view($nav,['arr' => $tft]);
        }

        elseif (strpos($nav, "Valorant") === True){
            return view($nav,['arr' => $vava]);
        }

    }
    
}
