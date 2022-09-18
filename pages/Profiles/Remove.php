
<?php session_start(); 

if(($_SESSION['SEssioN'])==false){
	header("location:../logOut.php");
}

?>

<html>

<head>
  
     <link rel="stylesheet" href="CSS/remove.css" type="text/css" media="screen" />

     <title> Delete Profile </title>
</head>

<body>	 

<div id="wrapper">

<form method="POST" action="#" autocomplete="off">

<table>
        <tr>
	      <th> <p>Remove: </p> </th>
		  <td> <input type="text" required placeholder="CaseID" name="ID" class="ID"> </td>
	  	</tr>

		<tr>		
        <input type="Submit" value="Submit" name="Submit" class="Submit">	
</form>
		
		<input type="Submit" onClick="window.location='../Dashboard.php';" value="Dashboard" name="DB" class="DB">
		</tr>
</table>	

<div>	


<?php
    

     if(isset($_POST['ID'])){
		 
		 try{
			 
			 include '../conMySQLi.php';

             $conN = OpenConN_caseRecords();
			 
			 $qRY = "DELETE FROM casetable WHERE CaseID = '".$_POST['ID']."' ";
			 $qR = "SELECT imgLoc FROM casetable WHERE CaseID = '".$_POST['ID']."' ";
			 
			 $RSLT = mysqli_query($conN,$qR);
			 if($dat = mysqli_fetch_assoc($RSLT)){
				 
				  $file ="imgs\\".$dat['imgLoc'];
			 
			 if (mysqli_query($conN, $qRY)) {
                  echo "Record deleted successfully.";
             } else {
                  echo "Error deleting record!!";
             }
			 
			 //Delete image!
			 
			 if (!unlink($file)) {
			      echo ("Error deleting image!!");
			 } else {
				   
			 }
			 
			 }else{
				  echo "Record not found!!";
			 }	 

             mysqli_close($conN);
			 
		 }catch(Exception $e){
		 
		 }
	 }

?>


</body>
</html>