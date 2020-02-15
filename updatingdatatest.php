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
			
		# Prepare and bind 	
		
		$request = $conn->prepare("UPDATE ListExpenses SET column_to_change = value_to_change WHERE line_to_change = value_to_change_in VALUES (?,?,?,?)");
		$request->bind_param("sss", $column_to_change, $value_to_change, $line_to_change, $value_to_change_in);
		
		# Set parameters and execute 
		
		$column_to_change = "category_expense";
		$value_to_change = "food";
		$line_to_change = "name_expense"
		$value_to_change_in = "pizza";
		$request->execute();
		
		
	
		if ($db->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $db->error;
		}
			
}
?>
