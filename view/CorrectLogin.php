    <?php
 ob_start();

?>
  
 
 <?php 
  if(!isset($_SESSION['UserName'])){
 
 ?>
 
 
 <?php
  if(isset($_SESSION['UserName'])){
  }

  else {
	  echo ' 
     <div class="page-head"> 
            <div class="container">       
                <div class="row">              
                    <div class="page-head-content">
                        <h1 class="page-title">Wrong email or password!</h1>               
                    </div>
                </div>
            </div>
        </div>        ';
  }
  ?>

 </form>
 
<?php  
  }else{

	echo ' 
         <div class="page-head"> 
            <div class="container">       
                <div class="row">              
                    <div class="page-head-content">
                        <h1 class="page-title">Successful login as '.$_SESSION["UserName"].'!</h1>               
                    </div>
                </div>
            </div>
        </div>        ';
	echo '<p style="text-align:center;"><a href="properties" class="RegButton">Continue</a></p>';
  }  
  
  ?>
<?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>