<?php 
	//LOAD COOKIE SCRIPT. THIS FILE CAN BE FOUND IN THE RESPOSITORY, AND MUST BE INCLUDED ON YOUR DOMAIN SERVER.
	include 'checkreturning.php';

	//FETCH SALES DATA FROM URL
	$receipt=$_GET['cbreceipt'];
	$item=$_GET['item'];
	$affiliate=$_GET['cbaffi'];
	
	    if ($item==''){
        $amount='null';
        $code='null';
    } else if ($item==1){
        $amount=000;
        $code='NAME';
    }
?>