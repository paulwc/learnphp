<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Compiled shopping list</title>
    </head>
    <body>
        <h1>Your list</h1>
        <?php
            // error reporting
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
        
            $stationary_array = explode(' ', $_POST['stationary']);
            $cleaning_array = explode(' ', $_POST['cleaning']);
            $equipment_array = explode(' ', $_POST['equipment']);
            $other_array = $_POST['other'];
            
            $shopping_list = array('Stationary' => $stationary_array,
                                   'Cleaning Supplies' => $cleaning_array,
                                   'Equipment' => $equipment_array,
                                   'Other' => $other_array
                                  );
            
            foreach ($shopping_list as $category=>$item) {
                print "<h3>$category</h1><ul>\n";
                foreach ($item as $foo) {
                    print "<li>$foo</li>\n";
                }
                print "</ul><br />\n";
            }
        ?>
    </body>
</html>
