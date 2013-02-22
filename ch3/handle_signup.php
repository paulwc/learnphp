<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thanks for signing up</title>
    </head>
    <body>
        <?php
            // This page handles a signup request form
            // from signup_form.html
        
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
        
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            
            print "<p>Thanks for signing up for our mailing list $name</p>
                    <p>Just to be clear, you signed up this email: $email </p>";
        ?>
    </body>
</html>
