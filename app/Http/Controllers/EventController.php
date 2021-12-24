<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class EventController extends Controller {
    public function index() {
        $nome = 'Matheus';
        $idade = 40;
        $arr = [10, 20, 30, 40, 50];
        $nomes = ['Jesse', 'Viviane', 'Cauã', 'Cibele', 'Caio',];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Progamador',
            'arr' => $arr,
            'nomes' => $nomes,
        ]);
    }

    public function create() {
        $teste2 = 'meu teste';
        $teste = [
            'nome' => 'JESSE',
            'teste' => $teste2,
            'cpr' => 71390685187,
            'rg' => 2021660,
        ];

        echo "<h1>Deus tudo certo no ". $teste2 ." com o array ". $teste['cpr']."</h1>";
    }
}
