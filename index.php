<?php include ('core/init.php'); ?>
<?php include ('core/database/connect.php'); ?>
<?php include ('includes/protect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Budget Planner | Dashboard</title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
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
                                <h1>Dashboard</h1>
                        </section>
                </aside>
<aside class="right-side">
        <div class="row"
                style="margin-left: 0px; margin-right: 0px; margin-top: 15px">
                <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-yellow">
                                <div class="inner">
                                        <h3>5</h3>
                                        <p>Partners</p>
                                </div>
                                <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                </div>
                                <a class="small-box-footer" href="#"> Settings <i
                                        class="fa fa-arrow-circle-right"></i>
                                </a>
                        </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                                <div class="inner">
                                        <h3>3</h3>
                                        <p>Categories</p>
                                </div>
                                <div class="icon">
                                        <i class="ion ion-bag"></i>
                                </div>
                                <a class="small-box-footer" href="category.php"> Settings <i
                                        class="fa fa-arrow-circle-right"></i>
                                </a>
                        </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-green">
                                <div class="inner">
                                        <h3>3</h3>
                                        <p>Charts</p>
                                </div>
                                <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                </div>
                                <a class="small-box-footer" href="#"> Settings <i
                                        class="fa fa-arrow-circle-right"></i>
                                </a>
                        </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-red">
                                <div class="inner">
                                        <h3>&nbsp;</h3>
                                        <p>Predict</p>
                                </div>
                                <div class="icon">
                                        <i class="ion ion-arrow-graph-up-right"></i>
                                </div>
                                <a href="#" class="small-box-footer"> Go <i
                                        class="fa fa-arrow-circle-right"></i>
                                </a>
                        </div>
                </div>
        </div>

<div class="col-md-6">
    <div class="box">
	<div class="box-header">
        	<h3 class="box-title">Expenses in Each Category</h3>
        </div>
       
       <div class='box-body'>
                 <?php
                 $userid=$_SESSION['user_id'];
                echo "<TABLE class='table table-bordered'>\n";
                echo "<TBODY>\n";
                echo "<tr>\n";
                echo "<th style='width: 10px'>#</th>\n";
                echo "<th>Category</th>\n";
                echo "<th>Percentage</th>\n";
                echo "<th style='width: 40px'></th>\n";
                echo "</tr>\n";
                $query2 = "select sum(expense_amount)as TotalSum from expense where user_id=$userid";
                //echo $query2;
                $result2=mysql_query($query2);
                $row = mysql_fetch_array($result2);
                $TotalExp = $row['TotalSum'];
               // echo $TotalExp;
                
                
                $qur = "SELECT category_name, expense_amount from expense Inner Join category on expense.category_id=category.category_id where expense.user_id=$userid";
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
                        //$Exp_Amt= $row['Exp_Amount'];
                        //echo $Exp_Amt;
                        $PercentExp = (100*$row['expense_amount'] ) / $TotalExp ;
                        $per = round($PercentExp);
                       // $exp = ($row['Exp_amount']);
                       //echo $Category;
                        echo "<tr>\n";
                        $i = $i + 1;
                            echo "<td>$i</td>\n";
                            echo "<td>".$Category."</td>\n";
                            echo "<td>\n";
                            echo "<div class='progress xs progress-striped active'>\n";
                            echo "<div style='width:55%' class='progress-bar progress-bar-danger'>";
                            echo "</div>\n";
                            echo "</div>\n";
                            echo "</td>\n";
                            echo "<td><span class='badge bg-red'>$per</span></td>\n";
                        echo "</tr>";
                    }
                }
                echo "</TBODY>";
                echo "</TABLE>";
                }
        ?>
        </div>
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
    <!-- /.box-body -->
<?php
 if (isset($_POST["ispost"])) 
            { 
                
 		   $Expense = $_POST["expense"];
                   $date = $_POST["date"];
                  //echo $date;
                    $categoryid = $_POST["category"];
                    $finyear = $_POST["finyear"];
                    $month = $_POST["month"];
                    $sqlqur2 = "Insert into expense(user_id,financial_id,month_id,category_id,expense_amount,expense_date) values"
                            . " ('$userid','$finyear','$month','$categoryid','$Expense','$date')";
                    if (!mysql_query($sqlqur2))
                    {
                    die('Error: ' . mysql_error($con));
                    }?>
                    <script type="text/javascript">
            			window.location.href = "http://localhost/hci535project/index.php"
        	      </script>
               <?php }
            
            else
            {
             ?>
    <form action="index.php?id=1" method="post">
         <input type="hidden" name="ispost" value="1"/>
<div class="col-md-6">
    <div class="box box-warning" style="height: 262px;">
	<div class="box-header">
        	<h3 class="box-title">Add an Expense</h3>
	</div>
	<div class="box-body">
            <label>Expense:</label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input name="expense"type="text"class="form-control">
            </div>
            <br />
            <div class="form-group">
                <label>Categories:</label>
                <?php
                 $sql5 = "SELECT * FROM category";
                        $result3 = mysql_query($sql5);
                        
                        echo'<select name="category"  class="form-control">';
                        while($row = mysql_fetch_array( $result3 )) 
                        { 
                            echo $row['category_name'];
                            echo '<option value="'.$row["category_id"].'">' . $row["category_name"] . '</option>';   
                        }
                        echo '</select>';
                ?>
            </div>
             <div class="form-group">
                <label>Financial Year:</label>
                <?php
                 $sql5 = "SELECT * FROM financial_year";
                        $result3 = mysql_query($sql5);
                        
                        echo'<select name="finyear"  class="form-control">';
                        while($row = mysql_fetch_array( $result3 )) 
                        { 
                           // echo $row['Category_Name'];
                            echo '<option value="'.$row["financial_id"].'">' . $row["financial_year"] . '</option>';   
                        }
                        echo '</select>';
                ?>
            </div>
             <div class="form-group">
                <label>Month:</label>
                <?php
                 $sql5 = "SELECT * FROM Month";
                        $result3 = mysql_query($sql5);
                        
                        echo'<select name="month"  class="form-control">';
                        while($row = mysql_fetch_array( $result3 )) 
                        { 
                            //echo $row['Category_Name'];
                            echo '<option value="'.$row["month_id"].'">' . $row["month_title"] . '</option>';   
                        }
                        echo '</select>';
                ?>
            </div>
            <div class="form-group">
                <label>Date</label>
                 <div class="input-group">
               <input type="text" name="date" id="datepicker">
            </div>
            </div>
            <button style="margin-top: 12px;" class="btn btn-primary" type="submit">Add</button>
        </div>
    </div>
</div>
    </form>
            <?php }?>
	</aside>
	</div>

	<!-- Include all the js stuff -->
	<?php include ('includes/jsLibrary.php') ?>

</body>
</html>