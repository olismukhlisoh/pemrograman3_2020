<?php
include "koneksi.php";
if(isset($_POST['save'])){
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$jabatan=$_POST['jabatan'];
	$alamat=$_POST['alamat'];
$quer=mysqli_query($koneksi,"insert into olismukhlisoh(nama,jenis_kelamin,jabatan,alamat)
value ('$nama','$jenis_kelamin','$jabatan','$alamat')");
if($quer){
		header("location:tampil_cuti.php");
}else{
		echo mysqli_error($koneksi);
}
}

?>
<h1>Daftar Pegawai Cuti</h1>
<table class="table table-bordered">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Jabatan</td>
		<td>Alamat</td>
	</tr>
	<?php
		$no=1;
		$query=mysqli_query($koneksi,"select * from olismukhlisoh");
		while ($list_Pegawai=mysqli_fetch_array($query)) {
			
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $list_Pegawai['nama'];?></td>
			<td><?php echo $list_Pegawai['jenis_kelamin'];?></td>
			<td><?php echo $list_Pegawai['jabatan'];?></td>
			<td><?php echo $list_Pegawai['alamat'];?></td>
			
			

		</tr>
<?php } ?>
</table>
</html>
<form method="POST">
<table class="table table-dark">
	<tr>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>jabatan</td>
		<td>Alamat</td>
	</tr>
	<tr>
		<td><input type="text" name="nama"></td>
		<td><select name="jenis_kelamin">
			<option value="">--pilih--</option>
			<option value="laki-laki">laki-laki</option>
			<option value="perempuan">perempuan</option>
		</select>
		<td><select name="jabatan">
			<option value="">--pilih--</option>
			<option value="staff">staff</option>
			<option value="admin">admin</option>
			<option value="leader">leader</option>
		</select>
		<td><input type="text" name="alamat"></td>
	
		
		</td>
		<Td>
			<button><input type="submit" name="save" value="simpan"></button>
		</Td>
		
		</tr>
</table>
</form>
</html>