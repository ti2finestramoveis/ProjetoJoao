<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function produtos(){
        $produto = Produto::get();
        return view('vendas.listaprodutos', ['produto' => $produto]); 
    }

    public function ComprarProduto($id){

        $produto = Produto::where('id', $id)->first();
     
     

        return view('vendas.detalhesproduto', ['produto' => $produto]);
    }
}
