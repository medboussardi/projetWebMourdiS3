<?php  include '../include/connexion.php'; ?>
<?php include '../include/session.php'; ?> 

<?php include '../include/header.php'; ?>
<div class="container">
    <div class="row">
    <div class="col-mt-4 ">
         <a href="ajout.php" class="" >ajouter</a>
        </div>
        <div class="col-md-12 mx-auto pt-4">    
            <h1 class="text-center w-100">Liste des reclamations</h1>
            <table class="table table-primary table-hover table-bordered">
                <thead class="thead-dark ">
                    <tr>
                        <th>id</th>
                        <th>type </th>
                        <th>date</th>
                        <th>message</th>
                        <th>état</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $email = $_SESSION['email'];
                        $q = $con->query("SELECT *  from etudiant where email='$email' ");
                        $etud = $q->fetch();
                        $id = $etud['idEtudiant'];
                        $req = $con->query("SELECT * from reclamation where idEtudiant='$id' ");
                        while($data = $req->fetch()):
                    ?>
                    <tr>
                        <td><?= $data['idReclamation'];?></td>
                        <td>
                          <?php
                               $idType = $data['idType'];
                               $type = $con->query("SELECT * from type where idType=$idType");
                               $datatype = $type->fetch();
                           ?>                            
                          <?= $datatype['nom']; ?>
                        </td>
                        <td><?= $data['date'];?></td>
                        <td><?= $data['texte'];?></td>
                        <td><?= $data['msg'];?></td>
                        <td>
                        <a href="edit.php?idReclamation=<?= $data['idReclamation']; ?>" class="btn btn-warning">
                         <i class="fa fa-edit"></i>
                            </a>
                            <a href="delete.php?idReclamation=<?= $data['idReclamation']; ?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>