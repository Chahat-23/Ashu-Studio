<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db( $con,"database1"); // Selecting Database from Server
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
$Username= ($_POST['username']);
$Contact= ($_POST['contact']);
$Comment= ($_POST['comment']);
if($Username !='' )
{
                      $query = mysqli_query($connection,"insert into review(username,contact,comment) values('$Username','$Contact','$Comment');");
                     echo "<script type='text/javascript'>alert('review given successfully!');";
                         echo'window.location.href="works.php";</script>';   
}   
}
else
echo "Insertion Failed <br/> Some Fields are Blank....!!";
mysqli_close($connection); // Closing Connection with Server
?>