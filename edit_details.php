<?php
$con = mysqli_connect('localhost','root','','findmydoctor');

$id=$doctorname=$years=$expert=$hospitalname=$contactnumber=$availablefrom=$availabletill="";
if (isset($_GET['action']) && $_GET['action']=='update') {
   
   $id=$_GET['id'];
   $query = "SELECT * FROM doctor_details WHERE id='$id'";

        $returnEmail = mysqli_query($con,$query);
        $temp = [];
        while ($row = mysqli_fetch_assoc($returnEmail)) {
           $temp[] = $row;
        }

        

        $doctorname=$temp[0]['name'];
        $years=$temp[0]['experience'];
        $expert=$temp[0]['expertise'];
        $hospitalname=$temp[0]['hospital'];
        $contactnumber=$temp[0]['contact'];
        $availablefrom=$temp[0]['time_from'];
        $availabletill=$temp[0]['time_till'];
}


    if(!$con)
    {
        echo "server not found";
    }
    if(!mysqli_select_db($con,'findmydoctor'))
    {
        echo "database not found";
    }
  if(isset($_POST['update']))
  {      
        
        $id=$_POST['id'];
        $name=$_POST['name'];
        $experience=$_POST['experience'];
        $expertise=$_POST['expertise'];
        $hospital=$_POST['hospital'];
        $contact=$_POST['contact'];
        $time_from=$_POST['time_from'];
        $time_till=$_POST['time_till'];
        $query="UPDATE doctor_details SET name='$name',experience='$experience',expertise='$expertise',hospital='$hospital',contact='$contact',time_from='$time_form',time_till='$time_till' WHERE id='$id'";
        $data=mysqli_query($con,$query);
        if($data)
        {
            header("location:Edit Details.php?action=update_alert");
           

        }
        else
        {
            echo "data is not updated";
        }
  }
  ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Update Details</title>

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
    
       
    
    </style>
    <!------ Include the above in your HEAD tag ---------->
  </head>
<div class="container">
            <form class="form-horizontal" method="POST" role="form" action="" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <h2>UPDATE DETAILS</h2>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block" style="color:black;">*Required fields</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Doctor Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" value="<?php echo $doctorname?>" placeholder="Doctor Name" class="form-control" autofocus required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="experience" class="col-sm-3 control-label">Experience(years)* </label>
                    <div class="col-sm-9">
                        <input type="text" id="experience" value="<?php echo $years ?>" placeholder="Experience(in years)" class="form-control" name= "experience" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="expertise" class="col-sm-3 control-label">Expertise*</label>
                    <div class="col-sm-9">
                        <input type="text" id="expertise" name="expertise" value="<?php echo $expert ?>" placeholder="Expertise" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hospital" class="col-sm-3 control-label">Hospital Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="hospital" value="<?php echo $hospitalname ?>" placeholder="Hospital Name" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Hospital Contact Number*</label>
                    <div class="col-sm-9">
                        <input type="phone" id="contact" value="<?php echo $contactnumber ?>" name="contact" placeholder="Hospital Contact Number" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="time_from" class="col-sm-3 control-label">Available from*</label>
                    <div class="col-sm-9">
                        <input type="time" id="time_from" value="<?php echo $availablefrom ?>" name="time_from" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="time_till" class="col-sm-3 control-label">Available till*</label>
                    <div class="col-sm-9">
                        <input type="time" id="time_till" name="time_till" value="<?php echo $availabletill ?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="image" accept=".png,.jpg,.jpeg" onchange="readURL(this);" />
                    </div>
                </div>
                
                <center><button type="submit" value="update" name="update" style=" background-color: #FFA943;margin-top: 5%; width: 300px; ;" class="btn btn-block" >Update</button></center>
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

