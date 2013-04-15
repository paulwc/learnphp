<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My Little Gradebook</title>
    </head>
    <body>
        <?php // Script 7.5 sort.php
            // set error handling
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            $grades = array(
                        'Richard'  => 95,
                        'Sherwood' => 82,
                        'Toni'     => 98,
                        'Franz'    => 87,
                        'Melissa'  => 75, 
                        'Roddy'    => 85
                      );
            print '<p>Originally the array looks like this: <br />';
            foreach ($grades as $student => $grade) {
                print "$student: $grade<br />\n";
            } 
            print "</p>";
            
            // Sort by value in the reverse order and then print again
            arsort($grades);
            print '<p>After sorting the array by value, using arsort(), the array looks like this: <br />';
            foreach ($grades as $student => $grade) {
                print "$student: $grade<br />\n";
            } 
            print "</p>";
            
            // Sort by key, then print again
            ksort($grades);
            print '<p>After sorting the array by key using ksort(), the array looks like this: <br />';
            foreach ($grades as $student => $grade) {
                print "$student: $grade<br />\n";
            } 
            print "</p>";
        ?>
    </body>
</html>
