<?php include ('core/init.php'); ?>
<?php include ('includes/protect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
       <title>Budget Planner | Profile</title>
		
        <!-- Include all the css stuff -->
		<?php include ('includes/cssLibrary.php') ?>
		<?php include ('includes/filebutton.php') ?>
		
    </head>
	
    <body class="skin-blue">
		
		<!-- Include header -->
        <?php include ('includes/header.php') ?>
		
        <div class="wrapper row-offcanvas row-offcanvas-left">
		
            <!-- Include side bar -->
            <?php include ('includes/sidebar.php') ?>
			
            <aside class="right-side">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Change a Profile
					</h1>
				</section>
			</aside>
			
			<aside class="right-side" style="margin-right: 30px;">
				<div class="box box-warning" style="margin-top:15px; margin-left:15px;">
					<div class="box-header">
						<h3 class="box-title">Your Information</h3>
					</div>
					<div style="display:inline-block;width:70%">
						<form method="POST" action="./partner.php" >
							<div class="box-body">
								<label>User ID:</label>
								<div class="input-group">
									<span class="input-group-addon">ID</span>
									<input class="form-control" type="text" placeholder="User ID (ex: jaradehr1)">
								</div>
								<br/>
								<label>Email:</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input class="form-control" type="email" placeholder="Email">
								</div>
								<br/>
								<label>Password:</label>
								<div class="input-group">
									<span class="input-group-addon">**</span>
									<input class="form-control" type="password" placeholder="Password">
								</div>
								<br/>
								<label>Confirm Password:</label>
								<div class="input-group">
									<span class="input-group-addon">**</span>
									<input class="form-control" type="password" placeholder="Confirm Your Password">
								</div>
								<br/>
								<button style="margin-top: 12px;" class="btn btn-primary" type="submit">Change</button>
								<button style="margin-top: 12px;" class="btn btn-secondary">Cancel</button>
							</div>
						</form>
					</div>
					<div align="center" style="display:inline-block; vertical-align:top;">
						<label>Profile Picture</label>
						</p><img width="200px" height="200px" src="img/default.png" alt="" /></p>
						<input style="opacity:0" type="file" accept="image/*" id="exampleInputFile"/>
						<span id="button">Select Image</span>
					</div>
				</div>
			</aside>
        </div>
		
		<!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?>
		<script>
		$('#button').click(function(){
		   $("input[type='file']").trigger('click');
		})
		</script>
    </body>
</html>