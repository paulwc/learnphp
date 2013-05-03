<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>View A Quotation</title>
    </head>
    <body>
        <h1>Random Quotations</h1>
        <?php
        // Pursue11-1view.php
        /* This script displays and handles an HTML form. This script reads in a file and prints 2 random lines from it. */

        // returns a number within $n range
        function get_rand_num($n) {
            $temp = rand(0, ($n - 1));
            while ( $temp%2 == 1 ) {
                $temp = rand(0, ($n - 1));
            }
            return $temp;
        }
        
        // Read the file's contents into an array:
        $data = file('../../../quotes2.txt');

        // Count the number of items in the array:
        $n = count($data);

        // Pick 2 random odd lines (odd lines have quotations, even lines have attributions):
        $rand1 = get_rand_num($n);
        $rand2 = get_rand_num($n);
        
        // make sure the two numbers are not the same
        while ($rand1==$rand2) {
            $rand2 = get_rand_num($n);
        }
        
        // Print the 2 quotations and authors:
        print '<p>' . trim($data[$rand1]) . '<br /><pre>' . trim($data[$rand1+1]) . '</pre></p>';
        print '<p>' . trim($data[$rand2]) . '<br /><pre>' . trim($data[$rand2+1]) . '</pre></p>';
        ?>
    </body>
</html>