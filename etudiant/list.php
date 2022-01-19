<?php  include '../include/connexion.php'; ?>
<?php include '../include/session.php'; ?> 

<?php include '../include/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto pt-4">    
            <h1 class="text-center w-100">Liste des étudiants</h1>
            <table class="table table-primary table-hover table-bordered">
                <thead>
                        <tr>
                            <th>id</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>CIN</th>
                            <th>CNE</th>
                            <th>N° telephone</th>
                            <th>email</th>
                            <th>° apogee</th>
                            <th>Action</th>
                        </tr>
                 </thead>
                <tbody>
                    <?php
                        $req = $con->query('SELECT * from etudiant where bool="false"');
                        while($data = $req->fetch()):
                    ?>
                    <tr>
                        <td><?= $data['idEtudiant'] ?></td>
                        <td><?= $data['nom'] ?></td>
                        <td><?= $data['prenom'] ?></td>
                        <td><?= $data['cin'] ?></td>
                        <td><?= $data['cne'] ?></td>
                        <td><?= $data['tele'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['apogee'] ?></td>
                        <td>
                                <a href="verification.php?idEtudiant=<?= $data[0] ?>" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                </a>
                            <a href="delete.php?idEtudiant=<?= $data[0] ?>" class="btn btn-danger">
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