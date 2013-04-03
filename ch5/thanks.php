    <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thanks</title>
    </head>
    <body>
        <h1>Thanks!</h1>
        <div>
        <?php
            $name     = urldecode($_GET['name']);
            $email    = urldecode($_GET['email']);
            $posting  = urldecode($_GET['posting']);
            print "<p>Thank you $name, we will contact you at your email: $email</p>";
            print "<h3>Your post:</h3><p><div style='border:1px solid black;padding:10px;'>$posting</div></p>";
        ?>
        </div>
    </body>
</html>
