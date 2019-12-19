<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<meta charset="UTF-8">
		<title>TrackYourMoney</title>
        <link rel="stylesheet" href="../projectcss/styles.css">
		<script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script type="text/javascript">
		
		$(document).ready(function(){
            $(".dropdown-menu div a").click(function(){
            $("#category").text($(this).text());
            });
        });
		</script>
		
		
		
	</head>
	<body>
		
			
		<div class="col-md-4 text-center">
		
			<h2>Welcome to TrackYourMoney</h2>
		
		<form action="basicinputresponse.php" method="post">
			<br>
			
				<b>Name of the expense</b>
				<br>
				<input type="text" name="name" required>
				<br>
				<br>
				
				<b>Amount of the expense</b>
				<br>
				<input type="number" name="amount" min="0" required>
				<br>
				<br>
		
				<b>Date of the expense</b>
				<br>
				<input type="date" name="date" required>
				<br>
			
				<br>
				<div class="dropdown">
					<button class="btn btn-outline-dark dropdown-toggle" id="category" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" ><b>Category of the expense</b><span class="caret"></span></button>
					<ul class="dropdown-menu">
						<h6 class="dropdown-header">Category of the expense</h6>
						<div><a class="dropdown-item" href="#" >Food</a></div>
						<div><a class="dropdown-item" href="#" >Transport</a></div>
						<div><a class="dropdown-item" href="#" >Health</a></div>
						<div><a class="dropdown-item" href="#" >Subscription</a></div>
						<div><a class="dropdown-item" href="#" >Outings</a></div>
						<div><a class="dropdown-item" href="#" >Other</a></div>
					</ul>
				</div>
				
			<br>
			
			
			<input type="submit" class="btn btn-info btn-lg btn-block" value="Add the expense">
			
			</div>
	
	</form>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</body>
</html>