<ul class="nav nav-tabs">
	<li class="nav-item "><a href="" class="nav-link active">Edit</a></li>
	<li class="nav-item "><a href="<?php echo URL_BASE; ?>/product/" class="nav-link">View</a></li>	
	<li class="nav-item"><a href="<?php echo URL_BASE; ?>/product/add" class="nav-link">Add</a></li>
</ul>
<br/>

<form action="<?php echo URL_BASE; ?>/product/update/<?php echo $data['id'];?>" method="post">

	<div class="mb-3">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" value="<?php echo $data['name'];?>">
	</div>

	<div class="mb-3">
		<label for="qty">Quantity</label>
		<input type="number" class="form-control" name="qty" value="<?php echo $data['qty'];?>">
	</div>

	<div class="mb-3">
		<label for="price">Price</label>
		<input type="number" class="form-control" name="price" value="<?php echo $data['price'];?>">
	</div>

	<input type="hidden" name="id" value=<?php echo $data['id'];?>>
	
	<div class="mb-3">
		<input type="submit" value="Update" class="form-control btn btn-primary">
	</div>
</form>