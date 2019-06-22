<html>
<head>
<link rel="shortcut icon" href="http://theblackbucks.com/img/logo.png">
<link rel="apple-touch-icon" href="http://theblackbucks.com/img/logo.png" >
<link href="http://zinka.me/mentors/wp-content/themes/betube/assets/images/apple-icon-touch.html" rel="apple-touch-icon">      
<link href="css/sidebar.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
@import url('https://fonts.googleapis.com/css?family=Lato:300,400');
html, body {
  font-family: 'Lato', serif;  
}
.navbar-default {
  font-size: 1.15em;
  font-weight: 400;
  background-color: #fffff;
  padding: 10px;
  border: 0px;
  border-radius: 0px;
}
.navbar-default .navbar-nav>li>a {
  color: white;
   background-color: green;
}
.navbar-default .navbar-nav>li>a:hover {
  color: #cbf0ff;
   background-color: green;
}
.navbar-default .navbar-brand {
  color: #002433;
}
.navbar-default .navbar-brand:hover {
  color: #ffffff;
  text-shadow: 1px -1px 8px #b3e9ff;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {
  background-color: green;
  color: white;
}
.navbar-default .navbar-toggle {
  border: none;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
  border: none;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color: #002433;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: green;
}
.dropdown-menu {
  background-color: #ffffff;
  color: white;
  border: 0px;
  border-radius: 2px;
  padding-top: 10px;
  padding-bottom: 10px;
  min-width: 250px;  
  }
.dropdown-menu>li>a {
  color: white;  
}
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
  background-color: #ffffff;
  color:white;
}
.dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #003246;
}
.navbar-default .navbar-nav .open .dropdown-menu>li>a {
    color: #ffffff;    
}
@media (max-width: 867px) { 
  .dropdown-menu>li>a {
    background-color: white;
    color: #ffffff;
  }
  .dropdown-menu>li>a:hover {
    color: #ffffff;
  }  
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus, .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
    color: #ffffff;
    background-color: transparent;
  } 
  .dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #005577;
  }
} 

.hea{
        border: 0 !important;
    background-color: #000 !important;
    padding: 0px !important;
    border-radius: 0 !important;
    padding-top: 0px !important;
    margin: 0 !important;
}
.bac{
        background-color: #fff;
    padding-top: 4%;
    background-image: url(http://theblackbucks.com/Artificial_Intelligence/images/uploads/posts/11-829136.jpgd);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 0px;
    width: 100%;
    height: 100%;
}

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
<script>
$(document).ready(function(){
		
    $("#newform").submit(function(e){
	
          e.preventDefault();
   
         $.post("ajax.php",$('#newform').serialize(),function(output,status)
			  {
   
			 if(output == '1')
			 {
				 window.location.href = "selectquiz.php";
			 }
			 else
			 {
					$('#error').html(output);
			 }
              });
    });
});
</script>
</head>
<body style="background-color: #F7F5F2;">
 <nav class="navbar navbar-default hea" >
  <div class="container-fluid" >
    <div class="navbar-header">
       <a href="index.php" ><img src="http://theblackbucks.com/C.jpg" alt="logo" style="margin: 0px 72px;width: 240px;"></a>
    </div>
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid" style="padding: 0;">
<div class="container bac">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="w3-container w3-margin-top" style="    background-color: #fff3;padding: 3%;">
<div class="w3-container w3-card-4" style="    background-color: #fff; padding:5%">
<center>
<form action="ajax.php" id='newform' method="post">
  <div class="container" style="    width: 100%;">
    <input type="text" placeholder="Enter Username" name="uname" id="uname" required  minlength="3">
    <input type="password" placeholder="Enter Password" name="password" id="password" required minlength="3">
    <button type="submit" style="color: #fff;    background-color: #00c0f6;    border-color: #00c0f6;">TAKE TEST NOW</button>
  </div>
</form>
<p id='error'></p>
</center>
</div>
</div>
</div><div class="col-md-4"></div>
</div>
</div>
</div>
</body>
</html>