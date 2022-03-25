@extends('adminlte::page')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Session::has('mensagem_erro'))
                <div class="alert alert-danger">{{Session::get('mensagem_erro')}}</div>
            @endif

            @if (Session::has('mensagem_sucesso'))
                <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
            @endif

            <div class="card" style="padding: 25px; margin-top:20px">
                <h4>
                    <div class="card-header" style="background-color: rgb(11, 143, 195);color:white">
                        Cadastrar Novo Produto
                    </div>
                </h4>
                <form action="cadastrar-produto"method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome do Produto</label>
                            <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome do Produto">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Quantidade</label>
                            <input type="number" name="estoque" class="form-control" id="inputPassword4" placeholder="Quantidade">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Valor do Produto</label>
                            <input type="text" name="valor" class="form-control" id="inputAddress" placeholder="Valor do Produto">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Imagem do Produto</label>
                            <input type="file" name="imagem" class="form-control" id="inputAddress" placeholder="Imagem do Produto">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Descrição do Produto</label>
                            <input type="text" name="descricao" class="form-control" id="inputAddress" placeholder="Descrição do Produto">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Produto em Promoção ?</label>
                            <div class="form-check" >
                                <input onClick="habilitacao()" class="form-check-input" type="checkbox"  name="promocao" value="S" id="flexCheckChecked">
                               
                            </div>
                        </div>
                        <script language="javascript">
                            function habilitacao(){

                                if(document.getElementById('flexCheckChecked').checked == true){

                                    document.getElementById('promocaovalor').disabled = false;  
                                }
                                if(document.getElementById('flexCheckChecked').checked == false){
                                    document.getElementById('promocaovalor').disabled = true;
                                }
                            }
                        </script>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Valor do Produto na Promoção</label>
                            <input type="text" name="promocaovalor" class="form-control" id="promocaovalor" disabled placeholder="Valor do Produto com o desconto">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Produto</button>
                  </form>
             </div>
        </div>
    </div>
@endsection