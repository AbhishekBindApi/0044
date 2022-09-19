<?php 
    $server = "localhost";
    $dbname = "gurukulampro_dev2";
    $username = "root";
    $password = "";

    if(isset($_POST['send']))
    {
        $first_name = $_POST['first_name'];
        $second_name = $_POST['second_name'];
        $mobile = $_POST['mobile'];
    }
    $conn = mysqli_connect($server, $username, $password, $dbname);
    $sql = "INSERT INTO input (first_name, second_name, mobile )
    VALUES ('$first_name', '$second_name', '$mobile')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
    print_r($_POST);
    echo "<h2>Hello $first_name $second_name $mobile! Greetings from BindAPI.</h2>";
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
    <div>
        <form action="" method="post">
            <input type="text" name="first_name" placeholder="First_name"><br><br>
            <input type="text" name="second_name" placeholder="Second_name"><br><br>
            <input type="text" name="mobile" placeholder="Mobile"><br><br>
            <button name="send">send</button>
            <h2>Hello</h2>
        </form>
    </div>
</body>
</html>