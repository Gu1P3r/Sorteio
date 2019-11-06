@extends("layout.app")

@section("content")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<br />
	<br />

	<a class="nav-link" href=" ../pedra/index" style="padding:1em; font-size:20px;">Continuar com o Cadastro de Pedras</a>

	<a class="nav-link" href=" ../home" style="padding:1em; font-size:20px; margin-left: 840px;">Voltar para Página Inicial</a>

	<br />
	<br />

	<table class="table table-striped">
		<thead >
			<tr>
				<th style ="background-color: #05010E; color:white">Número da Pedra</th>
				<th style ="background-color: #05010E; color:white"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pedras as $pedra)
				<tr>
					<td>
						{{ $pedra->numero }}
					</td>
					<td>
						<a href="/pedra/excluir?id={{ $pedra->id }}" onclick="return confirm('Deseja realmente excluir?');">Excluir</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
<style>

.table{
    background-color: #BBBABC;
}

.listagem{
    border: solid 3px;
    border-color:#05010E;
    padding:3em;
    font-size: 20px;
    color:black;
    padding:1.5em;
}
</style>

@endsection