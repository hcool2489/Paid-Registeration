<?php  
       $servername = "localhost";  
       $username = "root";  //Database User name
       $password = "usbw";  //Database Password
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('matree',$conn) or die("unable to connect to database"); 	//Database Name
?>   