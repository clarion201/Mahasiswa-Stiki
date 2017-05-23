<?php 

include('koneksi.php'); 
$id = $_GET['id'];
$sql = mysqli_query($connect_database,"SELECT * FROM mata_kuliah WHERE KodeMK='$id'");
$row = mysqli_fetch_array($sql);

?>
<link rel="stylesheet" href="bootstrap.min.css">
	
<div class="container">
	<h3>Edit</h3>
	<form class="form-horizontal pull-left" method="post" action="prosesedit.php" style="margin-top: 30px">
		<div class="form-body">
			<div class="form-group">
				<label class="control-label col-md-3">KodeMK</label>
				<div class="col-md-9">
					<input type="text" name="Kode_MK" class="form-control" value="<?php echo $id ?>" readonlu>	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Nama_MK</label>
				<div class="col-md-9">
					<input type="text" name="Nama_MK" class="form-control" value="<?php echo $row['Nama_MK'] ?>">	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Kelas</label>
				<div class="col-md-9">
					<input type="text" name="Kelas" class="form-control" value="<?php echo $row['Kelas'] ?>">	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Jam</label>
				<div class="col-md-9">
					<input type="text" name="Jam" class="form-control" value="<?php echo $row['Jam'] ?>">	
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					<button class="btn btn-primary" type="submit">Edit</button>					
				</div>
			</div>
		</div>
	</form>
</div>
