<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?= print_r($product_data); ?>
<?= anchor('user/add_product','ADD PRODUCT'); ?> 
<?= anchor('admin/logout','LOGOUT'); ?> 
<table>
	<tr>
		<th>SR NO</th>
		<th>PRODUCTS</th>
		<th>QUNTITY</th>
		<th colspan="2">ACTION</th>
	</tr>
	<?php if(count($product_data)): $x=0; ?>
		<?php foreach($product_data as $data):  ?>
	<tr>
		<td><?= ++$x; ?></td>
		<td><?= $data->iteams; ?></td>
		<td><?= $data->qty; ?></td>
		<td><?= anchor('admin/product_user_id/'.$data->id,'ADD IMAGE'); ?></td>
		<td><?= anchor('admin/edit/'.$data->id,'EDIT'); ?></td>
		<td><?= anchor('admin/del/'.$data->id,'DELETE'); ?></td>
	</tr>
<?php endforeach; ?>
<?php endif; ?>
</table>
</body>
</html>