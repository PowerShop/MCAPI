<?php
	require __DIR__ . '/src/MinecraftQuery.php';
	require __DIR__ . '/src/MinecraftQueryException.php';
	
	use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;
	
	$Query = new MinecraftQuery( );
	
	$host = $_GET['host'];
	$port = $_GET['port'];
	try
	{
		$Query->Connect( $host, $port);
		
		print_r( $Query->GetInfo( ) );
		echo "<br />";
		print_r( $Query->GetPlayers( ));
		echo "<br />";
	}
	catch( MinecraftQueryException $e )
	{
		echo $e->getMessage( );
	}
?>