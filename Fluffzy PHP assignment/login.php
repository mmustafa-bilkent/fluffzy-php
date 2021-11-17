<?php
    session_start();
    if(isset($_SESSION['logged-in'])){
        header('Location: index.php');
        exit();
    }
?>
<?php include 'header.php';?>

<div class="container loginContainer">
    <div class="login-box">
        <h1>FLUFFZY PHP ASSIGNMENT</h1>
        <h2>LOGIN</h2>
        <form method="post" action="loginValidation.php">
            <div class="input-box">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit">LOGIN</button>
        </form>
        <?php
            if(isset($_SESSION['loginError'])){
                echo $_SESSION['loginError'];
            }
        ?>
    </div>
</div>

<?php include 'footer.php';?>