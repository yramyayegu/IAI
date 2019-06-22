<?php @$_SESSION['login'];
  error_reporting(1);
  ?>
  <link href="quiz.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
  .white{
      color:#fff;
          
  }
  .foo{
      color: #fff;
    font-size: 3pc;
    font-family: 'Ubuntu', sans-serif;
  }
  .foosmall{      
    font-family: 'Ubuntu', sans-serif;
  }
  .sub {
          width: 100%;
    background-color: #009688;
    font-size: 20px;
    padding: 5px;
    margin-right: 20px;
    border: 0px;
    border-radius: 3px;
    color: #fff;
}
.instructions {
    margin-left: 20%;
    margin-right: 20%;
    border: solid #000;
    margin-top: 7%;
}
.instructions1 {
       margin-top: 2%;
    text-align: center;
}
.res{
    font-size: 16px;
    margin: 0 5% 2% 3%;
    color: #000;
    background-color: #fff;
    border-color: #00c0f6;
}
.error
{
    font-size: 11px;
    font-weight: 100;
    color: #c75a5a;
}

.success
{
    font-size: 11px;
    font-weight: 100;
    color: #009688;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border: 0px solid #ddd;
}

b, strong {
    font-weight: 100;
    font-size: 15px;
    text-align: left;
    line-height: 1.5;
}
p {
    font-weight: 100;
    font-size: 15px;
    text-align: left;
    line-height: 1.5;
}
img {
    vertical-align: middle;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-top: 7px;
    font-weight: 100;
}
  </style>
  
<div class='row' style='background:#000;margin: 0px;'>
    <div class='col-md-10'><div><span class='foo'>
    
    <a href="index.php" ><img src="http://theblackbucks.com/C.jpg" alt="logo" style="margin: 0px 72px;width: 240px;"></a>
    </span></div></div>
    <div class='col-md-2' style='padding: 2%;'>
    
        <?php
        if(isset($_SESSION['login']))
        {
         echo "<!--div align='right'>
                <a href='indexbe.php' class='btn btn-info foosmall' style='border-radius:0px; color:#fff;'>Take Test</a>
                <a href='signout.php' class='btn btn-info foosmall' style='border-radius:0px;color:#fff;'>Signout</a>
                </div-->";
         }
         else
         {
             echo "<button type='button' class='btn btn-info foosmall' data-toggle='modal' style='border-radius:0px;color:#fff;' data-target='#myModal'>Login</button>";
         }
        
        ?>
    </div>
</div>
  <script language="javascript">
$(document).ready(function()
{    

  $("#log").submit(function(event)
  { 
      event.preventDefault();
      var email = $("#email").val();
      var password = $("#password").val();    
  if(email=="" || password=="")
    {
         if(email=="")
          {
            document.getElementById('erroremail').innerHTML='Plese Enter Email';
            
          }
          else{
              document.getElementById('erroremail').innerHTML=' ';
          }
           if(password=="")
          {
            document.getElementById('errorpass').innerHTML='Plese Enter Password';
            
          } 
          else{
               document.getElementById('errorpass').innerHTML=' ';
          }
          
    }
    else{
         document.getElementById('erroremail').innerHTML=' ';
      document.getElementById('errorpass').innerHTML=' ';
           $.post("signupuser.php", {'submit123': 'submit123','email':email,'password':password}, function(result){
            
           if(result == 1)
            {
                window.location.href = "indexbe.php";
            }
            else
            {
                 document.getElementById('logerror').innerHTML='Email not exist. Plese Signup ! ';
            }
              
          });
    }

  });
  });
  </script>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
        <form id='log' method='post'>
          <div class="form-group">
              <div class="col-md-12">
              <input id="email" name="email" placeholder="Enter your Email" class="form-control input-md foosmall" type="text">
              <label class="col-md-12 control-label error" id="erroremail"></label>  
              </div>
          </div>
         <div class="form-group">
              <div class="col-md-12">
              <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md foosmall" type="password">
              <label class="col-md-12 control-label error" id="errorpass"></label>  
              </div>
          </div>
          <br><br><br><br><br>
        </div>
        <div class="modal-footer">
         <span id='logerror' class='error'></span>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name='submit123' class="btn btn-primary" >Login</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
