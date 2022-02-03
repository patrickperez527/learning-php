<?php 

    // connect to database 
    $conn = mysqli_connect('localhost', 'patrick', 'test1234', 'project1');

    // check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }


?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'templates/header.php'; ?>


    <?php include 'templates/footer.php'; ?>
    
</html>