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
<body>

<table class="container table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">PRENOM</th>
      <th scope="col">NOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MATRICULE</th>
      <th scope="col">ROLE</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
        <?php
            include_once "../Controller/admin.php";
        ?>
    <tbody>
</table>

    
</body>
</html>