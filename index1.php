<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <script language="javascript">
$(document).ready(function()
{    

    $("#form1").submit(function(event)
  {
      
      event.preventDefault();
      var name = $("#name").val();
      var emailid = $("#emailid").val();
      var mobile = $("#phone").val();
      var password = $("#pass").val();
 if(emailid=="" || name=="" || mobile=="" || password=="")
    {

	console.log('in if');
            document.getElementById('error').innerHTML=' ';
            if(name=="")
            {
                document.getElementById('errorname').innerHTML='Plese Enter Name';
            }
            else
            {
              document.getElementById('errorname').innerHTML=' ';
            }
           
            if(emailid=="")
            {
                document.getElementById('erroremailid').innerHTML='Plese Enter Email';
            }
            else
            {
                document.getElementById('erroremailid').innerHTML=' ';
            }
            
            if(mobile=="")
            {
                document.getElementById('errormobile').innerHTML='Plese Enter Mobile Number';
            }
            else
            {
                document.getElementById('errormobile').innerHTML=' ';
            }
            
            if(password=="")
            {
                document.getElementById('errorpassword').innerHTML='Plese Enter Password';
            } 
            else
            {
               document.getElementById('errorpassword').innerHTML=' ';
            }
  
    }
    else{
		console.log('in if else');
        document.getElementById('error').innerHTML=' ';
        document.getElementById('errorname').innerHTML=' ';
        document.getElementById('erroremailid').innerHTML=' ';
        document.getElementById('errormobile').innerHTML=' ';
        document.getElementById('errorpassword').innerHTML=' ';
            $.post("signupuser.php", {'name': name,'emailid':emailid,'phone':mobile,'password':password,'sub':'sub'}, function(result){
          
		  console.log(result);
           if(result == 1)
            {
                window.location.href = "indexbe.php";
            }
            else
            {
                 document.getElementById('error').innerHTML='Email already exist. Plese login ! ';
            }
               $("#name").val('');
               $("#emailid").val('');
               $("#phone").val('');
               $("#pass").val('');
          });
    }
  
    });
});

</script>
  

</head>

<body style='background-color:#000;'>
<?php
include("header.php");
include("database.php");


?>
<div class="container" style='background: url(image/bg.jpg);width: 98%;'>
  <div class="row" style='padding:2%;padding-bottom: 7.5%;'>
    <div class="col-sm-8">
    </div>
   
    
     <div class="col-md-4 panel" style='padding:1.9%'>
<!-- sign in form begins -->  
  <form class="form-horizontal"  name="form1" id="form1" method="post"  >
  
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your Name" class="form-control input-md foosmall" type="text">
    <p id='errorname' class='error'></p>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="emailid" name="emailid" placeholder="Enter your email-id" class="form-control input-md foosmall" type="email">
    <p id='erroremailid' class='error'></p>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="phone" name="phone" placeholder="Enter your mobile number" class="form-control input-md foosmall" type="number">
    <p id='errormobile' class='error'></p>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="pass" name="pass" placeholder="Enter your password" class="form-control input-md foosmall" type="password">
    <p id='errorpassword' class='error'></p>
    <p id='success' class='success'></p>
    <p id='error' class='error'></p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input type="submit" name='submit' id='submit'  class="sub foosmall" value="sign up">
  </div>
</div>

</fieldset>
</form>

       <!--form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="images/download.png" width="134" height="128">          </p>
        </div>
    </form-->
    
    
    </div>
  </div>
</div>



</body>
</html>
