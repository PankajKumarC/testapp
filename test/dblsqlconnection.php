<?php

$server_nm = "solarmapinsightserver.database.windows.net";
$connection = array("Database"=>"TestNationDBForMariaDBMigration","UID"=>"solarmapinsightserveradmin","PWD"=>"NewUser123");
$conn = sqlsrv_connect( $server_nm, $connection );


if ( $conn ) {
	echo "200";
} else {
	echo "400";
	die( print_r(sqlsrv_errors(), true));
}

?>