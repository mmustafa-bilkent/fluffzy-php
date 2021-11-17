<?php
    session_start();
    if(!(isset($_SESSION['logged-in']))){
        header('Location: login.php');
        exit();
    }
    $id = $_GET['id'];
?>
<?php include 'header.php';?>

<div class="container loginContainer">
    <h1>INPUT TASK DETAILS<span>(<?php echo $_GET['id']; ?>)</span></h1>
    <div class="login-box newTaskBox">
        <form method="post" action="newTaskValidation.php?sn=<?php echo $id; ?>">
            <div class="input-box">
                <label for="taskTitle">TASK TITLE:</label>
                <textarea name="taskTitle" class="taskTitle"> </textarea>
            </div>
            <div class="input-box">
                <label for="short">TASK DESCRIPTION:</label>
                <textarea name="taskDescription" class="taskDesc"></textarea>
            </div>
            <button type="submit">ADD TASK</button>
        </form>
    </div>
</div>

<?php include 'footer.php';?>