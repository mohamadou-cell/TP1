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
        }      
    }
}

function afficher1(){ 
    
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
        }      
    }
}
?>