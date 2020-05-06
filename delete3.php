<?php
# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }


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