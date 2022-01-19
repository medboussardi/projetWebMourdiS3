<?php
  
   include '../include/session.php';    
   include '../include/connexion.php'; 
   $idReclamation = $_GET['idReclamation'];
   $req = $con->prepare('delete from reclamation where idReclamation = ?');
   $req->execute([$idReclamation]);

header('location: /reclamation/list.php');