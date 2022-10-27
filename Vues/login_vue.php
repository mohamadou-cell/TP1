<?php
include_once "../Controller/login.php";

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
<body class="bg-image d-flex flex-column justify-content-center align-items-center vh-100 vw-100" style="background-image: url('images/img1.jpg');background-repeat: no-repeat;background-size: 100% 948px;">
        <div style="background-color: #0BF0FF;border-radius:10px;" class="d-flex flex-column justify-content-center align-items-center w-25 h-40">
            <h2 class="font-weight-bold mb-5 mt-4 fs-4">CONNECTION</h2>
                    <?php
                        if(isset($_GET["email"])):
                        $email = $_GET["email"];
                        ?>
                    <p class="d-flex text-white justify-content-center font-weight-bold text-uppercase fs-2 bg-danger align-items-center p-2"> <?php echo $email;  ?> </p> 
                    <?php endif; ?>
                <form action="../Controller/login.php" method="post" class="d-flex align-items-center" id="connect">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="form-floating mb-4 col-lg-12 ">
                            <label for="user">Email</label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="name@example.com">
                            <span id="erreur"></span>          
                        </div>
                        <div class="form-floating mb-4 col-lg-12">
                            <label for="pswd">Mot de passe</label>
                            <input type="password" class="form-control" name="pswd" id="pswd" placeholder="Password"> 
                            <span id="erreur1"></span>  
                        </div>
                        <div class="form-floating mb-3 col-lg-12 d-flex justify-content-center">
                            <a href="" class="font-weight-regular">Inscription ?</a>
                        </div>
                        <div class="mb-3 col-lg-12 d-flex justify-content-center">
                            <input type="submit" class="btn btn-primary mb-3 font-weight-bold" name="verif" value="SE CONNECTER">   
                        </div>
                    </div>
                </form> 
        </div> 
        <script src="js/login.js"></script>
</body>
</html>