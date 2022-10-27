<?php
include_once "../Controller/users.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="vw-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container-fluid">
        <div class="d-flex justify-content-center "><h1 class="font-weight-bold">INSCRIPTION</h1></div>
        <div class="container d-flex justify-content-center align-items-center pt-5 pb-5" style="background-color: #0BF0FF;">       
            <form action="../Controller/users.php" method="post" class="container d-flex flex-column justify-content-center" id="submit">
                <div class="container d-flex justify-content-center align-items-center">
                <?php
                        if(isset($_GET["email"])):
                        $email = $_GET["email"];
                        ?>
                    <p class="d-flex text-white justify-content-center font-weight-bold text-uppercase fs-2 bg-danger align-items-center"> <?php echo $email;  ?> </p> 
                    <?php endif; ?>
                    <?php
                        if(isset($_GET["success"])):
                        $email = $_GET["success"];
                        ?>
                    <p class="d-flex text-white justify-content-center font-weight-bold text-uppercase fs-2 bg-danger align-items-center"> <?php echo $email;  ?> </p> 
                    <?php endif; ?>
                    <?php
                        if(isset($_GET["unsuccess"])):
                        $email = $_GET["unsuccess"];
                        ?>
                    <p class="d-flex text-white justify-content-center font-weight-bold text-uppercase fs-2 bg-danger align-items-center"> <?php echo $email;  ?> </p> 
                    <?php endif; ?>
                    <?php
                        if(isset($_GET["mdp"])):
                        $email = $_GET["mdp"];
                        ?>
                    <p class="d-flex text-white justify-content-center font-weight-bold text-uppercase fs-2 bg-danger align-items-center"> <?php echo $email;  ?> </p> 
                    <?php endif; ?>
            
                </div>
                <div class="container mb-3 row form-inline d-flex justify-content-center">
                    <div class="mb-3 col-lg-4 mr-5">
                        <label for="prenom" class="form-label col-lg-3 font-weight-bold d-flex justify-content-start">PRENOM<span class="text-danger">*</span></label>
                        <input type="text" name="prenom"  class="form-control w-100" id="prenom" placeholder="Entrer votre prenom">
                        <span id="erreur"></span>
                    </div>
                    <div class="mb-3 col-lg-4 ml-5">
                        <label for="nom" class="form-label col-lg-3 font-weight-bold d-flex justify-content-start">NOM<span class="text-danger">*</span></label>
                        <input type="text"  name="nom"  class="form-control w-100" id="nom" placeholder="Entrer votre nom">
                        <span id="erreur1"></span>
                    </div>
                </div>
                <div class="container mb-3 row form-inline d-flex justify-content-center">
                    <div class="mb-3 col-lg-4 mr-5">
                        <label for="email" class="form-label col-lg-3 font-weight-bold d-flex justify-content-start">EMAIL<span class="text-danger">*</span></label>
                        <input type="text" name="email"  class="form-control w-100" id="email"  placeholder="Entrer votre email">
                        <span id="erreur2"></span>
                    </div>
                    <div class="mb-3 col-lg-4 ml-5">
                        <label for="role" class="form-label col-lg-3 font-weight-bold d-flex justify-content-start">ROLE<span class="text-danger">*</span></label>
                        <select type="text"  name="role" class="form-control w-100" id="role" placeholder="Entrer votre rôle">
                            <option class=""></option>
                            <option >Admin</option>
                            <option >User</option>
                        </select>
                        <span id="erreur3"></span>  
                    </div>
                </div>
                <div class="container mb-3 row form-inline d-flex justify-content-center">
                    <div class="mb-3 col-lg-4 mr-5">
                        <label for="mdp" class="form-label col-lg-6 font-weight-bold d-flex justify-content-start">MOT DE PASSE<span class="text-danger">*</span></label>
                        <input type="password" name="mdp"  class="form-control w-100" id="mdp" placeholder="Saisir mot de passe">
                        <span id="erreur4"></span>
                    </div>
                    <div class="mb-3 col-lg-4 ml-5">
                        <label for="cmdp" class="form-label col-lg-6 font-weight-bold d-flex justify-content-start">CONFIRMATION<span class="text-danger">*</span></label>
                        <input type="password" name="cmdp"  class="form-control w-100" id="cmdp" placeholder="Ressaisir mot de passe ">
                        <span id="erreur5"></span>
                    </div>
                </div>
                <div class="container mb-3 row form-inline">
                    <div class="mb-3 col-lg-4" style="margin-left: 129px;">
                        <label for="photo" class="form-label col-lg-3 font-weight-bold d-flex justify-content-start" >PHOTO</label>
                        <input type="file"  name="photo" class="form-control w-100 align-items-center d-flex align-items-center" id="photo" placeholder="votre nationalite">
                    </div>
                </div>
                <div class="container mb-3 row form-inline d-flex justify-content-center">
                    <div class="mb-3 col-lg-4 mr-5">
                        <input class="btn btn-primary w-50 font-weight-bold" type="submit" name="valider" value="ENVOYER">
                    </div>
                    <div class="mb-3 col-lg-4 ml-5">
                        <a href="connection_vue.php" class="font-weight-bold d-flex justify-content-center">Connection ?</a>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <script src="js/inscription.js"></script>
</body>
</html>