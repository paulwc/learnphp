<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
        <style type="text/css" media="screen">
            .error {color:red;}
        </style>
    </head>
    <body>
        <h1>Registration Results</h1>
        <?php
            // Script 6.2 - handle_reg.php
        
            // set error handling
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            // flag variable
            $okay = true;
            
            // check email has been entered
            if (empty($_POST['email'])) {
                print '<p class="error">Please enter your email address.</p>';
                $okay = false;
            }
            
            // check that password has a value
            if (empty($_POST['password'])) {
                print '<p class="error">Please enter your password.</p>';
                $okay = false;
            }
            
            // check if passwords are the same input
            if ($_POST['password'] != $_POST['confirm']) {
                print '<p class="error">Your confirmed password does not match the original password.</p>';
                $okay = false;
            }
            
            // check year
            if (is_numeric($_POST['year'])) {
                $age = 2013 - $_POST['year'];
            }
            else {
                print '<p class="error">Please enter the year you were born as four digits.</p>';
                $okay = false;
            }
            
            // check the year user was born is before current year
            if ($_POST['year'] >= 2013) {
                print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
                $okay = false;
            }
            
            // if there are no errors, print a success message
            if ($okay) {
                print '<p>You have been successfully registered (but not really).</p>';
                print "<p>You will turn $age this year.</p>";
            }
            
        ?>
    </body>
</html>
