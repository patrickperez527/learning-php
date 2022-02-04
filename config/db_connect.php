<?php 

    // connect to database
    $conn = mysqli_connect('localhost', 'patrick', 'test1234', 'project1');

    // check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>