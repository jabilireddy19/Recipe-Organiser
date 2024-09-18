
<?php

    $email_add = $_POST["exampleInputEmail1"];
    
    $xml = simplexml_load_file("users.xml");
    $all_users = $xml->user;

    for ($i=0; $i<count($all_users); $i++){
        if ($all_users[$i]->email_add == $email_add){
            echo "1";
            exit();
        }
    }

    echo "0";
?>