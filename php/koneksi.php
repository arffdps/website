<?php

$conn = mysqli_connect("localhost","root","","link");

    if(!$conn){
        echo "koneksi gagal";
    }else{
        echo "koneksi berhasil";
    }

