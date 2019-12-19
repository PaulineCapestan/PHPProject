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

# Creation of the table List_Expenses
$sql = "CREATE TABLE ListExpenses (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name_expense VARCHAR(50) NOT NULL,
amount_expense INT(6),
date_expense DATE NOT NULL,
category_expense VARCHAR(50)
)";

if ($db->query($sql) === TRUE) {
	echo "Table ListExpenses created successfully";
} else {
	echo "Error creating table: " . $db->error;
}

# Creation of the table Goals
$sql = "CREATE TABLE GoalsCategory (
category_expense VARCHAR(50) PRIMARY KEY,
goal_amount INT NOT NULL,
provisional_amount FLOAT
)";

if ($db->query($sql) === TRUE) {
	echo "Table Goals created successfully";
} else {
	echo "Error creating table: " . $db->error;
}

$db->close();


?>