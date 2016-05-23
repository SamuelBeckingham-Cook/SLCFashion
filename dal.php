<?php
/**
 * Created by PhpStorm.
 * User: Sam.Beckingham-Cook
 * Date: 18/05/2016
 * Time: 14:14
 */

$dbhost = '';
$dbname = '';
$dbuser = '';
$dbpass = '';
$homeURL = '';

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