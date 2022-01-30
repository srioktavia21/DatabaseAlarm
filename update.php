<?php

include "../config/koneksi.php";

$jam = @$_POST['jam'];
$menit = @$_POST['menit'];

$data = [];

$query = mysqli_query($kon, "UPDATE `alarm` SET
`id`='". $id."',
`jam` = '". $jam."',
`menit` = '". $menit."'");

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