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
        <form action="" method="POST">
            <input type="text" name="first_name" placeholder= "FIRST_NAME"><br><br>
            <input type="text" name="second_name" placeholder="SECOND_NAME"><br><br>
            <input type="text" name="mobile" placeholder="MOBILE"><br><br>
            <button name="send" value="name">send</button><br><br>
        </form>
        <?php
            print_r($_POST);
            if(isset($_POST['send']))
            {
                $first_name = $_POST['first_name'];
                $second_name = $_POST['second_name'];
                echo"<h2>Hello $first_name $second_name ! Greeting from BindAPI.</h2>";  
            }
        ?>
    </div>
</body>
</html>

<?php
    if($_POST) 
    {
        echo 'success';
    } 
?>
