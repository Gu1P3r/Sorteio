@extends("layout.app")

@section("content")
<div class="cadastro">

	<br />

	<a class="nav-link" href=" ../home" style="padding:1em; font-size:20px; margin-left: 840px;">Voltar para Página Inicial</a>

	<div class="fomulario">
	<form method="POST" action="/pessoa/salvar" enctype="multipart/form-data">

		<input type="hidden" name="_token" value ="{{ csrf_token() }}" />
		
		<div class="form-group">
			<label for="nome" style="font-size:20px; color:black;">Nome da Empresa ou Pessoa:</label>
			<input type="text" id="nome" name="nome" class="form-control" value="{{ $pessoa->nome }}" style="height:50px;" required="required"/><span class="required"></span>
			
		</div>
		
		<br />

		<div class="form-group">
			<label for="image" style="font-size:20px; color:black;">Logo:</label>
			<input type="file" id="image" name="image" class="form-control" style="height:50px;"/>
		</div>
		
		<input type="hidden" name="id" value="{{ $pessoa->id }}" />
		
		<br />
		<br />

		<button type="submit" class="btn btn-primary btn-block" style = "background: #05010E; height:50px; width:500px; font-size: 18px; margin-left:300px;">Salvar</button>

		</div>
	</form>
	
</div>

<style>
.table{
	background-color: #0d5a17fa;
}

.listagem{
	border: solid 3px;
	border-color:#0d5a17fa;
	padding:3em;
	font-size: 20px;
	color:black;
    padding:1.5em;
}
</style>
@endsection