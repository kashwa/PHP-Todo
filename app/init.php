<?php
/**
 * This is gonna be everything i need to init an app,
 * This will be [Shared Across Files].
 * SESSION, Connect to DB, ...
 */
#
# This will allow us to store variables to GLOBAL $_SESSION.
#
session_start();
$_SESSION['user_id'] = 1; // Faking Login operation.

$db = new PDO('mysql:host=localhost;dbname=todo', 'root', 'admin');

if (!isset($_SESSION['user_id'])) {
    die('You are not Authenticated !');
}
