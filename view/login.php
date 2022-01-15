
   
   
   <?php
 ob_start();
 ?>

  
  <div class="page-head"> 
            <div class="container">       
                <div class="row">              
                    <div class="page-head-content">
                        <h1 class="page-title">Login in your account</h1>               
                    </div>
                </div>
            </div>
        </div>
 
 
     <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>New account : </h2> 
                            <form method="POST" action="registerResult" href="login">
                                <div class="form-group">
                                    <label for="name">Surname</label>
                                    <input class="form-control" type="text" placeholder="Name" name="UserFirstName" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Lastname</label>
                                    <input class="form-control" type="text" placeholder="Lastname" name="UserSecondName" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Phone Number</label>
                                    <input class="form-control" type="text" placeholder="Phone number" name="UserNumber" required>
                                </div>
                                 <div class="form-group">
                                    <label for="name">Login</label>
                                    <input class="form-control" type="text" placeholder="Login" name="UserName" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="text" placeholder="E-mail" name="UserEmail" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="UserPass" required>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-default" type="submit" name="Register" value="Registration">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
<?php 
  if(!isset($_SESSION['UserName'])){
 
 ?> <form method="POST" action="loginResult">
                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="text" placeholder="Login" name="UserName" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="UserPass" required>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-default" type="submit" name="Login" value="Log in"> Log in</button>
                                </div>
                            </form>
                            <br>
                            
                           
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>      
<?php  
  }else{
echo '<p class="correctLogin">You already logged!</p>';
  }  
  
  ?>
 </form>
 <?php

 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>