<?php include_once('header.php'); ?>

<?php  include 'db.php';

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Owner</th><th>Phone</th><th>District</th><th>Village</th><th>Animal</th><th>Breed</th><th>Age(month)</th><th>No of Animal</th><th>Price</th><th>Milk Per Day(L)</th><th>Image</th><th>Date</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pashumela";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT  ownername, mobileno,district,village,animaltype,breed,animalage,animalno,price,milkperday,uploadimage,date FROM sellform WHERE animaltype= :animaltype AND givingmilk= :givingmilk "); 
    $stmt->bindParam(':animaltype', $animaltype);
    $stmt->bindParam(':givingmilk', $givingmilk);
    $animaltype = $_GET["animal"];
    $givingmilk = $_GET["milk"];
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>



<br><br><br><br>

<br><br>

<?php include_once('footer.php'); ?>
</body>




























</html>

