<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
       <title>Budget Planner | Dashboard</title>
		
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
				<section class="content-header">
					<h1>
						Dashboard
					</h1>
				</section>
			</aside>
			
			<aside class="right-side">
				<div class="row" style="margin-left: 0px; margin-right: 0px; margin-top: 15px">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>
									5
								</h3>
								<p>
									Partners
								</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a class="small-box-footer" href="#">
								Settings <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>
									3
								</h3>
								<p>
									Categories
								</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a class="small-box-footer" href="#">
								Settings <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<h3>
									3
								</h3>
								<p>
									Charts
								</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a class="small-box-footer" href="#">
								Settings <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>	
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
							<div class="inner">
								<h3>
									&nbsp;
								</h3>
								<p>
									Predict
								</p>
							</div>
							<div class="icon">
								<i class="ion ion-arrow-graph-up-right"></i>
							</div>
							<a href="#" class="small-box-footer">
								Go <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">	
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Expenses in Each Category</h3>
						</div><!-- /.box-header -->
						<div class="box-body">
							<table class="table table-bordered">
								<tbody><tr>
									<th style="width: 10px">#</th>
									<th>Category</th>
									<th>Percentage</th>
									<th style="width: 40px"></th>
								</tr>
								<tr>
									<td>1.</td>
									<td>Category 1</td>
									<td>
										<div class="progress xs progress-striped active">
											<div style="width: 55%" class="progress-bar progress-bar-danger"></div>
										</div>
									</td>
									<td><span class="badge bg-red">55%</span></td>
								</tr>
								<tr>
									<td>2.</td>
									<td>Category 2</td>
									<td>
										<div class="progress xs progress-striped active">
											<div style="width: 70%" class="progress-bar progress-bar-yellow"></div>
										</div>
									</td>
									<td><span class="badge bg-yellow">70%</span></td>
								</tr>
								<tr>
									<td>3.</td>
									<td>Category 3</td>
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
					</div>
				</div>
				<div class="col-md-6">
					<div class="box box-warning" style="height: 262px;">
						<div class="box-header">
							<h3 class="box-title">Add an Expense</h3>
						</div>
						<div class="box-body">
							<label>Expense:</label>
							<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control">
							</div>
							<br/>
							<div class="form-group">
								<label>Categories:</label>
								<select class="form-control">
									<option>Category 1</option>
									<option>Category 2</option>
									<option>Category 3</option>
								</select>
							</div>
							
							<button style="margin-top: 12px;" class="btn btn-primary" type="submit">Add</button>
						</div>
					</div>
				</div>
			</aside>
        </div>
		
		<!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?>
		
    </body>
</html>