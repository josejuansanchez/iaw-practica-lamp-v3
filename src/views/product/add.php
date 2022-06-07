<ul class="nav nav-tabs">
	<li class="nav-item "><a href="<?php echo URL_BASE; ?>/product/showAll" class="nav-link">ShowAll</a></li>	
	<li class="nav-item"><a href="<?php echo URL_BASE; ?>/product/add" class="nav-link active">Add</a></li>
</ul>
<br/>

<form action="<?php echo URL_BASE; ?>/product/insert" method="post">
	<div class="mb-3">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name">
	</div>

	<div class="mb-3">
		<label for="qty">Quantity</label>
		<input type="number" class="form-control" name="qty">
	</div>

	<div class="mb-3">
		<label for="price">Price</label>
		<input type="number" class="form-control" name="price">
	</div>

	<div class="mb-3">
		<input type="submit" value="Add" class="form-control btn btn-primary">
	</div>
</form>

<?php if ($status == "error") : ?>
<div class="alert alert-danger" role="alert">
    <?php echo $message; ?>
</div>
<?php endif; ?>

<?php if ($status == "success") : ?>
<div class="alert alert-success" role="alert">
	<?php echo $message; ?>
</div>
<?php endif; ?>