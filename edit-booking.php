<?php


include 'db.php';
$id = $_GET['id'];
$pid = $_GET['pid'];
// $days = $_GET['days'];



$up = mysqli_query($conn,"UPDATE request set  status ='Accepted'WHERE id='$id' ");
$up1 = mysqli_query($conn,"UPDATE player set status='Sold' WHERE id='$pid' ");

echo '<script>
    window.location="view-booking.php";
</script>';

?>