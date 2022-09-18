
<?php

    session_start(); 
    
    if(isset($_SESSION['SEssioN'])){
        header("location: Pages/dashboard.php");
    }else{ ?>

<!DOCTYPE HTML>

<html>
    <head>
        
        <link rel="stylesheet" href="Style/styleSheet.css" />
        <link rel="icon" href="imgs/logo.png" sizes="50x50" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>caseStudy- Login</title>
    </head>

    <body>
      
    <div>     

		<form name="LogPan" method="POST" action="pages/veriFy.php" autocomplete="off" >

			<br/><br/>

			<fieldset style="margin: 0 auto; width: 50%;">
                
				<legend style="color:red"> Log in </legend>
                                
				<label style="color:white"> Employee ID: </label> <br>
				<center> 
                    <input type="text" name="Employee_ID" placeholder="User ID"> <br> 
                </center>
 

				<label style="color:white"> Password: </label> <br>
				<center> 
                    <input type="password" name="PassWd" placeholder="password"><br> 
                </center>
				


				<br/>

				<center> 
                                   
					<input type="submit" value="Login" name="Login" OnClick="return valid();">

                </center>
                                
                     
			</fieldset>

		</form>

    </div>   
        


            </script>
        
        
    </body>
</html>

<?php } ?>