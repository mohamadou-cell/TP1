<?php

function afficher(){ 
    
    include("connection.php");
    $list = "SELECT * FROM utilisateurs";
    $result = $dbco->query($list);
    while($data = $result->fetch()){
        $id = $data["id"];
        $prenom = $data["prenom"];
        $nom = $data["nom"];
        $email = $data["email"];
        $matricule = $data["matricule"];
        $role = $data["roles"];
        $archive = $data["archive"];
        if($archive==0){
        echo "<tr><td>$prenom</td><td>$nom</td><td>$email</td><td>$matricule</td><td>$role</td>";
        echo "<td style='display:flex;gap:50px; justify-content:center;'>";
        echo "<a href='../Vues/accueil_admin.php?id_ar=$id' onclick='return confirm(\"Êtes-vous sûr de vouloir archiver\")'><i class='bi bi-arrow-down-square'></i></a>";
        echo "<a href='../Vues/accueil_admin.php?id_mod=$id'><i class='bi bi-box-arrow-up-right'></i></a>";
        echo "<a href='../Vues/accueil_admin.php?id_switch=$id'><i class='bi bi-arrow-left-right'></i></a>";
        echo "</td";
        echo "</tr>";
        }
       
}
}


function archiver(){
    if(isset($_GET["id_ar"])){
        $id = $_GET["id_ar"];
        if(!empty($id) && is_numeric($id)){
            include("connection.php");
               $date_archive = date('y-m-d');
                $list = "UPDATE utilisateurs SET archive = '1', dateArchive = '$date_archive' WHERE id=$id";
                $dbco->query($list);
     
        }
    }
}

function switcher(){
    if(isset($_GET["id_switch"])){
        $id = $_GET["id_switch"];
        if(!empty($id) && is_numeric($id)){
            include("connection.php");
            $list = "SELECT roles FROM utilisateurs WHERE id=$id";
            $result = $dbco->query($list);
            $data = $result->fetch();
                $role = $data["roles"];
                if($role == "Admin"){
                    $list = "UPDATE utilisateurs SET roles = 'User' WHERE id=$id";
                    $dbco->query($list);
                }
                if($role == "User"){
                    $list = "UPDATE utilisateurs SET roles = 'Admin' WHERE id=$id";
                    $dbco->query($list);
                }
        }
    }
}

function popup(){
    if(isset($_GET["id_mod"])){
        $id = $_GET["id_mod"];
        if(!empty($id) && is_numeric($id)){
            include("connection.php");
            $list = "SELECT * FROM utilisateurs WHERE id=$id";
            $result = $dbco->query($list);
            $data = $result->fetch();
                $id = $data["id"];
                $prenom = $data["prenom"];
                $nom = $data["nom"];
                $email = $data["email"];
                
                echo "<form action='../Vues/accueil_admin.php?id_conf=$id' method='post' style='display:flex; flex-direction:column;justify-content:center;width:20%;gap: 10px;' class='border border-dark p-3'>
                <h2>Modification</h2><input value='$prenom' name='prenom' class='d-flex justify-content-center'><input value='$nom' name='nom'><input value='$email' name='email'>
                <input class='btn btn-warning' value='Modifier' type='submit' name='valide'></form>";
                }   
            
            }
        }

function modifier(){
    if(isset($_GET["id_conf"])){
        $id = $_GET["id_conf"];
        if(isset($_POST["valide"])){
            if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["email"])){
          
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                @$email = $_POST["email"];
                $date_modif = date('y-m-d');
                /* if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../Vues/accueil_admin.php");
                }  */
                include("../Controller/connection.php");
                $list = "UPDATE utilisateurs SET prenom = '$prenom', nom = '$nom', email = '$email', dateModif = '$date_modif' WHERE id = $id";
                $dbco->exec($list);
              
            }
        } 
    } 
}

?>