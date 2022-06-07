<ul class="nav nav-tabs">
	<li class="nav-item "><a href="<?php echo URL_BASE; ?>/product/showAll" class="nav-link active">ShowAll</a></li>
	<li class="nav-item"><a href="<?php echo URL_BASE; ?>/product/add" class="nav-link" >Add</a></li>
</ul>
<br/>

<table class="table table-striped table-bordered table-hover align-middle">
	<thead class="table-dark">
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price (euro)</th>
			<th>Update</th>
		</tr>
	</thead>
	<tbdody>
		<?php foreach ($data['products'] as $product) : ?>
			<tr>
				<td><?php echo $product['name'] ?></td>
				<td><?php echo $product['qty'] ?></td>
				<td><?php echo $product['price'] ?></td>
				<td><a href="<?php echo URL_BASE ?>/product/edit/<?php echo $product['id'] ?>" class="btn btn-primary">Edit</a> <a href="<?php echo URL_BASE ?>/product/delete/<?php echo $product['id'] ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-primary" >Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</tbdody>
</table>