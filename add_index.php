<?php
    include './Add/link.php';
    $NameController = new NameController(new NameModel());
    if(isset($_POST['first_name']))
    {
        $NameController->saveName($_POST);
    }   
    $NameController->listName();

?>