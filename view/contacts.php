   <?php
 ob_start();
 ?>
 <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Contact page</h1>               
                    </div>
                </div>
            </div>
        </div>
            <!-- property area -->
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"> 
                        <div class="" id="contact1">                        
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Address</h3>
                                    <p>Solarden Gardes 85
                                        <br>East London
                                        <br>E1 0DF 
                                        <br>
                                        <strong>England, United Kingdom</strong>
                                    </p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Call center</h3>
                                    <p class="text-muted">This number is Free. Don't worry, your money will be in safe (probably :D).</p>
                                    <p><strong>+447459440390</strong></p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i>Email </h3>
                                    <p class="text-muted">You can write email to us. I really hope, that you will get answer... </p>
                                    <ul>
                                        <li><strong><a href="mailto:">vladimir.pritulin.uk@gmail.com</a></strong>   </li>
                                        
                                    </ul>
                                </div>
                                
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                                                        <h2>Contact form</h2>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                        
                        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4175.730552469585!2d-0.12098539980289212!3d51.514972773264766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b3455585daf%3A0xafaa0170d4158d85!2sHolborn!5e0!3m2!1sru!2suk!4v1642226856789!5m2!1sru!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    
                                    </div>
                                    
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>    
                
                </div>
            </div>
        </div>

    
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>