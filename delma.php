<?php
include 'db.php';

$id  = $_GET['myid'];

$dl = mysqli_query($conn,"DELETE  FROM today_match WHERE  id= '$id'");

if ($dl){
    echo "delected successfully";
}
else{
    echo 'failed to delete';
}


?>