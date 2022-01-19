<?php include '../include/session.php'; ?> 

<?php include '../include/header.php'?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto pt-4">    
            <h1 class="text-center w-100">Liste des reclamations</h1>
            <table class="table table-primary table-hover table-bordered">
                <thead class="thead-dark ">
                    <tr>
                        <th>type de réclamation</th>
                        <th>message</th>
                        <th>nom d'étudiant</th>
                        <th>prenom d'étudiant</th>
                        <th>CIN</th>
                        <th>CNE</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $req = $con->query("SELECT * from reclamation where msg='en cours de traitement' ");
                        while($data = $req->fetch()):
                        $id = $data['idEtudiant'];
                        $q = $con->query("SELECT * from etudiant where idEtudiant='$id' ");
                        $d = $q->fetch();
                    ?>
                    <tr>
                        <td> 
                            <?php
                               $idType = $data['idType'];
                               $type = $con->query("SELECT * from type where idType=$idType");
                               $datatype = $type->fetch();
                           ?>                            
                          <?= $datatype['nom']; ?>
                        </td>
                        <td><?= $data['texte'];?></td>
                        <td><?= $d['nom'];?></td>
                        <td><?= $d['prenom'];?></td>
                        <td><?= $d['cin'];?></td>
                        <td><?= $d['cne'];?></td>
                        <td>
                            <a href="accept.php?idReclamation=<?= $data['idReclamation']; ?>" class="btn btn-success">
                                <i class="fas fa-check"></i>
                            </a>
                            <a href="refuse.php?idReclamation=<?= $data['idReclamation']; ?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
</div>