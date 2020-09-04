<?php include ('../database/db.php'); ?>
<?php error_reporting(0); ?>
<?php ob_start(); ?>

<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parents | IR School</title>
	<link rel="shortcut icon" href="#">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
<style>
	
.whole_notice2 {
	height: 350px;
	overflow: scroll;
	background: #e6e6e6;
}
.result_title2 {
	overflow: scroll;
	height: 344px;
}
.tablle h5 {
	text-align: center;
	font-size: 30px;
	margin-top: 46px;
	margin-bottom: 30px;
	font-weight: bold;
	font-style: italic;
}





</style>

</head>
<body>



<section>
	<nav class="navbar navbar-expand-lg navbar-light bg-light full_nav">
  <a class="navbar-brand logoo" href="#"><img src="" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse nav_item" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="about.php">Attendance</a></li>
            <li><a class="nav-link" href="our_branches.php">Library</a></li>        
                <li><a class="nav-link" href="#">Fees</a></li>
           <li><a class="nav-link" href="#">Notice</a></li>
    </ul>
  </div>
</nav>

</section>




<section>
	<div class="top_section">
		<div class="container">
			<div class="row mt-3">

				<?php 
			    	$update_query = "SELECT * FROM `update_profile` "; 
					$update_result = mysqli_query($conn, $update_query);


			    	while ($row = mysqli_fetch_array($update_result)):

			    		$pid = $row ["id"];
			    		$upcoming_exam = $row ["upcoming_exam"];
			    		$due_fee = $row ["due_fee"];
			    		$u_event = $row ["u_event"];
			    		$document = $row ["document"];

				?>
					<div class="col-md-3">
						<div class="up_xm">
							<div class="left">
								<span><i class="fas fa-edit"></i></span>
								<p>Upcoming Exam</p>
							</div>
							<div class="right">
								<p><?php echo $upcoming_exam; ?></p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="up_xm">
							<div class="left">
								<span><i class="fas fa-edit"></i></span>
								<p>Due Fees</p>
							</div>
							<div class="right">
								<p><?php echo $due_fee; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="up_xm">
							<div class="left">
								<span><i class="fas fa-edit"></i></span>
								<p>Upcoming Events</p>
							</div>
							<div class="right">
								<p><?php echo $u_event; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="up_xm">
							<div class="left">
								<span><i class="fas fa-edit"></i></span>
								<p>Documents</p>
							</div>
							<div class="right">
								<p><?php echo $document; ?></p>
							</div>
						</div>
					</div>
					<?php  endwhile; ?>
			</div>
		</div>
	</div>




	<div class="profile_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<?php 
					    	$Childs_profile_query = "SELECT * FROM `parents_child_profile` "; 
							$profile_result = mysqli_query($conn, $Childs_profile_query);


					    	while ($row = mysqli_fetch_array($profile_result)):

					    		$pid = $row ["id"];
					    		$p_img = $row ["p_img"];
					    		$c_name = $row ["c_name"];
					    		$p_name = $row ["p_name"];
					    		$p_gender = $row ["p_gender"];
					    		$p_class = $row ["p_class"];
					    		$p_section = $row ["p_section"];
					    		$p_roll = $row ["p_roll"];
					    		$p_add_id = $row ["p_add_id"];

						?>
					<div class="my_profile mb-3">
						<div class="row">
						
							<div class="col-md-4">
								<div class="my_image">
									<h5><?php echo $c_name;  ?></h5>
									<img src="images/<?php echo $p_img; ?>" alt="">
								</div>
							</div>
							<div class="col md-4">
								<div class="pro_heading">
									<h5>Name  :</h5><br>
									<h5>Gender  :</h5><br>
									<h5>Class  :</h5><br>
									<h5>Section  :</h5><br>
									<h5>Roll  :</h5><br>
									<h5>Admission ID  :</h5><br>
								</div>
							</div>

							<div class="col-md-4">
								<div class="my_info">
									<p><?php echo $p_name;  ?></p><br>
									<p><?php echo $p_gender;  ?></p><br>
									<p><?php echo $p_class;  ?></p><br>
									<p><?php echo $p_section;  ?></p><br>
									<p><?php echo $p_roll;  ?></p><br>
									<p><?php echo $p_add_id;  ?><p><br>
								</div>
							</div>

							
						</div>
						
					</div>
					<?php  endwhile; ?>
				</div>


				
					
                <div class="col-md-5 ">
                	<div class="whole_notice2" style="padding: 10px;">
					<div class="notice">
						<h5>Notice Board</h5>
					</div>
					<?php 
					    	$notice_query = "SELECT * FROM `student_notice` "; 
							$notice_result = mysqli_query($conn, $notice_query);


					    	while ($row = mysqli_fetch_array($notice_result)):

					    		$nid = $row ["id"];
					    		$ndate = $row ["n_date"];
					    		$n_name = $row ["n_name"];
					    		$n_text = $row ["n_text"];
								
							


					?>
					<div class="notice_content">
						<h6><?php echo "{$ndate}"; ?></h6>
						<span><?php echo $n_name; ?></span>
                         <p><?php echo $n_text; ?></p>
					</div>

					 <?php  endwhile; ?>
					 </div>

					 <div class="second_child" >
			
						<div class="col-lg-12 result_title mt-3">
							<h5>All Exam Result</h5><br> 

						</div>
					


						<div class="row">
							<br> <br><br>
							<div class="col-lg-12 mytablee table-responsive" style="overflow-y: scroll; height: 350px;">
								<table class="table table-striped">
							    <thead>
							      <tr>
							        <th>Exam Name</th>
							        <th>Subject</th>
							        <th>Mark</th>
							        <th>Out of</th>
							        <th>Date</th>
							      </tr>
							    </thead>
							    <tbody>
							    	<?php 
							    	$query = "SELECT * FROM `student_all_exam` "; 
									$result = mysqli_query($conn, $query);


							    	while ($row = mysqli_fetch_array($result)):

							    		$studenid = $row ["id"];
							    		$student_exam_name = $row ["s_exam_nanme"];
							    		$student_subject = $row ["s_subject"];
							    		$student_mark = $row ["s_mark"];
							    		$outofmark= $row ["s_outof"];
							    		$sdate = $row ["s_date"];
										
									


							    	?>
							      <tr>
							        <td><?php echo $student_exam_name;  ?></td>
							        <td><?php echo $student_subject;  ?></td>
							        <td><?php echo $student_mark;  ?></td>
							        <td><?php echo $outofmark;  ?></td>
							        <td><?php echo $sdate;  ?></td>
							      </tr>

							     <?php  endwhile; ?>

							    </tbody> 
							  </table>
							  <br> <br><br>
							</div>
						</div>
						</div>

				</div>
				
			</div>
		</div>
	</div>
</section>







<section>
	<div class="all_expenses">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12 tablle">
					<h5>All Expenses</h5>
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">ID NO</th>
					      <th scope="col">Expense Type</th>
					      <th scope="col">Amount</th>
					      <th scope="col">Status</th>
					       <th scope="col">Email</th>
					       <th scope="col">Date</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 

					    	$all_query = "SELECT * FROM `all_expense` "; 
							$expense_result = mysqli_query($conn, $all_query);


					    	while ($row = mysqli_fetch_array($expense_result)):

					    		$main_id = $row ["id"];
					    		$x_id = $row ["x_id"];
					    		$x_type = $row ["x_type"];
					    		$x_amount = $row ["x_amount"];
					    		$x_status = $row ["x_status"];
					    		$x_email= $row ["x_email"];
					    		$x_date = $row ["x_date"];

					   	?>


					    <tr>
					      <th scope="row"> <?php echo $x_id ; ?> </th>
					      <td>  <?php echo $x_type; ?> </td>
					      <td>  $ <?php echo $x_amount; ?> </td>
					      <td>  <?php echo $x_status; ?> </td>
					      <td>  <?php echo $x_email; ?> </td>
					      <td>  <?php echo $x_date; ?> 12/8/19</td>
					    </tr>
					    <?php  endwhile; ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>











<!-- js files here -->
<script src="dashboard/js/jquery-3.3.1.min.js"></script>
<script src="js/fontawesome-all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>