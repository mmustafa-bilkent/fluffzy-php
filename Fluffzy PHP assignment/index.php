<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
    
    require_once "connect.php";

    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if($connection->connect_errno!=0){
        echo "Error: ".$connection->connect_errno . "<br>";
        echo "Description: " . $connection->connect_error;
        exit();
    }
?>

<?php include 'header.php';?>

<div class="container projectListContainer">
    <h1>TASK MANAGEMENT - FLUFFZY</h1>

    <div class="lg-6 createBoard">
        <a href="newTask.php" class="btn">CREATE TASK</a>
    </div>
    <div class="lg-12">
        <table class="project-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TASK NAME</th>
                    <th>VIEW TASKS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT * FROM tasks";//INCOMPLETE

                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            
                            echo "
                            <tr>
                                <td>".($row['id'])."</td>
                                <td>".($row['Task name'])."</td>
                                <td><a href='board.php?id=".$row['id']."' class='btn'>TaskBoard</a></td>
                            </tr>";
                        }
                        $result->free_result();
                    }
                    else{
                        echo "No tasks";
                    }
                }
                
                ?>
            </tbody>
        </table>
       
    </div>
</div>

<?php $connection->close(); ?>
<?php include 'footer.php';?>
