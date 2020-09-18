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

// Get random word (Max Number is 113811)
$random_word_id = rand(1, 113811);

$sql = "SELECT word_id, word FROM words WHERE word_id = $random_word_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo json_encode(array($row["word_id"],$row["word"]));
  }
} else {
  echo "0 results";
}
$conn->close();
?>