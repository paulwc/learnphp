<?php 
    $fun_img = 'http://i1.kym-cdn.com/photos/images/newsfeed/000/480/886/dee.jpg';
    $link_address = 'http://www.theuselessweb.com';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Below is an image linking to internet hilarity created by PHP</h1>
        <a href="<?php echo $link_address; ?>">
            <img src="<?php echo $fun_img; ?>" style="margin:0 auto;height:auto;width:auto;border:none;padding:10px;" />
        </a>
    </body>
</html>
