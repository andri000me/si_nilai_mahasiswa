<!DOCTYPE html>
<html>
<head>
    <title>Dosen Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../../public/css/style.css" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<!---->
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <br>
            <h6>
                <a href="../tampilan_dosen.php">
                    Kembali
                </a>
            </h6>
            <h3 class="text-center" style="margin-bottom: 40px;margin-top:20px;">Edit Mahasiswa</h3>
            <?php
            include '../../database/connection.php';
            $nim = $_GET['nim'];
            $data = mysqli_query($host, "SELECT * FROM mahasiswa WHERE nim='$nim'");
            while($d = mysqli_fetch_array($data)){
            ?>

            <form method="post" action="../../controller/dosen/update_controller.php">
                <input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" value="<?php echo $d['nama']; ?>" name="namalengkap" placeholder="Example Example" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="number" class="form-control" value="<?php echo $d['semester'] ?>" name="semester" placeholder="1" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Umur (tahun)</label>
                    <input type="number" class="form-control" value="<?php echo $d['umur']?>" name="umur" placeholder="18" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="<?php echo $d['email'];?>" name="email" placeholder="example@example.com" required="required" autocomplete="off">
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Tambah">
            </form>
            <?php
            }
            ?>
        </div>
        <div class="col"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>