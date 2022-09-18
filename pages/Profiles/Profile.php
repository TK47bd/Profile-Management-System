<?php 

    session_start(); 

    if(($_SESSION['SEssioN'])==false){
	header("location:../logOut.php");
    }

    if(isset($_GET["data"])){
        include '../conMySQLi.php';
        $conN = OpenConN_caseRecords();
        $DaTa = mysqli_real_escape_string($conN, $_GET["data"]);		
	} 

?>


<html>

<head>

       <meta charset="UTF-8">

       <link rel="stylesheet" type="text/css" href="CSS/profile.css" />
	   
	   <title> Profile info </title>

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

                     		$qRY = "select * from casetable where CaseID = '".$ID."'";
						    $RSLT = mysqli_query($conN,$qRY);
           
            			    if($dat = mysqli_fetch_assoc($RSLT)){ ?>
            			 


           					 <div class="src_name">
             	 	 	         <h3> Name: <?php echo $dat["Name"]; ?> </h3>
				             </div>	
							 
             	 	
             	 	         <div class="src_img">
                                <a href="imgs/<?php echo $dat["imgLoc"]; ?>" target="_blank">
                                    <img src="imgs/<?php echo $dat["imgLoc"]; ?>">
                                </a>
             	         	 </div>

             	 	   
             	 	 	     <div class="src_det_first">
             	 	 	  		 <h5> Age: <?php echo $dat["Age"]; ?> </h5>
             	 	 	         <h5> Class: <?php echo $dat["Class"]; ?> </h5>
             	 	 	         <h5> Shelter: <?php echo $dat["Shelter"]; ?> </h5>
             	 	 	         <h5> Gender: <?php echo $dat["Gender"]; ?> </h5>
             	 	 	     </div>
							 
							 <div class="other_src_det">
             	 	 	  		 <h5> Institute: <?php echo $dat["Institute"]; ?> </h5>
             	 	 	         <h5> Training: <?php echo $dat["LearningSector"]; ?> </h5>
								 <h5> Disability: <?php echo $dat["isDisableCertificate"]; ?> </h5>
             	 	 	         <h5> Disable reg.: <?php echo $dat["DisabilityCertificaion"]; ?> </h5>
             	 	 	     </div>
							 
							 <div class="other_src_det">
             	 	 	  		 <h5> Nationality: <?php echo $dat["Nationality"]; ?> </h5>
             	 	 	         <h5> Religion: <?php echo $dat["Religion"]; ?> </h5>
             	 	 	         <h5> Birth Place: <?php echo $dat["BirthPlace"]; ?> </h5>
             	 	 	         <h5> B.Certificate: <?php echo $dat["isBirthCertificate"]; ?> </h5>
             	 	 	     </div>
							 
							 <div class="other_src_det">
             	 	 	  		 <h5> Home: <?php echo $dat["Home"]; ?> </h5>
             	 	 	         <h5> Father: <?php echo $dat["Father"]; ?> </h5>
             	 	 	         <h5> Mother: <?php echo $dat["Mother"]; ?> </h5>
             	 	 	         <h5> Guardian: <?php echo $dat["Guardian"]; ?> </h5>
             	 	 	     </div>
							 
							 <div class="other_src_det">
             	 	 	  		 <h5> Contact: <?php echo $dat["ContactNo"]; ?> </h5>
             	 	 	         <h5> B. Reg: <?php echo $dat["BirthCertificaion"]; ?> </h5>
             	 	 	         <h5> Occupation: <?php echo $dat["Occupation"]; ?> </h5>
             	 	 	         <h5> Birth Day: <?php echo $dat["BirthDate"]; ?> </h5> 
             	 	 	     </div>
							 
							 <div class="other_src_det">
             	 	 	  		 <h5> Address: <?php echo $dat["CurrentAddress"]; ?> </h5> 
             	 	 	         <h5> Refered by: <?php echo $dat["ReferedBy"]; ?> </h5>
             	 	 	         <h5> Data: <?php echo $dat["DataCollector"]; ?> </h5>							 
             	 	 	     </div>
					 
             	 	 

             	 </div>
				 
 
             	 	 <div class="src_brf">
      
                          <p> <?php echo $dat["Details"]; ?> </p>
						  
						  <div class="btns">
						  
						     <input type="submit" onclick="history.go(-1)" name="back" class="btn_effect" value="Back">
							 <input type="submit" onclick="window.location='../Dashboard.php';" name="DB" class="btn_effect" value="Dashboard">
					 
			              </div>

             	 	 </div>
					 


             	 	 <?php 
                     	}
                     }catch(Exception $e){

                     }

                ?>        	 
				 	 

             </div>
			 

		</div>  
		  

</body>
</html>


