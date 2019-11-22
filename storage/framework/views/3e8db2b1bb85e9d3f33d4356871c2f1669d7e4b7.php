 

<?php $__env->startSection('title'); ?> 
	Lista de estados
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('conteudo'); ?> 
<h1>Estados</h1> 

	<?php if(session('success')): ?>
		<div class="alert alert-success"><?php echo e(session('success')); ?></div>
	<?php endif; ?>

	<a href="<?php echo e(route('estados.create')); ?>" class="btn btn-primary">Novo</a>
	<form method="post"> 
		<?php echo csrf_field(); ?> 
		<?php echo method_field('get'); ?> 
		<input type="text" name="pesquisa" class="form-control" size="50" placeholder="Pesquisar Estado"> 
		<button type="submit" class="btn btn-dark">Pesquisar</button>
		
	</form>
	
	

	<?php if(isset($estados)): ?> 
		
		<?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $est): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<h2> <?php echo e($est->nome); ?>

				<a href="<?php echo e(route('estados.edit',['estado'=>$est->id])); ?>" class="btn btn-info">Editar</a>
				<h5><?php echo e($est->cidades()->count()); ?> cidade(s) cadastradas.</h5>
				<a href="<?php echo e(route('estados.confirm',['estado'=>$est->id])); ?>" class="btn btn-danger">Remover</a>
			</h2>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<?php echo e($estados->links()); ?>


	<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\izahR\Desktop\3ano\OO II\3bi\laravel intro\blog\resources\views/estado/index.blade.php ENDPATH**/ ?>