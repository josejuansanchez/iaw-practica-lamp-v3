<ul class="nav nav-tabs">
	<li class="nav-item"><a href="index.php" class="nav-link" >Home</a></li>
	<li class="nav-item "><a href="view.php" class="nav-link active">View</a></li>	
	<li class="nav-item"><a href="add.php" class="nav-link" >Add</a></li>
	<li class="nav-item"><a href="logout.php" class="nav-link" >Logout</a></li>
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
		<?php foreach ($products as $product) : ?>
			<tr>
				<td><?php echo $product['name'] ?></td>
				<td><?php echo $product['qty'] ?></td>
				<td><?php echo $product['price'] ?></td>
				<td><a href="edit.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">Edit</a> <a href="delete.php?id=<?php echo $producto['id'] ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-primary" >Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</tbdody>
</table>