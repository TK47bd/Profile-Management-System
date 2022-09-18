
<?php session_start(); 

if(($_SESSION['SEssioN'])==false){
	header("location:logOut.php");
}

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="../Style/ListView.css" />

	<title>Records</title>
</head>

<body>

	<div id="Wrapper">

		 <div class="Content">

		 	 <div class="Nav_menu">


		 	 	<div class="search_for">

                
                 <form action="#" method="POST" autocomplete="off">

                 <center>      
                    <div class="search_box">  
             	         
             	         <h4>Search: </h4>
             	         <select id = "check_Type" name="check_Type">

                            <option value='0'>Age</option>
                            <option value='1'>B.Certificate</option>
                            <option value='2'>CaseID</option> 
                            <option value='3'>Class</option> 
                            <option value='4'>Disability</option>           	         	
             	         	    <option value='5'>Gender</option>
             	         	    <option value='6'>Name</option>
             	         	    <option value='7'>Shelter</option>

             	         </select>

             	         <input type="text" placeholder="Keyword" class="searching" name="searching" required>
             	         <input type="submit" value="Go" ID="btn" name="btn">

             	    </div>
                </center>

                 </form>

             	
             </div>
		 	 	

		 	 </div>

             <br/>
		 	 <div class="Table_view">

		 	 	<table class="record_table">

		 	 		<form method="POST" action="#">

                                     <?php $qRY = "select * from casetable "; $qRYE = " "; ?>

            			    		  <tr>
            			    		  	 <th><input type="submit" name="ID" value="CaseID"> </th>
            			    		  	 <th><input type="submit" name="Name" value="Name"> </th>
            			    		  	 <th><input type="submit" name="Age" value="Age"> </th>
            			    		  	 <th><input type="submit" name="Gender" value="Gender"> </th>
            			    		  	 <th><input type="submit" name="Class" value="Class"> </th>
            			    		  	 <th><input type="submit" name="Home" value="Home"> </th>
            			    		  	 <th><input type="submit" name="Shelter" value="Shelter"> </th>
            			    		  	 <th><input type="submit" value="Page"> </th>
            			    		  </tr>

            		</form>

		 	 	
		 	 	<?php
                       
                  try{ 
                       if(isset($_POST['btn'])){

                           
                           $type = $_POST['check_Type'];
                           $find = (String)$_POST['searching'];


                           if($type == 0){
                           	 $qRYE = " WHERE Age = '$find' ";
                           }

                           else if($type == 1){
                           	 $qRYE = " WHERE isBirthCertificate LIKE '$find%' "; 
                           }

                           else if($type == 2){
                           	 $qRYE = " WHERE CaseID LIKE '%$find%' "; 
                           }

                           else if($type == 3){
                           	 $qRYE = " WHERE Class LIKE '$find' ";
                           }

                           else if($type == 4){
                           	 $qRYE = " WHERE isDisableCertificate LIKE '$find%' ";
                           }

                           else if($type == 5){
                           	 $qRYE = " WHERE Gender LIKE '$find%' ";
                           }

                           else if($type == 6){
                           	 $qRYE = " WHERE Name LIKE '%$find%' "; 
                           }

                           else if($type == 7){
                           	 $qRYE = " WHERE Shelter LIKE '%$find%' ";
                           }

                           else{
                             $qRYE = " ";
                           }

                       }
                   }catch(Exception $k){ 
                   	     echo "<script>Alert('Wrong input or Data not found!');<script>";
                   	 }


                     try{

                     	    if(isset($_POST['ID'])){
                     	    	$qRY = $qRY.$qRYE."ORDER BY CaseID ASC";
                     	    }

                     	    else if(isset($_POST['Name'])){
                     	    	$qRY = $qRY.$qRYE."ORDER BY Name ASC";
                     	    }

                     	    else if(isset($_POST['Age'])){
                     	    	$qRY = $qRY.$qRYE."ORDER BY Age ASC";
                     	    }

                     	    else if(isset($_POST['Gender'])){
                     	    	$qRY = $qRY.$qRYE."ORDER BY Class ASC";
                     	    }

                     	    else if(isset($_POST['Class'])){
                     	    	$qRY = $qRY.$qRYE."ORDER BY Class ASC";
                     	    }

                     	    else if(isset($_POST['Home'])){
                     	    	$qRY = $qRY.$qRYE."ORDER BY Home ASC";
                     	    }

                     	    else if(isset($_POST['Shelter'])){
                     	    	$qRY = $qRY.$qRYE."ORDER BY Shelter ASC";
                     	    }

                     	    else{
                     	    	$qRY = $qRY.$qRYE."ORDER BY CaseID ASC";
                     	    }
                     	

                     		include 'conMySQLi.php';


                     		$conN = OpenConN_caseRecords();

						          $RSLT = mysqli_query($conN,$qRY);
           
            			    while($dat = mysqli_fetch_assoc($RSLT)){ ?>

                             
                            <tr>
            			    		  	 <td> <?php echo $dat["CaseID"]; ?> </td>
            			    		  	 <td> <?php echo $dat["Name"]; ?> </td>
            			    		  	 <td> <?php echo $dat["Age"]; ?> </td>
            			    		  	 <td> <?php echo $dat["Gender"]; ?> </td>
            			    		  	 <td> <?php echo $dat["Class"]; ?> </td>
            			    		  	 <td> <?php echo $dat["Home"]; ?> </td>
            			    		  	 <td> <?php echo $dat["Shelter"]; ?> </td>
            			    		  	 <td> <a href="Profiles/Profile.php?data=<?php echo $dat['CaseID']; ?>"> Click </a> </td>
            			    		  </tr>
            			    	

            			    <?php }
            			}catch(Exception $e){
                               
            			    } ?>

       			         
                </table>
		 	 	

		 	 </div>
		 	
		 </div>


               <div class="btns">
					
					<center>	 
				         <input type="submit" onclick="window.location='Dashboard.php';" name="DB" ID="DB" value="Dashboard">
					</center>

			   </div>

		
	</div>

               <script type="text/javascript">
  					document.getElementById('check_Type').value = "<?php echo $_POST['check_Type']; ?>";
			   </script>
			   


</body>
</html>