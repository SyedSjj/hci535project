<?php include ('core/init.php'); ?>
<?php include ('includes/protect.php'); ?>
<?php include ('core/database/connect.php'); ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		
        <title>Budget Planner | Categories</title>
		
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
						Categories
					</h1>
				</section>
			</aside>
			
			<aside class="right-side">
                            <?php
                            $userid=$_SESSION['user_id'];
 if (isset($_POST["ispost"])) 
            { 
                
 		    $catname = $_POST["catname"];
                    $sqlqur2 = "Insert into cst_category(user_id,cst_category_name) values"
                            . " ('$userid','$catname')";
                    if (!mysql_query($sqlqur2))
                    {
                    die('Error: ' . mysql_error($con));
                    }?>
                    <script type="text/javascript">
            			window.location.href = "http://localhost/hci535project/category.php"
        	      </script>
               <?php }
            
            else
            {
             ?>
                            <form name="addcategory"method="post" action="category.php">
                                 <input type="hidden" name="ispost" value="1"/>
				<div class="box" style="margin-top:15px;">
					<div class="box-header">
						<h3 class="box-title">Add Categories</h3>
					</div>
                                    <form action="category.php">
						<div class="box-body">
							<label>Name:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-th"></i></span>
								<input class="form-control" name="catname"type="text" placeholder="Category Name">
							</div>
							<br/>
							<button style="margin-top: 12px;" class="btn btn-primary" type="submit">Add</button>
						</div>
					</form>
				</div>
                            </form>
            <?php }?>
				<div class="box" style="margin-top:15px;">
					<div class="box-header">
						<h3 style="width: 100%;" class="box-title">All Categories
						
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
 <?php
 echo "<table class='table table-bordered'>";
 echo "<tbody><tr>";
 echo "<th style='width: 10px'>#</th>";
 echo "<th>Name</th>";
 echo "<th style='width: 40px'></th>";
 echo "<th style='width: 40px'></th>";
 echo "</tr>";
  $qur = "select category_name from category union select cst_category_name from cst_category where cst_category.user_id=$userid";
                $sql_result = mysql_query($qur); 
                //echo $sql_query;
                if (($sql_result)||(mysql_errno($con))) 
                {   
                $result=mysql_query($qur);
                $rowrs=mysql_num_rows($result);
                //echo $rowrs+"This is row rs";
                If ($rowrs >0)
                {
                      $i=0;
                    while ($row = mysql_fetch_array($result))
                    {
                      
                        $Category = $row['category_name'];
                        $i = $i + 1;
                       //echo $Category;
                        echo "<tr>\n";
                        echo "<td>$i</td>";
                        echo "<td>$Category</td>";
                        echo "<td><a href='#'><span class='badge bg-blue'>Edit</span></a></td>";
                        echo "<td><a href='#'><span class='badge bg-red'>Delete</span></a></td>";
                        echo "</tr>";
                       
                    }
                }
                }
  echo "</tbody>";
  echo"</table>";
?>
</div> 
    <!-- /.box-body -->
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