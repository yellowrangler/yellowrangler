<?php
$HOMElocation = "Home";
$HOMElocation = "ipHome";

include ('../classes/class.Log.php');
include ('../classes/class.ErrorLog.php');
include ('../classes/class.AccessLog.php');

include ('../classes/class.DBinit.php');
include ('../classes/class.angDBinit.php');

// get the json data from request payload
$data = file_get_contents('php://input');

// validate the data
if ($data == null) die();

//
// init db object
//
$angulardb = new angDBinit();

//
// insert the contacts
//
$sql = "DELETE FROM angContactsTBL WHERE name = '$data'";
if (!$sql_result = mysql_query($sql, $angulardb->DBconn))
{
   $log = new ErrorLog();
   $sqlerr = mysql_error();
   $log->writeLog("SQL error: $sqlerr - Error doing insert for contact data");
   $log->writeLog("SQL: $sql"); 
   die("db error getting data - $sqlerr:$sql");
}

?>