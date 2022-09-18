<?php

     include 'conMySQLi.php';
     session_start();
	 
	if(($_SESSION['SEssioN'])==false){
	header("location:logOut.php");
    }
	 
     if($_SESSION['User_Prev']!="Super"){
		 echo "<script>alert('Not Admin'); </script>";
		 header("location:Dashboard.php");
	 }

?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="../Style/opt.css" />

	<title>Operator panel</title>
	
</head>

<body>

	<div id="Wrapper">


          <div class="searching">

                <form method="POST" action="#" autocomplete="off">

				<br/> <br/>
				
                <center>      
                    <div class="search_box">  
             	         
             	         <h4>Search: </h4>
             	         <input type="text" placeholder="EmployeeID" class="searching" name="searching">
             	         <input type="submit" value="Go" class="btn" name="btn">

             	    </div>
                </center>
				
				<br/>

                </form>

                              <center> 
							         <input type="submit" value="Create" onClick ="document.location.href='Profiles/CreateEmployee.php'" class="Create" name="Create">  
							         <input type="submit" onClick ="document.location.href='Dashboard.php'" value="Dashboard" class="Dashboard" name="Dashboard">
							  </center>
				
				<br/> <br/>

                <div class="show_res">

             	 <div class="">


                    <?php 

                     try{
                     	if(isset($_POST['btn'])){

                     		$ID = $_POST['searching'];

                     		$conN = OpenConN_caseRecords();

                     		$qRY = "select * from users where EmployeeID = '".$ID."' AND Privilege != 'Super'";
						    $RSLT = mysqli_query($conN,$qRY);
           
            			    if($dat = mysqli_fetch_assoc($RSLT)){ 

            			    	$_SESSION['EmpID'] = $ID;  ?>
            			    	
             	 	
             	 	 <div class="src_img">
             	 	 	<center>
                          <img src="Profiles/imgs/Employee/<?php echo $_SESSION['img']=$dat["Image"]; ?>">
                      </center>
             	 	 </div>

             	 	 <div class="src_name">
					 
					    <form method="POST" action="#">

                        <center>

             	 	 	  <h3> Name: <?php echo $dat["Name"]; ?> </h3>
             	 	 	     <div class="src_det">
             	 	 	  		 <h5> Designation: <?php echo $dat["Designation"]; ?> </h5>
             	 	 	         <h5> Post: <?php echo $dat["Post"]; ?> </h5>
             	 	 	         <h5> Office: <?php echo $dat["Office"]; ?> </h5>
             	 	 	         <h5> Email: <?php echo $dat["Mail"]; ?> </h5>
             	 	 	         <h5> Phone: <?php echo $dat["Contact"]; ?> </h5>
								 <h5 class="Role"> Current Role: <?php echo $_SESSION['Priv']=$dat['Privilege']; ?> </h5>								 
             	 	 	     </div>
							 
							 <div>
							 
							     <center>
							     <h5 class="prev_head"> Change Role to: </h5>
								 </center>
							     
							     <select name="Privilege" ID="Privilege">
								    <?php if($dat['Privilege'] == "Viewer"){ ?>
									 <option> Editor </option>
									 <?php } else if($dat['Privilege'] == "Editor"){ ?>
									<option> Viewer </option>
									<?php } else{ ?>
									<option> Viewer </option>
									<option> Editor </option>
									<?php } ?>
								 </select>
								 
								 
								 <center>
 								        <input type="submit" value="Update" class="Update" name="Update"> 
										<input type="submit" value="Remove" class="Remove" name="Remove"> 
								 </center>
								 
						</form>
								 
							 </div>

                        </center>

             	 	 </div>

             	 </div>


             	 	 <?php }else{
					       ?> <center> <h4> Record Not Found! </h4> </center>
					 <?php }
                     	}
                     }catch(Exception $e){

                     }

                ?>
				
				
				<?php 
				
				     if(isset($_POST['Update'])){
						 
						 $ID = $_SESSION['EmpID'];
						 
						 $power = $_POST['Privilege'];
						 
						 
						 $conN = OpenConN_caseRecords();
						 
						 $quRY = "UPDATE users SET Privilege = '".$power."' where EmployeeID = '".$ID."' AND EmployeeID != 1001";
						 
						 if(mysqli_query($conN,$quRY)){
							 
							 echo "Success!! This user is now '".$power."' changed from '".$_SESSION['Priv']."' where, ID is = ".$ID;
							 UNSET($_SESSION['Priv']);
							  
						 }else{
							 
							 echo "Got an error!!!";
						 }
						 
						 
						 
					 }	?>	
					 
					 
				<?php 

                     
                     if(isset($_POST['Remove'])){		

                         $ID = $_SESSION['EmpID'];					 
						 
						 $conN = OpenConN_caseRecords();
						 
						 $quRY = "DELETE FROM users WHERE EmployeeID = '".$ID."' AND EmployeeID != 1001";
						 
						 if(mysqli_query($conN,$quRY)){
							 
							 echo "Success!! This user is Removed! ID was = ".$ID;
							 						 
							 $file ="Profiles//imgs/Employee//".$_SESSION['img'];
							 UNSET($_SESSION['img']);
							 
							  if (!unlink($file)) {
			                     echo ("Error deleting image!!");
			                } else {
				   
			                }
							 
						 }else{
							 
							 echo "Got an error!!!";
						 }
						 
						 
						 
					 }	?>					 
				
             	 

             </div>

          </div>


	</div>
	

</body>
</html>
