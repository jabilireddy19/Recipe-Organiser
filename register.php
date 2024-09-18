<?php

  $username = $_POST["exampleInputEmail1"];
  $passwd = $_POST["exampleInputPassword1"];

  $xml = simplexml_load_file("users.xml");
  $all_users = $xml->user;
  //check if user exists
  for ($i=0; $i < count($all_users); $i++){
    if ($username == $all_users[$i]->username){
      echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <h3 class="lead" style="color:red">User already exists</h3><hr><a href="register.html">Go Back</a>';
      break;
    }
  }

?>