<h5 class="float-left my-3"></h5> Tabel data Diri</h5>
        <a class="float-right btn btn-primary" href="index.php? 
        p=tambah-mahasiswa"><i class="fa fa-plus-circle"></i>
        Tambah Data</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php include './koneksi.php' ?>
            <tbody>
              <?php
                $no=1;
                $ambilQuery = mysqli_query($koneksi, "SELECT *
                FROM mahasiswa ORDER BY id_mahasiswa ASC");
                while ($row = mysqli_fetch_assoc($ambilQuery)) {
              ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td>     
                  
                <a class="btn btn-warning mr-1" href="index.php?
                p=edit-mahasiswa&id=<?= $row ['id_mahasiswa']; ?>"><i class="fa fa-edit"></i></a>

                <a class="btn btn-danger" 
                name= "hapus_mahasiswa" href="index.php?p=fungsi&
                id=<?=$row ['id_mahasiswa']; ?>"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>