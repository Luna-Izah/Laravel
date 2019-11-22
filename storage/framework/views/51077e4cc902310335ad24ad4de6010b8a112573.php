 

<?php $__env->startSection('title'); ?> 
	Cadastro de cidades
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('conteudo'); ?> 
	<a href="<?php echo e(route('cidades.index')); ?>" class="btn btn-warning">Voltar</a>
	<form method="post" 
	<?php if(isset($cidade)): ?>
		action="<?php echo e(route('cidades.update',['cidade'=>$cidade->id])); ?>" 
	<?php else: ?>
		action="<?php echo e(route('cidades.store')); ?>"
	<?php endif; ?>
		> 

	<?php if(isset($cidade)): ?>
		<?php echo method_field('put'); ?> 
	<?php endif; ?>
		
		<?php echo csrf_field(); ?> 
		<label>Nome</label>
		<input type="text" name="nome" 
		<?php if(isset($cidade)): ?>
			value="<?php echo e($cidade->nome); ?>" 
		<?php endif; ?>
		class="form-control" size="50" placeholder="Nome">  

		<label>Estado</label>
		<select name="estado_id" class="form-control"> 
			<?php if(isset($estados)): ?> 
				<?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $est): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
					<option 
						<?php if(isset($cidade) && $cidade->estado() && $est->id == $cidade->estado->id): ?> 
							selected
						<?php endif; ?>
					value="<?php echo e($est->id); ?>"><?php echo e($est->nome); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
			<?php else: ?> 
				<?php if(isset($cidade)): ?>
					<option selected value="<?php echo e($cidade->estado->id); ?>"> <?php echo e($cidade->estado->nome); ?></option> 
				<?php endif; ?>
			<?php endif; ?>
		</select> 

		<button type="submit" class="btn btn-dark">Salvar</button>
		
	</form>

	<?php if($errors->any()): ?>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
			<div class="alert alert-danger"><?php echo e($er); ?></div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\izahR\Desktop\3ano\OO II\3bi\laravel intro\blog\resources\views/cidade/create.blade.php ENDPATH**/ ?>