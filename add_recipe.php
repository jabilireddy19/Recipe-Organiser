<?php

    $rname = $_POST["recipe"];
    $ing = $_POST["ingredients"];
    $steps = $_POST["steps"];


    //change html

    $html = new DOMDocument();
    $html->loadHTML(file_get_contents("recipes.html"));

    $deck = $html->getElementByID("card_deck");

    $new_recipe = $html->createElement("div"); //node

    $class_attr = new DOMAttr("class", "card");
    $new_recipe->setAttributeNode($class_attr);

    /*$card_img = $html->createElement("img"); //node

    $src_attr = new DOMAttr("src", "food_default.jpg");
    $card_img->setAttributeNode($src_attr);

    $class_img = new DOMAttr("class", "card-img-top");
    $card_img->setAttributeNode($class_img);

    $new_recipe->appendChild($card_img);*/

    $body_node = $html->createElement("div"); //node

    $class_attr = new DOMAttr("class", "card-body");
    $body_node->setAttributeNode($class_attr);

    $name_node = $html->createElement("h4", $rname); //node
    
    $ingredient_node = $html->createElement("p", "Ingredients:" . $ing); //node
    $class_type = new DOMAttr("class", "card-text");
    $ingredient_node->setAttributeNode($class_type);

    $step_node = $html->createElement("p", "Steps:" . $steps); //node
    $class_type = new DOMAttr("class", "card-text");
    $step_node->setAttributeNode($class_type)

    $body_node->appendChild($name_node);
    $body_node->appendChild($html->createElement("br"));
    $body_node->appendChild($ingredient_node);
    $body_node->appendChild($html->createElement("br"));
    $body_node->appendChild($html->createElement("br"));
    $body_node->appendChild($step_node);
    $body_node->appendChild($html->createElement("br"));

    $new_recipe->appendChild($body_node);

    $deck->appendChild($new_recipe);

    $fp = fopen("recipes.html", "w");
    fwrite($fp, $html->saveHTML());
    fclose($fp);

?>