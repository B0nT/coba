<?php

 $server    = "localhost";
 $user      = "root";
 $password  = "";
 $db        = "mahasiswa-bagas";

 $koneksi   = mysqli_connect($server, $user, $password, $db);

 if(!$koneksi) {
     die("koneksi tidak berhasil" . mysqli_connect_error());
 }   else {
     echo "berhasil connect !";
 } 