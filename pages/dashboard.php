
<?php session_start(); 

if(($_SESSION['SEssioN'])==false){
	header("location:logOut.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="../Style/dashCSS.css" />

	<title>Dashboard</title>

</head>

<body> 

     <div id="wrapper">

     	<!-- Header here -->

     	<style>
     		.here_after::after{
				background-image: url('<?php echo "Profiles/imgs/Employee/".$_SESSION['Img']."";?>');
			}
     	</style>

     	<div class="Header_tab">

     		<div class="User_name">
               
                 <div class="welcome_user">
     			     <legend class="here_after" style="font-weight: bold;">Welcome 
     			     	<form method="post" action="user.php" style="display: inline;">
     			     		<input type="hidden" name="ID" value="<?php echo $_SESSION['SesID']; ?>">
     			     		<button ID="Lbutton" name="Lbtn"> <?php echo $_SESSION['SesUsR']; ?> </button>
     			     	</form>
     			    </legend>
     			</div>

     		</div>


     		<div class="Logout_pane">

     			<div class="Logout_user">
     			     <h4> <a href="logOut.php">Logout</a> </h4>
     			</div>

     		</div>
     		

     	</div>

    
        <div class="lower_cont">

        <!-- Sidebar here -->

     	<div class="left_Sidebar">

     		<div class="inst_inf">

     			<div class="ins_img">

     				 <img src=' <?php echo "../imgs/Icons/".$_SESSION['Office'].".png"; ?>' >
     				
     			</div>

     			<div class="ins_name">

     				 <h4> <?php echo $_SESSION['Posting']; ?> </h4>
     				
     			</div>

     			<div class="ins_loc">

     				 <h6> <?php echo $_SESSION['Office']; ?> </h6>
     				
     			</div>
     			

     		</div>


     		<div class="Other_menu">

			     <a href="Operator.php" title="<?php if($_SESSION['User_Prev']!='Super'){echo 'Only Admin can access';} ?>"> Operators </a>
     			 <a href="#"> Other shelters </a>
     			 <a href="#"> Shelter details </a>
     			 <a href="#"> Web portal </a>    			 
     			 <a href="#"> Employee </a>
     			 <a href="#"> Live cam </a>
     			 <a href="#"> Forum </a>
     			 <a href="#"> Visit website </a>

     		</div>
     		

     	</div>



     	<!-- Section here -->

     	<div class="Section">

             <div class="nav_menu">
             	

             	 <ul>
             		
                     <li> <a href="ListView.php"> List View </a> </li> 
                     <li> <a href="ListEdit.php" title="<?php if(($_SESSION['User_Prev']!='Super')&&($_SESSION['User_Prev']!='Editor')){echo 'Only Admin or Editor can access';} ?>"> List Modification </a> </li>   
                     <li> <a href="#"> Student Base </a> </li> 

             	 </ul>


             </div>


             <div class="search_for">
                

                 <form action="#" method="POST" autocomplete="off">

                 <center>      
                    <div class="search_box">  
             	         
             	         <h4>Search: </h4>
             	         <input type="text" placeholder="CaseID" class="searching" name="searching">
             	         <input type="submit" value="Go" class="btn" name="btn">

             	    </div>
                </center>

                 </form>

             	
             </div>


             <div class="show_res">

             	 <div class="">


                    <?php 

                     try{
                     	if(isset($_POST['btn'])){
                     		include 'conMySQLi.php';

                     		$conN = OpenConN_caseRecords();

                     		$ID = mysqli_real_escape_string($conN, $_POST['searching']);

                     		$qRY = "select * from casetable where CaseID = '".$ID."'";
						    $RSLT = mysqli_query($conN,$qRY);
           
            			    if($dat = mysqli_fetch_assoc($RSLT)){ ?>
            			    	
             	 	
             	 	 <div class="src_img">
                          <img src="Profiles/imgs/<?php echo $dat["imgLoc"]; ?>">
             	 	 </div>

             	 	 <div class="src_name">
             	 	 	  <h3> Name: <?php echo $dat["Name"]; ?> </h3>
             	 	 	     <div class="src_det">
             	 	 	  		 <h5> Age: <?php echo $dat["Age"]; ?> </h5>
             	 	 	         <h5> Class: <?php echo $dat["Class"]; ?> </h5>
             	 	 	         <h5> Shelter: <?php echo $dat["Shelter"]; ?> </h5>
             	 	 	         <h5> Gender: <?php echo $dat["Gender"]; ?> </h5>
             	 	 	     </div>
             	 	 </div>

             	 </div>
 
             	 	 <div class="src_brf">
      
                          <p> <?php echo $dat["Details"]; ?> <a href="Profiles/Profile.php?data=<?php echo $dat['CaseID']; ?>">See more</a> </p>

             	 	 </div>


             	 	 <?php }
                     	}
                     }catch(Exception $e){

                     }

                ?>
             	 

             </div>
          

     	</div>

        </div>
     	
        

     </div>

</body>
</html>