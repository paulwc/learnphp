<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chapter 5 Pursue 5-5</title>
        <style type="text/css" media="screen">
            html { font-family: Arial, Tahoma, sans-serif; }
            h1 { font-family: Helvetica, 'Trebuchet MS', sans-serif; }
            span.newinfo { line-height: 150%; color: red; padding: 15px; }
       </style>
    </head>
    <body>
        <?php 
            // Pursue 5-5 exercise
            // This is some practice handling string inputs from a form
            // and manipulating the information
        
            // Address error handling
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            // If we don't get any values from the form, display a link back to the form and stop execution
            if ( (!isset($_POST['username'])) || (empty($_POST['username'])) ) {
                echo "Error: Please go <a href='pursue5-5.html'>back</a> and fill in the form to use this page";
                exit;
            }
            
            // Get the values from the $_POST array:
            $username  = trim(htmlentities($_POST['username']));
            $salt      = trim($_POST['salt']);
            $plaintext = trim(nl2br($_POST['plaintext']));
            
            // encrypt password for fun
            $enc_username = crypt($username, $salt);
            
            // remove tags
            $plaintextstripped = strip_tags($plaintext);
            
            // replace some words for practice
            $plaintextreplaced = str_ireplace("apple", "banana", $plaintextstripped);
            $plaintextreplaced = str_ireplace("hello", "greetings", $plaintextreplaced);
            
            // encrypt our text with ultra-secure encryption
            $ciphertext = str_rot13($plaintextreplaced);
            
        ?>
        <h1>Your results</h1>
        <p>If we encrypt your username of</p>
        <p><span class="newinfo"><?php echo $username; ?></span></p>
        <p>using the</p>
        <p><span class="newinfo"><?php echo strlen($salt); ?></span></p>
        <p>character salt you provided, we get</p>
        <p><span class="newinfo"><?php echo $enc_username; ?></span></p>
        <p>And here is the rot-13 translation of your text with HTML tags removed</p>
        <label>Original</label>
        <p><textarea rows="3" cols="30"><?php echo $plaintextreplaced; ?></textarea></p>
        <label>Translation</label>
        <p><textarea rows="3" cols="30"><?php echo $ciphertext; ?></textarea></p>
    </body>
</html>
            
            