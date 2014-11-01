<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
       <title>Budget Planner | Calendar</title>
		
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
						Calendar
					</h1>
				</section>
			</aside>
			
			<aside class="right-side">
				<div class="row" style="padding: 15px;">
					<div class="col-md-3">
						<div class="box box-primary">
							<div class="box-header">
								<h4 class="box-title">Draggable Events</h4>
							</div>
							<div class="box-body">
								<!-- the events -->
								<div id='external-events'>
									<div class='external-event bg-green'>Lunch</div>
									<div class='external-event bg-red'>Go home</div>
									<div class='external-event bg-aqua'>Do homework</div>
									<div class='external-event bg-yellow'>Work on UI design</div>
									<div class='external-event bg-navy'>Sleep tight</div>
									<p>
										<input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
									</p>
								</div>
							</div><!-- /.box-body -->
						</div><!-- /. box -->
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Create Event</h3>
							</div>
							<div class="box-body">
								<div class="btn-group" style="width: 100%; margin-bottom: 10px;">
									<button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>
									<ul class="dropdown-menu" id="color-chooser">
										<li><a class="text-green" href="#"><i class="fa fa-square"></i> Green</a></li>
										<li><a class="text-blue" href="#"><i class="fa fa-square"></i> Blue</a></li>
										<li><a class="text-navy" href="#"><i class="fa fa-square"></i> Navy</a></li>
										<li><a class="text-yellow" href="#"><i class="fa fa-square"></i> Yellow</a></li>
										<li><a class="text-orange" href="#"><i class="fa fa-square"></i> Orange</a></li>
										<li><a class="text-aqua" href="#"><i class="fa fa-square"></i> Aqua</a></li>
										<li><a class="text-red" href="#"><i class="fa fa-square"></i> Red</a></li>
										<li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i> Fuchsia</a></li>
										<li><a class="text-purple" href="#"><i class="fa fa-square"></i> Purple</a></li>
									</ul>
								</div>
								<div class="input-group">
									<input id="new-event" type="text" class="form-control" placeholder="Event Title">
									<div class="input-group-btn">
										<button id="add-new-event" type="button" class="btn btn-default btn-flat">Add</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="box box-primary">
							<div class="box-body no-padding">
								<div id="calendar"></div>
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