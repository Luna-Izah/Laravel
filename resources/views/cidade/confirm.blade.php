@extends('layouts.tads') 

@section('title') 
	Confirmar exclus�o
@endsection 

@section ('conteudo') 
<h1>Excluir Cidade</h1> 

<h2>Deseja realmente excluir {{$cidade->nome}} ?</h2>
	<form action="{{route('cidades.destroy',['cidade'=>$cidade->id])}}" method="post"> 
		@method('delete') 
		@csrf 
		<button type="submit" href="" class="btn btn-danger">Sim</button> 
	</form> 
	<a href="{{route('cidades.index')}}"> N�o</a>
	
@endsection
