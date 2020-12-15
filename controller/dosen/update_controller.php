<?php
include '../../database/connection.php';

$nim = $_POST['nim'];
$nama = $_POST['namalengkap'];
$semester = $_POST['semester'];
$umur = $_POST['umur'];
$email = $_POST['email'];

$result = mysqli_query($host, "UPDATE mahasiswa SET nama='$nama',semester='$semester',umur='$umur',email='$email' WHERE nim='$nim'");
header("location:../../views/tampilan_dosen.php");