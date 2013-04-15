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
            
            // count and print the current number of elements
            print "<p>The soups array originally had " . count($soups) . " elements.</p>";
            
            // Add 3 items to the array
            $soups['Thursday'] = 'Chicken Noodle';
            $soups['Friday'] = 'Tomato';
            $soups['Saturday'] = 'Cream of Broccoli';
            
            // count and print the number of elements again
            print "<p>After adding 3 more soups, the array now has " . count($soups) . " elements</p>.";
            
            // print the contents of the array:
            print_r($soups);
            
        ?>
    </body>
</html>