<?php
  
   include '../include/session.php';    
   include '../include/connexion.php'; 
   $idEtudiant = $_GET['idEtudiant'];
   $req = $con->prepare('delete from etudiant where idEtudiant = ?');
   $req->execute([$idEtudiant]);
   $q = $con->prepare('delete from user where idUser = ?');
   $q->execute([$idEtudiant]);


header('location: /etudiant/list.php?message=deleted');