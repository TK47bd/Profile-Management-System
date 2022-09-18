

<?php

    function OpenConN_caseRecords(){
    define('MyHost','localhost');
	define('MyUser','root');
    define('MyPass','');
    define('MyDB','childcase'); 
	
	$dB = mysqli_connect(MyHost,MyUser,MyPass,MyDB);
	
	if(!$dB){
	    die("Database not set!!");
	}
	
	return $dB ;
	}
	

    function CloseConN($dB)
    {
      $dB -> close();
    }	   
	   

?>