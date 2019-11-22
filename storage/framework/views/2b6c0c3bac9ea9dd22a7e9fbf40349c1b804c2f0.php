<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt-BR">
 <head>
  <title> <?php echo e(config('app.name')); ?> <?php echo $__env->yieldContent('title','Minha App'); ?> </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style type="text/css"> 
	<?php echo $__env->yieldContent('custom-style'); ?> 
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
		<?php echo $__env->yieldContent('conteudo'); ?>
	</div> 
	<footer> 
		Powered by Tads / SA
	</footer> 
	
</body>
</html>
<?php /**PATH C:\Users\izahR\Desktop\3ano\OO II\3bi\laravel intro\blog\resources\views/layouts/tads.blade.php ENDPATH**/ ?>