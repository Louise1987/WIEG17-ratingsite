<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Anton|Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php 
    
    echo  SITE_NAME;
    
    if (isset($pageTitel)){
        echo " - ".$pageTitle;
    }
    
        
    ?></title>

    <?php

    include "data.php";

define("GREETING","Hello you! How are you today?");
echo constant("GREETING");



?>

</head>
<body>
    


