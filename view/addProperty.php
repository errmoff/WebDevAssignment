       <?php
 if(isset($_SESSION['UserName'])){
	 if($_SESSION['PrivilegesId'] >= 2){

echo '<p style="margin-left: 5%; text-decoration: none; cursor:pointer" ><a class="AdminControlButtons"  onclick="history.back()">Previous</a></p>';

echo '<form method="POST" action="addPropertyResult?id='.$id.'">';
 ?>
<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Add New Property</h1>               
                    </div>
                </div>
            </div>
        </div>
<div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">

<div class="wizard-header">
                                    <h3>
                                        SUBMIT NEW PROPERTY <br>
                                        <small>This is page for submit new property.</small>
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
                                                     <label>Property Name <small>(required)</small></label>
                                                     <input type="text" placeholder="Property name" name="PropertyName" required>
                                                     <label>Link on image (please upload on any picture host)<small>(required)</small></label>
                                                     <input type="text" placeholder="Link on image" name="PropertyImage1">
                                                     <label>Link on image (please upload on any picture host)<small>(required)</small></label>
                                                     <input type="text" placeholder="Link on image" name="PropertyImage2">
                                                     <label>Property size <small>(required)</small></label>
                                                     <input type="number" placeholder="Property size in Sq" name="PropertyArea" required>
                                                     <label>Property description <small>(required)</small></label>
                                                     <input type="text"  placeholder="Write about it" name="PropertyDesc" required>
                                                     <label>London Zone <small>(required)</small></label>
                                                     <input type="number" placeholder="Zone in London" name="PropertyZonePlace" required>
                                                     <label>Property price <small>(required)</small></label>
                                                     <input type="number" placeholder="Property Price" name="PropertyPrice" required>
                                                     <label>Contact with owner <small>(required)</small></label>
                                                     <input type="number" placeholder="Owner Phone" name="ContactPhone" required >
                                                     <label>Full adress (street, postcode) <small>(required)</small></label>
                                                     <input type="text" placeholder="Full property adress" name="PropertyAdress" required >
                                                     <label>Quantity of garages in house (if no, write 0) <small>(required)</small></label>
                                                     <input type="number" placeholder="Quantity of Garages" name="PropertyGarages" required >
                                                     <label>Quantity of bath rooms in house <small>(required)</small></label>
                                                     <input type="number" placeholder="Quantity of bath rooms" name="PropertyBathRooms" required >
                                                     <label>Quantity of living rooms in house <small>(required)</small></label>
                                                     <input type="number" placeholder="Quantity of living rooms" name="PropertyLivingRooms" required>
                                                     <label>Quantity of bedrooms in house <small>(required)</small></label>
                                                     <input type="number" placeholder="Quantity of bed rooms" name="PropertyBedRooms" required>  
 

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

 <p style="text-align:center;"><input class="logRegButton" type="submit" name="addProperty" value="Add"></p>
 

 </form>
  <p style=" cursor:pointer; margin-left: 645px; margin-top: -20px;"><a class="logRegButton"  onclick="history.back()">Back</a></p>
 
 
 
 
 
 
 
 
 
 
 
      <?php
	 } else {
	 echo '<p class="correctLogin">You dont have enough permissions!</p>';
	 echo '<p style="text-align:center;"><a href="properties" class="AdminControlButtons">Back</a></p>';
	 }
 }
 else {
	 echo '<p class="correctLogin">You are not logged in!</p>';
	 echo '<p style="text-align:center;"><a href="logReg" class="AdminControlButtons">Log in</a></p>';
 }
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>