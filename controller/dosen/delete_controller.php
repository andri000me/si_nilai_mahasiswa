<?php
include '../../database/connection.php';

$nim = $_GET['nim'];

$result = mysqli_query($host, "DELETE FROM mahasiswa WHERE nim='$nim'");
header("location:../../views/tampilan_dosen.php");
