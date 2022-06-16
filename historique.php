<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body class="hist">


    </div> -->
    <a href="first.php"><div id=""style="display: flex; justify-content: flex-end;"> <img src="./logout.png" alt="" width="2%" style="margin-right: 60px;margin-top:3%;cursor : pointer;  " ></div></a>
    <h1>Historique</h1>
    <div class="table" >
    <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Poids</th>
      <th scope="col">Longueur</th>
      <th scope="col">Largeur</th>
      <th scope="col">Hauteur</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
        <?php include"connection.php";
         $sql = "SELECT id,poids,longueur,largeur,hauteur,total FROM simulation ORDER BY id DESC LIMIT 10";
         $result =$conn->query($sql);
         if(mysqli_num_rows($result) > 0 ){
             while($row = mysqli_fetch_assoc($result)){
                 echo '<tr>
                 <td>'.$row['id'].'</td>
                 <td>'.$row['poids'].'</td>
                 <td>'.$row['longueur'].'</td>
                 <td>'.$row['largeur'].'</td>
                 <td>'.$row['hauteur'].'</td>
                 <td>'.$row['total'].'</td>
                 </tr>';
             }
         } 
         ?>
  </table>
    </div>

</body>
</html>