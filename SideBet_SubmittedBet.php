<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<style>
	greenstuff {
		color: #25A944;
	}
	</style>

<title> Bet Submitted! </title>

</head>
<body>

<nav class="navbar navbar-light bg-faded">
 	<a class="nav-link" href = "SideBet_Home.php"> <greenstuff> Home </greenstuff></a>
 	<a class="nav-link" href = "SideBet_createBet.php"> <greenstuff> Create Bet </greenstuff> </a>
</nav>


<center> <h4> <greenstuff> Bet Submitted! </greenstuff> </h4> </center> 

<?php 

$btitle = $_POST["btitle"];
$bdescription = $_POST["description"];
$bodds = $_POST["odds"];
$bamount = $_POST["amount"];
?>

Title: <? echo $btitle ?> <br>
Desciption: <? echo $bdescription ?> <br>
Odds: 1 in <? echo $bodds ?> <br>
Amount: $<? echo $bamount ?> <br>

<?php

$servername = "localhost";
$username = "JT.Speetjens";
$password = "2358PPln!";
$dbname = "SideBet";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Available_Bets VALUES ('$btitle', '$bdescription', '$bodds', '$bamount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>

<form action="SideBet_Home.php"> <center> <button type="submit" class="btn btn-success"> Return Home </button> </center> </form>



</body>