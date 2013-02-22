<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php  // Script 3.7 - hello.php
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            
            $name = $_GET['name'];
            $job  = $_GET['job'];
            print "<p>Hello, <span style=\"font-weight: bold;\">$name</span>!</p>";
            print "<p>Your job is: <span style=\"font-weight:bold;\">$job</span>!</p>";
                
        ?>
    </body>
</html>
