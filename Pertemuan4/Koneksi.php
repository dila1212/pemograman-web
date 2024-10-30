<?php
   $mysqli = new mysqli("localhost", "root", "","latihan4");


   if( $mysqli->connect_error)
        die("Koneksi gagal: ". $mysqli->connect_error);
     else{
                echo "Koneksi ke database berhasil.";
            }
    
   
 