 
<?php $__env->startSection('title'); ?> 
	Minha Tela TADS
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('conteudo'); ?> 

<h1>Minha View</h1> 

<?php if(isset($msg)): ?>
	<h2><?php echo e($msg); ?></h2>
<?php endif; ?>
<form method="post"> 
	<?php echo csrf_field(); ?>
	<button type="submit">Enviar</button> 
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\izahR\Desktop\3ano\OO II\3bi\laravel intro\blog\resources\views/tads.blade.php ENDPATH**/ ?>