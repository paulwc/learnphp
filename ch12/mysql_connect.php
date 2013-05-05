<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Connect to MySQL</title>
    </head>
    <body>
        <?php
        // Script 12.2 - mysql_connect.php #2
        /* This script connects to the MySQL server. */

        // Attempt to connect to MySQL and print out messages:
        if ( $dbc = @mysql_connect('localhost', 'learnphpuser', 'supersecret') ) {

            print '<p>Successfully connected to MySQL!</p>';

            mysql_close($dbc); // Close the connection.
        }
        else {

            print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
        }
        ?>
    </body>
</html>