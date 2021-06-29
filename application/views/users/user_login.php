<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo  validation_errors(); ?>
<?= form_open('admin/user_login'); ?>
<?= form_label('USER NAME'); ?>
<br><br>
<?= form_input(['type'=>'text','placeholder'=>'USER NAME','name'=>'username']); ?>
<br><br>
<?= form_label('PASSWORD'); ?>
<br><br>
<?= form_input(['type'=>'password','placeholder'=>'PASSWORD','name'=>'password']); ?>
<br><br>
<?= form_submit(['type'=>'submit','value'=>'Login']); ?>
</body>
</html>