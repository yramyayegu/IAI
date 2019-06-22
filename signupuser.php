<?php
    session_start();
extract($_POST);
include("database.php");
if(isset($sub))
{

    $rs=mysql_query("select * from mst_user where email='$emailid'");
    if (mysql_num_rows($rs)>0)
    {
       
        echo "0";
        
    }
    else{
        $query="insert into mst_user(pass,username,phone,email) values('$password','$name','$phone','$emailid')";
        $rs=mysql_query($query)or die("Could Not Perform the Query");
         $last_id=mysql_insert_id();
         $_SESSION['login']=$last_id;
        echo "1";
    }
}
if(isset($submit123))
{

    /*   $result = mysqli_query("select * from mst_user where email='$email'");
        if (!$result) {
            die('Invalid query: ' . mysqli_error());
        }*/

    $rs=mysql_query("select * from mst_user where email='$email'");
    if (mysql_num_rows($rs)>0)
    {
        $row= mysql_fetch_row($rs); 
        $_SESSION['login']=$row[0];
       echo '1';
       
	}
	else
	{
        
         echo '0';
	}
}




?>