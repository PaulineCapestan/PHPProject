<?php 
		// get the values entered in the form
		$name = $_POST['name'];
		$amount = $_POST['amount'];
		$date = $_POST['date'];
		$category = $_POST['category'];
		
		$user = 'root';
		$pass = '';
		$db = 'projectdb';

		# Create connection 
		$db = new mysqli('localhost', $user, $pass, $db);
		# Check connection
		if ($db->connect_error) {
			die("Connection failed: " . $db->connect_error);
			
		
		
		$sql = "INSERT INTO ListExpenses (id, name_expense, amount_expense, date_expense, category_expense)
		VALUES ('', name, amount, date, category)";	
		
		if ($db->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $db->error;
		}
			
}
?>
