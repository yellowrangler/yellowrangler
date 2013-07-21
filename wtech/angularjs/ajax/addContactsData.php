<?php
$HOMElocation = "Home";
$HOMElocation = "ipHome";

include ('../classes/class.Log.php');
include ('../classes/class.ErrorLog.php');
include ('../classes/class.AccessLog.php');

include ('../classes/class.DBinit.php');
include ('../classes/class.angDBinit.php');

// get the json data from request payload
$data = json_decode(file_get_contents('php://input'));

// validate the data
if ($data == null) die();

// echo "$data->name";


//
// init db object
//
$angulardb = new angDBinit();

//
// insert the contacts
//
$sql = "INSERT INTO angContactsTBL (name, address, city, state, zip, phone, email) VALUES ('$data->name','$data->addr','$data->city','$data->state','$data->zip','$data->phone','$data->email')";
if (!$sql_result = mysql_query($sql, $angulardb->DBconn))
{
   $log = new ErrorLog();
   $sqlerr = mysql_error();
   $log->writeLog("SQL error: $sqlerr - Error doing insert for contact data");
   $log->writeLog("SQL: $sql"); 
   die("db error getting data - $sqlerr:$sql");
}

?>