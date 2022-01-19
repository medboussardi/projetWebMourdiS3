<?php
  
   include '../include/session.php';    
   include '../include/connexion.php'; 
   $idType = $_GET['idType'];
   $req = $con->prepare('delete from type where idType = ?');
   $req->execute([$idType]);

header('location: /type/list.php');
