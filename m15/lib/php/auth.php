<?
function makeAuth() {
    return [
         "localhost", //database host location name
         "quwu15_store",  //username database eg:miowebte_store
         "Liuxue20...",  //password database
         "quwu15_store"  //database name eg:miowebte_store

    ];

}

function makePDOAuth() {
	return [
          "mysql:host=localhost;dbname=quwu15_store",
          "quwu15_store",
          "Liuxue20...",
          [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
	];
}

?>