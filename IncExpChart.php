<?php include ('core/init.php'); ?>
<?php include ('core/database/connect.php'); ?>
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

<aside class="right-side">
        <div class="box" style="margin-top:15px;">
                <div class="box-header">
                        <h3 class="box-title"></h3>
                </div>

                <form action="">
                                   <div class="nav-tabs-custom" id="ExpvsCat">
                                       <ul class="nav nav-tabs pull-right">
                                           
                                    <li class="active"><a href="#chart_div" data-toggle="tab">Bar Chart</a></li>
                                    <li><a href="#chart_pie" data-toggle="tab" >Pie Chart</a></li>
                                    <li><a href="#chart_Column" data-toggle="tab" >Line Chart</a></li>
                                    <li class="pull-left header"><i class="fa fa-inbox"></i> Income Vs Expense</li>
                                </ul>
                                <div class="tab-content no-padding">
                                    <!-- Morris chart - Sales -->
                                   <div class="chart tab-pane active" id="chart_div"style="position: relative; height: 300px;"></div>
                   
                                     <div class="chart tab-pane" id="chart_pie" style="position: relative; height: 300px;"></div>
                                     <div class="chart tab-pane" id="chart_Column" style="position: relative; height: 300px;"></div>
                                </div>
                            </div>
                 
                
<?php
 $user_id=$_SESSION['user_id'];
 //echo $user_id;
 $qur = "select income_amount,expense_amount,month_title from expense 
inner join income on 
income.user_id=expense.user_id inner join
 month on
expense.month_id = month.month_id where expense.User_ID=$user_id";
                $sql_result = mysql_query($qur); 
                 //echo $sql_query;
                if (($sql_result)||(mysql_errno($con))) 
                {   
                $result=mysql_query($qur);
                $rowrs=mysql_num_rows($result);
                $rows = array();
                $flag = true;
                $table = array();
                $table['cols'] = array(

    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'Month', 'type' => 'string'),
    array('label' => 'Income', 'type' => 'number'),
    array('label' => 'Expense', 'type' => 'number')                    
   

);

$rows = array();
while($r = mysql_fetch_assoc($sql_result)) {
    $temp = array();
    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (string) $r['month']); 

    // Values of each slice
    $temp[] = array('v' => (int) $r['income_amount']); 
    $temp[] = array('v' => (int) $r['expense_amount']); 
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;
                }
?>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
      
      var options = {
           title: 'Income vs Expense Chart',
          is3D: 'true',
          width: 800,
          height: 300
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      var chart1 = new google.visualization.PieChart(document.getElementById('chart_pie'));
      var chart2 = new google.visualization.ColumnChart(document.getElementById('chart_Column'));
      
      chart.draw(data, options);
      chart1.draw(data, options);
      chart2.draw(data, options);
    }
    </script>
    
    <!--this is the div that will hold the pie chart-->
   
             <!--<button style="margin-top: 12px; margin-left: 15px;" class="btn btn-primary" type="submit">Add</button>-->
                        
                </form>
        </div>

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