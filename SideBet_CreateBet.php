<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<title> Create Bet </title>

	<style>
	greenstuff {
		color: #25A944;
	}
	</style>
	<script>
	$(document).ready(function(){
    $("input[type=radio]").change(function(){
        if($(this).attr("rel") == "attach")
        {
            $(this).val($("customAmount").val());
        }
    });

   $("customAmount").change(function(){
        $("input[type=radio]:eq(3)").val($(this).val());
   		});   
	});

	</script>
</head>
<body>



<nav class="navbar navbar-light bg-faded">
 	<a class="nav-link" href = "SideBet_Home.php"> <greenstuff> Home </greenstuff></a>
 	<a class="nav-link" href = "SideBet_createBet.php"> <greenstuff> Create Bet </greenstuff> </a>
</nav>

<form action = "SideBet_SubmittedBet.php" method="post">
	<div> <center> <h3> <greenstuff> Create New Bet </greenstuff> </h3> </center> </div>
	<div class="form-group">
		<label for="btitle"> <b>Bet Title </b> </label>
		<input type="text" class="form-control" name="btitle">
	</div>
	<div class ="form-group">
		<label for="description"> <b> Description </b> </label>
		<textarea class="form-control" rows="3" name="description"></textarea>
	</div>
	<div class = "form-group">
		<label for="odds"> <b> Odds (1 in X) </b> </label>
		<input type="text" class="form-control" name="odds">
	</div>
	<div>
		<label for="amount"> <b> Bet Amount </b> </label>
		<label class="radio-inline"><input type="radio" value = 5 name="amount">$5</label>
		<label class="radio-inline"><input type="radio" value = 10 name="amount">$10</label>
		<label class="radio-inline"><input type="radio" value = 20 name="amount">$20</label>
		<label class="radio-inLine"><input type= "radio" name ="amount" value="" rel="attach" /> $
		<input type="text" value="" id="customAmount"/> </label>
	</div>
	<div>
		<center> <button type="submit" class="btn btn-success"> Submit Bet </button> </center>
	</div>
</form>





</body>


</html