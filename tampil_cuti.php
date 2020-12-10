<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
    <title>selamat, siang!</title>
  </head>
  <body>
       
  </body>
  <table border="1">
		<tr>
			
		<tr>
		<tr>
			
		<tr>
  </table>
  </br>

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
		header("location:tampil_mahasiswa.php");
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

