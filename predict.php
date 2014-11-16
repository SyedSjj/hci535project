<?php include ('core/init.php'); ?>
<?php include ('includes/protect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
       <title>Budget Planner | Predict</title>
		
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
						Predict
					</h1>
				</section>
			</aside>
			
			<aside class="right-side">
				 <!-- Custom tabs (Charts with tabs)-->
				<div style="margin-top:15px;" class="nav-tabs-custom">
					<div class="tab-content no-padding">
						<!-- Morris chart - Sales it needs updates-->
						<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 100%;"></div>
					</div>
				</div><!-- /.nav-tabs-custom -->
			</aside>
        </div>
		
		
		<!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?>
		
    </body>
</html>