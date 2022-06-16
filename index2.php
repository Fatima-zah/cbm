<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            session_start();
            if(isset($_SESSION["id"])) {
                echo $_SESSION["id"];
            }

            
        ?>
        <div style="display:flex;justify-content: flex-end;margin-left: 85%;" >
                <a href="historique.php"><div id=""s> <img src="./history.png" alt="" width="34%" style="cursor : pointer;  " ></div></a>

            <a href="first.php"><div id=""> <img src="./logout.png" alt="" width="30%" style="cursor : pointer;  " ></div></a>
            </div>
        <?php 
            // }
        ?>
        <form action="index2.php" method="POST">
        <?php
        include"connection.php";
                $res = 0;
                if (isset($_GET["delete"])) {
                    $total = "";
                    $multi = "";
                }

                if (isset($_POST["submit"])) {
                    $poids = $_POST["poids"];
                    $longueur = $_POST["longueur"];
                    $largeur = $_POST["largeur"];
                    $hauteur = $_POST["hauteur"];
                    $spain = 5;
                    $multi = ($largeur * $longueur * $hauteur) / 5000;
                    $poidsliv = $poids * $spain;
                    $allliv = $multi * $spain;

                    if ($poids > $multi) {
                    $res = $poidsliv;
                    } else {
                    $res = $allliv;


                    $sql = "INSERT INTO simulation (poids,longueur,largeur,hauteur,total) VALUES ('$poids','$longueur','$largeur','$hauteur','$res')";
                    $query = mysqli_query($conn, $sql);
                    }

                    // header("location: index1.php");
                }
        ?>
            <h1>Expédition</h1>
            <div class = "cont">
                    
                <input type="number" required class="input"  name="poids" placeholder="Poids (kg)">
                    <img src="box.png" class="src">
                <!-- <span class="lab">Poids</span> -->
                <input type="number" name="longueur" required id="longueur" class="input" placeholder="Longueur (cm)"><span class="test">X</span>
                <input type="number" name="largeur" required id="largeur" class="input" placeholder="Largeur (cm)"><span class="test">X</span>
                <input type="number" name="hauteur" required id="hauteur"  class="input"  placeholder="Hauteur (cm)">
                <div class="spsvali">
                    <button type="submit" id="done" name="submit"class="btn" style="    color: #ffffff;
                            background-color: #162c43;" onclick="myFunction()">Submit</button>

                    <a href="index2.php?delete=<?php echo 1 ?>" class="btn btn-danger clear">Clear</a>
                </div>

                <div style="text-align: center;">
                <input type="text" id="read" class="input" value="<?php echo $res?> DH" readonly>
                </div>
            </div>
        </form>
        <div>
      <?php
      if ($res) {
        echo $res;
      }
      ?>
    </div>

     <!-- <script>
    var poids = document.getElementById("poids")
    var lang = document.getElementById("longueur")
    var lar = document.getElementById("largeur")
    var haut = document.getElementById("hauteur")
    var errorp=document.getElementById("p_lar");
    var errorL=document.getElementById("p_lang");
    var errorg=document.getElementById("p_poids");
    var errorh=document.getElementById("p_haut");

    const element = document.getElementById('done');
    element.addEventListener('click', onFormSubmit);

    function onFormSubmit(e){
      e.preventDefault();
      if (Number(lar.value) < 0){
          errorp.innerHTML=(' Nombre Positive');
          errorp.style.color='red';
      }
      else{
          errorp.innerHTML=('✔️');
          errorp.style.color='green';
      }

      if (Number(lang.value) < 0){
          errorL.innerHTML=(' Nombre Positive');
          errorL.style.color='red';
      }
      else{
          errorL.innerHTML=(' ✔️');
          errorL.style.color='green';
      }
      if (Number(poids.value) < 0){
          errorg.innerHTML=(' Nombre Positive');
          errorg.style.color='red';
      }
      else{
          errorg.innerHTML=(' ✔️');
          errorg.style.color='green';
      }
      if (Number(haut.value) < 0){
          errorh.innerHTML=(' Nombre Positive');
          errorh.style.color='red';
      }
      else{
          errorh.innerHTML=(' ✔️');
          errorh.style.color='green';
      }
  }
    </script> -->
    </header>
    <section  id="hiden">      
    </section>
    <section id="second">
    </section>
    <!-- <script src="main.js"></script> -->
</body>
</html>