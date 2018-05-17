<?php include_once('header.php') ?>





<?php  include 'db.php';

$ownername = $_POST['owner'];
$mobile = $_POST ['mobile'];
$district = $_POST['district'];
$village = $_POST['village'];
$animaltype = $_POST['type'];
$breed = $_POST['breed'];
$animalage = $_POST['age'];
$animalno = $_POST['animalno'];
$price = $_POST['price'];
$givingmilk = $_POST['radio'];
$milkperday = $_POST['litter'];
$date = $_POST['date'];
$path1 = $_FILES["fileToUpload"]["name"];

 
 
move_uploaded_file($_FILES["fileToUpload"]["name"],"upload/"  .$_FILES["fileToUpload"]["name"]);


$query = "INSERT INTO sellform (ownername,mobileno,district,village,animaltype,breed,animalage,animalno,price,givingmilk,milkperday,date,uploadimage) VALUES ('$ownername','$mobile','$district','$village','$animaltype','$breed','$animalage','$animalno','$price','$givingmilk','$milkperday','$date','$path1')";
$data = mysqli_query($conn,$query) or die (mysql_error());

if($data)

{
	echo "<h3>YOUR SELL-FORM IS COMPLETED...</h3>";
	
}	
	

	
?>	



<br><br><br>








<?php include_once('footer.php') ?>
</body>




























</html>


	
	