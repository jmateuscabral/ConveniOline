<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class convenio_solicitacaoController extends Controller
{
    public function show() {
        return view('convenio_solicitacao');
    }

    public function enviar(Request $dados) {
        return view('inicio');
    }
}