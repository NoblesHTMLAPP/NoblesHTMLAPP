<?php
if(isset($_POST['Login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && $password == "mypassword")
        {
        echo "You have successfully logged in.";
        } else {
            echo "Login Failed";
        }
}

?>