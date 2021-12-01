<?php
 include './koneksi.php';

 error_reporting(0);
 $id_mahasiswa 	= $_POST['id_mahasiswa'];
 $nama         	= $_POST['nama'];
 $nim          	= $_POST['nim'];
 $prodi        	= $_POST['prodi'];
 $id_mk			= $_POST['id_mk'];
 $nama_mk		= $_POST['nama_mk'];
 $jadwal		= $_POST['jadwal'];
 $kelas			= $_POST['kelas'];


 if ($_POST['tambah-mahasiswa']) {
	$queryTambah = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$prodi')");

	$_SESSION["sukses-tambah"] = 'Data Berhasil Disimpan';

	if ($queryTambah) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}


if (isset($_POST['edit-mahasiswa'])) {
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$nama					= $_POST['nama'];
	$nim					= $_POST['nim'];
	$prodi				= $_POST['prodi'];
	$queryEdit = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id_mahasiswa = '$id_mahasiswa' ");

	$_SESSION["sukses-edit"] = 'Data Berhasil Diedit';

	if ($queryEdit) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Edit Data " . mysqli_error($koneksi);
	}
}

if (isset($_GET['id'])) {
	$id_mahasiswa = $_GET['id'];

	$queryHapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");

	$_SESSION["sukses-hapus"] = 'Data Berhasil Dihapus';

	if ($queryHapus == true) {
		header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}
}
if ($_POST['tambah-mata-kuliah']){
    $queryTambah = mysqli_query ($koneksi, "INSERT INTO matakuliah 
    VALUES(' ', '$nama_mk', '$jadwal', '$kelas')");

    if ($queryTambah){
        header("location: index.php?p=tb-mata-kuliah");
    } else {
        echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error ($koneksi);
    }
}

if (isset ($_POST['edit-mata-kuliah'])){
    $queryEdit = mysqli_query ($koneksi, "UPDATE matakuliah SET nama_mk='$nama_mk', jadwal='$jadwal', kelas='$kelas'
    WHERE id_mk = '$id_mk' ");

    if ($queryEdit){
        header("location: index.php?p=tb-mata-kuliah");
    } else {
        echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error ($koneksi);
    }
}

if (isset ($_GET['id-mk'])){
    $id_mk = $_GET['id-mk'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM matakuliah WHERE id_mk = '$id_mk'");

    if ($queryHapus){
        header("location: index.php?p=tb-mata-kuliah");
    } else {
        echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error ($koneksi);
    }
}
?>
