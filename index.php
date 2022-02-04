<?php 
    $connect = mysqli_connect('localhost', 'admin', '123456', 'fieldnationtestdb');
    if(!$connect) {
        echo "Connection error" . mysqli_connect_error();
    }

    $sql = 'SELECT first_name FROM user';
    // make the query and get the result
    $result = mysqli_query($connect, $sql);
    $usersArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result); // free the memory
    mysqli_close($connect);
    print_r($usersArr);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1</title>
</head>

<body>
    <?php
        echo "Assignment 1 : <br> <br> <br>"; 
        include './src/Assignment1/index.php';
    ?>
</body>

</html>