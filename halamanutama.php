<?php
include('koneksi.php');

$batas = 5; 
$page = isset($_GET['page']) ? $_GET['page'] : ""; 
 

if(empty($page)) {
	$posisi = 0;
	$page = 1;
} else {
	$posisi = ( $page - 1 ) * $batas;
}


$sql = "SELECT * FROM mata_kuliah limit $posisi, $batas";
$no = 1+$posisi;
$res = mysqli_query($connect_database,$sql);

if(mysqli_num_rows($res) > 0) { ?>
	<link rel="stylesheet" href="bootstrap.min.css">
	
	<div class="container" style="margin-top: 40px">
		<a class="btn btn-primary" href="insert.php">Masukkan Data</a>
		<table class="table" style="margin-top: 30px">
			<tr>
				<th>No</th>
				<th>KodeMK</th>
				<th>Nama_MK</th>
				<th>Kelas</th>
				<th>Jam</th>
			</tr>		
			<?php
				while($row = mysqli_fetch_assoc($res)) {
					echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$row['KodeMK']."</td>";
						echo "<td>".$row['Nama_MK']."</td>";
						echo "<td>".$row['Kelas']."</td>";
						echo "<td>".$row['Jam']."</td>";
						echo '<td>
							  <a class="btn btn-info" href="edit.php?id='.$row['KodeMK'].'">Edit</a>
							  <a class="btn btn-danger" href="prosesdelete.php?id='.$row['KodeMK'].'">Delete</a>
							  </td>';
					echo "</tr>";	
					$no++;
				}
			?>
		</table>
		<?php
			
			$sql1 = "SELECT * FROM mata_kuliah";
			$res2 = mysqli_query($connect_database,$sql1);
			$jml_data = mysqli_num_rows($res2);
			
			
			$JmlHalaman = ceil($jml_data / $batas); // ceil digunakan untuk pembulatan keatas
			 
			
			if ( $page > 1 ) {
				$link = $pg-1;
				$prev = "<a href='?pg=$link'>Sebelumnya </a>";
			} else {
				$prev = "Sebelumnya ";
			}
			 
			
			$nmr = '';
			for ( $i = 1; $i<= $JmlHalaman; $i++ ){
				if ( $i == $page ) {
					$nmr .= $i . " ";
				} else {
					$nmr .= "<a href='?pg=$i'>$i</a> ";
				}
			}
			 
			
			if ( $page < $JmlHalaman ) {
				$link = $pg + 1;
				$next = " <a href='?pg=$link'>Selanjutnya</a>";
			} else {
				$next = " Selanjutnya";
			}
			 
			
			echo $prev . $nmr . $next;
		?>
	</div>
<?php 
} 
mysqli_close($connect_database);
?>
