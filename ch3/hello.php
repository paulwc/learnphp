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
            print "<p>Hello, <span style=\"font-weight: bold;\">$name</span>!</p>";
                
        ?>
    </body>
</html>
