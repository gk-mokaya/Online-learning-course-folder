<html>
<body  bgcolor="blue">
<?php
 include 'connect.php';
/*Use of Sessions*/
if(!session_id())
session_start();
/*simple checking of the data*/
if(isset($_POST['loginID']) && isset($_POST['password']))
{
    $username ="ksk";
    $password ="ksk";
    $hostname ="localhost"; 
    $database="student";
    $name=$_POST['loginID'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM login WHERE loginID='$name' and password='$password'";  
    $result=mysqli_query($db,$sql);

     if (mysqli_num_rows($result)>0) 
          
         {     
          ("Welcome back  ".$name);
          }
     else
     {
       echo ("Wrong Login ID or password");   
      }
    }
    mysqli_close($db);
    ?>

     <form action="index.html"> 


<input type="submit" value="CONTINUE ">
    </body>
    </html>
    