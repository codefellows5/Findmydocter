var x = document.getElementById("login_form");
var y = document.getElementById("register_form");
var z = document.getElementById("btn");
var a = document.getElementById("login_button");
var b = document.getElementById("register_button");
var w = document.getElementById("forgot_form");

var modal = document.getElementById("myModal");


function change_to_register()
{
  w.style.left="-220%";
  x.style.left="-110%";
  y.style.left="10%";
  z.style.left="50%";
  a.style.color="black";
  b.style.color="white";
}

function change_to_login()
{
  w.style.left="-110%";
  x.style.left="10%";
  y.style.left="110%";
  z.style.left="0%";
  a.style.color="white";
  b.style.color="black";
}

function forgot_password()
{
  w.style.left="10%";
  x.style.left="110%";
  y.style.left="220%";
}

function valid_login()
{
  var email_l = document.forms["login_form"]["emaillogin"].value;
  var pass_l = document.forms["login_form"]["passwordlogin"].value;

  if(email_l=="" || pass_l=="")
  {
     modal.style.display = "block";
     document.getElementById("Modal_head").innerText="Can't login";
document.getElementById("Modal_body").innerText="Please fill all details to login.";

    return false;
  }
}

function valid_register()
  {
  var user_r = document.forms["register_form"]["username_register"].value;
  var email_r = document.forms["register_form"]["email_register"].value;
  var num_r = document.forms["register_form"]["number_register"].value;
  var pass_r = document.forms["register_form"]["password_register"].value;
  var cpass_r = document.forms["register_form"]["con_password_register"].value;
  var tc_r = document.forms["register_form"]["terms_conditions"].checked;

  if(user_r=="" || email_r=="" || num_r=="" || pass_r=="" || cpass_r=="" )
  {
    modal.style.display = "block";
       
document.getElementById("Modal_head").innerText="Can't register";
document.getElementById("Modal_body").innerText="Please fill all details to register.";
    return false;
  }
  else if(pass_r!=cpass_r)
 {

modal.style.display = "block";
       
document.getElementById("Modal_head").innerText="Can't register";
document.getElementById("Modal_body").innerText="Password and Confirm password does not match.";

    return false;
  }
  else if(tc_r==false)
  {
modal.style.display = "block";
       
document.getElementById("Modal_head").innerText="Can't register";
document.getElementById("Modal_body").innerText="Please agree to the terms and conditions to register.";
   
    return false;
  }
}


function close_modal() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



// ---------------------------------
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



