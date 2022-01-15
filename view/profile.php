     <?php
 ob_start();
 
 if(isset($_SESSION['UserName'])){
	 echo '<div class="loginForm">';
	// echo '<img src="images\'.$_SESSION["PrivilegesId"]." alt="'.$_SESSION["UserName"].'">';
         
         
	echo '
           <div class="page-head"> 
            <div class="container">       
                <div class="row">              
                    <div class="page-head-content">
                        <h1 class="page-title">Choose action:</h1>               
                    </div>
                </div>
            </div>  
                  <div class="boy-sale-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="asks-first">
                           
                            <div class="asks-first-info">
                                 <a href="MyProfile?id='.$_SESSION['UserId'].'"><h2>PROFILE INFORMATION</h2></a>
                                                                 
                            </div>
                            <div class="asks-first-arrow">
                                <a href=""><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>';
                    if($_SESSION['PrivilegesId'] >= 2){
                        echo '
                    
                     <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="asks-first">
                            
                            <div class="asks-first-info">
                                <a href="adminMenu"><h2>ADMIN MENU //In dev</h2></a>
                                                                
                            </div>
                            <div class="asks-first-arrow">
                                <a href=""><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>';
                  


 }

?>

 
 
 
 
 
      <?php
 }
 else {
	 echo '<p><a style="margin-left: 43%;" href="login" class="ProfileSettingsButtons">Log in</a></p>';
 }
 echo '</div>';
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>