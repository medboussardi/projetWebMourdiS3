<?php include 'include/connexion.php';
    //    include 'include/sess.php';
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $cin= $_POST['cin'];
    $cne= $_POST['cne'];
    $apogee= $_POST['apogee'];
    $tele= $_POST['tele'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bool = 'false';
    $req = $con->prepare('insert into etudiant(nom,prenom,cin,cne,tele,apogee,email,password,bool) values(?,?,?,?,?,?,?,?,?)');
    $req->execute([$nom,$prenom,$cin,$cne,$tele,$apogee,$email,$password,$bool]);
    header('location: /login.php');
}

?>


<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/registre.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion --> 
            
            <form action="" method="POST">
                <h1>incription</h1>
                <label><b>Nom </b></label>
                <input type="text" placeholder="Entrer le nom " name="nom" >
                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrer le prénom " name="prenom" >
                <label><b>CIN</b></label>
                <input type="text" placeholder="Entrer CIN" name="cin" >
                <label><b>CNE</b></label>
                <input type="text" placeholder="Entrer CNE" name="cne" >
                <label><b>N° Apogée</b></label>
                <input type="text" placeholder="Entrer N° d'apogée" name="apogee" >
                <label><b>N° de téléphone</b></label>
                <input type="text" placeholder="Entrer numéro de téléphone" name="tele" >
                <label><b>E-mail</b></label>
                <input type="text" placeholder="Entrer adresse email" name="email" >
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >
                <button type="submit" name='submit'>inscrire</button>
                <div class="lien">
                    <a href="login.php">Retour à la page de LOGIN</a>
                </div>
            </form>
            
        </div>
    </body>
</html>