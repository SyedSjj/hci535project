<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
		
        <title>Budget Planner | Forgot Password</title>
		
        <!-- Include all the css stuff -->
		<?php include ('includes/cssLibrary.php') ?>
		
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            
			<?php include ('includes/forgotpasswordform.php') ?>
			
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

<?php include('includes/showerrors.php'); ?>