<?php include ('core/init.php'); ?>
<?php include ('includes/protect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
       <title>Budget Planner | About Us</title>
		
        <!-- Include all the css stuff -->
		<?php include ('includes/cssLibrary.php') ?>
		
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
						About Us
					</h1>
				</section>
			</aside>
			
			<aside class="right-side">
				<div class="col-md-3" style="padding:15px">
					
				</div>
				<div class="col-md-6" style="padding:15px">
					<div class="box box-solid">
						<div class="box-body">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="http://kevinmartineau.ca/wp-content/uploads/ManThinking-640x480.jpg" alt="Second slide">
										<div style="background:none repeat scroll 0 0 rgba(0, 0, 0, 0.75)"  class="carousel-caption">
											Thinking Where all the money were gone!! .. stop thinking and use our tool.
										</div>
									</div>
									<div class="item">
										<img src="http://jeffpolley888.files.wordpress.com/2012/07/change-coming.jpg?w=640&h=480" alt="Third slide">
										<div style="background:none repeat scroll 0 0 rgba(0, 0, 0, 0.75)"  class="carousel-caption">
											It's the right time to make a change..
										</div>
									</div>
									<div class="item">
										<img src="http://cuberules.com/wp-content/uploads/jump_for_joy.jpg?ec53a9" alt="First slide">
										<div style="background:none repeat scroll 0 0 rgba(0, 0, 0, 0.75)" class="carousel-caption">
											Control your your life..
										</div>
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<aside class="right-side">
				<div class="col-md-12">
					<div class="box">
						<div class="box-body">
							<p>
								The statistics of filing personal bankruptcies in America is directly related to not having a proper budget for the income. Student loans are another unmanageable debt that requires serious budgeting. Even high number of divorces in the country can be related to the mismanaged household budget. Back in the non-digital world, a written budget was recommended by the financial experts to balance the financial aspect of life. In this technically advanced era, the financial management could literally be on the fingertips in the form of a website or an application on a smart cell phone. <br/><br/>

Our project mainly focus on the documentation of the both actual and projected income and expenditures over a period of time. The final intended product would be able to create a financial roadmap for the user by providing clear financial picture and control over the income and expenditure. The user would be able to make smart financial decision based on the reports, charts, and categorical expenditure statement. The user will be able to see many areas where the money can be saved and will be able to see the difference between the needs and wants. This website/application will not ask the user for any personal information like bank account number or any financial information like 401K account in order to provide a peace of mind and privacy. 

							</p>
						</div>
					</div>
				</div>
			</aside>
        </div>
		
		<!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?>
		
    </body>
</html>