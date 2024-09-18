<?php

    $email_add = $_POST["exampleInputEmail1"];
    $passwd = $_POST["exampleInputPassword1"];

    $xml = new DomDocument();
    $xml->load("users.xml");

    $root = $xml->documentElement;

    $new_user = $xml->createElement("user");

    $email_node = $xml->createElement("email_add", $email_add);
    $new_user->appendChild($email_node);

    $passwd_node = $xml->createElement("passwd", $passwd);
    $new_user->appendChild($passwd_node);

    $root->appendChild($new_user);

    $xml->save("users.xml");
    echo "1";

    //LOGIN
    setcookie("username", $email_add, 1800, "/");
?>