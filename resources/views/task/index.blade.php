@extends('layouts.tads') 

@section('title') 
	Lista de tarefas
@endsection 

@section ('conteudo') 
<h1>Tarefas</h1> 
	
	<form method="post"> 
		@csrf 
		@method('get') 
		<input type="text" name="pesquisa" class="form-control" size="50" placeholder="Pesquisar tarefas"> 
		<button type="submit" class="btn btn-dark">Pesquisar</button>

	</form>

	@if(isset($task)) 
		
		@foreach($task as $tk)
			<h2> {{$tk->descricao}} </h2>
		@endforeach

		{{$task->links()}}

	@endif

@endsection
