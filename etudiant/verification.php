
<?php
  
  include '../include/session.php';    
  include '../include/connexion.php'; 
  $idEtudiant = $_GET['idEtudiant'];
    $bool="true";
    $role="user";
    // update
    $req=$con->prepare('Update etudiant set  bool=?  where idEtudiant= ?');
    $req->execute([$bool,$idEtudiant]);
  // recepure 
    $r = $con->query("SELECT * from etudiant where  idEtudiant= $idEtudiant");
    $etud = $r->fetch();
    $email=$etud['email'];
    $password=$etud['password'];
    // inserer 
    $q = $con->prepare('insert into users(idUser,email,password,role) values(?,?,?,?)');
    $q->execute([$idEtudiant,$email,$password,$role]);

    header('location: /etudiant/list.php');


?>


?>