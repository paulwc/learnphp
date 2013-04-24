<?php

// Pursue 9.7a - login.php #2
/* This page lets people log into the site (in theory). */

// Set the page title and include the header file:
define('TITLE', 'Login');
include('templates/header.html');

// Print some introductory text:
print '<h2>Login Form</h2>
	<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Handle the form:
    if ((!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['name'])) ) {

        if ((strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass')) { // Correct!
            
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['loggedin'] = time();
            $_SESSION['name'] = $_POST['name'];
            
            // Redirect the user to the welcome page!
            ob_end_clean(); // Destroy the buffer!
            header('Location: Pursue9-7welcome.php');
            exit();
        } else { // Incorrect!
            print '<p>The submitted email address and password do not match those on file!<br />Go back and try again.</p>';
        }
    } else { // Forgot a field.
        print '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
    }
} else { // Display the form.
    print '<form action="Pursue9-7login.php" method="post">
	<p>Email Address: <input type="text" name="email" size="20" /></p>
	<p>Password: <input type="password" name="password" size="20" /></p>
	<p>Name: <input type="text" name="name" size="20" /></p>
	<p><input type="submit" name="submit" value="Log In!" /></p>
	</form>';
}

include('templates/footer.html'); // Need the footer.
?>