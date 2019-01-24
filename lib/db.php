<?php
include 'configVar.php';
$host = "localhost";
$user = USER;
$passsword = PASS;
$dbname = DBNAME;

$link = mysqli_connect($host,$user,$passsword,$dbname);

// if($link){
//     echo 'konek';
// }
// else {
//     echo 'gagal';
// }