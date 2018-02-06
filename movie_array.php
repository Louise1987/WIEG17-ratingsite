<?php

$movieArray = array(
    "favofilm" => array("name" => "Gladiator", "poäng" => 5),
    array("namn" => "The Note Book", "poäng" => 4),
    array("namn" => "War Horse", "poäng" => 3),
    array("namn" => "Brave heart","poäng" => 2),
    array("namn" => "The longest ride", "poäng" =>1)
);

$movieArray[] = array("namn" => "All the feels", "poäng" => 3);

function printMovie($titelArray) {

    foreach($titelArray as $title) {
        if (isset($title["name"])) {
            echo "<b>".$titel["name"]."</b>: ".$titel["poäng"];
        }
        else {
            die("Something was wrong in the");
        }
        echo "<br/>";
    }
}

printMovie($movieArray);