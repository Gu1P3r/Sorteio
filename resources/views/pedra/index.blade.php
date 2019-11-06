@extends("layout.app")

@section("content")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<a class="nav-link" href=" ../home" style="padding:1em; font-size:20px; margin-left: 840px; margin-top:-30px">Voltar para Página Inicial</a>

	<br />

	<div class="col-sm-12" style="margin-top:-10px;">
		<input type="hidden" name="_token" value ="{{ csrf_token() }}"/>

		<div>
			<img width="300px;" height="100px;" src="{{ url('storage/img/RotaryMBS_Cor.jpg') }}" style="margin-top:-30px; margin-left:-110px;"/>	
		</div>

		<br />

		<div class="col-sm-6" style="margin-left: -200px;">
			<div class="card" style="background: #EAEAEA;">
				<div class="card-header" style="font-size:25px; background: #05010E; color: white">Pedras Sorteadas</div>
					<div class="card-body">
						@foreach ($pedras as $pedra)
						<div class="btn-group">
							<button class="btn btn-primary" style = "background-color: #261349; border-color:#05010E; margin-top:5px;  border-radius: 18px; font-size:25px;">
							{{ $pedra->numero }}
							</button>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6" style="margin-left: 715px; margin-top: -250px;">

			<div class="card" style="background: #EAEAEA;">
				<div class="card-header" style="font-size:25px; background: #05010E; color: white">Número da Pedra</div>

					<div class="card-body">
						<div class="cadastro">
							<div class="fomulario">
							<form method="POST" action="/pedra/salvar" enctype="multipart/form-data">
							<input type="hidden" name="_token" value ="{{ csrf_token() }}"/>

								<div class="form-group">
									<label for="numero" style="font-size:18px; color:black;">Digite o Numero da Pedra:</label>
									<input type="number" id="numero" name="numero"  value="{{ $pedra->numero }}" class="form-control" style="height:45px;" required="required"/><span class="required"></span>
								</div>
								
								<input type="hidden" name="id" value="{{ $pedra->id }}" />

								<button type="submit" class="btn btn-primary btn-block" style = "background: #05010E; height:50px; width:500px; font-size: 18px; margin-left:-8px;">Salvar</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6" style="margin-left: 900px; margin-top: -15px;">
			<div class="card" style="background: #EAEAEA;">
				<div class="card-header" style="font-size:25px; background: #05010E; color: white">Ultimo Sorteado</div>
					<div class="card-body" style="text-alignt:center">
						@foreach ($pessoas as $pessoa)
						@if ($pessoa->id == $pedra->numero)
							<img width="350px;" height="180px;" src="{{url('storage/logo/'.$pessoa->image)}}" style="margin-left:73px;" />
							
							<br />

							<label for="numero" style="font-size:20px; color:black; margin-left:170px;">{{ $pessoa->nome }}</label>		
						@endif
						@endforeach		
					</div>

				</div>
			</div>
		</div>
		
	</div>


	
<style>

.table{
    background-color: #BBBABC;
}

.listagem{
    border: solid 3px;
    border-color:#05010E;
    padding:3em;
    font-size: 25px;
    color:black;
    padding:1.5em;
}

.col-sm-6{

	width: 550px;

}
</style>

@endsection