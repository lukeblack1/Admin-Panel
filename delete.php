<?php
# Access session.
session_start() ;


# Set page title and display header section.
$page_title = 'Delete' ;


# Open database connection.
require ( 'private/connect_db.php' ) ;

    $first_name=$_GET['first_name'];
	
    // sql to delete a record
   
	
	$sql ="DELETE FROM users WHERE first_name='".$first_name"'";
	
	
 if ($link->query($sql) === TRUE) {
      
    } else {
        echo "Error deleting record: " . $link->error;
    }

load();

mysqli_close($link);

?>