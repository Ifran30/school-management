<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IR School</title>
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
    <link rel="stylesheet" href="css/responsive.css">


<style>
.all_par {
  background: #d5d0d0;
  height: 40px;
  overflow: hidden;
}

.all_par h3 {
  font-size: 20px;
  margin: 5px 4px 0px 0px;
  overflow: hidden;
}
.srchbar {
  margin-top: 5px;
}
.leftside ul {
  list-style: none;
}
.leftside li {
  display: inline-block;
}
.leftside ul li a {
  text-decoration: none;
  color: #6a6a6a;
  padding: 1px 70px 1px 0px;
  margin-top: 5px !important;
  float: left;
  margin-left: -36px;
  font-weight: normal;
  font-size: 14px;
}
.leftside ul li a:hover {
  
  color: #333;
 font-weight: bold;
}
</style>










</head>
<body>











<<section>
  <nav class="navbar navbar-expand-lg navbar-light bg-light full_nav_admin">
  <div class="collapse navbar-collapse nav_item_admin" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="admin_id.php">Admin</a></li>
      <li><a class="nav-link" href="parent.php">Parent</a></li>   
            <li><a class="nav-link" href="parent.php">Parent</a></li>        
                <li><a class="nav-link" href="teacher.php">Teacher</a></li>
           <li><a class="nav-link" href="class.php">Class</a></li>
              <li><a class="nav-link" href="subject.php">Subject</a></li>
              <li><a class="nav-link" href="assigned_class.php">Assigned Class</a></li>
  
    </ul>
  </div>
</nav>

</section>




<section>
  <div class="all_par">
    <div class="container">
      <div class="row">
        <div class="col-md-6 leftside">
          <ul>
            <li><a href="student.php">All Student</a></li>
            <li><a href="add_student.php">Add Student</a></li>
            <li><a href="">Delete Student</a></li>

          </ul>
        </div>
        <div class="col-md-6 srchbar">
          <form class="POST">
             <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>





<section>
  <div class="container text-center">
    <form method="POST" action="insertstudent.php">
      <span>Student ID:</span>
      <input type="text" placeholder="student ID" name="sid"> <br>
       <span>Name:</span>
      <input type="text" placeholder="your name" name="ssubname"> <br>
       <span>Parent ID:</span>
      <input type="text" placeholder="Parent ID" name="subpid"> <br>
       <span>Class ID:</span>
      <input type="text" placeholder="Class ID" name="cid"> <br>
       <span>Admin ID:</span>
      <input type="text" placeholder="Admin ID" name="adid"> <br>
      <input type="submit" value="Submit">
    </form>
  </div>
</section>

































<!-- js files here -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/fontawesome-all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>