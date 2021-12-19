<?php
/*
 * Contains the basic application configuration information
 *
 */
//Database params
const DB_HOST = 'us-cdbr-east-05.cleardb.net';
const DB_USER = 'b30add903b29d2';
const DB_PASS = '5e3bc9db';
const DB_NAME = 'heroku_bd008af7b373fe4';

//GOOGLE MAPS API KEY

const KEY = 'AIzaSyA069kbOW0YfP9UdWNG-4jD9VnBl95lVuM';
//const KEY = 'AIzaSyA069kbOW0YfP9UdWNG-4jD9VnBl95lVu';
//APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//URLROOT
const URLROOT = 'https://ewastemasters.herokuapp.com/ewaste';

//SITENAME
const SITENAME = 'eWaste';


//Get Heroku ClearDB connection information
//$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//$cleardb_server = $cleardb_url["host"];
//$cleardb_username = $cleardb_url["user"];
//$cleardb_password = $cleardb_url["pass"];
//$cleardb_db = substr($cleardb_url["path"], 1);
//$active_group = 'default';
//$query_builder = TRUE;
// Connect to DB
//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
