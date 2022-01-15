 <?php
 ob_start();
 ?>
 <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

      
      
        <div class="content-area error-page" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <h2 class="error-title">404</h2>
                        <p>Sorry, the page you requested may have been moved or deleted</p>
                        <a href="index.html" class="btn btn-default">Home</a>                        
                    </div>
                </div> 
            </div>
        </div> 
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';