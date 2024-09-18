<?php

    $username = $_POST["exampleInputEmail1"];
    $passwd = $_POST["exampleInputPassword1"];

    $xml = simplexml_load_file("users.xml");
    $all_users = $xml->user;
    //check if user exists
    for ($i=0; $i < count($all_users); $i++){
    if ($username == $all_users[$i]->email_add and $passwd == $all_users[$i]->passwd){
        echo "1";
        setcookie("username", $email_add, 1800, "/");
        exit();
    }
    }
    echo "0";
    setcookie("username", $email_add, 1800, "/");
?>