<?php

    include("connection.php");
    $list = "SELECT * FROM utilisateurs";
    $result = $dbco->query($list);
    while($data = $result->fetch()){
        $prenom = $data["prenom"];
        $nom = $data["nom"];
        $email = $data["email"];
        $matricule = $data["matricule"];
        $role = $data["roles"];
        $archive = $data["archive"];
        if($archive==0){
        echo "<tr><td>$prenom</td><td>$nom</td><td>$email</td><td>$matricule</td><td>$role</td>";
        echo "<td style='display:flex;gap:10px; justify-content:left;'>";
        echo "<a href='' class='bi bi-archive'></a>";
        echo "<a href='' class='btn btn-danger'>Supprimer</a>";
        echo "</td";
        echo "</tr>";
        }
    }

?>