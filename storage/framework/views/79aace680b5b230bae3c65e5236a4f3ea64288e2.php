<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>list</title>
	<style>
		table,th,td{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h1>Users List</h1>
	<table border="2">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php $__currentLoopData = $alfy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<th><?php echo e($alf->name); ?></th>
			<th><?php echo e($alf->email); ?></th>
			<th><?php echo e($alf->phonenumber); ?></th>
			<th><a href="edit/<?php echo e($alf->id); ?>">Edit</a></th>
			<th><a href="delete/<?php echo e($alf->id); ?>">Delete</a></th>

		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<a href="/">Add More</a>

</body>
</html><?php /**PATH /home/ganesan/alfy/resources/views/list.blade.php ENDPATH**/ ?>