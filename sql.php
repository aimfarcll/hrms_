<?php
$serverName = "103.220.6.29, 10433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"CLL HR", "UID"=>"dbadmin", "PWD"=>"P@ssw0rd", "TrustServerCertificate"=>"true");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     //echo "Connection established.<br />";
     $tsql= "SELECT * FROM [CLL HR].[dbo].[Holiday]";
     $getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table Holidays <br><br>"  .PHP_EOL);

if ($getResults == FALSE)
     echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['subclaim_id'] . " " . $row['claim_id'] . " " . $row['subclaim_category'] ."<br>". PHP_EOL);
}
sqlsrv_free_stmt($getResults);

}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>