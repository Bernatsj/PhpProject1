<?php

$name = $_GET['name'];

switch ($name){
    case "Ulf":
        print "Hallo ".$name;
        break;
    case "Bernardo":
        print "Hola ".$name;
        break;
    case "Pujit":
        print "नमस्ते ".$name;
        break;
    case "Renato":
        print "Olá Master".$name;
        break;
    default:
        echo "I can't recognize your name";
        
        
}

?>
