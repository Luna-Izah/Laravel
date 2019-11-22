 

<?php $__env->startSection('title'); ?> 
	Lista de cidades
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('conteudo'); ?> 
<h1>Cidades</h1> 

	<?php if(session('success')): ?>
		<div class="alert alert-success"><?php echo e(session('success')); ?></div>
	<?php endif; ?>

	<a href="<?php echo e(route('cidades.create')); ?>" class="btn btn-primary">Novo</a>
	<form method="post"> 
		<?php echo csrf_field(); ?> 
		<?php echo method_field('get'); ?> 
		<input type="text" name="pesquisa" class="form-control" size="50" placeholder="Pesquisar Cidade"> 
		<button type="submit" class="btn btn-dark">Pesquisar</button>
		
	</form>
	
	

	<?php if(isset($cidades)): ?> 
		<?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<h2> <?php echo e($cid->nome); ?>

				<a href="<?php echo e(route('cidades.edit',['cidade'=>$cid->id])); ?>" class="btn btn-info">Editar</a>
				
				<a href="<?php echo e(route('cidades.confirm',['cidade'=>$cid->id])); ?>" class="btn btn-danger">Remover</a>
			</h2>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<?php echo e($cidades->links()); ?>


	<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\izahR\Desktop\3ano\OO II\3bi\laravel intro\blog\resources\views/cidade/index.blade.php ENDPATH**/ ?>