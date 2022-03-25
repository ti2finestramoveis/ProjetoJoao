<?php

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/cadastro', 'ProdutosController@CadastrarProdutos');

Route::post('/cadastrar-produto', 'ProdutosController@SalvarProdutoNoBD'); 
    
Route::get('/ver-produto/{id}', 'ProdutosController@VerProduto');

Route::get('produtos/{id}/editar', 'ProdutosController@EditarProduto');

Route::post('/editar-produto/{id}', 'ProdutosController@AtualizarProduto');

Route::get('/excluir-produto/{id}', 'ProdutosController@ExcluirProduto');

Route::get('lista-produtos', 'ProdutosController@ListaProdutos');

Route::get('produtos', 'VendaController@Produtos');

Route::get('produtos/{id}/comprar', 'VendaController@ComprarProduto');
