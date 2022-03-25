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
                    <table class="table table-hover" width="100%" id="ListBanco">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Promoção</th>
                            <th scope="col">Valor da Promoção</th>
                            <th scope="col">Opções</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($produto as $produtos)
                            <tr>
                                <td>{{$produtos->Nome}}</td>
                                <td>{{$produtos->valor}}</td>
                                <td>{{$produtos->Estoque}}</td>
                                <td>
                                    @if($produtos->promocao == 'S')
                                    <span class="badge badge-pill badge-success">Promoção</span>
                                    @endif
                                </td>
                                <td>{{$produtos->promocaovalor}}</td>
                                <td><a href="{{url('produtos/'.$produtos->id.'/editar')}}" class="btn" style="background-color: rgb(24, 165, 141)">Editar</a></td>
                            </tr>
                            <!-- Modal -->
                            @endforeach
                        </tbody>
                    </table>
                </div>                    
             </div>
        </div>
    </div>
@endsection
