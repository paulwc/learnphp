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
        $problem = FALSE;
        
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // Handle the form.
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
                if (  isValidUser($_POST['username'], $_POST['password1'])) {
                    loginUser($_POST['username']);
                }
                else {
                    print '<p class="error">Your username/password does not match our records. Please try again.</p>';
                }
            }
            else {
                
            }
        }

        if ( isLoggedIn() ) {
            print "<h3>Hello {$_SESSION['username']}</h3>\n<p>You are logged in</p>\n<p>Click <a href='Pursue11-3logout.php'>here</a> to logout</p>";
        }
        else { // Display the form.
            // Leave PHP and display the form:
            ?>

            <form action="Pursue11-3login.php" method="post">
                <p>Username: <input type="text" name="username" size="20" /></p>
                <p>Password: <input type="password" name="password1" size="20" /></p>
                <p>Confirm Password: <input type="password" name="password2" size="20" /></p>
                <input type="submit" name="submit" value="Register" />
            </form>

<?php } // End of submission IF.
?>
    </body>
</html>
