<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Mmmm...soups</h1>
        <?php
            // set error handling
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            $soups = array(
                'Monday' => 'Clam Chowder',
                'Tuesday' => 'White Chicken Chili',
                'Wednesday' => 'Vegetarian'
            );
            
            print "<p>$soups</p>";
            
            // print the contents of the array:
            print_r($soups);
            
        ?>
    </body>
</html>