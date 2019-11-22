@extends('layouts.tads') 

@section('title') 
	Lista de estados
@endsection 

@section ('conteudo') 
<h1>Estados</h1> 

	@if(session('success'))
		<div class="alert alert-success">{{session('success')}}</div>
	@endif

	<a href="{{route('estados.create')}}" class="btn btn-primary">Novo</a>
	<form method="post"> 
		@csrf 
		@method('get') 
		<input type="text" name="pesquisa" class="form-control" size="50" placeholder="Pesquisar Estado"> 
		<button type="submit" class="btn btn-dark">Pesquisar</button>
		
	</form>
	
	

	@if(isset($estados)) 
		
		@foreach($estados as $est)
			<h2> {{$est->nome}}
				<a href="{{route('estados.edit',['estado'=>$est->id])}}" class="btn btn-info">Editar</a>
				<h5>{{$est->cidades()->count()}} cidade(s) cadastradas.</h5>
				<a href="{{route('estados.confirm',['estado'=>$est->id])}}" class="btn btn-danger">Remover</a>
			</h2>
		@endforeach

		{{$estados->links()}}

	@endif

@endsection
