@extends('layouts.tads') 

@section('title') 
	Lista de estados
@endsection 

@section ('conteudo') 
<h1>Estados</h1> 
	
	<form method="post"> 
		@csrf 
		@method('get') 
		<input type="text" name="pesquisa" class="form-control" size="50" placeholder="Pesquisar Estado"> 
		<button type="submit" class="btn btn-dark">Pesquisar</button>

	</form>

	@if(isset($estados)) 
		
		@foreach($estados as $est)
			<h2> {{$est->nome}} </h2>
		@endforeach

		{{$estados->links()}}

	@endif

@endsection
