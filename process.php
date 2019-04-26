<?php 
if(empty($_POST["username"]) && empty($_POST["password"])){
    echo "empty field";
}else{
    if(isset($_POST["btn-signin"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        echo $username." ";
        echo sha1($password);
        if($username=="mother" && $password=="12"){
           session_start();
            $_SESSION['name']=$username;
            // echo $_SESSION["name"];
            header("location: result.php");
    }else{
        echo " Wrong username and password";
        }
    }
}
?>