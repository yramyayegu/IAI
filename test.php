<?php 
$CORRECTEASY=count($_SESSION['CORRECTEASY']);
$CORRECTMEDIUM= count($_SESSION['CORRECTMEDIUM']);
$CORRECTHARD= count($_SESSION['CORRECTHARD']);
if ($CORRECTEASY>$CORRECTMEDIUM)
{
   if($CORRECTEASY>$CORRECTHARD)
      {echo 'CORRECTEASY';}
   else
      {
        if($CORRECTEASY==$CORRECTHARD)
        {echo 'CORRECTHARD';}
        else
        {echo 'CORRECTHARD';}
      }
 }
else
{
if ($CORRECTMEDIUM>$CORRECTHARD)
    {echo 'CORRECTMEDIUM';}

else
    {
        if($CORRECTMEDIUM==$CORRECTHARD)
        {echo 'CORRECTHARD';}
        else
        {echo 'CORRECTHARD';}
    
    }
} 

?>