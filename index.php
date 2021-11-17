<?php
    if (isset($_GET['url'])) {
      include_once 'pages/home.php';
    }
    else{
      header("Location: home");
    }
 ?>
<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
<script src="bootstrap\js\bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/caa44c50e6.js" crossorigin="anonymous"></script>


