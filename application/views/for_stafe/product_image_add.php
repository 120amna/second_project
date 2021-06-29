<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?= $id; ?>
<?= form_open_multipart('admin/upload_image'); ?>
<?= form_hidden('product_id',$id); ?>
  <?= form_label('UPLOAD IMAGE'); ?>:-
<?php echo form_upload(['name'=>'userfile']); ?><br><br>
<?php if(isset($upload_error)){ echo $upload_error; }; ?>
<?= form_submit(['type'=>'submit','value'=>'SUBMIT']); ?>
</body>
</html>