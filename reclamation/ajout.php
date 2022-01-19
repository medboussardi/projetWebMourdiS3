<?php 

include '../include/connexion.php';
 include '../include/session.php'; 
if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $idType = $_POST['idType'];
    $texte = $_POST['texte'];
    $msg = "en cours de traitement";
    $email = $_SESSION['email'];
    $qe=$con->query("SELECT * from etudiant where email='$email'");
    $etud = $qe->fetch();
    $idEtudiant = $etud['idEtudiant'];
    $req = $con->prepare('INSERT into reclamation(date,idType,texte,msg,idEtudiant) values(?,?,?,?,?)');
    $req->execute([$date,$idType,$texte,$msg,$idEtudiant]);
    header("location: /reclamation/list.php");
    
}

?>


<?php include '../include/header.php'?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center">Ajouter un réclamation</h1>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" >
                            <div class="form-group">
                            <label>date</label>
                            <input type="date" id="date" name="date" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="idType">Type de réclamation</label>
                            <select type="text" id="idType" name="idType" class="form-control">
                            <?php
                              $req = $con->query('select * from type');
                              while($data = $req->fetch()):
                            ?>
                              <option value="<?= $data['idType']?>"><?= $data['nom']?>  </option>
                              <?php endwhile; ?>
                             </select>
                            </div>
                            <div class="form-group">
                            <label>votre réclamation </label>
                            <textarea name="texte"  cols="80" rows="10"placeholder="ajouter votre réclamation"></textarea>
                            </div>
                        <button type="submit" name="submit" class="btn mt-2 btn-primary btn-block">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>