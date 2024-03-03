<?php
    session_start();  
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .card
    {
        position: relative;
        top:100px;
    }
    a,a:hover
    {
        text-decoration: none;
        color: white;
    }
</style>

<?php
if(isset($_GET['fname']))
{
$fname=$_GET["fname"];
$password=$_GET["pwd"];

if($fname=="" || $password=="")
{
    echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Login unsuccessfull!</div><div class='card-body'><h5 class='card-title'>All inputs are neccessary!</h5><p class='card-text'>All inputs are necessary  to log into your  account</p><button class='btn-secondary'><a href='http://localhost/ltc/'>Go Back</button></div></div>";
        echo "</center>";
}
else
{
    
if($_SERVER['REQUEST_METHOD']=="GET")//con establish
{
$localhost = "localhost";
$username = "root";
$passw = "123456";
$db = "elearn";
$conn = mysqli_connect($localhost,$username,$passw,$db);
if(!$conn){
echo "";
}
else
{
echo "";
}
$result=mysqli_query($conn,"select * from exptable where fname='$fname' and password='$password'")
				or die("FAILED!!");
	$row=mysqli_fetch_array($result);
    if($fname=='admin' and $password=='admin'){
		header("Location: adminpanel1.php");
        echo "hello Admin";
	}
    else
      {
	   if($row['fname']==$fname and $row['password']==$password)
       {   
          $_SESSION["username"]=$fname; 
          
          header("Location: myaccount.php");
    exit();           
	  }
	  else
	  {
		  echo "<script>alert('Username or Password is incorrect!!');</script>";
    echo "<script>window.location.href = 'home.php';</script>";
    exit();
	  }
    }  
}}}
?>