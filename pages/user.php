<?php 

    session_start(); 

    if(($_SESSION['SEssioN'])==false){
		header("location:logOut.php");
	}

    if(isset($_POST["ID"])){

    	include 'conMySQLi.php';
    	$conN = OpenConN_caseRecords();
        $DaTa = mysqli_real_escape_string($conN, $_POST["ID"]);		 

?>


<html>

<head>

       <meta charset="UTF-8">

       <link rel="stylesheet" type="text/css" href="Profiles/CSS/profile.css" />
	   
	   <title> Admin info </title>

</head>

<body>


        <div id="Wrapper">
		
		
		   <div class="title_div">
		   
		        <h2> Info: </h2>
		   
		   </div>
		   
		   

           <div class="show_res">

             	 <div class="">


                    <?php 

                     try{
                     		

                     		$ID = $DaTa;                           

                     		$qRY = "select * from users where EmployeeID = '".$ID."'";
						    $RSLT = mysqli_query($conN,$qRY);
           
            			    if($dat = mysqli_fetch_assoc($RSLT)){ ?>
            			 
           					 <div class="src_name">
             	 	 	         <h3> Name: <?php echo $dat["Name"]; ?> </h3>
				             </div>	
							 
             	 	
             	 	         <div class="src_img">
                                <a href="Profiles/imgs/Employee/<?php echo $dat['Image']; ?>" target="_blank">
                                    <img src="Profiles/imgs/Employee/<?php echo $dat['Image']; ?>">
                                </a>
             	         	 </div>

             	 	   
             	 	 	     <div class="src_det_first">
             	 	 	     	<form method="post">
             	 	 	     	 <p>Change Official Details: </p>
             	 	 	  		 <input type="text" name="nwPost" value="<?php echo $dat['Post']; ?>" <?php if($dat['Privilege'] == 'Super'){echo 'disabled';} ?> required> <br/>
             	 	 	         <input type="text" name="nwDesig" value="<?php echo $dat['Designation']; ?>" <?php if($dat['Privilege'] == 'Super'){echo 'disabled';} ?> required> <br/>
             	 	 	         <input type="text" name="nwMail" value="<?php echo $dat['Mail']; ?>" <?php if($dat['Privilege'] == 'Super'){echo 'disabled';} ?> required> <br/>       
             	 	 	     </div>
							 
							 <div class="other_src_det">
							 	 <p>Change Contacts: </p>
             	 	 	         <input type="text" name="nwContact" value="<?php echo $dat['Contact']; ?>" <?php if($dat['Privilege'] == 'Super'){echo 'disabled';} ?> required> <br/>
             	 	 	         <input type="text" placeholder="If you have any extra" name="nwExContact" value="<?php echo $dat['ExtraNo']; ?>" <?php if($dat['Privilege'] == 'Super'){echo 'disabled';} ?>> <br/>
             	 	 	     </div>
			 						 
             	</div>
				 
 					 <input type="hidden" name="ID" value="<?php echo $ID; ?>">

             	 	 <div class="src_brf">
						  
						  <div class="btns">
						  	 <input type="submit" name="Update" class="btn_effect" value="Update">
							 <input type="submit" name="DB" class="btn_effect" value="Dashboard">				 
			              </div>

			              	</form>

			              	<?php
			              		if(isset($_POST['DB'])){

			              			echo "
			              			<script>			              		
			              				window.location='dashboard.php';
			              			</script>
			              			";
			              	}
			              	?>

			              	<center>
			              	<form method="post">
	             	 	 		<div class="other_src_det">
								 	 <p>Change Password: </p>
	             	 	 	         <input type="password" placeholder="Enter new password" name="nwPass" <?php if($dat['Privilege'] == 'Super'){echo 'disabled';} ?> required> <br/>  
	             	 	 	         <input type="hidden" name="ID" value="<?php echo $ID; ?>">	             	 	 	         
	             	 	 	     </div>

	             	 	 	     <input type="submit" name="changePass" class="btn_effect" value="Change">
             	 	 	 	</form>
             	 	 	 	</center>

             	 	 </div>

             	 	 <?php 
                     	}
                     }catch(Exception $e){

                     }

                ?>        	 
				 	 

             </div>
			 

		</div>  


		<?php 

             	if(isset($_POST['changePass'])){

             	 	$Pass = md5(mysqli_real_escape_string($conN, $_POST['nwPass']));
             	 	$EmpID = $_POST['ID'];

             	 	$str = "UPDATE users SET Password = '$Pass' WHERE EmployeeID = '$EmpID'";

             	 	if(mysqli_query($conN, $str)){
             	 	 	echo "<script> alert('Password Updated!!'); location='logOut.php'; </script>";
             	 	}

             	}

             	if(isset($_POST['Update'])){

             	 	$EmpID = $_POST['ID'];
             	 	$str = "UPDATE users SET Designation = '".$_POST['nwDesig']."', Post = '".$_POST['nwPost']."', Mail = '".$_POST['nwMail']."', Contact = '".$_POST['nwContact']."', ExtraNo = '".$_POST['nwExContact']."' WHERE EmployeeID = '$EmpID'";
             	 	
             	 	
             	 	if(mysqli_query($conN, $str)){
             	 	 	echo "<script> alert('Password Updated!!'); location='dashboard.php'; </script>";
             	 	}

             	}

        ?>
	
		  

</body>
</html>

<?php 

	}else{
		header("location: dashboard.php");
	} 

?>



