<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add an Event</title>
    </head>
    <body>
        <?php
        // SCript 7.9 event.php
        // set error handling
        ini_set('display_errors', 1);
        error_reporting(E_ALL | E_STRICT);

        // Print the text:
        print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br />";
        // Print each weekday:
        if (isset($_POST['days']) AND is_array($_POST['days'])) {
            foreach ($_POST['days'] as $day) {
                print "$day<br />\n";
            }
        }
        else {
            print 'Please select at least one weekday for this event!';
        }
        // Complete the paragraph:
        print '</p>';
        ?>
    </body>
</html>
