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
                        Lista Produtos
                    </div>
                </h4>
                <div class="panel-body">
           
                    

           
                    <div class="row">
                        <div class="card col-md-3">
                            <img class="card-img-top" width="70" height="250" src="../../../public/img_produtos/{{$produto->imagem}}" alt="Imagem de capa do card">
                        </div>  
                        <p class="card-text"><h4><b>{{$produto->Nome}}</b></h4></p>
                        <div>
                        <p class="card-text"><h4><b>sssssR$ {{$produto->valor}}</b>
                        </div>
                        <div>
                            <p class="cont">{{$produto->descricao}}</p>
                         </div>
                            <div class="float-right">
                            <a type="button" href="{{url('produtos/'.$produto->id.'/comprar')}}" class="btn btn-outline-info">Comprar</a>
                            </div>
                        </div>  
                        </h4>
                        </p>
                    </div>
                </div>                    
             </div>
        </div>
    </div>

@endsection
