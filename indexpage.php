<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <title>FindMyDoctor</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <style>
          @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}
body{
  background-image: url('Images/formbg.jpg');
  background-size: cover;
}
nav{
  background: #171c24;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  height: 70px;
  padding: 0 100px;
}
nav .logo{
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  letter-spacing: -1px;
}
nav .nav-items{
  display: flex;
  flex: 1;
  padding: 0 0 0 40px;
}
nav .nav-items li{
  list-style: none;
  padding: 0 15px;
}
nav .nav-items li a{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-decoration: none;
}
nav .nav-items li a:hover{
  color: #ff3d00;
}
nav form{
  display: flex;
  height: 40px;
  padding: 2px;
  background: #1e232b;
  min-width: 18%!important;
  border-radius: 2px;
  border: 1px solid rgba(155,155,155,0.2);
}
nav form .search-data{
  width: 100%;
  height: 100%;
  padding: 0 10px;
  color: #fff;
  font-size: 17px;
  border: none;
  font-weight: 500;
  background: none;
}
nav form button{
  padding: 0 15px;
  color: #fff;
  font-size: 17px;
  background: #ff3d00;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}
nav form button:hover{
  background: #e63600;
}
nav .menu-icon,
nav .cancel-icon,
nav .search-icon{
  width: 40px;
  text-align: center;
  margin: 0 50px;
  font-size: 18px;
  color: #fff;
  cursor: pointer;
  display: none;
}
nav .menu-icon span,
nav .cancel-icon,
nav .search-icon{
  display: none;
}
@media (max-width: 1245px) {
  nav{
    padding: 0 50px;
  }
}
@media (max-width: 1140px){
  nav{
    padding: 0px;
  }
  nav .logo{
    flex: 2;
    text-align: center;
  }
  nav .nav-items{
    position: fixed;
    z-index: 99;
    top: 70px;
    width: 100%;
    left: -100%;
    height: 100%;
    padding: 10px 50px 0 50px;
    text-align: center;
    background: #14181f;
    display: inline-block;
    transition: left 0.3s ease;
  }
  nav .nav-items.active{
    left: 0px;
  }
  nav .nav-items li{
    line-height: 40px;
    margin: 30px 0;
  }
  nav .nav-items li a{
    font-size: 20px;
  }
  nav form{
    position: absolute;
    top: 80px;
    right: 50px;
    opacity: 0;
    pointer-events: none;
    transition: top 0.3s ease, opacity 0.1s ease;
  }
  nav form.active{
    top: 95px;
    opacity: 1;
    pointer-events: auto;
  }
  nav form:before{
    position: absolute;
    content: "";
    top: -13px;
    right: 0px;
    width: 0;
    height: 0;
    z-index: -1;
    border: 10px solid transparent;
    border-bottom-color: #1e232b;
    margin: -20px 0 0;
  }
  nav form:after{
    position: absolute;
    content: '';
    height: 60px;
    padding: 2px;
    background: #1e232b;
    border-radius: 2px;
    min-width: calc(100% + 20px);
    z-index: -2;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  nav .menu-icon{
    display: block;
  }
  nav .search-icon,
  nav .menu-icon span{
    display: block;
  }
  nav .menu-icon span.hide,
  nav .search-icon.hide{
    display: none;
  }
  nav .cancel-icon.show{
    display: block;
  }
}

nav .logo.space{
  color: red;
  padding: 0 5px 0 0;
}

.w3-text-light-grey
{
	border: 1px solid rgba(155,155,155,0.2);
	padding: 2% 2% 2% 2%;
	text-align: justify;
	margin: 5% 5% 5% 5%;
}


.steps
{
  border: 1px solid rgba(155,155,155,0.2);
  margin: 5% 5% 5% 5%;

}





@media (max-width: 980px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 20px;
  }
  nav form{
    right: 30px;
  }
}
@media (max-width: 350px){
  nav .menu-icon,
  nav .cancel-icon,
  nav .search-icon{
    margin: 0 10px;
    font-size: 16px;
  }
}


/* @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

 body {
     background: linear-gradient(0deg, #fff, 50%, #DEEEFE);
     font-family: 'Rubik', sans-serif;
     background: #455A64;
     height: 100 !important
 } */

.container-fluid
{
  border: 1px solid rgba(155,155,155,0.2);
  
  text-align: justify;
  
  background: #262626;
  color: #627482 !important;
}

footer
{
  margin: 0px 20px 0px 20px;
  padding-left: 20px;
}

.col-xl-8
{
  padding-top: 50px;
  padding-left: 30px;
  padding-bottom: 20px;
}

.col-xl-21
{
  float: right;
  padding-top: 5px;
  margin-right: 20px;
  margin-left: 0px;
  margin-top: -120px;
}

.col-xl-22
{
  float: right;
  margin-top: 20px;
  margin-left: 50px;
  margin-right: 70px;

}

.col-xl-23
{
  float: left;
  margin-top: 20px;
  margin-left: 15px;
  margin-bottom: 20px;
}

.col-xl-24
{
  float: left;
  margin-top: 20px;
  margin-left: 20px;
  margin-bottom: 20px;
}

.mb-3
{
  color: white;
}

      </style>
   </head>

   <body>
      <nav>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
            FindMyDoctor
         </div>
         <div class="nav-items">
             
            <li><a href="Login.php">Login</a></li>
            <li><a href="Login.php">Sign Up</a></li>
            
         </div>
         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
         <form action="#">
            <input type="search" class="search-data" id="search_city" name="search_city" placeholder="Search" required>
            <button type="submit" formaction="Details.php" class="fas fa-search"></button>
         </form>
      </nav>
      <div class="content">
         <!-- <header class="space">Responsive Navbar with Search Box</header>
         <div class="space text">
            using HTML CSS & JavaScript
         </div> -->
      </div>
	<div class="w3-text-light-grey">
    	<h2>About us</h2>
    	<hr style="width:200px" class="w3-opacity">
    	<p>In country like India, health has not been a vital issue, not only in rural areas but
        even in Urban areas as well. People face many problems like they don’t know
        where and when the concerned doctor is available. So, to solve this problem in
        the best and effective way is a web app that can provide data like when, where
        and which concerned doctor will be available. Also, if the patient who is looking
        for doctor can get to know about the experience of doctor and their area of
        expertise, so it will be easy for them to decide which doctor they should meet.
        Hospitals can enter, update and delete doctor’s details. Patients can search
        according to their needs and requirements.
    	</p>
	</div>


  <div class="steps">
      <center><img src="Images/map.jpeg" style="height:600px;width: 600px;"></center>
  </div>


      <div class="container-fluid">
        <footer>
            <div class="row">
                <div class="col-11">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2 class="text-muted">FindMyDoctor</h2>
                        </div>
                        <div class="col-xl-22">
                            <h3 class="mb-31"><b>ADDRESS</b></h3>
                            <p class="mb-1">XYZ,PQR BUILDING</p>
                            <p>123 SECTOR</p>
                        </div>
                        </div>
                        <div class="col-xl-21">
                            <h2 class="mb-3" style="color: grey"><b><p>Cities</p></b></h2>
                            <ul>
                                <li>Ahmedabad</li>
                                <li>Surat</li>
                                <li>vadodara</li>
                                <li>Rajkot</li>
                            </ul>
                        </div>
                    <div class="row1">
                        <!-- <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                            <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span> Pepper All Rights Reserved.</small>
                        </div> -->
                        <div class="col-xl-23">
                            <h4 class="mt-55t"><b>Code Fellows</b></h4><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> findmydoctor@gmail.com</small>
                        </div>
                        <div class="col-xl-24">
                            <h4 class="text-muted1"><b>Team LDCE</b></h4><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> teamLdce@gmail.com</small>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


      <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
      </script>
   </body>
</html>