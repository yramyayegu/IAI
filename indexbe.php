<?php
include("database.php");
session_start();


if(isset($_SESSION['login']))
{
   include 'header.php'; 
    
    ?>
<div class="instructions ">
	<center><h3 style="color:#00c0f6">Read the instructions before beginning test</h3></center>
<ul>
<li>While answering the questions, think from the perspective of a Data Scientist. If you are in his shoes, how will you respond?</li>
<li>You cannot go to the previous question.</li>
<li>Each question has only 1.33 minute time to answer.</li>
<li>Your test report will be sent to you by mail. </li></ul>
 <a href="quiz.php?testid=8&subid=1" class="btn btn-success" style="font-size:25px; margin:0 5% 2% 3%; color: #fff;
    background-color: #00c0f6;
    border-color: #00c0f6;" name="sbmt" value="sbmt" id="sub">Start Test<i class="fa fa-angle-right" style="font-size:25px"></i> </a>
</div>    
<!--div class="instructions1">
 <a href="result.php?testid=8&subid=1" class="btn btn-success res"  name="sbmt"  id="sub">View Results</i> </a>
</div-->
    <!--?php
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF">
<a href=quiz.php?testid=8&subid=1><font size=4>Take Test</font></a>
    
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> </td>
  </tr>
</table>';
}
else{
    echo 'no session';
}
?-->
<?php }
 ?>