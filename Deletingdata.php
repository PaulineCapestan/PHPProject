<?php

$user = 'root';
$pass = '';
$db = 'projectdb';

# Create connection 
$db = new mysqli('localhost', $user, $pass, $db);
# Check connection
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}

$sql = "DELETE FROM ListExpenses (id, name_expense, amount_expense, date_expense, category_expense) 
WHERE id = ('', 'Pizza', '10', '2019-02-28', 'Food')";

# VALUES ('Transport', '100', '0')";

if ($db->query($sql) === TRUE) {
    echo "Data deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
