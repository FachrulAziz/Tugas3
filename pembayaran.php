<?php
include("php.php"); //untuk gabung file
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into pembayaran(barang_id,qty,harga) values
	('".$_POST['barang_id']."',
	'".$_POST['qty']."',
	'".$_POST['harga']."')";
	$proses_data=mysql_query($query_tambah_data);
if($proses_data){
	echo 'Tambah Data Berhasil';
}else{
	echo mysql_error();
}

}
?>

<form method="POST" action=""><!---form untuk kirim data ke database--> 
<table><!---name harus sama dengan database-->
	<tr>
		<td>Nama Barang</td>
		<td><input name="barang_id" type="text"></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input name="qty" type="number"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>