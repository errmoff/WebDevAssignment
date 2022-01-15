 <?php
 ob_start();
  if(isset($_SESSION['UserName'])){
	  if($_SESSION['UserId'] == $id or $_SESSION['PrivilegesId']==3){

  
 foreach($profile as $prof){
	 
echo '  <!-- property area -->
      <div class="page-head"> 
            <div class="container">       
                <div class="row">              
                    <div class="page-head-content">
                        <h1 class="page-title">Welcome back, '. $prof['FirstName'].' </h1>               
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">

                        <form action="" method="">
                            <div class="profiel-header">
                                <h3>
                                    <b>ACCOUNT</b> DATA <br>
                                    <small>Information about your current account</small>
                                </h3>
                                <hr>
                            </div>

                            <div class="clear">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="assets/img/avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <input type="file" id="wizard-picture">
                                        </div>
                                        <h6>Your Avatar</h6>
                                    </div>
                                </div>

                                <div class="col-sm-3 padding-top-25">

                                    <div class="form-group">
                                        <label>First Name: <small> '. $prof['FirstName'].'</small></label>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Last name: <small> '. $prof['SecondName'].'</small></label>
                                        
                                    <div class="form-group">
                                        <label>Your Username: <small> '. $prof['UserName'].' </small></label>
                                       
                                    </div>       
                                    </div> 
                                    <div class="form-group">
                                        <label>Your contact phone: <small> '. $prof['UserNumber'].' </small></label>
              
                                    </div> 

                                    <div class="form-group">
                                        <label>Your Email: <small> '. $prof['UserEmail'].'</small></label>
                                   
                                    </div> 
                                    <div class="form-group">
                                        <label>Your Privilege access ID: <small>';
                                        
                                    if($prof['PrivilegesId'] == 1){
                                    echo 'User';
                                    }elseif ($prof['PrivilegesId'] == 2){
                                    echo 'Moderator';
                                    }else {
                                            echo 'Owner';
                                            }

                                     echo'   </small></label>
              
                                    </div> 
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    <div class="form-group">
                                        <label>';
                                      if($_SESSION['UserId'] == $id or $_SESSION['PrivilegesId']==3){
                                        echo '<a class="inputAdminMenu" href="ProfileEdit?id='.$prof['UserId'].'">Edit  </a>';
                                         echo '<a class="inputAdminMenu" href="profile">  Back</a>';
                                        }


                                      
                                          else {
                                                echo '<p class="correctLogin">You didnt come in!</p>';
                                                echo '<p style="text-align:center;"><a href="logReg" class="backToLogin">Log in</a></p>';
                                        }




                                    echo '</small></label>
                         
                                    </div>
                                 
                                </div>  

                            </div>

                        
                    
                           
                                
                            <br>
                    </form>

                </div>
            </div><!-- end row -->

        </div>
    </div>

';	 
  

 }

 
 
  }}
   
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>