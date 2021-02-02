<?php
    $connection = mysqli_connect('localhost', 'root', '', 'laptopmania');
    if (!$connection) {
      die('Could not connect: ' . mysqli_error($connection));
    }
?>