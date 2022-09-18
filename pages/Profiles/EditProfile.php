<?php session_start(); 

    if(($_SESSION['SEssioN'])==false){
	header("location:../logOut.php");
    }

    if(isset($_GET["data"]))
    {
        $DaTa = $_GET["data"];		
	} 

?>

<html>

<head>

       <meta charset="UTF-8">

       <link rel="stylesheet" type="text/css" href="CSS/Editprofile.css" />
	   
	   <title> Edit.<?php echo $DaTa; ?>.info </title>

</head>

<body>

     <div id="Wrapper">
	
	    <div class="Editing">
		
		
		    <?php 

                     try{
                     	
                     		include '../conMySQLi.php';

                     		$ID = $DaTa;

                     		$conN = OpenConN_caseRecords();

                     		$qRY = "select * from casetable where CaseID = '".$ID."'";
						    $RSLT = mysqli_query($conN,$qRY);
           
            			    if($dat = mysqli_fetch_assoc($RSLT)){ ?>
		
		
		
		     <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			 
			 <table>
			 		       	              
            			<tr> 
            				<th> <p> CaseID     : </p> </th> 
            				<td> <input disabled value="<?php echo $dat["CaseID"]; ?>" type="text" name="CaseID" id="CaseID" placeholder="CaseID" required> </td>         
            				<th> <p> &emsp;&emsp;Learning : </p> </th> 
            				<td> <input value="<?php echo $dat["LearningSector"]; ?>" type="text" name="Learning" placeholder="Training Sector" id="Learning" required> </td> 
            			</tr>

			            <tr> 
			            	<th> <p> Name       : </p> </th> 
			            	<td> <input value="<?php echo $dat["Name"]; ?>" type="text" name="Name" id="Name" placeholder="Name" required> </td>                        
			            	<th> <p> &emsp;&emsp;Home : </p> </th> 
			            	<td> <input value="<?php echo $dat["Home"]; ?>" type="text" name="Home" id="Home" placeholder="Hometown" required> </td> 
			            </tr>

			            <tr> 
			            	<th> <p> Shelter    : </p> </th> 
			            	<td> <input value="<?php echo $dat["Shelter"]; ?>" type="text" name="Shelter" placeholder="Shelter" id="Shelter" required> </td>               
			            	<th> <p> &emsp;&emsp;Gender : </p> </th> 
			            	<td> <input value="<?php echo $dat["Gender"]; ?>" type="text" name="Gender" placeholder="Gender" id="Gender" required> </td> 
			            </tr>

			            <tr> 
			            	<th> <p> Age        : </p> </th> 
			            	<td> <input value="<?php echo $dat["Age"]; ?>" type="text" name="Age" id="Age" placeholder="Age" required> </td>                           
			            	<th> <p> &emsp;&emsp;Religion : </p> </th> 
			            	<td> <input value="<?php echo $dat["Religion"]; ?>" type="text" name="Religion" placeholder="Religion" id="Religion" required> </td> 
			            </tr>

			            <tr> 
			            	<th> <p> Class      : </p> </th> 
			            	<td> <input value="<?php echo $dat["Class"]; ?>" type="text" name="Class" id="Class" placeholder="Class" required> </td>                     
			            	<th> <p> &emsp;&emsp;Nationality : </p> </th> 
			            	<td> <input value="<?php echo $dat["Nationality"]; ?>" type="text" name="Nation" id="Nation" placeholder="Nationality" required> </td> 
			            </tr>

			            <tr> 
			            	<th> <p> Institute  : </p> </th> 
			            	<td> <input value="<?php echo $dat["Institute"]; ?>" type="text" name="Institute" placeholder="School" id="Institute" required> </td>         
			            	<th> <p> &emsp;&emsp;Occupation(prev.) : </p> </th> 
			            	<td> <input value="<?php echo $dat["Occupation"]; ?>" type="text" name="Occup" placeholder="if have or had" id="Occup" required> </td> 
			            </tr>

			            <tr> 
			            	<th> <p> Birth Date : </p> </th> 
			            	<td> <input value="<?php echo $dat["BirthDate"]; ?>" type="text" name="bday" placeholder="Birthdate" id="bday" required> </td>                  
			                <th> <p> &emsp;&emsp;Address : </p> </th> 
			                <td> <input value="<?php echo $dat["CurrentAddress"]; ?>" type="text" name="Add" placeholder="Address to contact" id="Add" required> </td> 
			            </tr>

						<tr> 
							<th> <p> B. Certif. : </p> </th> 
							<td> <input value="<?php echo $dat["isBirthCertificate"]; ?>" type="text" name="BCert" placeholder="Yes or No" id="BCert" required> </td>        
							<th> <p> &emsp;&emsp;Disablity : </p> </th> 
							<td> <input value="<?php echo $dat["isDisableCertificate"]; ?>" type="text" name="Diabl" placeholder="Yes or No" id="Diabl" required> </td> 
						</tr>

						<tr> 
							<th> <p> B. Reg.    : </p> </th> 
							<td> <input value="<?php echo $dat["BirthCertificaion"]; ?>" type="text" name="BReg" id="BReg" placeholder="0 if not" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td>           
							<th> <p> &emsp;&emsp;Disability Reg. : </p> </th> 
							<td> <input value="<?php echo $dat["DisabilityCertificaion"]; ?>" type="text" name="DReg" id="DReg" placeholder="0 if not" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
						</tr>

						<tr> 
							<th> <p> Guardian   : </p> </th> 
							<td> <input value="<?php echo $dat["Guardian"]; ?>" type="text" name="Guardian" id="Guardian" placeholder="Guardian" required> </td>            
							<th> <p> &emsp;&emsp;Contact : </p> </th> 
							<td> <input value="<?php echo $dat["ContactNo"]; ?>" type="text" name="Contact" id="Contact" placeholder="phone no.(0 for no)" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
						</tr>

						<tr> 
							<th> <p> Father     : </p> </th> 
							<td> <input value="<?php echo $dat["Father"]; ?>" type="text" name="Father" placeholder="Father" id="Father" required> </td>                  
							<th> <p> &emsp;&emsp;Mother : </p> </th> 
							<td> <input value="<?php echo $dat["Mother"]; ?>" type="text" name="Mother" placeholder="Mother" id="Mother" required> </td> 
						</tr>

						<tr> 
							<th> <p> Refered by : </p> </th> 
							<td> <input value="<?php echo $dat["ReferedBy"]; ?>" type="text" name="Ref" placeholder="Reference(or none)" id="Ref" required> </td>                     
							<th> <p> &emsp;&emsp;Data Collector : </p> </th> 
							<td> <input value="<?php echo $dat["DataCollector"]; ?>" type="text" name="DataColl" placeholder="Data collector" id="DataColl" required> </td> 
						</tr>

                        <tr> 
                        	<th> <p> Birth Place : </p> </th> 
                        	<td> <input value="<?php echo $dat["BirthPlace"]; ?>" type="text" name="BPlace" placeholder="Birth place" id="BPlace" required> </td>	           
                        	<th> <p> &emsp;&emsp;Little Brief : </p> </th> 
                        	<td> <input value="<?php echo $dat["Details"]; ?>" type="text" name="Brief" id="Brief" placeholder="Little details" required> </td> 
                        </tr>	 
			 
			 </table>
			 
			<?php		    }
					 }catch(Exception $e){

					 }finally{

						}
			?>

			 
			            <br/>
                     <center>
			              <input type="submit" class="btn" name="Update" value="Update">
			         </center>
			 
			 </form>
			 
			 <br/>
			 
			 
             <form action="#" method="post" enctype="multipart/form-data">			 
			      <h5> Upload an image(Optional for update): </h5>
                  <input type="file" name="uploadImage" accept="image/png, .jpeg, .jpg, image/gif" style="background:#3d9451;" >
				  		<br/>
				  <input type="submit" class="btn" name="Upload" value="Upload">
				  
			 </form>
			 <input type="submit" onclick="window.location='../Dashboard.php';" class="btn" value="Dashboard">
			 
		
		</div>
	
	 </div>
	 
	 
<!-- For image uploading file -->	 
<?php 

if(isset($_POST['Upload'])){ 

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  if (is_uploaded_file($_FILES['uploadImage']['tmp_name'])) 
  { 
  	if(empty($_FILES['uploadImage']['name']))
  	{
  		echo " File name is empty! ";
  		exit;
  	}

  	$upload_file_name = $_FILES['uploadImage']['name'];
  	if(strlen ($upload_file_name)>100)
  	{
  		echo " too long file name ";
  		exit;
  	}

	$temp = explode(".", $_FILES["uploadImage"]["name"]);
    $newfilename = $DaTa . '.' . end($temp);
	$upload_file_name = $newfilename;

  	if ($_FILES['uploadImage']['size'] > 999900000) 
  	{
		echo " too big file ";
  		exit;        
    }

    $dest=__DIR__.'/imgs/'.$upload_file_name;
    if (move_uploaded_file($_FILES['uploadImage']['tmp_name'], $dest)) 
    {
    	echo 'Picture Has Been Uploaded !';
    }
  }
}
}

?>


<!-- Update Database -->


<?php 


                     try{

                     	if(isset($_POST['Update'])){ 
                     		

                     		   $qRY = "UPDATE casetable SET Name = '".$_POST['Name']."', Age = '".$_POST['Age']."', Class = '".$_POST['Class']."', Institute = '".$_POST['Institute']."', Shelter = '".$_POST['Shelter']."', Father = '".$_POST['Father']."', Mother = '".$_POST['Mother']."', Guardian = '".$_POST['Guardian']."', ContactNo = '".$_POST['Contact']."', Home = '".$_POST['Home']."', BirthDate = '".$_POST['bday']."', isBirthCertificate = '".$_POST['BCert']."', BirthCertificaion = '".$_POST['BReg']."', ReferedBy = '".$_POST['Ref']."', DataCollector = '".$_POST['DataColl']."', Details = '".$_POST['Brief']."', Gender = '".$_POST['Gender']."', Occupation = '".$_POST['Occup']."', CurrentAddress = '".$_POST['Add']."', Nationality = '".$_POST['Nation']."', Religion = '".$_POST['Religion']."', LearningSector = '".$_POST['Learning']."', isDisableCertificate = '".$_POST['Diabl']."', DisabilityCertificaion = '".$_POST['DReg']."', BirthPlace = '".$_POST['BPlace']."' WHERE CaseID = '$DaTa'";
           
            			    if(mysqli_query($conN,$qRY)){

                                 echo "Record updated successfully";                              
                                 mysqli_close($conN);
                                 echo "<script> location='../dashboard.php'; </script>";

                            }else{

   								 echo "Error updating record!! ";
   								 mysqli_close($conN);
							
							   }

							}					

						}catch(Exception $r){

						}
						finally{
													
						}

?>

</body>
</html>