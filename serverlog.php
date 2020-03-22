<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db( $con,"database1");
 
$Username = ($_POST['Username']);
$Password_1 = ($_POST['Password']);

$Username=stripcslashes($Username);
$Password_1=stripcslashes($Password_1);
$Username=mysqli_real_escape_string($con,$Username);
$Password_1=mysqli_real_escape_string($con,$Password_1);

if(($Username!='')||($Password_1!=''))
{ 
 $result=mysqli_query($con, "select *from user where Username='$Username' and Password='$Password_1';") or die ("failed to query database".mysqli_error($con));
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($row['Username']==$Username && $row['Password']==$Password_1)
 {
 echo "<script type='text/javascript'>";
                         echo"window.location.href='works.php';</script>";   
 }
else
   echo"<script type='text/javascript'> alert('LOGIN FAILED...TRY AGAIN..!!!');";
   echo'window.location.href="login1.php";</script>'; 
}
 else
   echo"<script type='text/javascript'> alert('LOGIN FAILED...TRY AGAIN..!!!');";
   echo'window.location.href="login1.php";</script>';   

?>

