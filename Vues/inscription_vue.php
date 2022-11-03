<?php
include_once "../Controller/users.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body class="vw-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container-fluid">
        <div class="d-flex justify-content-center "><h1 class="font-weight-bold">INSCRIPTION</h1></div>
        <div class="container d-flex justify-content-center align-items-center pt-5 pb-5" style="background-color: #0BF0FF;">       
            <form action="../Controller/users.php" method="post" class="container d-flex flex-column justify-content-center" id="submit"  enctype="multipart/form-data">
                <div class="container d-flex flex-direction-column justify-content-center align-items-center">
                    <div id="reussie">
                        <?php
                            if(isset($_GET["success"])):
                            $email = $_GET["success"];
                            ?>
                        <p id="success" class="d-flex text-black justify-content-center font-weight-bold text-uppercase fs-2 bg-warning align-items-center p-2"> <?php echo $email;  ?> </p> 
                        <?php endif; ?>
                    </div>
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="boutton-modal">
                        Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="w-100 modal-header" style="display:flex; flex-direction:column;justify-content:center;">
                                <img src="images/checked.png" alt="" style="width: 100px;height: 100px;">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">INSCRIPTION REUSSIE</h1>
                                
                            </div>
                            <div class="modal-body">
                                Etes-vous sûre de vouloir vous connecter ?
                            </div>
                            <div class="modal-footer">
                                <a href="inscription_vue.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NON</button></a>
                                <a href="login_vue.php"><button type="button" class="btn btn-primary">OUI</button></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php
                        if(isset($_GET["unsuccess"])):
                        $email = $_GET["unsuccess"];
                        ?>
                    <p class="d-flex text-white justify-content-center font-weight-bold text-uppercase fs-2 bg-danger align-items-center p-2"> <?php echo $email;  ?> </p> 
                    <?php endif; ?>
                    <?php
                        if(isset($_GET["mdp"])):
                        $email = $_GET["mdp"];
                        ?>
                    <p class="d-flex text-white justify-content-center font-weight-bold text-uppercase fs-2 bg-danger align-items-center p-2"> <?php echo $email;  ?> </p> 
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
                        <a href="login_vue.php" class="font-weight-bold d-flex justify-content-center">Connection ?</a>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/inscription.js"></script>
    <script src="js/popup.js"></script>
</body>
</html>