<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
    
    @$prenom = $_POST["prenom"];
    @$nom = $_POST["nom"];
    @$email = $_POST["email"];
    @$role = $_POST["role"];
    @$mdp = $_POST["mdp"];
    @$cmdp = $_POST["cmdp"];
    @$photo = $_POST["photo"];
    if(isset($_POST["valider"])){
   
        $masque = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
        
            if(!preg_match($masque, $email))  {
                header("Location: ../Vues/inscription_vue.php?email=Email incorrect");
            } 

                if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../Vues/inscription_vue.php?email=Veuillez entrer un email correct");
                } 

                  
                
                      
         if(isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["nom"]) && !empty($_POST["email"]) && isset($_POST["email"]) && !empty($_POST["email"]) && 
            isset($_POST["role"]) && !empty($_POST["role"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"]) && isset($_POST["cmdp"]) && !empty($_POST["cmdp"]) && isset($_POST["photo"])){
            include("connection.php");
            $sth = $dbco->prepare(" SELECT * FROM utilisateurs WHERE email = '".$email."'"); 
            $sth->execute();
            $res = $sth->fetchAll(PDO::FETCH_ASSOC); 
            if(count($res) == 0){ 
                if(trim($mdp) === trim($cmdp)){
                    
                
                

                $sth = $dbco->prepare(" INSERT INTO utilisateurs(prenom,nom,email,roles,mot_de_passe,photo) VALUES (?, ?, ?, ?, ?, ?) "); 


                $sth->bindValue(1, $prenom);
                $sth->bindValue(2, $nom);
                $sth->bindValue(3, $email);
                $sth->bindValue(4, $role);
                $sth->bindValue(5, password_hash($mdp, PASSWORD_BCRYPT));
                $sth->bindValue(6, $photo);
                $sth->execute();
    
                header("Location: ../Vues/inscription_vue.php?success=Inscription réussie");
                $sql = "SELECT id FROM utilisateurs WHERE email = '".$email."'";
                $id = $dbco->prepare($sql);
                $id->execute();
                $row = $id->fetch(PDO::FETCH_ASSOC);
                //on modifie le matricule
                $matricule = date('Y-', time()).$row['id'].'-USR';
                //on modifie la derniere matricule du BD
                $sql2 = "UPDATE utilisateurs SET  matricule = '$matricule' WHERE email = '".$email."'";
                $matricule2 = $dbco->prepare($sql2);
                $matricule2->execute();
                /* $message3.="<label>Votre matricule est: '".$matricule."'</label>"; */
                }
                else{
                    header("Location: ../Vues/inscription_vue.php?mdp=Les deux mots de passe ne sont pas identiques");
                }
            }
            else{
                header("Location: ../Vues/inscription_vue.php?unsuccess=L'email est déjà pris");
            }
        }
    }



?>