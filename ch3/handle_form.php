<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Your Feedback</title>
    </head>
    <body>
        <?php
            // Script 3.3 handle_form.php
            // This page receives the data 
            // from feedback.html.
            // It will receive: title, name, 
            // email, response, comments, and 
            // submit in $_POST.
        
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
        
            $title    = $_POST['title'];
            $name     = $_POST['name'];
            $response = $_POST['response'];
            $comments = $_POST['comments'];
            
            print "<p>Thank you, $title $name, for your comments.</p>
                    <p>You stated that you found this example to be '$response' and 
                    added:<br />$comments</p>";
        ?>
    </body>
</html>
