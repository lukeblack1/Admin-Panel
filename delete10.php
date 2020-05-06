<?php
/*
# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Delete' ;


# Open database connection.
require ( 'private/connect_db.php' ) ;

    
  $id=$_GET['user_id'];

  

$sql ="DELETE FROM users WHERE user_id=2";



if ($link->query($link) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
*/

$id = $_GET['user_id'];


// Create connection
$conn = mysqli_connect('localhost','HNDSOFTS2A26','nnBp8bDHqL','HNDSOFTS2A26');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM users WHERE user_id=" . $id;

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>




