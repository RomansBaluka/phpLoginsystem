<?php

if(isset($_POST["submit"]))
{   
    // storing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
   

    // Inst logincontr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user login
    $login->loginUser();

    //Going to back to front page
    header("location:../index.php?error=none");

}