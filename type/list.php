<?php  include '../include/connexion.php'; ?>
<?php include '../include/session.php'; ?> 

<?php include '../include/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-mt-4 ">
         <a href="ajout.php" class="" ><i class="fas fa-user-plus"></i>ajouter</a>
        </div>
        <div class="col-md-12 mx-auto pt-4">    
            <h1 class="text-center w-100">Liste des reclamations</h1>
            <table class="table table-primary table-hover table-bordered">
                <thead class="thead-dark ">
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $req = $con->query("SELECT * from type ");
                        while($data = $req->fetch()):
                    ?>
                    <tr>
                        <td><?= $data['idType'];?></td>
                        <td><?= $data['nom'];?></td>
                        <td>
                        <a href="edit.php?idType=<?= $data['idType']; ?>" class="btn btn-warning">
                         <i class="fa fa-edit"></i>
                            </a>
                            <a href="delete.php?idType=<?= $data['idType']; ?>" class="btn btn-danger">
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
