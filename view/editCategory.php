   <?php
 ob_start();
 ?>     

 <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Edit Current Category</h1>               
                    </div>
                </div>
            </div>
        </div>
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
 <?php
 if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){


echo '<form  method="POST" action="editCategoryResult?id='.$id.'">';
 
?>

 <div class="wizard-header">
                                    <h3>
                                        EDIT CURRENT CATEGORY <br>
                                        <small>This is page for edit current category.</small>
                                    </h3>
                                </div>
  <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"> For adding category fill form above</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img <?php echo 'src="'.$category['CategoryImg'].'"' ?> class="picture-src" id="wizardPicturePreview" title=""/>
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                     <label>Category Name <small>(required)</small></label>
 
 <input <?php echo 'value="'.$category['CategoryName'].'"' ?>  type="text" placeholder="Category name" name="CategoryName" required>
<input <?php echo 'value="'.$category['CategoryImg'].'"' ?>  type="text" placeholder="Category Image" name="CategoryImg" required>

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

 <p style="text-align:center;"><input class="logRegButton" type="submit" name="editCategory" value="Edit"></p>
 

 </form>
  <p style=" cursor:pointer; margin-left: 645px; margin-top: -20px;"><a class="logRegButton"  onclick="history.back()">Back</a></p>
 
 
 
 
 
      <?php
		  
	 } else {
	 echo '<p class="correctLogin">You dont have enough permissions!</p>';
	 echo '<p style="text-align:center;"><a href="properties" class="backToLogin">Back</a></p>';
	 }
 }
 else {
	 echo '<p class="correctLogin">You didnt come in!</p>';
	 echo '<p style="text-align:center;"><a href="login" class="backToLogin">Log in</a></p>';
 }
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>