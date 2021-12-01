<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">

<?php 
include './koneksi.php'; 

$id_mk = $_GET['id-mk'];
$query = "SELECT * FROM matakuliah WHERE id_mk='$id_mk'";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {

?>


<form action ="index.php?p=fungsi" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Matakuliah</label>
    <input type="hidden" name="id_mk" value="<?= $row ['id_mk']; ?>" class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama . . ." required>
    <input type="text" name="nama_mk" value="<?= $row ['nama_mk']; ?>"  class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mata Kuliah . . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jadwal</label>
    <input type="datetime-local" name="jadwal" value="<?= $row ['jadwal']; ?>" class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jadwal. . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <select name="kelas" class="form-control w-50" value="" required>
      <option value="<?= $row ['kelas']; ?>" selected="selected" >- Pilih Kelas -</option>
      <option value="Kelas A" selected="selected" >Kelas A</option>
      <option value="Kelas B" selected="selected" >Kelas B</option>
      <option value="Kelas C" selected="selected" >Kelas C</option>
  </select>
  </div>
  <button type="submit" name="edit-mata-kuliah" value="Submit" class="btn btn-warning">Edit</button>
</form>

<?php } ?>