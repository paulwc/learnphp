<?php
    date_default_timezone_set('America/New_York');
    $todaysDate = date('l jS \of F Y h:i:s A', $timestamp = time());
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chapter 1 LearnPHP Pursue Exercise</title>
    </head>
    <body>
        <h1>Chapter 1 Pursue Exercise</h1>
        <h3>The following is a PHP generated timestamp for today: <?php print $todaysDate; ?>
        </h3>
        <p>Followed by important php configuration information</p>
        <?php phpinfo(); ?>
    </body>
</html>
