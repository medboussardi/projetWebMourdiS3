<?php 
    include '../include/session.php';

    include '../include/connexion.php'; 
    $idReclamation= $_GET['idReclamation']; 
    $q = $con->prepare("SELECT * FROM reclamation WHERE idReclamation=?");
    $req = $q->execute([$idReclamation]);
    $data = $q->fetch();
    if(isset($_POST['submit'])){
        $idType = $_POST['idType'];
        $date = $_POST['date'];
        $texte = $_POST['texte'];
        $req = $con->prepare('update reclamation set date=?, idType=?, texte=? where idReclamation=?');
        $req->execute([$date, $idType, $texte, $idReclamation]);
        header('location: /reclamation/list.php');
    }
    ?>
<?php include '../include/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center">Modifier reclamation</h1>
            <div class="card">
                <div class="card-body ">
                    <form action="" method="post">
                        <div class="form-group">  
                            <label for="date">date</label>                   
                            <input type="date" id="date" name="date" class="form-control" value="<?= $data['date']; ?>">
                       </div>
                        <div class="form-group">
                            <label for="idType">Type de réclamation</label>
                            <select type="text" id="idType" name="idType" class="form-control">
                            <?php
                              $req = $con->query('select * from type');
                              while($d = $req->fetch()):
                            ?>
                              <option value="<?= $d['idType']?>"><?= $d['nom']?>  </option>
                              <?php endwhile; ?>
                             </select>
                        </div>
                        <div class="form-group">
                            <label>votre réclamation </label>
                            <textarea name="texte"  cols="80" rows="10" value="" ><?= $data['texte']; ?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-warning mt-2 btn-block">Modifer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>