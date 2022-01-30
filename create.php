<?php

include "../config/koneksi.php";

$jam = @$_POST['jam'];
$menit = @$_POST['menit'];


$data = [];

$query = mysqli_query($kon, "INSERT INTO `alarm`
  ( `jam`,`menit`)
   VALUES
   ('". $jam ."','". $menit ."')");

    if($query){
       $status = true;
       $pesan = "request success";
       $data[]= $query;
    }else{
        $status = false;
        $pesan = "request failed";
    }

    $json = [
       "status" => $status,
       "pesan" => $pesan,
       "data" => $data,
    ];

    header("Content-Type: application/json");
    echo json_encode($json);

    ?>