<?php 

include '../include/connexion.php';
 include '../include/session.php'; 
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $req = $con->prepare('INSERT into type(nom) values(?)');
    $req->execute([$nom]);
    header("location: /type/list.php");
    
}

?>


<?php include '../include/header.php'?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center">Ajouter un type</h1>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="name">nom</label>
                            <input type="text" name="nom" class="form-control">
                            </div>
                            
                        <button type="submit" name="submit" class="btn mt-2 btn-primary btn-block">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
