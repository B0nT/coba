<h5 class="float-left my-3"></h5> Tabel Mata Kuliah</h5>
    <a class="float-right btn btn-primary fa fa-plus-circle"href="index.php?p=tambah-mata-kuliah">Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama MK</th>
      <th scope="col">Jadwal</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
    </thead>
    <?php include './koneksi.php'?>
    <tbody>
      <?php
      $no=1;
      $ambilQuerty = mysqli_query ($koneksi, "SELECT * FROM matakuliah ORDER BY id_mk ASC");
      while ($row = mysqli_fetch_assoc ($ambilQuerty)){

      ?>
      <tr>
        <th scope="row"><?= $no++; ?></th>
        <td><?= $row['nama_mk'] ?></td>
        <td><?= $row['jadwal'] ?></td>
        <td><?= $row['kelas'] ?></td>
         <td>
          <a class="btn btn-warning mr-1" href="index.php?p=edit-mata-kuliah&id-mk=<?= $row ['id_mk'];?>">
          <i class="fa fa-edit"></i></a>

          <a class="btn btn-danger" name="hapus-matakuliah" href="index.php?p=fungsi&id-mk=<?= $row ['id_mk']; ?>"  onclick="return confirm ('Apakah Ingin Hapus Data Ini')">
          <i class="fa fa-trash"></i></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>