<?php

namespace App\Http\Controllers;

use App\Responses\ApiResponse;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function salvar()
    {

    }

    public function listar()
    {
        //return response()->json(["nome" => "Lucas"], 200);
        return ApiResponse::success(data: ["nome" => "Lucas"]);
    }

    public function editar(int $id)
    {

    }

    public function excluir(int $id)
    {

    }
}
