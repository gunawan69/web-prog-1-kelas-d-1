<?php
include('konek.php'); 
?>
<html>
<title>DATA MAHASISWA</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="sandwich">
<?php
$sql	= 'select * from siswa';
$query	= mysqli_query($db_link,$sql);
?>
<h2><color="red"><strong><p align="center">Data Mahasiswa Politeknik Harapan Bersama</p></h2>

<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">NIM</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Prodi</td>
    <td width="133" align="center" valign="middle" bgcolor="#00FFFF">OPSI</a></td></tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nis']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['alamat']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kelas']; ?></td>
    <td p align="center" bgcolor="#FFFFFF">
	
	 
	 
	<a href="edit.php?ni=<?php echo $data['nis'];?>" title="Edit mahasiswa ini"> <button>EDIT</button></a>
	<a href="delet.php?ni=<?php echo $data['nis'];?>"title="Hapus mahasiswa ini" onclick="return confirm('Yakin mau di hapus?');"> <button>HAPUS</button></a>
	</td>
  </tr>
  
<?php
}
?>
</table>

<center><a href=tambah.php title="Tambah Data Lagi"><button>TAMBAH DATA</button>
<a href=index.php title="Kembali ke halaman utama"><button>HOME</button>

</body>
</html>