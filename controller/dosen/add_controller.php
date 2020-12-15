<?php
include '../../database/connection.php';

$nama = $_POST['namalengkap'];
$semester = $_POST['semester'];
$umur = $_POST['umur'];
$email = $_POST['email'];

$result = mysqli_query($host, "INSERT INTO `mahasiswa_sbd`.`mahasiswa` (`nama`,`semester`,`umur`,`email`) VALUES ('$nama','$semester','$umur','$email')");
header("location:../../views/tampilan_dosen.php");

