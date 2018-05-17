<?php include_once('header.php'); ?>

<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($conn,$username);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<i>wrong</i>";
				}
    }else{
	
	
?>
	
<?php
$visit=0;
  if( isset( $_COOKIE['counter'] ) )
   {
      $_COOKIE['counter'] += 1;
      $visit=$_COOKIE['counter'];	
   }
   else
   {
      $visit=1001;		
   }
   setcookie("counter",$visit,time()+24*60*60);
   $msg = " visit " .  $visit ." " ;
   
?>

	
<div data-role="page">
  <div data-role="main" class="ui-content">

<form action="" method="post" name="login">
<h3>Register for Sellers & buyers:</h3><br>
 <input type="text" width="30%" name="username" placeholder="username" required/><br><br>
 <input type="password" width="30%" name="password" placeholder="password" required/><br> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" class="w3-btn w3-light-grey w3-hover-blue-grey w3-round-xxlarge" value="Login"/>
<b>Or</b>&nbsp;<a href='registration.php' class="w3-btn w3-light-grey w3-hover-blue-grey w3-round-xxlarge ">Resiter Here</a>
</form>  </div>
</div>   
<?php } ?>
<br><!--container -->
<p><div class="w3-container w3-light-grey w3-border">
<p><b>PashuMela</b> platform has been specially developed to help farmers to sell their animals without physically taking theirs animals to weekly markets.</p>
<p>Taking animals physically to weekly markets involves expenditure on travel, care of animal and day long loss of wages/work for the farmer.
Further</p><p>if animal could not be sold in week market,it has to again travel back home. This platform will eliminate all that and creat wide publicity for sale </p>
<p>of his animal so that farmer gets better price. the website also provides facility for prospective buyers a wide choice of animals to buy.  </P>
<p> He need not go to weekly market in search of animals.</p> 
<p>(Inspired by Gov. of Telangana) &nbsp;<?php  echo ( "<b>".$msg."</b>" ); ?></p></div></p>
<?php include_once('footer.php'); ?>
</body>

</html>