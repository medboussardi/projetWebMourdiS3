<?php  include 'include/connexion.php';

       include 'include/sess.php';
       if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $req = $con->query("SELECT * FROM users WHERE email='$email' AND password='$pass'"); 
        $res = $req->fetch();  
        $role = $res['role'];
        if(!empty($res)){
            $_SESSION['email']=$email;  
            $_SESSION['role']=$role;   
        header('location: /index.php');
         }else{
            $req = $con->query("SELECT * FROM etudiant WHERE email='$email' AND password='$pass'"); 
            $res = $req->fetch();
            if(!empty($res)){  header('location: /login.php?message=votre demande en cours de traitement'); 
            }else{header('location: /login.php?message=erreur');}
          }
       }
      
      ?>

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
           
            <form action="" method="POST" >
            <?php if(isset($_GET['message']) && $_GET['message'] == "erreur") echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>"; ?>  
            <?php if(isset($_GET['message'])&& $_GET['message'] != "erreur") echo "<p style='color:red'>".$_GET['message']."</p>"; ?>   
            
                <h1>Connexion</h1>
                
                <label><b>E-mail</b></label>
                <input type="text" placeholder="Entrer l'adresse e-mail'" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" name='submit' value='Connecter' > 
                <div class="col-4">
                        <a href="registre.php">S'inscrire</a>
                </div>
            </form>

        </div>
    </body>
</html>