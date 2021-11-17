<?php
session_start();
require_once "connect.php";

$connection = new mysqli($host, $db_user, $db_password, $db_name);
$id = $_GET['id'];
if($connection->connect_errno!=0){
    echo "Error: ".$connection->connect_errno . "<br>";
    echo "Description: " . $connection->connect_error;
    exit();
}

else{
    $taskTitle = $_POST['taskTitle'];
    $taskDescription = $_POST['taskDescription'];
    $sqlCount = "SELECT * FROM `tasks` WHERE `id` = '$id'";
    if($result = $connection->query($sqlCount)){
        
        $sql = "INSERT INTO `tasks`(`id`, `task_name`, `task_desc`) VALUES ('$id','$taskTitle','$taskDescription')";
    
        if($connection->query($sql)){
            header('Location: board.php?id='.$id);
        }
        else echo 'SQL ERROR';
    }
    
    else echo 'SQL ERROR' . $id;
    $connection->close();
}



?>