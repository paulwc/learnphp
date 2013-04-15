<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>I Have This Sorted Out</title>
    </head>
    <body>
        <?php
            // Pursue 7-4 exercise

            // set error handling
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
        
            if (empty($_POST['words'])) {
                print "<p>Please enter some words</p>";
                print "<p><a href='Pursue7-4.html'>Go back</a>";
            }
            else {
            
                // Turn the incoming string into an array
                $words_array = explode(' ', $_POST['words']);

                // Sort the array:
                sort($words_array);

                // Turn the array into a string using foreach
                $string_words = '';
                foreach ($words_array as $word) {
                    $string_words .= $word . " ";
                }

                // Print the results:
                print "<p>An alphabetized version of your list is: <br /> $string_words</p>";
            }
        ?>
    </body>
</html>
