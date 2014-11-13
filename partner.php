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
<?php
if(ISSET($_POST['invita'])){
function get_rand_id($length)
{
  if($length>0) 
  { 
  $rand_id="";
   for($i=1; $i<=$length; $i++)
   {
   mt_srand((double)microtime() * 1000000);
   $num = mt_rand(1,36);
   $rand_id .= assign_rand_value($num);
   }
  }
return $rand_id;
} 	
	
function assign_rand_value($num)
{
// accepts 1 - 36
  switch($num)
  {
    case "1":
     $rand_value = "a";
    break;
    case "2":
     $rand_value = "b";
    break;
    case "3":
     $rand_value = "c";
    break;
    case "4":
     $rand_value = "d";
    break;
    case "5":
     $rand_value = "e";
    break;
    case "6":
     $rand_value = "f";
    break;
    case "7":
     $rand_value = "g";
    break;
    case "8":
     $rand_value = "h";
    break;
    case "9":
     $rand_value = "i";
    break;
    case "10":
     $rand_value = "j";
    break;
    case "11":
     $rand_value = "k";
    break;
    case "12":
     $rand_value = "l";
    break;
    case "13":
     $rand_value = "m";
    break;
    case "14":
     $rand_value = "n";
    break;
    case "15":
     $rand_value = "o";
    break;
    case "16":
     $rand_value = "p";
    break;
    case "17":
     $rand_value = "q";
    break;
    case "18":
     $rand_value = "r";
    break;
    case "19":
     $rand_value = "s";
    break;
    case "20":
     $rand_value = "t";
    break;
    case "21":
     $rand_value = "u";
    break;
    case "22":
     $rand_value = "v";
    break;
    case "23":
     $rand_value = "w";
    break;
    case "24":
     $rand_value = "x";
    break;
    case "25":
     $rand_value = "y";
    break;
    case "26":
     $rand_value = "z";
    break;
    case "27":
     $rand_value = "0";
    break;
    case "28":
     $rand_value = "1";
    break;
    case "29":
     $rand_value = "2";
    break;
    case "30":
     $rand_value = "3";
    break;
    case "31":
     $rand_value = "4";
    break;
    case "32":
     $rand_value = "5";
    break;
    case "33":
     $rand_value = "6";
    break;
    case "34":
     $rand_value = "7";
    break;
    case "35":
     $rand_value = "8";
    break;
    case "36":
     $rand_value = "9";
    break;
  }
return $rand_value;
}
?>
<?php

$email =$_POST['invita'];

$mess=get_rand_id(6);
$to=$email; 
$subject="Family Budget Planner"; 
$header="From:budgetplanner@mysite.com"; 
$message="Dear User,\n Your friend invite you to use Budget Planner Application \n Use this temporary information to login in \n
\n Temporary username: $email\n Temporary password: $mess \n  click below link to go to the website \n http://localhost:1337/hci535project \n"; 

if(mail($to,$subject,$message,$header)) 
{ 
$_POST['invitationsent']="mail sent successfully";


} 
else 
{ 
$_POST['invitationsent']= "mail not sent..error,  try again"; 

}
}
?>			
            <aside class="right-side">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Partners
					</h1>
				</section>
			</aside>
			
			<aside class="right-side" style="margin-right: 30px;">
				<div class="box box-warning" style="margin-top:15px; margin-left:15px;">
					<div class="box-header">
						<h3 class="box-title">Add Partners</h3>
					</div>
                    <? if(ISSET($_POST['invitationsent'])){echo $_POST['invitationsent']; }?>
					<form method="POST" action="partner.php" >
						<div class="box-body">
							<label>Email:</label>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input class="form-control" type="text" placeholder="Email" name="invita">
							</div>
							<br/>
							
							<div class='box-body pad' style="padding: 0px;">
								<form>
									<textarea class="textarea" placeholder="Send a message to the partner" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</form>
							</div>
							
							<br/>
							<button style="margin-top: 12px;" class="btn btn-primary" type="submit">Send</button>
						</div>
					</form>
				</div>
				
				<div class="box" style="margin-top:15px; margin-left:15px;">
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
