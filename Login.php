<?php 
// if(!isset($_COOKIE['user'])) {
//     echo "<h1>You are not allowed to access this page</h1>";
//     header("Location: login.php");
//     die();
// }

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "findmydoctor";


    $conn = mysqli_connect($servername, $username, $password, $dbname);


    $hospital_name=$email=$password=$confirm=$terms_conditions=$emaillogin=$passwordlogin="";
    $hospital_nameerr=$emailerr=$passworderr=$confirmerr=$terms_conditionserr=$err=$emailloginerr=$passwordloginerr="";
  if(isset($_POST['submit'])){
    if(isset($_POST['hospital_name']) && $_POST['hospital_name']!=""){
      $hospital_name = $_POST['hospital_name'];
    }else{
      $hospital_nameerr = "hospital name is required";
    }
    if(isset($_POST['email']) && $_POST['email']!=""){
      if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email = $_POST['email'];
        $query = "SELECT * FROM register WHERE email='$email'";
        $returnEmail = mysqli_query($conn,$query);
        $temp = [];
        while ($row = mysqli_fetch_assoc($returnEmail)) {
           $temp[] = $row;
        }
        if(count($temp)!=0){
          $emailerr = "Email is already Registered.";
        }

      }else{
        $emailerr = "Please Enter Valid Email";
      }
      
    }else{
      $emailerr = "Email is required";
    }

    if(isset($_POST['password']) && $_POST['password']!=""){
      if(isset($_POST['confirm']) && $_POST['confirm']!=""){
        if($_POST['password']==$_POST['confirm']){
         $password = $_POST['password']; 
         $confirm = $_POST['confirm'];
        }else{
          $confirmerr = "Confirm password is diffrent from password";
        }
      }else{
        $confirmerr = "Password is required";
      }
    }else{
      $passworderr = "Password is required";
    }

    if(isset($_POST['terms_conditions'])){
      $terms_conditions = true;
    }else{
      $terms_conditions = false;
    }

    if($hospital_name!="" && $email!="" && $password!="" && $emailerr=="" && $passworderr=="" && $terms_conditions && $confirmerr==""){
      $sql = "INSERT INTO register (hospital, email, password,terms) VALUES ('$hospital_name', '$email', '$password','$terms_conditions')";

        if (mysqli_query($conn, $sql)) {
          
          //-----------------------------//---------------------
            //  after Registration
            //-----------------------------//---------------------

            header("Location: Edit Details.php");

        } else {
          $err = "OOPs something went wrong";
        }
    }else{
      $err = "OOPs something went wrong";
    }
  }
  if(isset($_POST['login'])){
     if(isset($_POST['emaillogin']) && $_POST['emaillogin']!=""){
      $emaillogin = $_POST['emaillogin'];
    }else{
      $emailloginerr = "Email name is required";
    }
    if(isset($_POST['passwordlogin']) && $_POST['passwordlogin']!=""){
      $passwordlogin = $_POST['passwordlogin'];
    }else{
      $passwordloginerr = "Password is required";
    }
    if($emaillogin!="" && $passwordlogin!=""){
      $query = "SELECT * FROM register WHERE email='$emaillogin'";
        $returnEmail = mysqli_query($conn,$query);
        $temp = [];
        while ($row = mysqli_fetch_assoc($returnEmail)) {
           $temp[] = $row;
        }
        if(count($temp)!=0){
          if($passwordlogin==$temp[0]['password']){
            $cookie_name = "user";
            $cookie_value = $emaillogin;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            //-----------------------------//---------------------
            //-----------------------------//---------------------

            //-----------------------------//---------------------
            header("Location: Edit Details.php");
            //-----------------------------//---------------------
            //-----------------------------//---------------------
            //-----------------------------//---------------------

          }else{
            $passwordloginerr = "password is incorrect";
          }
        }else{
          $emailloginerr = "username not found";
        } 
    }
    


  }
?>
<!doctype html>
<html>
<head>
<title>Login</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<link rel="stylesheet" href="Login.css">

</head>
<body>
<div class="form_container" style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('../Images/Laptop.jpg');">
    <div class="form_body">


<!------     buttons   --------->



      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" id="login_button" onclick="change_to_login()">Login</button>
        <button type="button" class="toggle-btn" id="register_button" onclick="change_to_register()">Register</button>      
      </div>


<!------     buttons end  --------->

<!------     forgot form   --------->


      <form  name="forgot_form" action="" method="post" onsubmit="return valid_forgot()" class="input_group" id="forgot_form">
        <input type="email" name="emailforgot" class="input_field" placeholder="Email">
        <input type="button" class="submit_btn" value="Send otp">
        <input type="text" name="otpforgot" class="input_field" placeholder="Otp" maxlength="4" pattern="[0-9]{4}">

        <input type="submit" class="submit_btn" value="Confirm otp">

      </form>


<!------     forgot form end   --------->

<!------     login form   --------->


      <form  name="login_form" action="" method="post" onsubmit="return valid_login()" class="input_group" id="login_form">
        <input type="email" value="<?php echo($emaillogin); ?>" name="emaillogin" class="input_field" placeholder="Email">
        <?php if($emailloginerr!="")echo '<p style="color: red">'.$emailloginerr.'</p>'?>
        <input type="password" value="<?php echo($passwordlogin); ?>" name="passwordlogin" class="input_field" placeholder="Password">
        <?php if($passwordloginerr!="")echo '<p style="color: red">'.$passwordloginerr.'</p>'?>
        <!-- <label><input type="checkbox" class="check_box"><span id="Forgot" onclick="forgot_password()">Remember Password</span></label> -->
        <input type="submit" name="login" class="submit_btn" value="login">
      </form>


<!------     login form end   --------->


<!------    register form   --------->


<form name="register_form" action="" method="post" onsubmit="return valid_register()" class="input_group" id="register_form">
  <?php if($err!="")echo '<p style="color: red">'.$err.'</p>'?>
        <input type="text" value="<?php echo($hospital_name); ?>" name="hospital_name" class="input_field" placeholder="Hospital name">
        <?php if($hospital_nameerr!="")echo '<p style="color: red">'.$hospital_nameerr.'</p>'?>
         <input type="email" value="<?php echo($email); ?>" name="email" class="input_field" placeholder="Email">
          <?php if($emailerr!="")echo '<p style="color: red">'.$emailerr.'</p>'?>
        <input type="password" value="<?php echo($password); ?>" name="password" class="input_field" placeholder="Password" minlength="8" pattern="[A-Za-z0-9]{8}">
        <?php if($passworderr!="")echo '<p style="color: red">'.$passworderr.'</p>'?>
        <input type="password" value="<?php echo($confirm); ?>" name="confirm" class="input_field" placeholder="Confirm password">
        <?php if($confirmerr!="")echo '<p style="color: red">'.$confirmerr.'</p>'?>
      <span class="pass_pattern">Password must be of minimum 8 letters and can contain alphabets and numbers<br></span>

       <label> <input type="checkbox" name="terms_conditions" class="check_box"><span>I agree to the terms and conditions.</span></label>

        <input type="submit" class="submit_btn" name="submit" value="Register">
      </form>

<!------     register form end   --------->

    </div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" style="font-size:20px" onclick="close_modal()">&times;</span>
      <h2 id="Modal_head">Heading</h2>
    </div>
    <div class="modal-body">
      <p id="Modal_body">text</p>
    </div>
  </div>

</div>



</div>
 
<script src="login.js"></script>


</body>
</html>




