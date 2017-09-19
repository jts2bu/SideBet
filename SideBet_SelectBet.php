<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<title> Select Bet </title>

	<style>
	greenstuff {
		color: #25A944;
	}
	</style>
</head>
<body>

<nav class="navbar navbar-light bg-faded">
 	<a class="nav-link" href = "SideBet_Home.php"> <greenstuff> Home </greenstuff></a>
 	<a class="nav-link" href = "SideBet_createBet.php"> <greenstuff> Create Bet </greenstuff> </a>
</nav>


<? 
$rowNum = $_POST["rowNumVal"];

$servername = "localhost";
$username = "JT.Speetjens";
$password = "2358PPln!";
$dbname = "SideBet";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Available_Bets LIMIT 1 OFFSET " + $rowNum;

if ($conn->query($sql) === TRUE) {
	echo "Record Found";
}
else {
	echo "Record not Found";
}

$conn->close();


?>

</body>


</html>