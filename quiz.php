<?php
ob_start();
session_start();
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);

/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/

if(isset($subid) && isset($testid))
{

$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
$_SESSION[level]='MEDIUM';
$_SESSION[questionno]=0;
$_SESSION['EASY']=array();
$_SESSION['MEDIUM']=array();
$_SESSION['HARD']=array();
$_SESSION['CORRECTEASY']=array();
$_SESSION['CORRECTMEDIUM']=array();
$_SESSION['CORRECTHARD']=array();
$_SESSION['Statistics']=0;
$_SESSION['Algebra']=0;
$_SESSION['Programming']=0;
$_SESSION[subject]='Statistics';
$_SESSION[temp]=0;
$_SESSION[tempansw]=0;

date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i:s');
$endtime= strtotime('+80 minutes', strtotime(date('Y-m-d H:i:s')));
mysql_query("INSERT INTO `mst_result`(`login`, `test_id`,`end_time`,`test_date`) VALUES (". $_SESSION['login'].",". $_SESSION['tid'].",'$endtime','$date')") or die(mysql_error());
 header("location:quiz.php");
 exit;
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
$rs=mysql_query("select * from mst_result where login=".$_SESSION['login'],$cn) or die(mysql_error());
$new= mysql_fetch_row($rs); 
if ((time() > $new[14])||(time() == $new[14])) {
  header("location: testresult.php");
}
?>
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/countdown.js"></script>
<script type="text/javascript" src="js/cookies.js"></script>
<style>
.grayes{
    background-color: #cec7c7;
    width: 5% !important;
    border: #ab9e9e solid 1px;
    
}
.graye{
    background-color: #f3f3f3;
    border: #cec7c7 solid 1px;
    border-bottom: 0px;    
}
.div_hover { background-color:#f3f3f3; }

.div_hover:hover { color: #fff !important;background-color: #5bc0de !important;border-color: #46b8da !important;}
.level{
    font: 400 16px/26px 'Tahoma', Helvetica, Helvetica Neue, Arial;
    font-style: normal;
    font-variant-ligatures: normal;
    font-variant-caps: normal;
    font-variant-numeric: normal;
    font-variant-east-asian: normal;
    font-weight: 400;
    font-stretch: normal;
    font-size: 16px;
    line-height: 26px;
    font-family: Tahoma, Helvetica, "Helvetica Neue", Arial;
    
}
</style>
<script>


function check(x,y)
{
 
    document.getElementById(x).checked = true;

    document.getElementById('ans11').style.backgroundColor ='#f3f3f3';
    document.getElementById('ans11').style.color ='#000';
    
    document.getElementById('ans22').style.backgroundColor ='#f3f3f3';
    document.getElementById('ans22').style.color ='#000';
    
    document.getElementById('ans33').style.backgroundColor ='#f3f3f3';
    document.getElementById('ans33').style.color ='#000';
    
    document.getElementById('ans44').style.backgroundColor ='#f3f3f3';
    document.getElementById('ans44').style.color ='#000';
    
    document.getElementById(y).style.backgroundColor ='#5bc0de';
    document.getElementById(y).style.color ='#fff';
    
}
</script>

</head>
<body>
<?php
include("header.php");
$rs=mysql_query("select * from mst_question where  subject='$_SESSION[subject]' and level='$_SESSION[level]'",$cn) or die(mysql_error());
(mysql_fetch_row($rs));

if(!isset($_SESSION[qn]))
{   $_SESSION[qn]=0;
	//mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
} 
else
{
    if($submit=='Next' && isset($queno))
    	{
            
            if($_SESSION[questionno] == 3)
            {
             $_SESSION[temp]=1;   
            }
            $rs=mysql_query("select * from mst_question where que_id=".$queno,$cn) or die(mysql_error());
            $row= mysql_fetch_row($rs); 
            if(($_SESSION['Statistics']==1) && ($_SESSION['Algebra']==1) && ($_SESSION['Programming']==1))
            {
            $_SESSION['Statistics']=0;
            $_SESSION['Algebra']=0;
            $_SESSION['Programming']=0;        
            }
            if($row[9] == 'Statistics')
            {
                $_SESSION['Statistics']=1;
            }
            if($row[9] == 'Algebra')
            {
                $_SESSION['Algebra']=1;
            }
            if($row[9] == 'Programming')
            {
                $_SESSION['Programming']=1;
            }
             if($_SESSION['Statistics']==1) 
             {
                $_SESSION[subject]='Algebra'; 
             }
            if($_SESSION['Algebra']==1) 
             {
                $_SESSION[subject]='Programming'; 
             }
             if($_SESSION['Programming']==1) 
             {
                $_SESSION[subject]='Statistics'; 
             }
            mysql_query("insert into mst_useranswer(sess_id, test_id, que_id,true_ans,your_ans) values ('". $_SESSION['login']."', $tid,'$row[0]','$row[7]','$ans')") or die(mysql_error());              
            if($_SESSION[level]=='MEDIUM')
            {            
                if($ans==$row[7])
				{       
                    array_push($_SESSION['CORRECTMEDIUM'],$queno);               
                   if($_SESSION[qn]==0)
                    {
                        $_SESSION[answer1]=1;
                        $_SESSION[trueans]=$_SESSION[trueans]+1;
                        $_SESSION[qn]=$_SESSION[qn]+1;
                    }
                    else if($_SESSION[qn]==1 )
                    {
                            if($_SESSION[temp] == 1)
                            {
                                $_SESSION[answer1]=$_SESSION[answer2]; 
                            }

                        $_SESSION[answer2]=1;     
                        $_SESSION[trueans]=$_SESSION[trueans]+1;

                        if(($_SESSION[answer1]==1) && ($_SESSION[answer2]==1))
                        {
                            $_SESSION[level]='HARD';
                        }
                        else if(($_SESSION[answer1]==1) || ($_SESSION[answer2]==1))
                        {
                            $_SESSION[level]='MEDIUM';
                        }
                        else
                        {
                            $_SESSION[level]='EASY';
                        }
                    }
                    
				}
                else{
                    if($_SESSION[qn]==0)
                    {
                       $_SESSION[answer1]=0;
                        $_SESSION[qn]=1;
                    }
                    else if($_SESSION[qn]==1)
                    {
                            if($_SESSION[temp] == 1)
                            {
                                $_SESSION[answer1]=$_SESSION[answer2]; 
                            }
                            $_SESSION[answer2] =0;
                            if(($_SESSION[answer1]==1) || ($_SESSION[answer2]==1))
                            {
                                
                                $_SESSION[level]='MEDIUM';
                            }
                            else
                            {
                                $_SESSION[level]='EASY';
                            }
                    }
                }
              
            }   
           else if($_SESSION[level]=='EASY')
            {
                if($ans==$row[7])
				{       
                    array_push($_SESSION['CORRECTEASY'],$queno);
                    $_SESSION[answer1]=$_SESSION[answer2]; 
                    $_SESSION[answer2]=1;     
                    $_SESSION[trueans]=$_SESSION[trueans]+1;
                    if(($_SESSION[answer1]==1) && ($_SESSION[answer2]==1))
                    {
                        $_SESSION[level]='MEDIUM';
                    }
                    else if(($_SESSION[answer1]==1) || ($_SESSION[answer2]==1))
                    {
                        $_SESSION[level]='EASY';
                    }
                    else
                    {
                        $_SESSION[level]='EASY';
                    }
                
                    
				}
                else
                {
                    $_SESSION[answer1]=$_SESSION[answer2]; 
                    $_SESSION[answer2] =0;
                    if(($_SESSION[answer1]==1) || ($_SESSION[answer2]==1))
                    {
                        $_SESSION[level]='EASY';
                    }
                    else
                    {
                        $_SESSION[level]='EASY';
                    }
                    
                }
                
            }
           else if($_SESSION[level]=='HARD')
            {
                if($ans==$row[7])
				{        
                         array_push($_SESSION['CORRECTHARD'],$queno);
                        $_SESSION[answer1]=$_SESSION[answer2]; 
                        $_SESSION[answer2]=1;     
                        $_SESSION[trueans]=$_SESSION[trueans]+1;
                        if(($_SESSION[answer1]==1) && ($_SESSION[answer2]==1))
                        {
                            $_SESSION[level]='HARD';
                        }
                        else if(($_SESSION[answer1]==1) || ($_SESSION[answer2]==1))
                        {
                            $_SESSION[level]='HARD';
                        }
                        else
                        {
                            $_SESSION[level]='MEDIUM';
                        }
				}
                else
                {
                    $_SESSION[answer1]=$_SESSION[answer2]; 
                    $_SESSION[answer2] =0;
                    
                     if(($_SESSION[answer1]==1) || ($_SESSION[answer2]==1))
                        {
                            $_SESSION[level]='HARD';
                        }
                        else
                        {
                            $_SESSION[level]='MEDIUM';
                        }              
                }
            }
                  
        }
       
}
  if($upgrade=='upgrade')
        {
            
           $CORRECTEASY=count($_SESSION['CORRECTEASY']);
            $CORRECTMEDIUM= count($_SESSION['CORRECTMEDIUM']);
            $CORRECTHARD= count($_SESSION['CORRECTHARD']);
            if ($CORRECTEASY>$CORRECTMEDIUM)
            {
               if($CORRECTEASY>$CORRECTHARD)
                  { $x='EASY';}
               else
                  {
                    if($CORRECTEASY==$CORRECTHARD)
                    {$x= 'HARD';}
                    else
                    {$x= 'HARD';}
                  }
             }
            else
            {
            if ($CORRECTMEDIUM>$CORRECTHARD)
                {$x= 'MEDIUM';}

            else
                {
                    if($CORRECTMEDIUM==$CORRECTHARD)
                    {$x= 'HARD';}
                    else
                    {$x= 'HARD';}
                
                }
            } 
            $_SESSION[level]=$x;
            $_SESSION[qn]=0;
                
            header("location:nextlevel.php");
                exit;
        }
      


   
$rs=mysql_query("select * from mst_question where subject='$_SESSION[subject]' and level='$_SESSION[level]'",$cn) or die(mysql_error());
/*if($_SESSION[qn]>mysql_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}*/


if($_SESSION[level]=='EASY')
{
  
       
         while($row= mysql_fetch_row($rs))
            {         
                 if (in_array($row[0], $_SESSION['EASY'])) 
                {                    
                }
                else
                {
                     array_push($_SESSION['EASY'],$row[0]);
                     break;
                   
                }
            }

}
else if($_SESSION[level]=='MEDIUM')
{
       
         while($row= mysql_fetch_row($rs))
            { 
                if (in_array($row[0], $_SESSION['MEDIUM'])) 
                {
                   
                }
                else
                {
                     array_push($_SESSION['MEDIUM'],$row[0]);
                     break;
                   
                }
            }
           

}
else if($_SESSION[level]=='HARD')
{
         while($row= mysql_fetch_row($rs))
            { 
                if (in_array($row[0], $_SESSION['HARD'])) 
                {
                }
                else
                {
                     array_push($_SESSION['HARD'],$row[0]);
                     break;
                   
                }
            }
           

}
?>

<div class='row' style='margin:0px'>
<div class='col-md-12' style='margin: 0px;padding: 3% 5% 0;'>
<p class='level'> &nbsp;&nbsp;&nbsp;Subject : <?=$_SESSION[level]?> &nbsp;&nbsp;&nbsp;:: &nbsp;&nbsp;&nbsp;Subject : <?=$row[9]?>   </p>
<hr>
</div>
</div>

<div class='row' style='margin:0px; padding:0 3%'>

<div class='col-md-12'>

<?php
$_SESSION[questionno]=$_SESSION[questionno]+1;
echo "<form name=myfm method=post action=quiz.php>";
echo "<input type='hidden' name='queno' value='$row[0]'>";
echo "<input type='hidden' name='sub' value='$row[9]'>";
?>
<div style="padding: 0 20px;" class='row'>
<div class='col-md-1' style='width:1%'><p style='margin-top: 10px;margin-bottom: 10px;'><?=$_SESSION[questionno]?>.</p></div>
<div class='col-md-11'><h4 id="question"><?=$row[2]?> </h4></div>
</div>


<div style='padding: 2% 2.5%;'>

<div id="demo" class='row'>
<div class='col-md-1  grayes'><div style='padding: 52%;'><input type='radio' name='ans' id='ans1' value='1'></div></div>
<div class='col-md-11 graye div_hover' id='ans11' onclick='check("ans1","ans11")'> <div class="radio "   ><label><?=$row[3]?></label></div></div>
</div>


<div id="demo" class='row'>
<div class='col-md-1 grayes'><div style='padding: 52%;'><input type='radio' name='ans' id='ans2' value='2'></div></div>
<div class='col-md-11 graye div_hover' id='ans22' onclick='check("ans2","ans22")'> <div class="radio "  ><label><?=$row[4]?></label></div></div>
</div>



<div id="demo" class='row'>
<div class='col-md-1 grayes'><div style='padding: 52%;'><input type='radio' name='ans' id='ans3' value='3'></div></div>
<div class='col-md-11 graye div_hover' id='ans33' onclick='check("ans3","ans33")'> <div class="radio " ><label><?=$row[5]?></label></div></div>
</div>


<div id="demo" class='row'>
<div class='col-md-1 grayes'><div style='padding: 52%;border-bottom: #cec7c7 solid 1px;'><input type='radio' name='ans' id='ans4' value='4'></div></div>
<div class='col-md-11 graye div_hover' id='ans44'  style='border-bottom: #cec7c7 solid 1px;'  onclick='check("ans4","ans44")'> <div class="radio " ><label><?=$row[6]?></label></div></div>
</div>
<div id="demo" class='row'>
<div class='col-md-12' style='padding: 2% 0px;'>

<?php if($_SESSION[questionno] == 10){ ?>
    <input type='hidden' name='upgrade' value='upgrade'>
    <input class='btn btn-info foosmall' style='border-radius:0px; color:#fff;width: 100px;' type='submit' name='submit' value='Next'></form>
<?php }else{ ?>
    <input class='btn btn-info foosmall' style='border-radius:0px; color:#fff;width: 100px;' type='submit' name='submit' value='Next'></form>
<?php } ?>
                
</div>
</div>
</div>


</div>
</div>
<?php
$totque=mysql_num_rows($rs);

//echo 'queno  '.$_SESSION[questionno].'==20';
?>

</body>
</html>