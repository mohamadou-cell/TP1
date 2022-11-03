<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="top: 0px;bottom: 0px;">
  <header>
  <div class="logo container-fluid" style="background-color:#0BF0FF;position:fixed-top;width:100%; height: 150px;display:flex;align-items:center;gap:20px;" >
            <div class="container-fluid"><img src="images/image.jpeg" data-toggle="modal" data-target="#exampleModal" style="float: left;"></div>
            <div>
              <?php
                include_once "../Controller/session.php";
                init_php_session();
                
                echo '<img src="data:image;base64,'.base64_encode($_SESSION["photo"]).'" style="width: 100px;height:100px;border-radius:50%;"/>';
              ?>
            </div>
            <div style="width: 200px;">
            <div class="d-flex" style="gap: 10px;">
                <div><p style="font-weight: bold;">
                <?php
                    echo $_SESSION["prenom"]; 
                  ?>
                  </p>
                </div>
                <div><p style="font-weight: bold;">
                <?php
                    echo $_SESSION["nom"]; 
                  ?>
                  </p>
                </div>   
            </div>
              <p style="font-weight: bold;">
              <?php
                  echo $_SESSION["matricule"].'</br>';
                ?>
                </p>
              </div>
                <div class="menu" style="background-color:#0c82d1;">
                    <nav class="navbar navbar-expand-lg " style="background-color:#0BF0FF;">
                        <div class="container-fluid" style="gap:15px;float:right;">
                          <button class="btn btn-outline-success" type="submit" style="background-color:white;"><a href="login_vue.php"><i class="bi bi-box-arrow-right"></i></a></button>
                      </div>
                   </nav>
             </div>
        </div> 
  </header>
  <main>
  <div class="container-fluid d-flex justify-content-center mt-5 mb-5">
    <div class="d-flex w-25 border border-dark">
      <a href="accueil_user.php" class="w-50"><button class="btn btn-light w-100 font-weight-bold" style="color: black;">USERS</button></a>
      <a href="archives_user.php" class="w-50"><button class="btn btn-dark w-100 font-weight-bold">ARCHIVES</button></a>
    </div>
  </div>
  <div class="container-fluid mb-3 mt-5 d-flex justify-content-end align-items-center">
            <form action="" method="post">
              <div class="d-flex justify-content-center align-items-center">
                <input type="text" name="nom" placeholder="Entrer prenom ou nom" class="form-control col-lg-9" >
                <button type="submit" class="btn btn-primary" name="boutton"><i class="bi bi-search"></i></a>
              </div>
            </form>
        </div>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="boutton">
          Launch static backdrop modal
        </button> -->

        <!-- Modal -->
       <!--  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              
              <?php
                /* include_once "../Controller/admin.php";
                popup(); */
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div> -->
        
<table class="container-fluid table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="col-lg-2">PRENOM</th>
      <th scope="col" class="col-lg-2">NOM</th>
      <th scope="col" class="col-lg-2">EMAIL</th>
      <th scope="col" class="col-lg-2">MATRICULE</th>
      <th scope="col" class="col-lg-2">ROLE</th>
      <th scope="col" class="col-lg-2">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
        <?php
            if(isset($_POST["boutton"])){
                if(isset($_POST["nom"])){
                    $nom = $_POST["nom"];
                    if(!empty($nom)){                   
                    include("../Controller/connection.php");
                    $list = "SELECT * FROM utilisateurs WHERE prenom LIKE '%$nom%' OR nom LIKE '%$nom%'";
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
                        echo "<td style='display:flex;gap:50px; justify-content:center;'>";
                        echo "<a href='../Vues/accueil_admin.php?id_ar=$id'><i class='bi bi-archive'></i></a>";
                        echo "<a href='../Vues/accueil_admin.php?id_mod=$id'><i class='bi bi-box-arrow-up-right'></i></a>";
                        echo "<a href='../Vues/accueil_admin.php?id_switch=$id'><i class='bi bi-arrow-left-right'></i></a>";
                        echo "</td";
                        echo "</tr>";
                }
            }
            }
            
            }
            }
        ?>
    <tbody>
</table>

<div class="d-flex justify-content-center" >
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
</main>
<footer class="container-fluid bg-dark d-flex justify-content-center align-items-center fixed-bottom" style="height: 100px;bottom: 0px;">
  <p style="color:white;">Copyright &copy; 2022 Groupe :SN SOLID Dev</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
<script src="js/mod.js"></script>   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>