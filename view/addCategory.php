     <?php
 ob_start();
 ?>

    <?php
 if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){

?>
       
 
 
      <?php
	 } else {
	 echo '<p class="correctLogin">You dont have enough permissions!</p>';
	 echo '<p style="text-align:center;"><a href="properties" class="ProfileSettingsButtons">Back</a></p>';
	 }
 }
 else {
	 echo '<p class="correctLogin">You are not logged in!</p>';
	 echo '<p style="text-align:center;"><a href="login" class="ProfileSettingsButtons">Log in</a></p>';
 } ?>
 <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Submit new Category</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <form method="POST" action="addCategoryResult">                        
                                <div class="wizard-header">
                                    <h3>
                                        ADD NEW CATEGORY <br>
                                        <small>This is page for adding new category.</small>
                                    </h3>
                                </div>

                       

                          

                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"> For adding category fill form above</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-property.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Category Name <small>(required)</small></label>
                                                    <input type="text" class="form-control" placeholder="Category name" name="CategoryName" required>
                                                </div>

                                               
                                                
                                            </div>
                                        </div>
                                    </div>

                        </div>
                        <!-- End submit form -->
                    </div> 
                </div>
            </div>
        </div>
 <p style="text-align:center;"><input class="logRegButton" type="submit" name="addCategory" value="Add"></p>

 </form>
  <p style=" cursor:pointer; margin-left: 645px; margin-top: -20px;"><a class="logRegButton"  onclick="history.back()">Back</a></p>
 
 

 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>