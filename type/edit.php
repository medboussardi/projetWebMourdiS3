<?php 
    include '../include/session.php';

    include '../include/connexion.php'; 
    $idType= $_GET['idType']; 
    $q = $con->prepare("SELECT * FROM type WHERE idType=?");
    $req = $q->execute([$idType]);
    $data = $q->fetch();
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $req = $con->prepare('update type set nom=? where idType=?');
        $req->execute([$nom,$idType]);
        header('location: /type/list.php?message=updated');
    }
    ?>
<?php include '../include/header.php'; ?>
<div class="container" >
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center">Modifier le type</h1>
            <div class="card">
                <div class="card-body ">
                    <form action="" method="post">
                        <div class="form-group">  
                            <label for="nom">nom</label>                   
                            <input type="text" name="nom" class="form-control" value="<?= $data['nom']; ?>">
                       </div>
                        <button type="submit" name="submit" class="btn btn-warning mt-2 btn-block">Modifer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
