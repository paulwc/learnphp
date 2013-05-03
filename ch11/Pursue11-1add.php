<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Add A Quotation</title>
    </head>
    <body>
        <?php
        // Pursue 11-1 - add_quote.php
        /* The textarea now has a 'sticky' value
         * The existence of quotes file is checked
         * The quotation and attribute are taken as separate inputs
         */
        /* This script displays and handles an HTML form. This script takes text input and stores it in a text file. */

        // Identify the file to use:
        // File changed to store quote and attribution separately
        $file = '../../../quotes2.txt';

        // Check for a form submission:
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { // Handle the form.
            if ( !empty($_POST['quote']) && !empty($_POST['attribution'] ) ) { // Need some thing to write.
                if ( file_exists($file) && is_writable($file) ) { // Confirm that the file exists and is writable.
                    file_put_contents($file, $_POST['quote'] . PHP_EOL . $_POST['attribution'] . PHP_EOL, FILE_APPEND|LOCK_EX); // Write the data with a lock
                    // Print a message:
                    print '<p>Your quotation has been stored.</p>';
                }
                else { // Could not open the file.
                    print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
                }
            }
            else { // Failed to enter a quotation.
                print '<p style="color: red;">Please enter a quotation!</p>';
            }
        } // End of submitted IF checking for POST request.
        // Display the form:
        ?>
        <h1>Add a quotation</h1>
        <form action="Pursue11-1.php" method="post">
            <textarea name="quote" rows="5" cols="30" placeholder="Enter your quotation here."><?php if (isset($_POST['quote'])&&!empty($_POST['quote'])){print htmlentities($_POST['quote']);} ?></textarea><br />
            <input type="text" name="attribution" id="attribution" size="40" placeholder="<?php if (isset($_POST['attribution'])&&!empty($_POST['attribution'])){print htmlentities($_POST['attribution']);}else{print 'Enter the quote author here.';} ?>"><br />
            <input type="submit" name="submit" value="Add This Quote!" />
        </form>

    </body>
</html>