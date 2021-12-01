<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php include './koneksi.php'; ?>

<form action ="index.php?p=fungsi" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Matakuliah</label>
    <input type="text" name="nama_mk" class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Mata Kuliah . . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jadwal</label>
    <input type="datetime-local" name="jadwal" class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jadwal. . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kelas</label>
    <select name="kelas" class="form-control w-50" value="" required>
      <option value="-" selected="selected" >- Pilih Kelas -</option>
      <option value="Kelas A" selected="selected" >Kelas A</option>
      <option value="Kelas B" selected="selected" >Kelas B</option>
      <option value="Kelas C" selected="selected" >Kelas C</option>
  </select>
  </div>
  <button type="submit" name="tambah-mata-kuliah" value="Submit" class="btn btn-primary">Tambah</button>
</form>