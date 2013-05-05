<?php

define('DBHOST', 'localhost');
define('DBUSERNAME', 'learnphpuser');
define('DBPASSWORD', 'supersecret');
define('DBTABLE', 'myblog');


$dbc = FALSE;

function connectToDB() {
    // Connect and select:
    global $dbc;
    if ( $dbc = @mysql_connect(DBHOST, DBUSERNAME, DBPASSWORD) ) {
        return $dbc;
    }
    else { // Connection failure.
        print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
        return FALSE;
    }
}

function selectDBTable() {
    global $dbc;
    if ( @mysql_select_db(DBTABLE, $dbc) ) {
        return TRUE;
    }
    else {
        // Handle the error if the database couldn't be selected:
        print '<p style="color: red;">Could not select the database because:<br />' . mysql_error($dbc) . '.</p>';
        mysql_close($dbc);
        return FALSE;
    }
}

?>
