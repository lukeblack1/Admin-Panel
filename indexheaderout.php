<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ; 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Home' ;
include ( 'includes/headerout.html' ) ;
echo '<div class="container">';
# Display body section.
echo "<h1>HOME</h1><p>You are now logged in, {$_SESSION['first_name']} {$_SESSION['last_name']} </p>";

# Create navigation links.
echo '<p><a href="movie.php">Movie</a> | <a href="logout.php">Logout</a></p>';

# Display footer section.
include ( 'includes/footer.html' ) ;
?>