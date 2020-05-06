<?php include ( 'includes/headerout.php' ) ;


?>

<!DOCTYPE html>
<html>
<head>


	  
	  
	  
  
</ul>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>


<table style="width:100%">
  <tr>
	<th> </th>
    <th>First Name</th>
	  <th>Last Name</th>
		<th>Email</th>
	  
	    <th>Password</th>
		
	  
	  <th> </th>
	    
    
  </tr>
  <tr>
   <?php # DISPLAY COMPLETE LOGGED IN PAGE.



# Set page title and display header section.
$page_title = 'Admin' ;

 
require ('private/connect_db.php');

# Retrieve items from 'products' database table.
$q = "SELECT * FROM users1" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
 # Display body section.
  echo '<div class="container">
		<h1 class="display-4 text-muted">Users </h1>
			<div class="card-body">
				<div class="row">
				
			';
			
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
	  
		
		  echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["first_name"] . "</td><td>". $row["last_name"]. 
		  "</td><td>" . $row["email"]. "</td><td>" .$row["pass"] .  
		  "</td><td>";

echo '<td><b><font color="#663300"><a href="delete1.php?user_id=' . $row["user_id"] . '">Delete</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="register.php?user_id=' . $row["user_id"] . '">Add</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="password1.php?user_id=' . $row["user_id"] . '">Change Password</a></font></b></td>';
			 }
  echo '</table>';
  
  # Close database connection.
  mysqli_close( $link ) ; 
}
# Or display message.
else { echo '<p>There are currently no movies showing at this cinema.</p>' ; }

?>
  </tr>
</table>



</body>
</html>