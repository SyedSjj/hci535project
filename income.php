<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
       <title>Budget Planner | Income</title>
		
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
						Income
					</h1>
				</section>
			</aside>
			
			<aside class="right-side" style="margin-right: 30px;">
				<div class="box box-warning" style="margin-top:15px; margin-left:15px;">
					<div class="box-header">
						<h3 class="box-title">Add an Income</h3>
					</div>
					<form method="POST" action="./partner.php" >
						<div class="box-body">
							<label>Income:</label>
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input class="form-control" type="text" placeholder="Income USD">
							</div>
							<br/>
							<label>Month:</label>
							<div class="input-group">
								<span class="input-group-addon">M</span>
								<input class="form-control" type="text" placeholder="Month (1-12)">
							</div>
							<br/>
							<label>Year:</label>
							<div class="input-group">
								<span class="input-group-addon">Y</span>
								<input class="form-control" type="text" placeholder="Year (ex:1946)">
							</div>
							<br/>
							<label>Comments:</label>
							<div class='box-body pad' style="padding: 0px;">
								<form>
									<textarea class="textarea" placeholder="Send a message to the partner" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</form>
							</div>
							
							<br/>
							<button style="margin-top: 12px;" class="btn btn-primary" type="submit">Add</button>
						</div>
					</form>
				</div>
				
				<div class="box" style="margin-top:15px; margin-left:15px;">
					<div class="box-header">
						<h3 class="box-title">Incomes</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tbody><tr>
								<th style="width: 10px">#</th>
								<th>Work</th>
								<th>Percentage</th>
								<th style="width: 40px"></th>
							</tr>
							<tr>
								<td>1.</td>
								<td>Work 1</td>
								<td>
									<div class="progress xs progress-striped active">
										<div style="width: 55%" class="progress-bar progress-bar-danger"></div>
									</div>
								</td>
								<td><span class="badge bg-red">55%</span></td>
							</tr>
							<tr>
								<td>2.</td>
								<td>Work 2</td>
								<td>
									<div class="progress xs progress-striped active">
										<div style="width: 70%" class="progress-bar progress-bar-yellow"></div>
									</div>
								</td>
								<td><span class="badge bg-yellow">70%</span></td>
							</tr>
							<tr>
								<td>3.</td>
								<td>Work 3</td>
								<td>
									<div class="progress xs progress-striped active">
										<div style="width: 30%" class="progress-bar progress-bar-blue"></div>
									</div>
								</td>
								<td><span class="badge bg-light-blue">30%</span></td>
							</tr>
						</tbody></table>
					</div><!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#"><</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">></a></li>
						</ul>
					</div>
			</aside>
        </div>
		
		
		<!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?>
		
    </body>
</html>