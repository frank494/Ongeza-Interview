

<?php
require_once("db_connection.php");

$deleteRecord=$_POST['record_id'];
$Query="DELETE FROM customer where customer_id='$deleteRecord'";
 $retval = mysql_query( $Query );
if(!$retval){
        die('Could not delete data: ' . mysql_error());
           
    }else {
         echo "Deleted data successfully\n";
    }
    ?> 