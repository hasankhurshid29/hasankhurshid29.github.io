<html>
    <head>
        <title>Query Result</title>
    </head>
<?php 
$servername = $_POST['ser'];
$username = $_POST['user'];
$password = $_POST['pass'];
$database = $_POST['db'];


if(strlen($database)==0){
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = $_POST['query'];
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
}
else{
    $conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $_POST['query'];

if ($conn->query($sql) === TRUE) {
  echo "Query Executed";
} else {
  echo "Error executing query: " . $conn->error;
}
$conn->close();
}
?>
</html>