<?php
  
   include '../include/session.php';    
   include '../include/connexion.php'; 
   $msg = 'votre demande a ete refuser';
   $idReclamation = $_GET['idReclamation'];
   $req = $con->prepare("UPDATE reclamation set msg=?  where idReclamation=?");
   $req->execute([$msg,$idReclamation]);

header('location: /notification/list.php');