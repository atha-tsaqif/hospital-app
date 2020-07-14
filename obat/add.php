<?php 
include_once('../_header.php');
?>

<div class="box">
	<h1 class="h3 mb-0 text-gray-800 mb-4">Add New Medicine</h1>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama">Name</label>
					<input type="text" id="nama" name="nama" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="ket">Information</label>
					<textarea id="ket" name="ket" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<a href="data.php" class="btn btn-danger">Cancel</a>
					<input type="submit" name="add" value="Add Medicine" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once('../_footer.php'); ?>