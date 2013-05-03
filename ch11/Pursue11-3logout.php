<?php
require('Pursue11-3header.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Fakewebsite Login Page</title>
    </head>
    <body>
        <h1>Login</h1>
    <?php
    if ( isLoggedIn() ) {
        logoutUser();
        print "<h1>Success</h1>
            <p>You are now logged out.</p>
            <p><a href='Pursue11-3login.php'>Login</a></p>";
    }
    else { // Display the form.
    // Leave PHP and display the form:
    ?>

        <h1>Divide by Zero</h1>
        <p>You are not logged in, but you are trying to logout. Weird...</p>
        <p><a href="Pursue11-3login.php">Login here</a></p>

<?php } // End of submission IF.
?>
    </body>
</html>
