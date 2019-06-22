<?php
ob_start();
session_start();
include("database.php");
if(!isset($_SESSION['login']))
{
    echo 'no session';
    header('Location: http://www.theblackbucks.com/');
    exit;
}
$CORRECTEASY=count($_SESSION['CORRECTEASY']);
$CORRECTMEDIUM= count($_SESSION['CORRECTMEDIUM']);
$CORRECTHARD= count($_SESSION['CORRECTHARD']);
$score=$CORRECTEASY+$CORRECTMEDIUM+$CORRECTHARD;

    $allanswers=[];
    $StatisticsEASY = $StatisticsMEDIUM = $StatisticsHARD = $AlgebraEASY = $AlgebraMEDIUM = $AlgebraHARD =  $ProgrammingEASY = $ProgrammingMEDIUM =  $ProgrammingHARD = $totalstat =$totalalg = $totalpro= $pointscore= 0;    
    $allanswers=array_merge($_SESSION['CORRECTEASY'],$_SESSION['CORRECTMEDIUM'],$_SESSION['CORRECTHARD']);

    foreach($allanswers as $answer)
    {          
       
         $rs=mysql_query("select * from mst_question where que_id=".$answer,$cn) or die(mysql_error());
         $row= mysql_fetch_row($rs); 
         
         if(($row[9]=='Statistics') && ($row[8]=='EASY'))
         {
             $StatisticsEASY = $StatisticsEASY +1;
             $totalstat = $totalstat +1;
         }
         else if(($row[9]=='Statistics') && ($row[8]=='MEDIUM'))
         {
             $StatisticsMEDIUM = $StatisticsMEDIUM +1;
             $totalstat = $totalstat +1;
         }
         else if(($row[9]=='Statistics') && ($row[8]=='HARD'))
         {
             $StatisticsHARD = $StatisticsHARD +1;
             $totalstat = $totalstat +1;
         }
         
         
         
          elseif(($row[9]=='Algebra') && ($row[8]=='EASY'))
         {
             $AlgebraEASY = $AlgebraEASY +1;
             $totalalg = $totalalg +1;
         }
         else if(($row[9]=='Algebra') && ($row[8]=='MEDIUM'))
         {
             $AlgebraMEDIUM = $AlgebraMEDIUM +1;
             $totalalg = $totalalg +1;
         }
         else if(($row[9]=='Algebra') && ($row[8]=='HARD'))
         {
             $AlgebraHARD = $AlgebraHARD +1;
             $totalalg = $totalalg +1;
         }
          
            
         
          elseif(($row[9]=='Programming') && ($row[8]=='EASY'))
         {
             $ProgrammingEASY = $ProgrammingEASY +1;
             $totalpro = $totalpro +1;
         }
         else if(($row[9]=='Programming') && ($row[8]=='MEDIUM'))
         {
             $ProgrammingMEDIUM = $ProgrammingMEDIUM +1;
             $totalpro = $totalpro +1;
         }
         else if(($row[9]=='Programming') && ($row[8]=='HARD'))
         {
             $ProgrammingHARD = $ProgrammingHARD +1;
             $totalpro = $totalpro +1;
         }
         
    }
            

    
?>

<div class="container" style='width: 98%;display:none;'>
  <div class="row" style='padding:2%;padding-bottom: 7.5%;'>
    <div class="col-md-12">
        <div>
            <h1>Results</h1>
            
<table>
  <tr>
    <th>Category</th>
    <th>Total</th>
    <th>Easy</th>
    <th>Medium</th>
    <th>Hard</th>
    
  </tr>
  <tr>
    <td>Statistics</td>
    <td><?=$totalstat?></td>
    <td><?=$StatisticsEASY?></td>
    <td><?=$StatisticsMEDIUM?></td>
    <td><?=$StatisticsHARD?></td>
    
    
  </tr>
  <tr>
    <td>Algebra</td>
    <td><?=$totalalg?></td>
     <td><?=$AlgebraEASY?></td>
    <td><?=$AlgebraMEDIUM?></td>
    <td><?=$AlgebraHARD?></td>
    
  </tr>
  <tr>
     <td>Programming</td>
    <td><?=$totalpro?></td>
     <td><?=$ProgrammingEASY?></td>
    <td><?=$ProgrammingMEDIUM?></td>
    <td><?=$ProgrammingHARD?></td>
    
  </tr>

  <tr>
     <th>Score</th>
    <td><?=$score?>
    <?php 
    $_SESSION['score']=$score;
    ?>
    </td>
    <td><?php echo $totalStatisticsEASY = $StatisticsEASY + $AlgebraEASY + $ProgrammingEASY?></td>
     <td><?php echo $totalStatisticsMEDIUM = $StatisticsMEDIUM + $AlgebraMEDIUM + $ProgrammingMEDIUM?></td>
    <td><?php echo $totalStatisticsHARD = $StatisticsHARD + $AlgebraHARD + $ProgrammingHARD?></td>
    
  </tr>  
  
  <tr>
     <th>Points 
     <?php  
          
         $EASYPOINTS = $totalStatisticsEASY * 10 ;
         $MEDIUMPOINTS = $totalStatisticsMEDIUM * 20 ;
         $HARDPOINTS = $totalStatisticsHARD * 40 ;
         $pointscore= $EASYPOINTS  + $MEDIUMPOINTS + $HARDPOINTS ;
         
         $_SESSION['points']=$pointscore;
     ?></th>
    <td><?=$pointscore?></td>
    <td><?=$EASYPOINTS?></td>
     <td><?=$MEDIUMPOINTS?></td>
    <td><?=$HARDPOINTS?></td>
    
  </tr>
</table>
            
<h1 class='head1'> Result</h1>
<Table align='center' border='1'>
<tr class='tot'>
    <td>Total Question</td><td> <?=$_SESSION[questionno]?></td>
</tr>
<tr class='tans'>
    <td>True Answer</td><td><?=$_SESSION[trueans]?></td>
</tr>
<?php $wronganswers=$_SESSION[questionno]-$_SESSION[trueans]; ?>
<tr class='fans'>
    <td>Wrong Answer</td><td> <?=$wronganswers?></td>
</tr>
<tr class='blu'>
    <td>Score</td><td> <?=$score?></td>
</tr>
<tr class='blu'>
    <td>Total Points</td><td> <?=$pointscore?></td>
</tr>

<tr class='blu'>
    <td>AI Quotient</td><td> 
    <?php 
    
    $aiq=($pointscore/300) * 1000;
    ?>
    
    <?=$aiq?></td>
</tr>
</table>
<?php 
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i:s');
mysql_query("UPDATE `mst_result` SET  `test_id`=". $_SESSION['tid'].", `totalquestion`=". $_SESSION[questionno].", `trueanswer`=". $_SESSION[trueans].", `wronganswer`=$wronganswers, `totaleasy`=$totalStatisticsEASY, `totalmedium`=$totalStatisticsMEDIUM, `totalhard`=$totalStatisticsHARD, `totalstat`=$totalstat, `totalalg`=$totalalg, `totalprog`=$totalpro, `score`=$score, `totalpoints`=$pointscore, `AIquotient`=$aiq  where   `login`=". $_SESSION['login']."
  ") or die(mysql_error());
?>
				
        <?php
                unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[level]);
				unset($_SESSION[questionno]);
				unset($_SESSION['EASY']);
				unset($_SESSION['MEDIUM']);
				unset($_SESSION['HARD']);
				unset($_SESSION['CORRECTEASY']);
				unset($_SESSION['CORRECTMEDIUM']);
				unset($_SESSION['CORRECTHARD']);
				unset($_SESSION['Statistics']);
				unset($_SESSION['Algebra']);
				unset($_SESSION['Programming']);
				unset($_SESSION[subject]);
				unset($_SESSION[trueans]);
				unset($_SESSION[answer1]);
				unset($_SESSION[answer2]);
                
                ?>
                
        </div>
    
    
    </div>
  </div>
</div>



<!DOCTYPE html>
<!-- saved from url=(0039)http://theblackbucks.com/test/alert.php -->
<html lang="en" class="gr__theblackbucks_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="http://theblackbucks.com/img/logo.png">
<link rel="apple-touch-icon" href="http://theblackbucks.com/img/logo.png">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Test Result</title>
        <script src="./result_files/ca-pub-9143461017726366.js.download"></script>
		<script async="" src="./result_files/analytics.js.download"></script>
		<script async="" src="./result_files/adsbygoogle.js.download"></script>
        <link rel="stylesheet" href="./result_files/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
         <!------------------pie js------------------------->
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./result_files/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        </style>
    <script src="./result_files/jquery.min.js.download"></script>
    <script src="./result_files/bootstrap.min.js.download"></script>
       <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
        <!------------------pie js------------------------->
    <link href="./result_files/chartist.min.css" rel="stylesheet">
    <link href="./result_files/chartist-init.css" rel="stylesheet">    
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9143461017726366",
    enable_page_level_ads: true
  });
</script>
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
} /* END Media Query */

/* ul.dropdown-cart{
    min-width:250px;
}
ul.dropdown-cart li .item{
    display:block;
    padding:3px 10px;
    margin: 3px 0;
}
ul.dropdown-cart li .item:hover{
    background-color:#f3f3f3;
}
ul.dropdown-cart li .item:after{
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

ul.dropdown-cart li .item-left{
    float:left;
}
ul.dropdown-cart li .item-left img,
ul.dropdown-cart li .item-left span.item-info{
    float:left;
}
ul.dropdown-cart li .item-left span.item-info{
    margin-left:10px;   
}
ul.dropdown-cart li .item-left span.item-info span{
    display:block;
}
ul.dropdown-cart li .item-right{
    float:right;
}
ul.dr opdown-cart li .item-right button{
    margin-top:14px;
} */

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
</style>

	    
	    <link href="./result_files/bootstrap.min(1).css" rel="stylesheet">
	    <link href="./result_files/mystyle.css" rel="stylesheet" type="text/css">
	    <link href="./result_files/onlinetests.css" rel="stylesheet" type="text/css">
   	    <link rel="stylesheet" href="./result_files/font-awesome.min.css">

    <link rel="prefetch" href="http://theblackbucks.com/test/alert.php">
    
    </head>  
    
    
	
	
 <nav class=" navbar-default hea" >
  <div class="container-fluid" >
    <div class="">
       <a href="index.php" ><img src="http://theblackbucks.com/C.jpg" alt="logo" style="margin: 0px 72px;width: 240px;"></a>
    </div>
  
  </div><!-- /.container-fluid -->
</nav>

        <div class="wrapper">
            <div class="header" id="header">
			

</div>

            
            <script>
                function closefun()
                {
                    window.close();
                }
            </script>
			<br><br>
             
                
                <div class="col-md-12 col-sm-12" id="onlinetest" style="    padding: 0 7%;">
         <?php
  session_start();
 $servername = "localhost";
       $dbname = "theblam4_IAI";
       $username = "theblam4_black";
       $password = "blackbucks";

$con= new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

    $uid=$_SESSION['login'];    
    $reg="select * from mst_result r join mst_user u  on u.user_id=r.login where r.login='".$uid."'";
    $s=mysqli_query($con, $reg);
    $result=mysqli_num_rows($s);
    
    if($result>0)
    {
        $row=mysqli_fetch_assoc($s);
        
    }
    ?>
                   
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Result
                        </div>
                        
                        
                        
                        <div class="panel-body">
                            <div class="col-md-4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Question</td>
                                            <td><?=$row['totalquestion']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Un-Attempted Question</td>
                                            <td><?=$un=$row['totalquestion']-($row['trueanswer']+$row['wronganswer'])?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Correct Answer</td>
                                            <td><?=$row['trueanswer']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Wrong Answer</td>
                                            <td><?=$row['wronganswer']; ?></td>
                                        </tr>
                                        
                                         <tr>
                                            <th>Score</th>
                                            <th><?=$row['score']; ?></th>
                                        </tr>
                                         <tr>
                                            <th>Points</th>
                                            <th><?=$row['totalpoints']; ?></th>
                                        </tr>
                                        <tr>
                                            <th>AI Quotient</th>
                                            <th><?php     $aiq=($pointscore/300) * 1000; echo $aiq; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                        <div class="col-md-4">
               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <div class="container"> 
                  <div>

                  
                  
                  
                  
                  <canvas id="myChart" style="display: block; width: 780px !important; height: 275px !important;"></canvas>
                      
                  </div>
                </div>	
            </div>
                           
                           
                        </div>
                    </div>
                </div>
            
            
           
        </div>
    
<script type="text/javascript">
	var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Statistics", "Algebra", "Programming"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#e74c3c",
        "#34495e"
        ],
      data: [<?=$row['totalstat']?>, <?=$row['totalalg']?>,<?=$row['totalprog']?>]
    }]
  }
});	</script>
<div class="row" style="    padding: 0 14%;">
    <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <div id="visitor1" style="height:190px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                         <h4><?php $percent = $row['totaleasy']*100/7; 
                                                   echo round($percent,2);
                                                   $finaleasy = round($percent,2);?>%</h4><h5 class="text-muted text-info">Easy</h5> 
                                        </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>    <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <div id="visitor2" style="height:190px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                       <h4><?php  $percent =  $row['totalmedium']*100/7; 
                                                  echo round($percent,2);
                                                  $finalmed = round($percent,2);?>%<h4><h5 class="text-muted text-info">Medium</h5>
                                        </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <div id="visitor3" style="height:190px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                     <h4><?php    $percent =  $row['totalhard']*100/7; 
                                                  echo round($percent,2); 
                                                  $finalhard = round($percent,2); ?>%</h4><h5 class="text-muted text-info">Hard</h5>
                                        </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
</div>




  <div class="row" style="padding:1% 14%">
  <div class="col-md-12">
  
  <div class="panel-heading well" style="color: #e2e2e2;
    background-color: #0a1f29;
    border-color: #0a1f29;"><span style="font-size: 15px;"><strong>Overview</strong></span>
    </div>
    </div>
    </div>
    

  <div class="row" style="padding:0 14%">

    <div class="col-md-4">
       <div class="panel panel-info">
      <div class="panel-heading">Personal Information</div>
      <div class="panel-body" style="background-color: #d9edf7;border-color: #bce8f1;">      
        <div class="media"><div class="media-left"><p class="media-heading">Name : </p></div><div class="media-body"><p><?=$row['username']?></p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'> 
        <div class="media"><div class="media-left"><p class="media-heading">Email : </p></div><div class="media-body"><p><?=$row['email']?></p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'>
<div class="media"><div class="media-left"><p class="media-heading">AI Quotient : </p></div><div class="media-body"><p><?=$row['totalpoints']?></p></div></div>
    </div>
    </div>
    </div>
    
    <div class="col-md-4">
       <div class="panel panel-info">
      <div class="panel-heading">Strengths </div>
      <div class="panel-body" style="background-color: #d9edf7;border-color: #bce8f1;">     
<?php 
$s=0;
$a=0;
$p=0;
$bth='';
$max = max($row['totalstat'],$row['totalalg'],$row['totalprog']);
//echo $max = max(2,3,1);
if($max == $row['totalstat'])
{
    $s=1;
$stre= "Statistics";
$data='You scored highest in Statistics';
}
if($max == $row['totalalg'])
{
    $a=1;
$stre= "Algebra";
$data='You scored highest in Algebra';
}
if($max == $row['totalprog'])
{
    $p=1;
$stre= "Programing ";
$data='You scored highest in Programing';


}

if(($s==1) &&($a==1))
{
    $bth='Statistics--Algebra';
    $data='You scored equal in Statistics and Algebra';
}
else if(($p==1) &&($a==1))
{
    $bth='Programing--Algebra';
    $data='You scored equal in Programing and Algebra';
}

else if(($p==1) &&($s==1))
{
    $bth='Programing--Statistics';
    $data='You scored equal in Programing and Statistics';
}

if($bth !='')
{
   $sub=explode("--",$bth);
   echo "  <div class='media'><div class='media-left'><p class='media-heading'>".$sub[0]." : </p></div><div class='media-body'><p>".$max."</p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'>  
        
        <div class='media'><div class='media-left'><p class='media-heading'>".$sub[1]." : </p></div><div class='media-body'><p>".$max."</p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'>  
        <div class='media'><div class='media-body'><p>".$data."</p></div></div>";
   
}
else{
    echo '<div class="media"><div class="media-left"><p class="media-heading">'.$stre.' : </p></div><div class="media-body"><p>'.$max.'</p></div></div>
        <hr style="margin:0;border-top: 1px solid #0a1f29;"> 
        <div class="media"><div class="media-body"><p>'.$data.'</p></div></div>';
}



?>

      
        
        
        
   </div>
    </div>
    </div>
    
    <div class="col-md-4">
       <div class="panel panel-info">
      <div class="panel-heading">Areas of Improvement </div>
      <div class="panel-body" style="background-color: #d9edf7;border-color: #bce8f1;">     
      
      <?php 
$s=0;
$a=0;
$p=0;
$bth='';
$min = min($row['totalstat'],$row['totalalg'],$row['totalprog']);
if($min == $row['totalstat'])
{
    $s=1;
$stre= "Statistics";
$data='Improve score Statistics';
}
if($min == $row['totalalg'])
{
    $a=1;
$stre= "Algebra";
$data='Improve scorein Algebra';
}
if($min == $row['totalprog'])
{
    $p=1;
$stre= "Programing ";
$data='Improve score in Programing';


}

if(($s==1) &&($a==1))
{
    $bth='Statistics--Algebra';
    $data='You scored equal in Statistics and Algebra';
}
else if(($p==1) &&($a==1))
{
    $bth='Programing--Algebra';
    $data='You scored equal in Programing and Algebra';
}

else if(($p==1) &&($s==1))
{
    $bth='Programing--Statistics';
    $data='You scored equal in Programing and Statistics';
}

      if($bth !='')
{
   $sub=explode("--",$bth);
   echo "  <div class='media'><div class='media-left'><p class='media-heading'>".$sub[0]." : </p></div><div class='media-body'><p>".$min."</p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'>  
        
        <div class='media'><div class='media-left'><p class='media-heading'>".$sub[1]." : </p></div><div class='media-body'><p>".$min."</p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'>  
        <div class='media'><div class='media-body'><p>".$data."</p></div></div>";
   
}
else{
    echo '<div class="media"><div class="media-left"><p class="media-heading">'.$stre.' : </p></div><div class="media-body"><p>'.$min.'</p></div></div>
        <hr style="margin:0;border-top: 1px solid #0a1f29;"> 
        <div class="media"><div class="media-body"><p>'.$data.'</p></div></div>';
}


      ?>
     
	 
	 
	 
	 <a href='https://www.youtube.com/watch?v=FdaoR_x2bxM&feature=youtu.be' >Click here for the video. </a>
    </div>
    </div>
    </div>
    
    
    
    </div>
    <div class="row" style="padding:0 14%">

 
    
    <div class="col-md-4">
       <div class="panel panel-info">
      <div class="panel-heading">Cleared Levels</div>
      <div class="panel-body" style="background-color: #d9edf7;border-color: #bce8f1;">      
        <div class="media"><div class="media-left"><p class="media-heading">Easy : </p></div><div class="media-body"><p><?=$row['totaleasy']?></p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'> 
        <div class="media"><div class="media-left"><p class="media-heading">Medium : </p></div><div class="media-body"><p><?=$row['totalmedium']?></p></div></div>
        <hr style='margin:0;border-top: 1px solid #0a1f29;'>
<div class="media"><div class="media-left"><p class="media-heading">Hard : </p></div><div class="media-body"><p><?=$row['totalhard']?></p></div></div>
    </div>
    </div>
    </div>
    
    <div class="col-md-8">
       <div class="panel panel-info">
      <div class="panel-heading">Get Certified from Institute for Artificial Intelligence </div>
      <div class="panel-body" style="background-color: #d9edf7;border-color: #bce8f1;">      
        <div class="media">
        <div class="panel-heading well" style="    color: #e2e2e2;    background-color: #0a1f29;    border-color: #0a1f29;    border-radius: 5px;">
            <a href='http://theblackbucks.com/AIandMachineLearning.php'>
                <span style="font-size: 15px;color:#fff">Click here if you are intrested for more details </span>
            </a>
        </div>
        </div>

        <div class="media">
        <div class="panel-heading well" style="  margin:0;  color: #e2e2e2;    background-color: #0a1f29;    border-color: #0a1f29;    border-radius: 5px;">
             <a href='signout.php'>
                <span style="font-size: 15px;color:#fff">End Test </span>
            </a>
        </div>
        </div>
    </div>
    </div>
    </div>
    
    
    
    </div>
    
    
    
    
    
    </div>
   
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script src="https://wrappixel.com/demos/free-admin-templates/material-pro-lite/assets/plugins/jquery/jquery.min.js"></script>
<script src="https://wrappixel.com/demos/free-admin-templates/material-pro-lite/assets/plugins/chartist-js/dist/chartist.min.js"></script>
<script src="https://wrappixel.com/demos/free-admin-templates/material-pro-lite/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="https://wrappixel.com/demos/free-admin-templates/material-pro-lite/assets/plugins/d3/d3.min.js"></script>
<script src="https://wrappixel.com/demos/free-admin-templates/material-pro-lite/assets/plugins/c3-master/c3.min.js"></script>
<script type="text/javascript">
$(function() {
    "use strict";
    var stat=10-<?=$row['totaleasy']?>;
    var dataanalysis=10-<?=$row['totalmedium']?>;
    var programing=10-<?=$row['totalhard']?>;
    

    var chart = c3.generate({
        bindto: '#visitor1',
        data: {
            columns: [
                ['wrong', stat],
                ['correct', <?=$row['totaleasy']?>] 
                
            ],
            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Easy",
            width: 20,
        },
        legend: {
            hide: true
        },
        color: {
            pattern: ['#eceff1','#34495e']
        }
    }); 
    
    
    var chart = c3.generate({
        bindto: '#visitor2',
        data: {
            columns: [
              ['wrong', dataanalysis],
              ['correct', <?=$row['totalmedium']?>] 
                
            ],
            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Medium",
            width: 20,
        },
        legend: {
            hide: true
        },
        color: {
             pattern: ['#eceff1','#34495e']
        }
    }); 
    
    
    
    var chart = c3.generate({
        bindto: '#visitor3',
        data: {
            columns: [
              ['wrong', programing],
              ['correct', <?=$row['totalhard']?>] 
                
            ],
            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Hard",
            width: 20,
        },
        legend: {
            hide: true
        },
        color: {
             pattern: ['#eceff1','#34495e']
        }
    });
});
</script>
</body>
    
    </html>
    
    <?php  
   include 'mail.php';
   /*  session_start();
    session_destroy();*/
    ?>
   