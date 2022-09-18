<?php session_start(); 

if(($_SESSION['SEssioN'])==false){
	header("location:../logOut.php");
}

?>


<html>

<head>

       <meta charset="UTF-8">

       <link rel="stylesheet" type="text/css" href="CSS/CreateRole.css" />
	   
	   <title> Create Role </title>

</head>

<body>

     <div id="Wrapper">
	
	    <div class="Creating">
			
		
		
		     <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			 
			 <br/><br/><br/>
			 
			 <table>
			 		       	              
            			<tr> 
            				<th> <p> EmployeeID : </p> </th> 
            				<td> <input type="text" name="EmployeeID" id="EmployeeID" placeholder="New EmployeeID" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
            				<th> <p> &emsp;&emsp;Designation: </p> </th>
            				<td> <input type="text" name="Designation" placeholder="Designation" id="Designation" required> </td> 
            			</tr>

			            <tr>
			                <th> <p> Name : </p> </th> 
			                <td> <input type="text" name="Name" id="Name" placeholder="Name" required> </td>
			                <th> <p> &emsp;&emsp;Post : </p> </th> 
			                <td> <input type="text" name="Post" id="Post" placeholder="Post" required> </td>
			             </tr>

			            <tr> 
			            	<th> <p> Office : </p> </th>
			            	<td> <input type="text" name="Office" id="Office" placeholder="Workplace" required> </td>
			            	<th> <p> &emsp;&emsp;Email : </p> </th>
			                <td> <input type="Email" name="Email" id="Email" placeholder="Email" required> </td>
			            </tr>

                        <tr> 
                        	<th> <p> Phone: </p> </th> 
                        	<td> <input type="text" name="Phone" id="Phone" placeholder="Phone"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required> </td> 
                        	<th> <p> &emsp;&emsp;Other No. : </p> </th> 
                        	<td> <input type="text" name="Phone2" id="Phone2" placeholder="(Optional)"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" > </td> 
                        </tr>	
						
						<tr> 
			            	<th> <p> Password : </p> </th>
			            	<td> <input type="Password" name="Password" id="Password" placeholder="Password" required> </td>
						</tr>
						
						<tr>
						    <th> <p> Role : </p> </th>
							<td> <select name="Privilege" ID="Privilege">
								      <option> Editor </option>
									  <option> Viewer </option>
								 </select>
							</td>	 
						<tr>

                        <tr>
                           <th colspan="2"><br/><h5> *Upload an image: </h5>
                           <input type="file" name="uploadImage" accept="image/png, .jpeg, .jpg, image/gif" style="background:#3d9451;" required> </th>
                       </tr>

			 
			 </table>

			 
			            <br/>
                     <center>
			              <input type="submit" class="btn" name="Add" value="Add">
			         </center>
			 
			 </form>
			 

			 <input type="submit" onclick="window.location='../Dashboard.php';" class="btn" value="Dashboard">
			 
		
		</div>
	
	 </div>
	 
	  
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
    $newfilename = $_POST['EmployeeID'] . '.' . end($temp);
	$upload_file_name = $newfilename;

  	if ($_FILES['uploadImage']['size'] > 999900000) 
  	{
		echo " too big file ";
  		exit;        
    }

    //Save the file
    $dest=__DIR__.'/imgs/Employee/'.$upload_file_name;
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

                     	if(isset($_POST['Add'])){ 

                     	
                     		include '../conMySQLi.php';


                     		$conN = OpenConN_caseRecords();

                     		$qRY = "INSERT INTO users(srl, Name, EmployeeID, Designation, Post, Office, Mail, Contact, ExtraNo, Password, Privilege, Image) VALUES('','".$_POST['Name']."','".$_POST['EmployeeID']."', '".$_POST['Designation']."', '".$_POST['Post']."', '".$_POST['Office']."', '".$_POST['Email']."', '".$_POST['Phone']."', '".$_POST['Phone2']."', '".md5($_POST['Password'])."', '".$_POST['Privilege']."', '$upload_file_name')";

           
            			    if(mysqli_query($conN,$qRY)){

                                 echo "New Role Added Successfully";                              
                                 mysqli_close($conN);

                            }else{

   								 echo "Error Creating Role!!, recheck all data or contact developer! ";
   								 mysqli_close($conN);
							
							   }

							  }											

						}catch(Exception $r){

						}

?>


</body>
</html>