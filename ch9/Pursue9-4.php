<?php
// Pursue 9-4 - sticky customize.php
// Handle the form if it has been submitted:
if (isset($_POST['font_size'], $_POST['font_color'])) {

    // Send the cookies:
    setcookie('font_size', $_POST['font_size'], time() + 10000000, '/');
    setcookie('font_color', $_POST['font_color'], time() + 10000000, '/');

    // Message to be printed later:
    $msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a> to see them in action.</p>';
} // End of submitted IF.
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Customize Your Settings (Sticky)</title>
    </head>
    <body>
        <?php
        // If the cookies were sent, print a message.
        if (isset($msg)) {
            print $msg;
        }
        ?>

        <p>Use this form to set your preferences:</p>

        <form action="" method="post">
            <select name="font_size">
                <option value="">Font Size</option>
                <option <?php if (isset($_POST['font_size'])&&$_POST['font_size']=='xx-small') echo "selected='selected'"; ?> value="xx-small">xx-small</option>
                <option <?php if (isset($_POST['font_size'])&&$_POST['font_size']=='x-small') echo "selected='selected'"; ?> value="x-small">x-small</option>
                <option <?php if (isset($_POST['font_size'])&&$_POST['font_size']=='small') echo "selected='selected'"; ?> value="small">small</option>
                <option <?php if (isset($_POST['font_size'])&&$_POST['font_size']=='medium') echo "selected='selected'"; ?> value="medium">medium</option>
                <option <?php if (isset($_POST['font_size'])&&$_POST['font_size']=='large') echo "selected='selected'"; ?> value="large">large</option>
                <option <?php if (isset($_POST['font_size'])&&$_POST['font_size']=='x-large') echo "selected='selected'"; ?> value="x-large">x-large</option>
                <option <?php if (isset($_POST['font_size'])&&$_POST['font_size']=='xx-large') echo "selected='selected'"; ?> value="xx-large">xx-large</option>
            </select>
            <select name="font_color">
                <option value="">Font Color</option>
                <option <?php if (isset($_POST['font_color'])&&$_POST['font_color']=='999') echo "selected='selected'"; ?> value="999">Gray</option>
                <option <?php if (isset($_POST['font_color'])&&$_POST['font_color']=='0c0') echo "selected='selected'"; ?> value="0c0">Green</option>
                <option <?php if (isset($_POST['font_color'])&&$_POST['font_color']=='00f') echo "selected='selected'"; ?> value="00f">Blue</option>
                <option <?php if (isset($_POST['font_color'])&&$_POST['font_color']=='c00') echo "selected='selected'"; ?> value="c00">Red</option>
                <option <?php if (isset($_POST['font_color'])&&$_POST['font_color']=='000') echo "selected='selected'"; ?> value="000">Black</option>
            </select>
            <input type="submit" name="submit" value="Set My Preferences" />
        </form>

    </body>
</html>