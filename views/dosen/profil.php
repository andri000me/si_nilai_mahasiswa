<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../../public/css/style.css" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <h6 class="text-center">
            <a href="javascript:history.go(-1)">
                Kembali
            </a>
        </h6>
    </div>
    <div class="col"></div>
</div>
<div class="card text-center mx-auto" style="width: 18rem">
    <?php
    include '../../database/connection.php';
    $nid = $_GET['nid'];
    $data = mysqli_query($host, "SELECT * FROM dosen WHERE nid='$nid'");
    while($d = mysqli_fetch_array($data)){


    ?>
    <div class="card-body">
        <img src="../../public/image/avatar.png"><br>
        <div class="form-group">
            <?php echo $d['nama'];?>
        </div>
        <div class="form-group">
            <?php echo $d['nid'];?>
        </div>
        <div class="form-group">
            <?php echo $d['matakuliah'];?>
        </div>
        <div class="form-group">
            <?php echo $d['email'];?>
        </div>
        <div class="form-group">
            <?php echo $d['notelp'];?>
        </div>
    </div>
    <?php
    }
    ?>
</div>

<!--BOOTSTRAP JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>