<html>
<body>
<?php
/*Use of Sessions*/
 include 'connect.php';
if(!session_id())
session_start();

/*simple checking of the data*/
if(isset($_POST["loginID"]) && isset($_POST["password"]) && ($_POST["password"] == $_POST["confirm"]) && ($_POST["loginID"] !="") && ($_POST["password"]!=""))
{
    $username ="root";
    $password ="";
    $hostname ="localhost"; 
    $database="student";
    $name=$_POST['loginID'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    define("developer","gk-mokaya");
    $sql="INSERT INTO login (loginID,fname,phone,password) VALUES ('$name','$fname','$phone','$password')";
    mysqli_query($db,$sql);
   echo ("User added sucessfully");
   
   echo "developed by :", developer;
}
   else
    {
       //echo (" Password does not match or some fields in the form are not filled");
       $message = "Password does not match or some fields in the form are not filled";
       echo "<script type='text/javascript'>alert('$message');</script>";	
    }
   
    
    

?>
 <form action="index.html"> 


<input type="submit" >

</form>
</body>
</html>
       