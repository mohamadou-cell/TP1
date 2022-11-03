<?php
 ini_set("display_errors", "1");
 error_reporting(E_ALL);
 include_once "session.php";
 init_php_session();

    
     @$user=$_POST["user"];
     @$pass = $_POST["pswd"];
 
 
  if(isset($_POST["verif"]))
  {
      if(isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pswd"]) && !empty($_POST["pswd"]))
      {
          
         
            $user = trim($_POST['user']);
            $pass = trim($_POST['pswd']);


 
            
            include('connection.php');
            
            try{
                $sth = $dbco->prepare(" SELECT * FROM utilisateurs WHERE email = '".$user."'"); 
                $sth->execute();
                $res = $sth->fetch(PDO::FETCH_ASSOC); 
                if(count($res) > 0 && password_verify($pass, $res["mot_de_passe"]) && $res["roles"] == "Admin"){ 
                    $_SESSION["prenom"] = $res["prenom"]; 
                    $_SESSION["nom"] = $res["nom"];
                    $_SESSION["matricule"] = $res["matricule"];
                    $_SESSION["photo"] = $res["photo"];      
                    
                    header("Location: ../Vues/accueil_admin.php");
                }
                elseif(count($res) > 0 && password_verify($pass, $res["mot_de_passe"]) && $res["roles"] == "User"){
                    $_SESSION["prenom"] = $res["prenom"]; 
                    $_SESSION["nom"] = $res["nom"];
                    $_SESSION["matricule"] = $res["matricule"];
                    $_SESSION["photo"] = $res["photo"]; 
                    
                    header("Location: ../Vues/accueil_user.php");
                }
                    
                else{
                    header("Location: ../Vues/login_vue.php?email=Compte inéxistant, inscrivez-vous !");
                }
           
            }
            catch(PDOException $e){ echo ("Erreur:".$e->getMessage());}
           
             }
          }
                

?>