<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpersController extends Controller
{
    public function imoveis(Request $request)
    {
        $resultado = \App\Helpers\Helper::imoveis($request);

        return $resultado;
    }

    public function imagens(Request $request)
    {
        $resultado = \App\Helpers\Helper::imagens($request);

        return $resultado;
    }

    public function dormitorios(Request $request)
    {
        $resultado = \App\Helpers\Helper::dormitorios($request);

        return $resultado;
    }

    public function informacoes(Request $request)
    {
        $resultado = \App\Helpers\Helper::informacoes($request);

        return $resultado;
    }

}
