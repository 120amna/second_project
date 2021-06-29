<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="float: left;">
<table>
	<tr>
		<th>SR.NO</th>
		<th>PRODUCT</th>
		<th>QUNTITY</th>
		<th>PRICE</th>
		<th>TOTAL PRICE</th>
		<th>ACTION</th>
	</tr>
  
		<tr>
		<td></td>
		<td></td>
		<td>
			<input type="number" name="" min="1" max="10">
		</td>
		<td></td>
		<td></td>
		<td><?= anchor('#','REMOVE');?></td>
	</tr>
</table> 
</div>

<div style="float:left; margin-left:20px; border:2px solid black; height:150px; width:170px;">
	<h4 style="margin-top:2px; text-align: center;">TOTAL AMOUNT</h4>
 <input type="radio" checked="checked" name="radio" style="margin-left:20px; ">:Cash no delivery<br><br>
 <input type="radio" checked="checked" name="radio" style="margin-left:20px;">:Cridet card<br><br>
 <button style="width:96%; margin-left:3px;">Make Purchase</button>
</div>
</body>
</html>