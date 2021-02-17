<?php
    SESSION_START();

    include "connect.php";
    include "debug.php";
    
    
    if ($_POST['username'] != "" and $_POST['password'] != "") 
    {
        $query = "SELECT * FROM users WHERE username = '{$_POST['username']}'";
        $result = mysqli_query ($con, $query);
        $row = mysqli_fetch_array ($result);
       
       

        if ($row['password'] == $_POST['password'])
        {
            $_SESSION["logged"] = true;
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["name"] = $row['name'];
            header('Location: ../../index.php');
        }
        else
            header('Location: ../pages/login/login.php');
        
    }
    else
    header('Location: ../pages/login/login.php');
    
    
?>
