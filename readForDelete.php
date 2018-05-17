
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="table-responsive">
	
	<table class="table table-bordered table-condensed table-hover table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
			<th>Owner</th>
			<th>Phone</th>
			<th>District</th>
			<th>Village</th>
			<th>type</th>
			<th>Breed</th>
			<th>Age(month)</th>
			<th>No of Animal</th>
			<th>Price</th>
			<th>Milk Per Day</th></tr>
        </thead>
        
        <tbody>
            
            <?php
			
			$servername = "localhost";
            $username = "root";
			$password = "";
			$dbname = "pashumela";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT  ownername, mobileno,district,village,animaltype,breed,animalage,animalno,price,milkperday FROM sellform WHERE mobileno = :mobileno"); 

            $stmt->bindParam(':mobileno', $mobileno);
            $mobileno = $_GET["mobile"];
            $stmt->execute();
			
			if($stmt->rowCount() > 0) {
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				?>
				<tr>
		        <td><?php echo $selllD; ?></td>
				<td><?php echo $ownername; ?></td>
				<td><?php echo $mobileno; ?></td>
				<td><?php echo $district; ?></td>
				<td><?php echo $village; ?></td>
				<td><?php echo $animaltype; ?></td>
				<td><?php echo $breed; ?></td>
				<td><?php echo $animalage; ?></td>
				<td><?php echo $animalno; ?></td>
				<td><?php echo $price; ?></td>
				<td><?php echo $milkperday; ?></td>
		        <td> 
		        <a class="btn btn-sm btn-danger" id="delete_post" data-id="<?php echo $selllD; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>
		        </td>
		        </tr>
				<?php
				}	
				
			} else {
				
				?>
		        <tr>
		        <td colspan="3">No Post Found</td>
		        </tr>
		        <?php
				
			}
			?>
             
        </tbody>
    </table>
    
</div>

<?php include_once('footer.php'); ?>
</body>
</html>