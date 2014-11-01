<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
        <title>Budget Planner | Partners</title>
		
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
						Partners
					</h1>
				</section>
			</aside>
			
			<aside class="right-side">
				<div class="box" style="margin-top:15px;">
					<div class="box-header">
						<h3 class="box-title">Add Partners</h3>
					</div>
					<form action="">
						<div class="box-body">
							<label>Email:</label>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input class="form-control" type="text" placeholder="Username">
							</div>
							<br/>
							
							<div class='box-body pad' style="padding: 0px;">
								<form>
									<textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</form>
							</div>
							
							<br/>
							<button style="margin-top: 12px;" class="btn btn-primary" type="submit">Add</button>
						</div>
					</form>
				</div>
				
				<div class="box" style="margin-top:15px;">
					<div class="box-header">
						<h3 style="width: 100%;" class="box-title">People Sharing this Account
						
						<form style="float:right;" class="text-right" action="#">
							<div class="input-group">
								<input type="text" placeholder="Search" class="form-control input-sm">
								<div class="input-group-btn">
									<button class="btn btn-sm btn-primary" name="q" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
						
						</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tbody><tr>
								<th style="width: 10px">#</th>
								<th>Name</th>
								<th style="width: 40px"></th>
								<th style="width: 40px"></th>
							</tr>
							<tr>
								<td>1.</td>
								<td>Name 1</td>
								<td><a href="#"><span class="badge bg-blue">Edit</span></a></td>
								<td><a href="#"><span class="badge bg-red">Delete</span></a></td>
							</tr>
							<tr>
								<td>2.</td>
								<td>Name 2</td>
								<td><a href="#"><span class="badge bg-blue">Edit</span></a></td>
								<td><a href="#"><span class="badge bg-red">Delete</span></a></td>
							</tr>
							<tr>
								<td>3.</td>
								<td>Name 3</td>
								<td><a href="#"><span class="badge bg-blue">Edit</span></a></td>
								<td><a href="#"><span class="badge bg-red">Delete</span></a></td>
							</tr>
							<tr>
								<td>4.</td>
								<td>Name 4</td>
								<td><span class="badge bg-blue">Edit</span></a></td>
								<td><span class="badge bg-red">Delete</span></a></td>
							</tr>
							<tr>
								<td>5.</td>
								<td>Name 5</td>
								<td><a href="#"><span class="badge bg-blue">Edit</span></a></td>
								<td><a href="#"><span class="badge bg-red">Delete</span></a></td>
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
			</aside>
			
        </div>
		
		
		<!-- Include all the js stuff -->
        <?php include ('includes/jsLibrary.php') ?>
		
    </body>
</html>