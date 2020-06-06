<?php

$koneksi = mysqli_connect('localhost', 'root', 'root', 'utstheo');
if(!$koneksi){
    echo "err : " . mysqli_error($koneksi);
}