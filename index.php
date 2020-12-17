<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="public/css/style.css" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<video autoplay loop>
    <source src="public/video/wallpaper.mp4?&autoplay=1" type="video/mp4">
</video>
<?php
if(isset($_GET['message'])){
    if($_GET['message'] == "failed"){
        echo "<div class='alert'>Failed to login, please try again.</div>";
    }
}
?>
<div class="card text-center mx-auto" style="width: 18rem">
    <div class="card-body">
        <img src="public/image/avatar.png"><br>
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="inputnim" aria-describedby="emailHelp" placeholder="NIM" autocomplete="off">
            </div>
            <div class="form-group">
            <a href="views/login_dosen.php">
                Login Sebagai Dosen
            </a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

<!--BOOTSTRAP JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>