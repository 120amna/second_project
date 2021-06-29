<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo  validation_errors(); ?>
<?= form_open('admin/login'); ?>
<?= form_label('USER NAME'); ?>
<br><br>
<?= form_input(['type'=>'text','placeholder'=>'USER NAME','name'=>'user']); ?>
<br><br>
<?= form_label('PASSWORD'); ?>
<br><br>
<?= form_input(['type'=>'password','placeholder'=>'PASSWORD','name'=>'pass']); ?>
<br><br>
<?= form_submit(['type'=>'submit','value'=>'Login']); ?>
</body>
</html>