<?php
$HOMElocation = "Home";
$HOMElocation = "ipHome";

include ('../classes/class.Log.php');
include ('../classes/class.ErrorLog.php');
include ('../classes/class.AccessLog.php');

include ('../classes/class.DBinit.php');
include ('../classes/class.angDBinit.php');

//
// init db object
//
$angulardb = new angDBinit();

//
// get the contacts
//
$sql = "SELECT * FROM angContactsTBL";
if (!$sql_result = mysql_query($sql, $angulardb->DBconn))
{
   $log = new ErrorLog();
   $sqlerr = mysql_error();
   $log->writeLog("SQL error: $sqlerr - Error doing select for contact data");
   $log->writeLog("SQL: $sql"); 
   die("db error getting data - $sqlerr:$sql");
}

$i = 0;
while($row = mysql_fetch_array($sql_result,MYSQL_ASSOC)) 
{
  $contacts[$i]['name']=$row[name];
  $contacts[$i]['addr']=$row[addresste];
  $contacts[$i]['city']=$row[city];
  $contacts[$i]['state']=$row[state]; 
  $contacts[$i]['zip']=$row[zip];
  $contacts[$i]['phone']=$row[phone];
  $contacts[$i]['email']=$row[email];

  $i++;
}   

echo json_encode($contacts); 

// $contacts[0]['name']='Tarry Cutler';
// $contacts[0]['addr']='5 Masconomo St';
// $contacts[0]['city']='Manchester';
// $contacts[0]['state']='MA'; 
// $contacts[0]['zip']='01944';
// $contacts[0]['phone']='781-342-0204';
// $contacts[0]['email']='tarrant.cutler@gmail.com';

// $contacts[1]['name']='Laura Archuleta';
// $contacts[1]['addr']='5 Smith St';
// $contacts[1]['city']='Boxford';
// $contacts[1]['state']='MA'; 
// $contacts[1]['zip']='01929';
// $contacts[1]['phone']='781-222-0204';
// $contacts[1]['email']='loricarchuleta@gmail.com';

// var $contacts = [
//         { name: 'Tarry Cutler', addr: '5 Masconomo St', city: 'Manchester', state: 'MA', zip: '01944', phone: '781-342-0204', email: 'tarrant.cutler@gmail.com' },
//         { name: 'Bob Jones', addr: '5 Main St', city: 'Manchester', state: 'NH', zip: '01944', phone: '781-342-0204', email: 'bob.jones@gmail.com' },
//         { name: 'Fifi Doley', addr: '52 Cow St', city: 'Denver', state: 'CO', zip: '01944', phone: '781-342-0204', email: 'fifi.doley@gmail.com' },
//         { name: 'Linda Smith', addr: '5 Carson St', city: 'Beverly', state: 'NH', zip: '01944', phone: '781-342-0204', email: 'bob.jones@gmail.com' },        
//         { name: 'Lori Archuleta', addr: '10 Edmands St', city: 'Boxford', state: 'MA', zip: '01222', phone: '978-342-0204', email: 'loricarchuleta@gmail.com' }
//     ];
?>