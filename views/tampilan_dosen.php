<!DOCTYPE html>
<html>
<head>
    <title>Dosen Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../public/css/style.css" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="bg-light shadow-sm text-center">
    <div class="row" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="col">
            <h3>
                <a href="#">
                    HOME
                </a>
            </h3>
        </div>
        <div class="col">
        </div>
        <div class="col">
            <h3>
                <a href="dosen/profil.php">
                    PROFIL
                </a>
            </h3>
        </div>
    </div>
</nav>

<!---->
<div class="container">
    <h6 class="add-mhs">
        <a href="dosen/add.php">
            TAMBAHKAN MAHASISWA
        </a>
    </h6>
    <table class="table table-bordered">
        <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK Semester</th>
            <th>Predikat</th>
            <th colspan="2"></th>

        </tr>
        </thead>
        <tbody>
        <?php
        include '../database/connection.php';
        $no = 1;
        $data = mysqli_query($host, "SELECT * FROM mahasiswa");

        while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <th scope="row" class="text-center"><?php echo $no++;?></th>
            <td><?php echo $d['nim'];?></td>
            <td><?php echo $d['nama'];?></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">
                <h6>
                    <a href="dosen/edit.php?nim=<?php echo $d['nim'];?>">
                        Edit
                    </a>
                </h6>
                <h6>
                    <a href="../controller/dosen/delete_controller.php?nim=<?php echo $d['nim'];?>">
                        Delete
                    </a>
                </h6>
            </td>
            <td class="text-center">
                <h6>
                    <a href="">
                        Edit Nilai
                    </a>
                </h6>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>