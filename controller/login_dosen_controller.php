<?php
session_start();

include '../database/connection.php';

$nid = $_POST['inputnid'];

$login = mysqli_query($host, "SELECT * FROM dosen WHERE nid='$nid'");
$check = mysqli_num_rows($login);

if($check>0){
    $_SESSION['nid'] = $nid;
    header("location:../views/tampilan_dosen.php?nid=$nid");
} else {
    header("location:../views/login_dosen.php?message=failed");
}