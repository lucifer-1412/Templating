<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="temp.css">
    <title>About</title>
</head>
<body>
    <?php 
        $link = $_SERVER['PHP_SELF']; 
        $link_array = explode('/',$link); 
        $cr_link = end($link_array); 
    ?>
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="d-flex bd-highlight mb-3">
                    <div class="me-auto p-2 bd-highlight"><img src="https://sutomo-mdn.sch.id/img/logo-new.png" alt=""></div>
                    <div class="p-2 lk <?php if($cr_link == 'school.php') echo 'active'?>"><a href="school.php">Home</a></div>
                    <div class="p-2 lk <?php if($cr_link == 'lowongan.php') echo 'active'?>"><a href="lowongan.php">Lowongan kerja</a></div>
                    <div class="p-2 lk <?php if($cr_link == 'about.php') echo 'active'?>"><a href="about.php">About</a></div>
                    <div class="p-2 lk <?php if($cr_link == 'contact.php') echo 'active'?>"><a href="contact.php">Contact</a></div>
                </div>
            </div>
        </header>