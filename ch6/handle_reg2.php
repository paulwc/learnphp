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
            $okay = TRUE;
            
            // check email has been entered
            if (empty($_POST['email'])) {
                print '<p class="error">Please enter your email address.</p>';
                $okay = FALSE;
            }
            
            // check that password has a value
            if (empty($_POST['password'])) {
                print '<p class="error">Please enter your password.</p>';
                $okay = false;
            }
            
            // check if passwords are the same input
            if ($_POST['password'] != $_POST['confirm']) {
                print '<p class="error">Your confirmed password does not match the original password.</p>';
                $okay = FALSE;
            }
            
            // validate the year
            if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
                if ( $_POST['year'] < 2013 ) {
                    $age = 2013 - $_POST['year'];
                }
                else {
                    print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
                    $okay = FALSE;
                }
            }
            else {
                print '<p class="error">Please enter the year you were born as four digits.</p>';
                $okay = FALSE;
            }
            
            if (!isset($_POST['terms'])) {
                print '<p class="error">You must accept the terms of this site.</p>';
                $okay = FALSE;
            }
            
            // validate the colors
            // rewritten below
            /**
            if ( $_POST['color'] == 'red') {
                $color_type = 'primary';
            }
            else if ( $_POST['color'] == 'yellow') {
                $color_type = 'primary';
            }
            else if ( $_POST['color'] == 'green') {
                $color_type = 'secondary';
            }
            else if ( $_POST['color'] == 'blue') {
                $color_type = 'primary';
            }
            else {
                print '<p class="error">Please select your favorite color.</p>';
                $okay = false;
            }
             
            **/
            
            // validate the color using a switch
            switch ($_POST['color']) {
                case 'red':
                    $color_type = 'primary';
                    break;
                case 'yellow':
                    $color_type = 'primary';
                    break;
                case 'green':
                    $color_type = 'secondary';
                    break;
                case 'blue':
                    $color_type = 'primary';
                    break;
                default: 
                    print '<p class="error">Please select your favorite color.</p>';
                    $okay = false;
                    break;
            }
            
            // if there are no errors, print a success message
            if ($okay) {
                print '<p>You have been successfully registered (but not really).</p>';
                print "<p>You will turn $age this year.</p>";
                print "<p>Your favorite color is a $color_type color.</p>";
            }
            
        ?>
    </body>
</html>
