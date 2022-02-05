<?php 

    // ternary operators

    $score = 50;

    // if ($score > 40) {
    //     echo 'high score';
    // } else {
    //     echo 'low score';
    // }

    $val = $score > 40 ? 'high score' : 'low score';
    echo $val;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $score > 40 ? 'high score' : 'low score'; ?></h1>
</body>
</html>