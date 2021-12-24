<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('welcome', ['events' => $events,]);
    }

    public function create()
    {
        $teste2 = 'meu teste';
        $teste = [
            'nome' => 'JESSE',
            'teste' => $teste2,
            'cpr' => 71390685187,
            'rg' => 2021660,
        ];

        echo "<h1>Deus tudo certo no " . $teste2 . " com o array " . $teste['cpr'] . "</h1>";
    }
}
