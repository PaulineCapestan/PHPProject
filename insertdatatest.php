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

$sql = "INSERT INTO ListExpenses (id, name_expense, amount_expense, date_expense, category_expense)
VALUES ('', 'Pizza', '10', '2019-02-28', 'Food')";

$sql = "INSERT INTO ListExpenses (id, name_expense, amount_expense, date_expense, category_expense)
VALUES ('', 'Doctor', '23', '2019-11-23', 'Health')";

$sql = "INSERT INTO GoalsCategory (category_expense, goal_amount, provisional_amount)
VALUES ('Food', '300', '100')";

# $sql = "INSERT INTO GoalsCategory (category_expense, goal_amount, provisional_amount)
# VALUES ('Transport', '100', '0')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>