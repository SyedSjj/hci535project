<?php include ('core/init.php'); ?>

<?php
	if(isset($_POST['signup']))
	{
		$required_fields = array ('firstname', 'lastname', 'username', 'email', 'password', 're_password');
		foreach ($_POST as $key => $value)
		{
			if(empty($value) && (in_array($key, $required_fields)))
			{
				$errors[] = 'All fields are required!';
				break;
			}
		}
		if(empty($errors))
		{
			//check the user is already exists
			if(user_exists($_POST['username']))
			{
				$errors[] = 'Sorry, the user name ' . $_POST['username'] . 'is already taken';
			}
			//check username spaces
			if(preg_match("/\\s/", $_POST['username']) == true)
			{
				$errors[] = 'Username must not contain any spaces';
			}
			//check the password length
			if(strlen($_POST['password']) < 6)
			{
				$errors[] = 'The password must be at least 6 characters';
			}
			//check the password match
			if($_POST['re_password'] !== $_POST['password'])
			{
				$errors[] = 'The password do not match';
			}
			//check if it is a valid email
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
			{
				$errors[] = 'A valid email address is required';
			}
			//check the email is already existed
			if(email_exists($_POST['email']))
			{
				$errors[] = 'Sorry, the email ' . $_POST['email'] . 'is already in use';
			}
		}
	}
	if(!empty($_POST) && empty($errors))
	{
		//register the user
		$register_data = array(
			
			'user_name'  	 => $_POST['username'],
			'user_firstname' => $_POST['firstname'],
			'user_lastname'  => $_POST['lastname'],
			'user_password'  => $_POST['password'],
			'user_email'     => $_POST['email']
		);
		
		register_user($register_data);
		
		//redirect the user to the index.php
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
		
        <title>Budget Planner | Register</title>
		
        <!-- Include all the css stuff -->
		<?php include ('includes/cssLibrary.php') ?>
		
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            
			<?php include ('includes/signupform.php') ?>
			
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