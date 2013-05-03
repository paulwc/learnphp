<?php

session_start();

$userdbdir = "../../../userdb/";
$userdbfile = $userdbdir . "users.db";

function sanitizeUsername($u) {
    return htmlentities(trim($u));
}

function isUsernameAvailable($req_username) {
    global $userdbdir, $userdbfile;
    $existing_users = parseUserDBToObjectArray($userdbfile);
    if ( is_null($existing_users) ) {
        return TRUE;
    }
    
    $uname = sanitizeUsername($req_username);

    if ( !empty($existing_users) ) {
        // check all usernames
        foreach ($existing_users as $euser) {
            error_log("checking {$euser['username']} against $uname");
            if ( $uname == $euser['username'] ) {
                return false;
            }
        }

        // if we get to here, the username is available
        return true;
    }
    else {
        return false;
    }
}

function parseUserDBToObjectArray($file) {
    if ( file_exists($file) && is_writable($file) ) { // Open the file.
        // check usernames
        $data = preg_split('/[\s+]/', file_get_contents($file), NULL, PREG_SPLIT_NO_EMPTY);
        $count = 0;
        $users = array();
        
        if (empty($data)||$data=='') {
            return null;
        }
        
        while ( isset($data[$count]) ) {
            $username = $data[$count];
            $password = $data[$count + 1];
            $join_ts  = $data[$count + 2];
            error_log("from parseUser function, username: $username, password: $password, join_ts: $join_ts");
            
            $users[] = array('username' => $username,
                            'password' => $password,
                            'join_ts' => $join_ts,
                            );
            
            $count += 3;
        }
        return $users;
    }
    else {
        return null;
    }
}

function addUser($user, $pass) {
    global $userdbdir, $userdbfile;

    if ( file_exists($userdbfile) && is_writable($userdbfile) ) { // Open the file.
        // Create the data to be written:
        $join_time = time();
        $data = sanitizeUsername($user) . "\t" . md5(trim($pass)) . "\t" . $join_time . PHP_EOL;

        // Write the data:
        file_put_contents($userdbfile, $data, FILE_APPEND | LOCK_EX);

        return TRUE;
    }
    else {
        return FALSE;
    }
}

function isValidUser($u, $p) {
    global $userdbfile;
    if (empty($u)) {
        return false;
    }
    
    $u = sanitizeUsername($u);
    
    $existing_users = parseUserDBToObjectArray($userdbfile);
    foreach ($existing_users as $euser) {
        if ($euser['username'] == $u) {
            if ($euser['password'] == md5(trim($p))) {
                return TRUE;
            }
        }
    }
    
    return FALSE;
}

function isLoggedIn() {
    // are you logged in?
    if ( isset($_SESSION['username'], $_SESSION['loggedin']) ) {
        // flag variable
        return TRUE;
    }

    return false;
}

function loginUser($u) {
    if ( !empty($u) ) {
        $username = sanitizeUsername($u);
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = TRUE;
        return TRUE;
    }
    else {
        return FALSE;
    }
}

function logoutUser() {
    session_destroy();
    $_COOKIE = array();
}
?>