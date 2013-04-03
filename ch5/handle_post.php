<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Forum Posting</title>
        <style>
            div p {
                border:1px solid black;
                padding:10px;
                font-family:Tahoma,Georgia,sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Posting Result</h1>
        <?php  // Script 5.2
        
            // error reporting
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            $first_name = trim($_POST['first_name']);
            $last_name  = trim($_POST['last_name']);
            $posting    = trim($_POST['posting']);
            // old way
            // $posting    = $_POST['posting'];
            $posting    = nl2br($posting);
            
            $name = $first_name . ' ' . $last_name;
            
            // seeing some php functions, unused for now
            // $html_post  = htmlentities($_POST['posting']);
            // $strip_post = strip_tags($_POST['posting']);
            
            $words = str_word_count($posting);
            
            // removed for now
            //$posting = substr($posting, 0, 50);
            
            $posting = str_ireplace('badword', 'XXXXX', $posting);
            $posting = str_ireplace('Hello', 'Bonjour', $posting);
            $posting = str_ireplace('world', 'terra firma', $posting);
            
            /*
            print "<div>Thank you, $name, for your posting:
                <p>$posting</p>
                <p>($words words)</p></div>";
             */
                // <p>Entity: $html_post</p>
                // <p>Stripped: $strip_post</p></div>";
            
            print '<div>Thank you, ' . $name . ', for your posting:';
            print '<p>' . $posting .  '</p>';
            print '<p>(' . $words . ' words)</p></div>';
            
            $name  = urlencode($name);
            $email = urlencode($_POST['email']);
            
            // first way
            // print "<p>Click <a href=\"thanks.php?name=$name&email=$email\"> here</a> to continue.</p>";
            
            // second way
            // Pursue 5-4 exercise
            print 'Click <a href="thanks.php?name=' . $name . '&email=' . $email . '&posting=' . $posting . '">here</a> to continue.';
        ?>
    </body>
</html>
