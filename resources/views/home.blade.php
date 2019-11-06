@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <br />
        <br />
            <div class="card" style="background: #EAEAEA">
                <div class="card-header" style="font-size:25px; background: #05010E; color: white">Bem-vindo ao Evento !!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="nav-link" href=" ../pessoa/index" style="padding:1em; font-size:20px; ">Cadastrar as Empresas e Pessoas participantes do Sorteio</a>

                    <hr style="border-color: #05010E"/>

                    <a class="nav-link" href=" ../pessoa/listagem" style="padding:1em; font-size:20px;">Lista de Empresas e Pessoas já cadastradas</a>

                    <hr style="border-color: #05010E"/>

                    <a class="nav-link" href=" ../pedra/index" style="padding:1em; font-size:20px;">Sorteio</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
