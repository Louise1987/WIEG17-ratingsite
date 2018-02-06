<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Anton|Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Movie</title>

    <?php
include "./header.php";
?>
 
</head>
<body>

<div="start">
<button><a href="./start.php">Start</a></button>
<button><a href="./fimlinfo.php">Info</a></button>
<button><a href="./kontakt.php">Kontakt</a></button>
</div>

<h1>Här är lista på mina favorit filmer</h1>



    <?php

$movies = array ("1.Gladiator", 
"5.The Note Book",
"3.The longest ride",
"2.War Horse",
"4.Brave heart");

$points = array ("1", "2", "3", "4", "5");

print_r($movies);

include "./function.php";

include "./filminfo.php";

include "./kontakt.php";

rensa ($movies);

createLinks ($listItem);




sepoints ($points);



    ?>
    <p>Poäng på Film<p> 
    <select id="Movie" name="nr">
        <option value="0">Select</option>
        <option value="1">Gladiator</option>
        <option value="2">The Note Book</option>
        <option value="3">The Longest Ride</option>
        <option value="4">War Horse</option>
        <option value="5">Brave Heart</option>
    
 



</body>
</html>