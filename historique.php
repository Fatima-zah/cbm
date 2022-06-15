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
<body>
    <div class="hist">


    <table class="table">
        <thead>
            <tr >
            <td scope="col">id</td>
            <td scope="col">poids</td>
            <td scope="col">longueur</td>
            <td scope="col">largeur</td>
            <td scope="col">hauteur</td>
            <td scope="col">total</td>
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