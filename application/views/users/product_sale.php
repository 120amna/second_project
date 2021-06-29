<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if($this->session->userdata('id'))
	{
		echo anchor('admin/user_logout','LOGOUT');
	} ?>
<?=  print_r($sale_data); ?> 
<!-- <?= $productdata['price']; ?>   -->
<div style="float: left;"> 
<?= form_open('admin/product_sale_list');  ?>
<?= form_hidden('product_name','laptop'); ?>
<?= form_hidden('product_price','12000'); ?>
<img src="">
<p>price:-12000</p>
<?= form_submit(['type'=>'submit','value'=>'Add Chart']) ?>
 </div>
<!--  <div style="float: left;  margin-left: 20px;"> 
<?= form_open('admin/product_sale_list');  ?>
<?= form_hidden('product_name','tab'); ?>
<?= form_hidden('product_price','13000'); ?>
<img src="">
<p>price:-12000</p>
<?= form_submit(['type'=>'submit','value'=>'Add Chart']) ?>
 </div>
 <div style="float: left; margin-left: 20px;"> 
<?= form_open('admin/product_sale_list');  ?>
<?= form_hidden('product_name','lcd'); ?>
<?= form_hidden('product_price','14000'); ?>
<img src="">
<p>price:-12000</p>
<?= form_submit(['type'=>'submit','value'=>'Add Chart']) ?>
 </div> -->
</body>
</html>