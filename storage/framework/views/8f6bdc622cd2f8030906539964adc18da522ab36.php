 

<?php $__env->startSection('title'); ?> 
	Cadastro de estados
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('conteudo'); ?> 
	<a href="<?php echo e(route('estados.index')); ?>" class="btn btn-warning">Voltar</a>
	<form method="post" 
	<?php if(isset($estado)): ?>
		action="<?php echo e(route('estados.update',['estado'=>$estado->id])); ?>" 
	<?php else: ?>
		action="<?php echo e(route('estados.store')); ?>"
	<?php endif; ?>
		> 

	<?php if(isset($estado)): ?>
		<?php echo method_field('put'); ?> 
	<?php endif; ?>
		
		<?php echo csrf_field(); ?> 
		<label>Nome</label>
		<input type="text" name="nome" 
		<?php if(isset($estado)): ?>
			value="<?php echo e($estado->nome); ?>" 
		<?php endif; ?>
		class="form-control" size="50" placeholder="Nome">  

		<label>Sigla</label>
		<input type="text" required="required" name="sigla" 
		<?php if(isset($estado)): ?>
			value="<?php echo e($estado->sigla); ?>" 
		<?php endif; ?>
		class="form-control" size="50" placeholder="Sigla"> 

		<button type="submit" class="btn btn-dark">Salvar</button>
		
	</form>

	<?php if($errors->any()): ?>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
			<div class="alert alert-danger"><?php echo e($er); ?></div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\izahR\Desktop\3ano\OO II\3bi\laravel intro\blog\resources\views/estado/create.blade.php ENDPATH**/ ?>