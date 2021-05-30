<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <title>Edit Details</title>
        <style>
            body 
            {
                font-family: 'Open Sans', sans-serif;
                background-image: url('Images/Background.jpg');
                background-size: cover;
            }

            .card 
            {
                margin: 1em 0;
                background-color: #f5fff5;
            }

            .card-title 
            {
                font-size: 2em;
                margin-bottom: 0.6em;
                color: #007E64;
                font-weight: bold;
            }

            .card-text
            {
                font-size: 1.2em;
                margin: 0.1em;
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
                box-
                shadow:0 0 0 .2rem #ffd6a4;
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
            img
            {
                width: 250px;
            }
            
        </style>
    </head>
    <body>

        <div class="container">

            <!-- <h2>ABC Hospital</h2> -->
            <br><a href="doctor_details.php" class="btn btn-primaryy add_doctor">Add new doctor</a>
<?php
$con=mysqli_connect('localhost','root','','findmydoctor');
$result = mysqli_query($con,"SELECT * FROM doctor_details ");
if (mysqli_num_rows($result) > 0) 
          { 
            $i=0; 
            while($row = mysqli_fetch_array($result)) 
            { 
        ?>

            <div class="card shadow p-1 mb-7 #E1FFE4 rounded">
                <div class="card-body">
                    <div class="row" >
                        <div class="col-lg-4">
                             <?php echo "<img src='".$row["image"]."'/>";?>
                        </div>
                        <div class="col-lg-7">
                            <h5 class="card-title"> <?php echo $row["name"]; ?></h5>
                            <p class="card-text">Experience : <?php echo $row["experience"]; ?></p>
                            <p class="card-text">Area of Expertise : <?php echo $row["expertise"]; ?></p>
                            <p class="card-text">Hospiatl Name : <?php echo $row["hospital"]; ?></p>
                            <p class="card-text">City : <?php echo $row["city"]; ?></p>
                            <p class="card-text">Timings : <?php echo $row["time_from"]; ?> to <?php echo $row["time_till"]; ?></p>
                            <a href="edit_details.php?action=update&id=<?php echo $row['id'];?>" class="btn btn-primaryy">Edit Details</a>
                           
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
      ?>

           <?php
     $con=mysqli_connect('localhost','root','','findmydoctor');
if(isset($_POST['delete']))
{
       $id=$_GET['id'];
        $name=$_GET['name'];
        $experience=$_GET['experience'];
        $expertise=$_GET['expertise'];
        $city=$_GET['city'];
        $hospital=$_GET['hospital'];
        $contact=$_GET['contact'];
        $time_from=$_GET['time_from'];
        $time_till=$_GET['time_till'];
        $query="DELETE FROM doctor_details WHERE ID='$id'";
        $data=mysqli_query($con,$query);
        if($data)
        {
            header("location:Edit Details.php");
        }
        else
        {
            echo "<font color='red'>sorry,delete process failed";
        }
        }
?>

<script type="text/javascript">
        function checkdelete()
        {
             return confirm('are you sure you want to delete this data?');
        }
    </script>
    </body>
</html>