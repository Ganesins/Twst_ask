<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
	<style>
		span{color: red};
	</style>
</head>
<body>
		<form method="post" action="<?php echo e(url('update/'.$alf->id)); ?>">
		<?php echo csrf_field(); ?>
	<h1>Edit Details</h1>
	Name:<input type="text" name="name" value="<?php echo e($alf->name); ?>"><br>
	<span><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br>
	Email:<input type="text" name="email" value="<?php echo e($alf->email); ?>"><br>
	<span><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br>
	Phone:<input type="number" name="phone" value="<?php echo e($alf->phonenumber); ?>"><br>
	<span><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
	<input type="submit" name="" value="save">
</form>
<a href="/">Add NEw</a>

</body>
</html><?php /**PATH /home/ganesan/alfy/resources/views/edit.blade.php ENDPATH**/ ?>