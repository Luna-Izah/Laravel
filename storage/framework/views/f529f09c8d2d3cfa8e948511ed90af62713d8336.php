 

<?php $__env->startSection('title'); ?> 
	Confirmar exclusão
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('conteudo'); ?> 
<h1>Excluir Cidade</h1> 

<h2>Deseja realmente excluir <?php echo e($cidade->nome); ?> ?</h2>
	<form action="<?php echo e(route('cidades.destroy',['cidade'=>$cidade->id])); ?>" method="post"> 
		<?php echo method_field('delete'); ?> 
		<?php echo csrf_field(); ?> 
		<button type="submit" href="" class="btn btn-danger">Sim</button> 
	</form> 
	<a href="<?php echo e(route('cidades.index')); ?>"> Não</a>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\izahR\Desktop\3ano\OO II\3bi\laravel intro\blog\resources\views/cidade/confirm.blade.php ENDPATH**/ ?>