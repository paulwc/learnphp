<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Sticky Text Inputs</title>
    </head>
    <body>
        <?php

        // Pursue 10-2 - sticky1.php 
        /* This script defines and calls a function that creates a sticky text input. */

        // This function makes a sticky text input.
        // This function requires two arguments be passed to it.
        function make_text_input($ispost, $name, $label, $size = 20) {
            
            
            // Begin a paragraph and a label:
            print '<p><label>' . $label . ': ';

            // Begin the input:
            print '<input type="text" name="' . $name . '" size="' . $size . '" ';

            // Add the value:
            if ($ispost) {
                if ( isset($_POST[$name]) ) {
                    print ' value="' . htmlspecialchars($_POST[$name]) . '"';
                }
            }
            else {
                if ( isset($_GET[$name]) ) {
                    print ' value="' . htmlspecialchars($_GET[$name]) . '"';
                }
            }

            // Complete the input, the label and the paragraph:
            print ' /></label></p>';
        }  // End of make_text_input() function.
        

        // Make the form:
        print '<form action="" method="post">';

        // Create some text inputs:
        make_text_input('POST', 'first_name', 'First Name');
        make_text_input(TRUE, 'last_name', 'Last Name', 30);
        make_text_input(TRUE, 'email', 'Email Address', 50);
        
        // Add another input that uses GET for the value
        make_text_input(FALSE, 'color', 'Favorite Color');

        print "\n<input type='submit' name='submit' value='Register!' />";
        print "\n</form>";
        ?>
    </body>
</html>