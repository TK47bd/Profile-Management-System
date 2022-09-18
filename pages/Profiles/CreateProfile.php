<?php session_start(); 

if(($_SESSION['SEssioN'])==false){
	header("location:../logOut.php");
}

?>


<html>

<head>

       <meta charset="UTF-8">

       <link rel="stylesheet" type="text/css" href="CSS/Editprofile.css" />
	   
	   <title> Create New Record </title>

</head>

<body>

     <div id="Wrapper">
	
	    <div class="Creating">
			
		
		
		     <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			 
			 <table>
			 		       	              
            			<tr> 
            				<th> <p> CaseID     : </p> </th> 
            				<td> <input type="text" name="CaseID" id="CaseID" placeholder="New CaseID" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
            				<th> <p> &emsp;&emsp;Learning : </p> </th>
            				<td> <input type="text" name="Learning" placeholder="Training Sector" id="Learning" required> </td> 
            			</tr>

			            <tr>
			                <th> <p> Name       : </p> </th> 
			                <td> <input type="text" name="Name" id="Name" placeholder="Name" required> </td>
			                <th> <p> &emsp;&emsp;Home : </p> </th> 
			                <td> <input type="text" name="Home" id="Home" placeholder="Hometown" required> </td>
			             </tr>

			            <tr> 
			            	<th> <p> Shelter    : </p> </th>
			            	<td> <input type="text" name="Shelter" id="Shelter" placeholder="Shelter" required> </td>
			            	<th> <p> &emsp;&emsp;Gender : </p> </th>
			                <td> <input type="text" name="Gender" id="Gender" placeholder="Gender" required> </td>
			            </tr>

			            <tr>
			                <th> <p> Age        : </p> </th>
			                <td> <input type="text" name="Age" id="Age" placeholder="Age" required> </td>
			                <th> <p> &emsp;&emsp;Religion : </p> </th>
			                <td> <input type="text" name="Religion" id="Religion" placeholder="Religion" required> </td>
			            </tr>

			            <tr>
			                <th> <p> Class      : </p> </th> 
			                <td> <input type="text" name="Class" id="Class" placeholder="Class" required> </td>
			                <th> <p> &emsp;&emsp;Nationality : </p> </th>
			                <td> <input type="text" name="Nation" id="Nation" placeholder="Nationality" required> </td> 
			            </tr>

			            <tr> 
			            	<th> <p> Institute  : </p> </th>
			                <td> <input type="text" name="Institute" id="Institute" placeholder="School" required> </td>
			                <th> <p> &emsp;&emsp;Occupation(prev.) : </p> </th>
			                <td> <input type="text" name="Occup" id="Occup" placeholder="if have or had" required> </td>
			            </tr>

			            <tr>
			                <th> <p> Birth Date : </p> </th> 
			                <td> <input type="date" name="bday" id="bday" placeholder="Birthdate" required> </td> 
			                <th> <p> &emsp;&emsp;Address : </p> </th> 
			                <td> <input type="text" name="Add" id="Add" placeholder="Address to contact" required> </td>
			            </tr>

						<tr> 
							<th> <p> B. Certif. : </p> </th> 
							<td> <input type="text" name="BCert" id="BCert" placeholder="Yes or No" required> </td> 
							<th> <p> &emsp;&emsp;Disablity : </p> </th> 
							<td> <input type="text" name="Diabl" id="Diabl" placeholder="Yes or No" required> </td> 
						</tr>

						<tr> 
							<th> <p> B. Reg.    : </p> </th> 
							<td> <input type="text" name="BReg" id="BReg" placeholder="0 if not" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
							<th> <p> &emsp;&emsp;Disability Reg. : </p> </th> 
							<td> <input type="text" name="DReg" id="DReg" placeholder="0 if not" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
						</tr>

						<tr> 
							<th> <p> Guardian   : </p> </th> 
							<td> <input type="text" name="Guardian" id="Guardian" placeholder="Guardian" required> </td> 
							<th> <p> &emsp;&emsp;Contact : </p> </th> 
							<td> <input type="text" name="Contact" id="Contact" placeholder="phone no.(0 for no)" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
						</tr>

						<tr> 
							<th> <p> Father     : </p> </th> 
							<td> <input type="text" name="Father" id="Father" placeholder="Father" required> </td> 
							<th> <p> &emsp;&emsp;Mother : </p> </th> 
							<td> <input type="text" name="Mother" id="Mother" placeholder="Mother" required> </td> 
						</tr>

						<tr> 
							<th> <p> Refered by : </p> </th> 
							<td> <input type="text" name="Ref" id="Ref" placeholder="Refered by" required> </td> 
							<th> <p> &emsp;&emsp;Data Collector : </p> </th> 
							<td> <input type="text" name="DataColl" id="DataColl" placeholder="Data Collector" required> </td> 
						</tr>

                        <tr> 
                        	<th> <p> Birth Place : </p> </th> 
                        	<td> <input type="text" name="BPlace" id="BPlace" placeholder="City of Birth" required> </td> 
                        	<th> <p> &emsp;&emsp;Little Brief : </p> </th> 
                        	<td> <input type="text" name="Brief" id="Brief" placeholder="Details of the child..." required> </td> 
                        </tr>	

                        <tr>
                           <th colspan="2"><br/><h5> *Upload an image: </h5>
                           <input type="file" name="uploadImage" accept="image/png, .jpeg, .jpg, image/gif" style="background:#3d9451;" required> </th>
                       </tr>

			 
			 </table>

			 
			            <br/>
                     <center>
			              <input type="submit" class="btn" name="Create" value="Create">
			         </center>
			 
			 </form>
			 

			 <input type="submit" onclick="window.location='../Dashboard.php';" class="btn" value="Dashboard">
			 
		
		</div>
	
	 </div>
	 
	 
<!-- For image uploading file -->	 
<?php 
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
    $newfilename = $_POST['CaseID'] . '.' . end($temp);
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

?>




<!-- Create Database -->


<?php 


                     try{

                     	if(isset($_POST['Create'])){ 

                     	
                     		include '../conMySQLi.php';


                     		$conN = OpenConN_caseRecords();

                     		$qRY = "INSERT INTO casetable(CaseID, Name, Age, Class, Institute, Shelter, Father, Mother, Guardian, ContactNo, Home, BirthDate, isBirthCertificate, BirthCertificaion, ReferedBy, DataCollector, Details, Gender, Occupation, CurrentAddress, Nationality, Religion, isDisableCertificate, DisabilityCertificaion, LearningSector, BirthPlace, imgLoc) VALUES('".$_POST['CaseID']."', '".$_POST['Name']."', '".$_POST['Age']."', '".$_POST['Class']."', '".$_POST['Institute']."', '".$_POST['Shelter']."', '".$_POST['Father']."', '".$_POST['Mother']."', '".$_POST['Guardian']."', '".$_POST['Contact']."', '".$_POST['Home']."', '".$_POST['bday']."', '".$_POST['BCert']."', '".$_POST['BReg']."', '".$_POST['Ref']."', '".$_POST['DataColl']."', '".$_POST['Brief']."', '".$_POST['Gender']."', '".$_POST['Occup']."', '".$_POST['Add']."', '".$_POST['Nation']."', '".$_POST['Religion']."', '".$_POST['Diabl']."', '".$_POST['DReg']."', '".$_POST['Learning']."', '".$_POST['BPlace']."', '$upload_file_name')";

           
            			    if(mysqli_query($conN,$qRY)){

                                 echo "Record Added Successfully";                              
                                 mysqli_close($conN);

                            }else{

   								 echo "Error Creating record!!, recheck all data or contact developer! ";
   								 mysqli_close($conN);
							
							   }

							  }											

						}catch(Exception $r){

						}

?>


</body>
</html>