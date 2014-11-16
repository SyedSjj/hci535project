<aside class="left-side sidebar-offcanvas">
    <?php include 'core/database/connect.php';?>
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="img/default.png" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>Hello, <?php echo $user_data['user_firstname']; ?>!</p>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="active"> <!-- Right now the Dashboard is always active so I have to find a way to switch between the li -->
				<a href="index.php">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="income.php">
					<i class="fa fa-usd"></i>
					<span>Income</span>
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
					 <?php
                $qur = "select * from category limit 5";
                $sql_result = mysql_query($qur); 
                //echo $sql_query;
                if (($sql_result)||(mysql_errno($con))) 
                {   
                $result=mysql_query($qur);
                $rowrs=mysql_num_rows($result);
                //echo $rowrs+"This is row rs";
                If ($rowrs >0)
                {
                     while ($row = mysql_fetch_array($result))
                    {
                        $Category = $row['category_name'];
                        echo "<li><a href='category.php?cat=1'><i class='fa fa-angle-double-right'></i>$Category</a></li>";
                    }
                }
                }
        ?>
				</ul>
			</li>
			<li class="treeview">
				<a href="">
					<i class="fa fa-bar-chart-o"></i>
					<span>Charts</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
                                    <li><a href="CatExpChart.php" ><i class="fa fa-angle-double-right"></i>Category Vs Expense </a></li>
					<li><a href="MonExpChart.php"><i class="fa fa-angle-double-right"></i>Expense vs Month</a></li>
					<li><a href="IncExpChart.php"><i class="fa fa-angle-double-right"></i>Income vs Expense</a></li>
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