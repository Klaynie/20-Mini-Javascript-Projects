<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Result array
$columnValues = Array();

// Get random id for list (Max Number is 4)
$random_list_id = rand(1, 4);

// Fetch list name
$sql_list_name = "SELECT list_name from list_names where list_id = $random_list_id";
$result_list_name = $conn->query($sql_list_name);

if ($result_list_name->num_rows > 0) {
  while($row = $result_list_name->fetch_assoc()) {
    $columnValues[] = $row['list_name'];
  }
} else {
  echo "0 results";
}

// Fetch list entries
$sql_entry_names = "SELECT le.entry_name from sorted_lists sl inner join list_names ln2 on ln2.list_id = sl.list_id inner join list_entries le on le.entry_id = sl.entry_id where sl.list_id = $random_list_id order by sl.entry_rank";
$result_entry_names = $conn->query($sql_entry_names);

if ($result_entry_names->num_rows > 0) {
  while($row = $result_entry_names->fetch_assoc()) {
    $columnValues[] = $row['entry_name'];
  }
} else {
  echo "0 results";
}

echo json_encode($columnValues);

$conn->close();
?>