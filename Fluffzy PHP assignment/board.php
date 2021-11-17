<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
    if(!(isset($_GET['id']))){
        header('Location: index.php');
        exit();
    }

    require_once "connect.php";

    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if($connection->connect_errno!=0){
        echo "Error: ".$connection->connect_errno . "<br>";
        echo "Description: " . $connection->connect_error;
        exit();
    }
    $id = $_GET['id'];
?>

<?php include 'header.php';?>

<?php
    $sql = "SELECT * FROM `tasks` WHERE `task_name` = '$taskname'";
     if($result = $connection->query($sql)){
        $rowsCount = $result->num_rows;
        if($rowsCount>0){
            $row = $result->fetch_assoc();
            $result->free_result();
        }
        else{
            echo '<span class="error-msg">sql error</span>';
        } 
    }
?>

<div class="container task-list-container">
    <h1>Task list</h1>
    
    <div class="lg-12">
        <a class="back" href="index.php">&lt;--- Back to Main menu</a>
    </div>
    <div class="task-list">
        <div class="lg-3 tasks">
            <h3><i>Tasks<i></h3>
            <div>
                
                <?php 
    
                   
                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
                                echo "
                                <div class='task-box'>
                                    <a href='task.php?tn=$taskname&id=$id' class='task'
                                        <h4>" . ($row['task_name']) . "</h4>
                                                                        </a>
                                        <h5>$row['task_desc']</h5>
                                                                    </div>
                                ";
                            }
                            $result->free_result();
                        }
                    }
                
                ?>
            </div>
        </div>
            <div>
               
            </div>


<?php $connection->close(); ?>
<?php include 'footer.php';?>
