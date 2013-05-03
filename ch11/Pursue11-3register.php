<?php
require_once('Pursue11-3header.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Register</title>
        <style type="text/css" media="screen">
            .error { color: red; }
        </style>
    </head>
    <body>
<?php
if ( isLoggedIn() ) {
    print "<h1>Hi there {$_SESSION['username']}, nice to see you!</h1>";
}
?>
        <h1>Register</h1>
        <?php
        // Script 11.6 - register.php
        /* This script registers a user by storing their information in a text file and creating a directory for them. */

        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // Handle the form.
            $problem = FALSE; // No problems so far.
            // Check for each value...
            if ( empty($_POST['username']) ) {
                $problem = TRUE;
                print '<p class="error">Please enter a username!</p>';
            }

            if ( empty($_POST['password1']) ) {
                $problem = TRUE;
                print '<p class="error">Please enter a password!</p>';
            }

            if ( $_POST['password1'] != $_POST['password2'] ) {
                $problem = TRUE;
                print '<p class="error">Your password did not match your confirmed password!</p>';
            }

            if ( !$problem ) { // If there weren't any problems...
                if ( isUsernameAvailable($_POST['username']) ) {

                    if ( file_exists($userdbfile) && is_writable($userdbfile) ) { // Open the file.
                        // check usernames
                        if ( addUser($_POST['username'], $_POST['password1']) ) {
                            print '<p>You are now successfully registered</p>';
                        }
                        else {
                            print '<p class="error">You could not be registered due to a system error.</p>';
                        }
                    }
                    else { // Couldn't write to the file.
                        print '<p class="error">You could not be registered due to a system error.</p>';
                    }
                }
                else {
                    // username taken
                    print '<p class="error">Sorry, that username is taken. Please choose another.</p>';
                }
            }
            else { // Forgot a field.
                print '<p class="error">Please go back and try again!</p>';
            }
        }
        else { // Display the form.
            // Leave PHP and display the form:
            ?>

            <form action="Pursue11-3register.php" method="post">
                <p>Username: <input type="text" name="username" size="20" /></p>
                <p>Password: <input type="password" name="password1" size="20" /></p>
                <p>Confirm Password: <input type="password" name="password2" size="20" /></p>
                <input type="submit" name="submit" value="Register" />
            </form>

<?php } // End of submission IF.    ?>
    </body>
</html>