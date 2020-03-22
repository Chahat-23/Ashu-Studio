<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db( $con,"database1"); // Selecting Database from Server
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$Name = ($_POST['Name']);
$Address = ($_POST['Address']);
$Email = ($_POST['Email']);
$Username= ($_POST['Username']);
$Password_1= ($_POST['Password']);
$Password_2= ($_POST['Password_1']);
$Message= ($_POST['Message']);
if($Username !='' )
{
    if($Password_1==$Password_2)
	{
                      $query = mysqli_query($connection,"insert into user(Name,Address,Email,Username,Password,Password_1,Message) values('$Name','$Address','$Email','$Username','$Password_1','$Password_2','$Message');");
                     echo "<script type='text/javascript'>alert('account created successfully!');";
                         echo'window.location.href="works.php";</script>';   
                }
    else
        echo"<script type='text/javascript'> alert('password does not match');";
   echo'window.location.href="signup.php";</script>'; 
}   
}
else
echo "Insertion Failed <br/> Some Fields are Blank....!!";
mysqli_close($connection); // Closing Connection with Server
?>