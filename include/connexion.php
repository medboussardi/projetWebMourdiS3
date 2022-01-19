<?php
try{
    $con= new PDO('mysql:host=localhost;dbname=reclamation;charset=utf8','root','');
}catch(Exception $ex){
    die('erreur'.$ex->getMessage());
}
