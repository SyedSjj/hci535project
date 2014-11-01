<?php //include('variables/variables.php'); ?>

<aside class="left-side sidebar-offcanvas">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="img/default.png" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>Hello, User Name</p>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="active"> <!-- Right now the Dashboard is always active so I have to find a way to switch between the li -->
				<a href="index.php">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="treeview">
				<a href="">
					<i class="fa fa-users"></i> 
					<span>Partners</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a style="font-weight: bold;" href="partner.php"><i class="fa fa-gear"></i> Settings</a></li>
					<li><a href="partner.php?p=1"><i class="fa fa-angle-double-right"></i> Partner 1</a></li>
					<li><a href="partner.php?p=2"><i class="fa fa-angle-double-right"></i> Partner 2</a></li>
					<li><a href="partner.php?p=3"><i class="fa fa-angle-double-right"></i> Partner 3</a></li>
					<li><a href="partner.php?p=4"><i class="fa fa-angle-double-right"></i> Partner 4</a></li>
					<li><a href="partner.php?p=5"><i class="fa fa-angle-double-right"></i> Partner 5</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="">
					<i class="fa fa-th"></i> 
					<span>Categories</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a style="font-weight: bold;" href="category.php"><i class="fa fa-gear"></i> Settings</a></li>
					<li><a href="category.php?cat=1"><i class="fa fa-angle-double-right"></i> Category 1</a></li>
					<li><a href="category.php?cat=2"><i class="fa fa-angle-double-right"></i> Category 2</a></li>
					<li><a href="category.php?cat=3"><i class="fa fa-angle-double-right"></i> Category 3</a></li>
					<li><a href="category.php?cat=4"><i class="fa fa-angle-double-right"></i> Category 4</a></li>
					<li><a href="category.php?cat=5"><i class="fa fa-angle-double-right"></i> Category 5</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="">
					<i class="fa fa-bar-chart-o"></i>
					<span>Charts</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a style="font-weight: bold;" href="chart.php"><i class="fa fa-gear"></i> Settings</a></li>
					<li><a href="chart.php?chart=1"><i class="fa fa-angle-double-right"></i> Chart 1</a></li>
					<li><a href="chart.php?chart=2"><i class="fa fa-angle-double-right"></i> Chart 2</a></li>
					<li><a href="chart.php?chart=3"><i class="fa fa-angle-double-right"></i> Chart 3</a></li>
				</ul>
			</li>
			<li>
				<a href="predict.php">
					<i class="fa fa-flag"></i>
					<span>Predict</span>
				</a>
			</li>
			<li>
				<a href="calendar.php">
					<i class="fa fa-calendar"></i> <span>Calendar</span>
					<small class="badge pull-right bg-red">0</small>
				</a>
			</li>
			<li>
				<a href="mailbox.php">
					<i class="fa fa-envelope"></i> <span>Mailbox</span>
					<small class="badge pull-right bg-yellow">0</small>
				</a>
			</li>
			<li>
				<a href="about.php">
					 <i class="fa fa-info-circle"></i>
					<span>About Us</span>
				</a>
			</li>
			<li>
				<a href="help.php">
					 <i class="fa fa-question-circle"></i>
					<span>Help</span>
				</a>
			</li>
		</ul>
	</section>

</aside>