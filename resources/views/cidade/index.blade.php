@extends('layouts.tads') 

@section('title') 
	Lista de cidades
@endsection 

@section ('conteudo') 
<h1>Cidades</h1> 

	@if(session('success'))
		<div class="alert alert-success">{{session('success')}}</div>
	@endif

	<a href="{{route('cidades.create')}}" class="btn btn-primary">Novo</a>
	<form method="post"> 
		@csrf 
		@method('get') 
		<input type="text" name="pesquisa" class="form-control" size="50" placeholder="Pesquisar Cidade"> 
		<button type="submit" class="btn btn-dark">Pesquisar</button>
		
	</form>
	
	

	@if(isset($cidades)) 
		@foreach($cidades as $cid)
			<h2> {{$cid->nome}}
				<a href="{{route('cidades.edit',['cidade'=>$cid->id])}}" class="btn btn-info">Editar</a>
				
				<a href="{{route('cidades.confirm',['cidade'=>$cid->id])}}" class="btn btn-danger">Remover</a>
			</h2>
		@endforeach

		{{$cidades->links()}}

	@endif

@endsection
