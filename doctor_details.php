<?php
 include 'connection.php';

 if(isset($_POST['submit']))
  {
    if($con)
    {
      echo "<script type='text/javascript'> 
     alert('Details entered successfully!') 
     </script>"; 

    }
    else
    {
      echo "<script type='text/javascript'>
      alert('Sorry for inconvinience!! Please enter details agian!');
      </script>";
    }
    $name="";
    if(isset($_POST['name'])){
        $name=mysqli_real_escape_string($con,$_POST['name']);
    }else{
        $name = "";
    }
    $experience="";
    if(isset($_POST['experience'])){
        $experience=mysqli_real_escape_string($con,$_POST['experience']);
    }else{
        $experience = "";
    }
    $expertise="";
    if(isset($_POST['expertise'])){
        $expertise=mysqli_real_escape_string($con,$_POST['expertise']);
    }else{
        $expertise = "";
    }
    $hospital="";
    if(isset($_POST['hospital'])){
        $hospital=mysqli_real_escape_string($con,$_POST['hospital']);
    }else{
        $hospital = "";
    }
    $contact="";
    if(isset($_POST['contact'])){
        $contact=mysqli_real_escape_string($con,$_POST['contact']);
    }else{
        $contact = "";
    }
    $city="";
    if(isset($_POST['city'])){
        $city=mysqli_real_escape_string($con,$_POST['city']);
    }else{
        $city = "";
    }
    $time_from="";
    if(isset($_POST['time_from'])){
        $time_from=mysqli_real_escape_string($con,$_POST['time_from']);
    }else{
        $time_from = "";
    }
    $time_till="";
    if(isset($_POST['time_till'])){
        $time_till=mysqli_real_escape_string($con,$_POST['time_till']);
    }else{
        $time_till = "";
    }

    $file = $_FILES["image"]["name"];
    $tmp_name =$_FILES["image"]["tmp_name"];

    if($file!=Null)
    {
      $path = "Form_images/".$file;
    }
    else
    {
      $path = "Form_images/imagenotfound.png";
    }
    move_uploaded_file($tmp_name, $path);
    
    $qy="insert into doctor_details(name,experience,expertise,hospital,contact,city,time_from,time_till,image) values('$name','$experience','$expertise','$hospital','$contact','$city','$time_from','$time_till','$path')";
    mysqli_query($con,$qy);

  }

?>

 
<!DOCTYPE html>
<html>
  <head>
    <title>Doctor Details</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>


    <style type="text/css">
        body {
     background: url('Images/formbg.jpg');
    background-size: cover;
    }

    .container{

        padding-top: 30px;
        padding-bottom: 35px;

    }
    *[role="form"] {
        max-width: 75%;
        padding-left: 4vw;
        padding-right: 4vw ;
        padding-top: 1.5vw;
        padding-bottom: 1.5vw;
        margin: 0 auto;
        border-radius: 0.3em;
        background-color: #f5fff5;
    }

    *[role="form"] h2 { 
        font-family: 'Open Sans' , sans-serif;
        font-size: 40px;
        font-weight: 600;
        color: #000000;
        margin-top: 2%;
        margin-bottom: 2%;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 4px;
    }

    label{
        color: black;
        padding-left: 7px;
    }
    .btn-primaryy
            {
                font-size: 1.2em;
                margin: 1em 0.5em 0 0;
                padding-left: 1em;
                padding-right: 1em;
                color:#fff;
                background-color: #ffa943;
                border-color:#ffa943;
            }
            
            .btn-primaryy:hover, .btn-outline-primaryy:hover  
            {
                color:#fff;
                background-color: #ffa943;
                border-color:#ffa943;
            }
           
            .btn-primaryy.focus, .btn-primaryy:focus, .btn-outline-primaryy.focus, .btn-outline-primaryy:focus
            {
                color:#fff;
                background-color:#ffa943;
                border-color:#ffa943;
                box-shadow:0 0 0 .2rem #ffd6a4;
            }
            .btn-outline-primaryy
            {
                font-size: 1.2em;
                margin: 1em 0 0 0.5em;
                color:#ffa943;
                background-color: transparent;
                border: 2px solid #ffa943;
            }

            .add_doctor
            {
                margin:0;
            }           
    
       
    
    </style>
    <!------ Include the above in your HEAD tag ---------->
  </head>
  <br><center><a href="Edit Details.php" class="btn btn-primaryy add_doctor">Edit Details</a></center>
<div class="container">
            <form class="form-horizontal" action="doctor_details.php" method="POST" role="form" enctype="multipart/form-data">
                <h2>DETAILS</h2>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block" style="color:black;">*Required fields</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Doctor Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" placeholder="Doctor Name" class="form-control" autofocus required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="experience" class="col-sm-3 control-label">Experience(years)* </label>
                    <div class="col-sm-9">
                        <input type="text" id="experience" placeholder="Experience(in years)" class="form-control" name= "experience" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="expertise" class="col-sm-3 control-label">Expertise*</label>
                    <div class="col-sm-9">
                        <input type="text" id="expertise" name="expertise" placeholder="Expertise" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hospital" class="col-sm-3 control-label">Hospital Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="hospital" placeholder="Hospital Name" name="hospital" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Hospital Contact Number*</label>
                    <div class="col-sm-9">
                        <input type="phone" id="contact" name="contact" placeholder="Hospital Contact Number" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City*</label>
                    <div class="col-sm-9">
                        <input type="text" id="city" name="city" placeholder="City" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="time_from" class="col-sm-3 control-label">Available from*</label>
                    <div class="col-sm-9">
                        <input type="time" id="time_from" name="time_from" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="time_till" class="col-sm-3 control-label">Available till*</label>
                    <div class="col-sm-9">
                        <input type="time" id="time_till" name="time_till" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" accept=".png,.jpg,.jpeg" onchange="readURL(this);" />
                    </div>
                </div>
                
                <center><button type="submit" value="Register" name="submit" style=" background-color: #FFA943;margin-top: 5%; width: 300px; ;" class="btn btn-block" >Register</button></center>
            </form> <!-- /form -->
        </div> <!-- ./container -->
        <script type="text/javascript">
            $(function(){
    $.validator.setDefaults({
        highlight: function(element){
            $(element)
            .closest('.form-group')
            .addClass('has-error')
        },
        unhighlight: function(element){
            $(element)
            .closest('.form-group')
            .removeClass('has-error')
        }
    });
    
        </script>

</html>

