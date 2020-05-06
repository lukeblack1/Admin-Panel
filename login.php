<?php # DISPLAY COMPLETE LOGIN PAGE.

# Access session.
session_start() ;

# Set page title and display header section.
$page_title = 'Login' ;
include ( 'includes/headerin.php' ) ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or contact Administrator' ;
}
?>

<!-- Display body section. -->
<div class="container">
	<h2>Login</h2>
		<form action="login_action.php" method="post">
			<input 
				type="text" 
				class="form-control" 
				placeholder="Username" 
				name="email" 
				required>
			<hr>
			<input 
				type="password" 
				class="form-control" 
				placeholder="Password" 
				name="pass" 
				required>
			<hr>   
			<button 
				type="submit" 
				class="btn btn-primary btn-block" 
				role="button"> Login In
			</button>
			<hr>
		</form>

</body>
</html>