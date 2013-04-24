<?php

// error handling
ini_set('error_reporting', 1);
error_reporting(E_STRICT | E_ALL);

// Pursue 9-3.php
// Handle the form if it has been submitted:
if ( isset($_POST['font_size'], $_POST['font_color']) ) {

    // Send the cookies:
    setcookie('font_size',  $_POST['font_size'],  time() + 10000000, '/');
    setcookie('font_color', $_POST['font_color'], time() + 10000000, '/');

    // Message to be printed later:
    $msg = '<p>Your settings have been entered!</p><p>Here is some more text to show the changes in action</p>';
} // End of submitted IF.

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Customize Your Settings</title>
        <style type="text/css">
        <?php
            print "body {";
                // Check for a font_size value submitted from form
                if ( isset($_POST['font_size']) ) {
                    print "\t\t\t\tfont-size: " . $_POST['font_size'] . ";\n";
                }
                else if ( isset($_COOKIE['font_size']) ) { // check for cookie value
                    print "\t\t\t\tfont-size: " . htmlentities($_COOKIE['font_size'], ENT_QUOTES) . ";\n";
                }
                else { // use default values
                    print "\t\t\t\tfont-size: medium;";
                }

                // Check for a font_color value from submitted form
                if ( isset($_POST['font_color']) ) { // check for submitted value
                    print "\t\t\t\tcolor: #" . $_POST['font_color'] . ";\n";
                }
                // check for value from cookie
                else if ( isset($_COOKIE['font_color']) ) {
                    print "\t\t\t\tcolor: #" . htmlentities($_COOKIE['font_color'], ENT_QUOTES) . ";\n";
                }
                else { // print default
                    print "\t\t\t\tcolor: #000;";
                }

            print "}";
        ?>
        </style>
    </head>
    <body>  
<?php
// If the cookies were sent, print a message.
if (isset($msg)) {
    print $msg;
}
?>
        <p>Use this form to set your preferences:</p>

        <form action="" method="post">
            <select name="font_size">
                <option value="">Font Size</option>
                <option value="xx-small">xx-small</option>
                <option value="x-small">x-small</option>
                <option value="small">small</option>
                <option value="medium">medium</option>
                <option value="large">large</option>
                <option value="x-large">x-large</option>
                <option value="xx-large">xx-large</option>
            </select>
            <select name="font_color">
                <option value="">Font Color</option>
                <option value="999">Gray</option>
                <option value="0c0">Green</option>
                <option value="00f">Blue</option>
                <option value="c00">Red</option>
                <option value="000">Black</option>
            </select>
            <input type="submit" name="submit" value="Set My Preferences" />
        </form>
    </body>
</html>