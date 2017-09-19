<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<title> home </title>
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

<center> <h3> <greenstuff> Welcome to SideBet! </greenstuff> </h4> </center>

<center> <h4> Current Bets </h4> </center>

<?php

$servername = "localhost";
$username = "JT.Speetjens";
$password = "2358PPln!";
$dbname = "SideBet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$counter = 0;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Available_Bets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  ?> <center> 
    <table class = "table table-striped" name = AvailableBets> <thead>
    <tr>
    <th> <center> Bet </center> </th>
    <th> <center> Description </center> </th>
    <th> </th>
    </tr>
  </thead> <tbody> <?
    while ($row = $result->fetch_assoc()) {
      ?>
      <tr>
      <td> <b>
      <?
      echo $row["Title"];
     ?> </b> </td>
     <td> <b>
     <? echo $row["Description"]; ?>
     </b>
     </td>
     <td>
      <form action = "SideBet_SelectBet.php" method="POST">
        <input type= "hidden" value = <?=$row["Description"]?> name = "rowNumVal" >
        <button type="submit" class="btn btn-success"> Select </button>
      </form>
     </td> </tr> <?
      $counter++;
    }
    ?> </tbody> </table> <?
}
else {
  echo "There are currently no bets available.";
}

$conn->close();
?> 



</body>