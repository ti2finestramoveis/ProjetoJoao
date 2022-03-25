<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;
use Redirect;

class ProdutosController extends Controller
{
    public function CadastrarProdutos(){

        return view('produtos.cadastrar');
    }

    public function SalvarProdutoNoBD(Request $request){

        // echo($request->promocao);
        // return;

        if ($request->imagem) {
            // Define um aleatório para o arquivo baseado no timestamps atual
            $requestImage = $request->imagem;

            // Recupera a extensão do arquivo
            $extension = $requestImage->extension();

            // Define finalmente o nome
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $request->imagem->move(public_path('img_produtos'), $imageName);

            $produto = new Produto();

            $produto = $produto->create(
                [
                    'imagem'=> $imageName,
                    'nome' => $request->nome,
                    'valor' => $request->valor,
                    'estoque' => $request->estoque,
                    'descricao' => $request->descricao,
                    'promocaovalor' =>$request->promocaovalor,
                    'promocao' => $request->promocao
                ]
            );

            \Session::flash('mensagem_sucesso','Produto cadastrado com sucesso!');

            return Redirect::to('cadastro');

        } else {

            \Session::flash('mensagem_erro','Ocorreu algum erro ao cadastrar o produto!');

            return Redirect::to('cadastro');
        }

    }
    
    public function VerProduto($id){
        $produto = Produto::find($id);
        return view('produtos.ver',['produto' => $produto]);
    }

    public function EditarProduto($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.editar',['produto' => $produto]);
        
        echo "Produto editado com sucesso";
    }

    public function AtualizarProduto(Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
        ]);
        echo "Produto atualizado com sucesso";
    }

    public function ExcluirProduto(Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        echo "Produto excluído com sucesso";
    }

    public function ListaProdutos(){
        $produto = Produto::get();
        return view('produtos.listaprodutos', ['produto' => $produto]); 
    }
}

