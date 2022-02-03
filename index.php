<?php 

    // connect to database
    $conn = mysqli_connect('localhost', 'patrick', 'test1234', 'project1');

    // check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // make query
    $sql = 'SELECT title, email, ingredients FROM pizzas ORDER BY created_at';

    // make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

    print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'templates/header.php'; ?>


    <?php include 'templates/footer.php'; ?>
    
</html>