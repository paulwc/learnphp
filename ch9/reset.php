<?php
    // Script 9.4 - reset.php
    // Delete the cookies:
    setcookie('font_size', '', time() - 600, '/');
    setcookie('font_color', '', time() - 600, '/');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Reset Your Settings</title>
    </head>
    <body>
        <p>Your settings have been reset! Click <a href="view_settings.php">here</a> to go back to the main page.</p>
    </body>
</html>