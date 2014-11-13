<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
		
        <title>Budget Planner | Log In</title>
		
        <!-- Include all the css stuff -->
		<?php include ('includes/cssLibrary.php') ?>
		
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="index.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.php" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Stay in touch with us through the social networks</span>
                <br/>
                <a href="https://www.facebook.com/riad.geradeh"><button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button></a>
                <a href="https://www.linkedin.com/pub/riad-jaradeh/94/8a/a86"><button class="btn bg-aqua btn-circle"><i class="fa fa-linkedin"></i></button></a>
                <a href="https://plus.google.com/+RiadJeradeh/about"><button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button></a>

            </div>
        </div>


        <!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?> 

    </body>
</html>