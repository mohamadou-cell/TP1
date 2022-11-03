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
        if($archive==1){
        echo "<tr><td>$prenom</td><td>$nom</td><td>$email</td><td>$matricule</td><td>$role</td>";
        echo "<td style='display:flex;justify-content:center;'>";
        echo "<a href='../Vues/archives_admin.php?id_ar=$id' onclick='return confirm(\"Êtes-vous sûr de vouloir desarchiver\")'><i class='bi bi-arrow-up-square'></i></a>";
        echo "</td";
        echo "</tr>";
        }
        
    }
}

function desarchiver(){
    if(isset($_GET["id_ar"])){
        $id = $_GET["id_ar"];
        if(!empty($id) && is_numeric($id)){
            include("connection.php");
                $list = "UPDATE utilisateurs SET archive = '0' WHERE id=$id";
                $dbco->query($list);
     
        }
    }
}
?>