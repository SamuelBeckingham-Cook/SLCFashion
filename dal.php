<?php
/**
 * Created by PhpStorm.
 * User: Sam.Beckingham-Cook
 * Date: 18/05/2016
 * Time: 14:14
 */

$dbhost = '10.169.0.93';
$dbname = 'scsambcu_db';
$dbuser = 'scsambcu_admin';
$dbpass = 'catcatmeowmeow';
$homeURL = 'http://sc.sambc.uk';

$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

/**
 * @param PDO $db
 * @return mixed
 */
function getCollections($db) {

    $collections = $db->query('SELECT * FROM collections');

    foreach ($collections as $collection) {
        include('collection.php');
    }

}

function getCollectionItems($db, $id) {

    $items = $db->query("SELECT * FROM collectionItems WHERE CollectionID = $id");
    
    return $items;
}

function createImage($path) {

    return $GLOBALS['homeURL'].$path;
}