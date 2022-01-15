     <?php

ob_start();





echo '
    

            <div class="page-head"> 
            <div class="container">       
                <div class="row">              
                    <div class="page-head-content">
                         <h1 class="page-title">Successful registration! Please <a href="login" class="RegButton">Log in</a>!</h1>             
                    </div>
                </div>
            </div>
        </div>
                       ';








$content = ob_get_clean();
include_once 'view/layout.php';
?>