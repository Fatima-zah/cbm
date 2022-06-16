<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="form.css">
    
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <div style="text-align:center;margin-top:8%"> <h2>SIGN-UP</h2> </div>


                <form action="" method="POST">
    <?php
    include 'connection.php';

    if(isset($_POST['submit'])){
      $name = htmlspecialchars($_POST['fname']);
      $phone = htmlspecialchars($_POST['phone']);
      $email = htmlspecialchars($_POST['email']);
      $pwd =  htmlspecialchars($_POST['pwd']);
      //validation
      $valid = 0;

      if ($valid == 0) {

        //data info >> database >> client
        $sql = "INSERT INTO Client (fname,phone,email,pwd) VALUES ('$name','$phone','$email','$pwd')";
        $query = mysqli_query($conn, $sql);
  
       if(! headers_sent()){
        header("location: index2.php");
       }else{
         echo '<script type="text/javascript">window.location.href="customers.php"</script>';
       }
    }
        }
    ?>

                    <div class="input-field">
                        <input type="text" name="fname" placeholder="Enter your name" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                  
                    <div class="input-field">
                        <input type="number" name="phone" placeholder="Enter your phone" required>
                        <i class="uil uil-phone icon"></i>
                    </div>
                    
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    
                    <div class="input-field">
                        <input type="pwd" name="pwd" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="log-in.php" class="text">SIGN IN?</a>
                    </div>

                    <div class="sub">
                       <button class="button" name="submit">Submit</button>
                    </div>                
                </form>

           
            </div>
            
            
           
        </div>
    </div>



<script>
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

 
</script>
</body>
</html>