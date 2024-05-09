<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
?>


        <div class="container">
            <div class="row my-5 py-5 align-items-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="">
                        
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="logo-par">
                            
                    <h1>Fyo-Ra</h1>
                
                </div>
                <div class="offset-md-0 col-md-12">
                    <br>
                    <br>
                    <br>

                    
                    <div class="offset-md-1 col-md-6 ">
                        <div class="sign-up">
                            <h5 style="color: #DEAD6F;">&#x1F5A4; Welcome Back &#x1F5A4;</h5>
                            <h1>Please Log In</h1>
                        </div><br>
                        
                       
                        <form action="process-login.php" method="post" novalidate>
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Enter your Email Address">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control form-control-lg" name="password1" id="password1" placeholder="Enter your Password">
                            </div>
                            <br>
                            <br>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-lg rounded-1">Login now</button>
                            </div>
                        </form>
                        

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


