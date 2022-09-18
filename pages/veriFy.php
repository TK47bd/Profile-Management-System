
<?php session_start(); 

if(($_SESSION['SEssioN'])==false){
	header("location:logOut.php");
}

?>

<?php 


       include 'conMySQLi.php';
	   $conN = OpenConN_caseRecords();

	   $uID = mysqli_real_escape_string($conN, $_POST['Employee_ID']); //18115
       $uPass = md5(mysqli_real_escape_string($conN, $_POST['PassWd'])); //admin
	 	      

	   if(isset($_POST['Login'])){
		   
		   $qRY = "select * from users where EmployeeID = '".$uID."' and Password = '".$uPass."'";
           $RSLT=mysqli_query($conN,$qRY);
 
            if($dat = mysqli_fetch_assoc($RSLT))
            {
				session_start();
				$_SESSION['SEssioN']=rand().$uID.rand();
                $_SESSION['SesID']=$uID;
				$_SESSION['SesUsR']=$dat['Name'];
				$_SESSION['User_Prev']=$dat['Privilege'];
				$_SESSION['Office']=$dat['Office'];
				$_SESSION['Posting']=$dat['Post'];
				$_SESSION['Img']=$dat['Image'];
				CloseConN($conN);
                header("location:Dashboard.php");
            }
            else
            { 
		        CloseConN($conN);
                echo "<script> alert('Wrong ID and Password!!'); location='../index.html'; </script>";
            }
		   
		   
	   }	   

?>