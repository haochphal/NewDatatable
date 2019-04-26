
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container mt-4">
    <div class="card bg-info shadow-lg">
        <div class="card-header text-center">
        <h1>Welcome everyone<?php 
            session_start();
            if(isset($_SESSION['name']) && !empty($_SESSION['name'])){
                echo $_SESSION['name'];
            }else{
                header("location:index.php");

            }
        ?>
        </h1>
        </div>
        <div class="card-body">
            <p>Thank you!!!!</p>
            <p><a href="signout.php" class="card-link btn btn-danger fload-right">Signout</a></p>
        </div>
    </div>
</div>