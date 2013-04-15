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
            
            $soups = array (
                'Monday'    => 'Clam Chowder',
                'Tuesday'   => 'White Chicken Chili',
                'Wednesday' => 'Vegetarian',
                'Thursday'  => 'Chicken Noodle',
                'Friday'    => 'Tomato',
                'Saturday'  => 'Cream of Broccoli'
            );
            
            // print each element of the array
            foreach ($soups as $day => $soup) {
                print "<p>$day: $soup</p>\n";
            }
            
        ?>
    </body>
</html>