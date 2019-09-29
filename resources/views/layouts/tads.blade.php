<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt-BR">
 <head>
  <title> {{ config('app.name') }} @yield('title','Minha App') </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style type="text/css"> 
	@yield('custom-style') 
  </style>

  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  
	<nav> 
		<ul>
			<li><a href="/">Home</a></li>
		</ul>
	</nav>
	<div class="conteudo"> 
		@yield('conteudo')
	</div> 
	<footer> 
		Powered by Tads / SA
	</footer> 
	
</body>
</html>
