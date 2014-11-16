<?php include ('core/init.php'); ?>
<?php include ('includes/protect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
       <title>Budget Planner | Charts</title>
		
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
						Charts
					</h1>
				</section>
			</aside>
			
			<aside class="right-side" style="margin-right: 30px;">
				<div class="box box-warning" style="margin-top:15px; margin-left:15px;">
					<div class="box-header">
						<h3 class="box-title">Add Charts</h3>
					</div>
					<form action="">
						<div class="box-body">
							<div class="form-group col-lg-30 col-xs-5">
								<label>Select a Category</label>
								<select multiple class="form-control">
									<option>Category 1</option>
									<option>Category 2</option>
									<option>Category 3</option>
									<option>Category 4</option>
									<option>Category 5</option>
								</select>
							</div>
							<div align="center" class="col-lg-30 col-xs-2" style="margin-top: 40px;">
								<p style="font-size: x-large; font-weight: 400; font-family: Comic Sans MS;"> Vs. </p>
							</div>
							<div class="form-group col-lg-30 col-xs-5">
								<label>Select a Category</label>
								<select multiple class="form-control">
									<option>Category 1</option>
									<option>Category 2</option>
									<option>Category 3</option>
									<option>Category 4</option>
									<option>Category 5</option>
								</select>
							</div>
							<button style="margin-top: 12px; margin-left: 15px;" class="btn btn-primary" type="submit">Add</button>
						</div>
					</form>
				</div>
				<div style="margin-top:15px;">
					<div class="col-md-6">	
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Select a Chart to View</h3>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>Charts</label>
									<select multiple class="form-control">
										<option>Chart 1</option>
										<option>Chart 2</option>
										<option>Chart 3</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box box-solid">
							<div class="box-header">
								<h3 class="box-title text-danger">Income Vs. Expense</h3>
								<div class="box-tools pull-right">
									<button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
								</div>
							</div>
							<div class="box-body text-center">
								<div class="sparkline" data-type="pie" data-offset="90" data-width="150px" data-height="150px">
									0,4,8
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
        </div>
		
		
		<!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?>
		
    </body>
</html>

<script>
	//INITIALIZE SPARKLINE CHARTS
	$(".sparkline").each(function() {
		var $this = $(this);
		$this.sparkline('html', $this.data());
	});
</script>