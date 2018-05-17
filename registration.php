<?php
/*
Author: Sapnerel Saurabha
Website: https://sapneelsaurabha.wordpress.com
*/
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
         <meta charset="UTF-8">
		 <title>Registration</title>
		 <meta name="description" content="PashuMela in bihar for sell and purchase animals ">
		 <meta name="keywords" content="PASHUMELA,PASHUBAZAR,CATTLE,COW,COWS,BUFFALO,DOG,GOAT,JANVAR,JANBAR,SELL,PURCHASE,GAYE, BHAIS">
		 <meta name="author" content="SAPNEEL SAURABHA ">
		 
		  
		 <link rel="stylesheet" href="../../code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="../../code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="../../code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		 
		 
 <title>  Pashu Mela  </title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="w3.css">
 <style>
  body{
       background-color:lightblue;
	<!--   
    background-image: url("logo.jpg");
	 background-repeat: no-repeat;
	  background-position: right top;
	  -->
	   }
	  
	  
.topright {
    position: absolute;
    top: 9px;
    right: 16px;
    font-size: 18px;
	}
	  
	  
	   
	   table
	   {
	   background-color:white;
	   border-color:white;
	   
	   }
	   
	   td
	   
	   {
	   
   	  border-color:white;
	    padding: 4px;
		
	   }
	   
	   a:visited {
                  color: green;
                 }
       a:hover {
                  color: grey;
               }
	   a:active {
                  color: blue;
                 }
				 
        a:link {
              text-decoration: none;
               }
			   
       a:hover {
             text-decoration: underline;
                }
				
	   a:hover {
             background-color: lightgreen;
               }
			   

#example3 {
    border: 1px dotted black;
    padding: 5px;
    background: lightblue;
    background-clip: content-box;
}	  




#a1 {
    width: 30px;
    height: 20px;
    background: lightblue;
    position: relative;
    -webkit-animation: mymove 5s infinite;  /* Chrome, Safari, Opera */
    -webkit-animation-timing-function: linear;  /* Chrome, Safari, Opera */
    animation: mymove 10s infinite;
    animation-timing-function: linear;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 200px;}
}

@keyframes mymove {
    from {left: 0px;}
    to {left: 200px;}
}





 </style>
 
 		   


 
</head>

<body>


<center>
    
     <h1 style="color:red">Pashu Mela</h1>
		<div>
		<p style="color:Gray"> <q> PashuMela for the benefit of sellers and buyers</q> </p>
		
		</div>
</center>
<div class="topright">
 <img src="logo.jpg" >
 </div>

<center>
<table style="width:100%"    >

<tr>

<td style="text-align: center"> <a href="index.php">Home</a></td>
<td style="text-align: center"><Sell</a></td>
<td style="text-align: center"><a href="Purchase.php">Purchase</a></td>
<td style="text-align: center"><div data-role="main" class="ui-content"><a href="cancel.php">Cancel Request</a></div></td>
<td style="text-align: left"><a href="aboutus.php">AboutUs</a></td>



</tr>
</table>

<br>

<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($conn,$username);
		$email = stripslashes($email);
		$email = mysqli_real_escape_string($conn,$email);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($conn,$password);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br/><br/>
<input type="email" name="email" placeholder="Email" required /><br/><br/>
<input type="password" name="password" placeholder="Password" required /><br/><br/>
<input type="submit" name="submit" value="Register" class="w3-btn w3-light-grey w3-hover-blue-grey w3-round-xxlarge " /> &nbsp; &nbsp;  <a href="index.php"> Cancel</a>
</form>
</div>






















<?php } ?>
<br><br><br><br><br><br><br><br><br><br>
<footer class="w3-container w3-lightblue">
 <tt id="a1" style="color:black;">&copy; 2017 PashuMela Site Designed,Developed and Hosted by Sapneel&nbsp;</tt>
 
 </footer>
</body>




























</html>