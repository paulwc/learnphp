<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>I Have This Sorted Out</title>
    </head>
    <body>
        <?php
            // Script 7.7 list.php

            // set error handling
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
        
            // Turn the incoming string into an array
            $words_array = explode(' ', $_POST['words']);
            
            // Sort the array:
            sort($words_array);
            // Turn the array back into a string:
            $string_words = implode('<br />', $words_array);
            // Print the results:
            print "<p>An alphabetized version of your list is: <br /> $string_words</p>";
        ?>
    </body>
</html>
