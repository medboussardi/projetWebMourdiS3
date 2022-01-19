<?php  include 'connexion.php'?>
<?php $page = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPS - Réclamation</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/932d82caf4.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet"> 
</head>
<body>
<section class="header">
<nav>
            <label class="logo"><a href=""><img class="logo" src="../img/logo.png" alt="Logo Cadi AYYAD"></a></label>
            <ul>
                <li>

                    <a class="<?php if($page == '/index.php') echo 'active' ;?>" href="../index.php">Acceuil</a>
                </li>
             <?php if( $_SESSION['role']=='admin'):   ?>
                <?php 
                     $n=$con->query("SELECT COUNT(*) FROM reclamation where msg='en cours de traitement'");
                     $rec=$n->fetchColumn();

                ?>
                <li>
                    <a href="../notification/list.php" class="notification <?php if($page == '/notification/list.php') echo 'active' ;?>">
                    <span>nouveaux réclamations</span>
                    <span class="badge"><?= $rec;?></span>
                    </a>
                </li>
                <?php 
                    $nb=$con->query("SELECT COUNT(*) FROM etudiant where bool='false'");
                    $nbr=$nb->fetchColumn();

                ?>
                <li>
                    <a href="../etudiant/list.php" class="notification <?php if($page == '/etudiant/list.php') echo 'active' ;?>">
                    <span>nouveaux étudiants</span>
                    <span class="badge"><?= $nbr;?></span>
                    </a>
                </li>
                <li>
                    <a href="../type/list.php" class="<?php if($page == '/type/list.php') echo 'active' ;?>" >Types des réclamations</a>
                </li>
                <?php endif; ?>
                <?php if( $_SESSION['role']=='user'):   ?>
                <li>
                    <a href="../reclamation/list.php" class="<?php if($page == '/reclamation/list.php') echo 'active' ;?>">reclamer</a>
                </li>
                <li>
                    <a href="../index.php#apropos"  >A Propos</a>
                </li>
                <li>
                    <a href="../contact.php" class="<?php if($page == '/contact.php') echo 'active' ;?>" >Contact</a>
                </li>
                <?php endif; ?>
                <li>
                    <a href="../logout.php">déconnecter</a>
                </li>
            </ul>
        </nav>
    </section>