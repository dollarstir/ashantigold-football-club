<?php
include 'db.php';

$id  = $_GET['myid'];

$del1 = mysqli_query($conn,"DELETE FROM client WHERE id ='$id'");

if ($del1){
    echo "delected successfully";
}
else{
    echo 'failed to delete';
}


?>