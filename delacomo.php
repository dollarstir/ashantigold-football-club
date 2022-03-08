<?php
include 'db.php';

$id  = $_GET['myid'];

$dl = mysqli_query($conn,"DELETE  FROM contacts WHERE  id= '$id'");

if ($dl){
    echo "delected successfully";
}
else{
    echo 'failed to delete';
}


?>