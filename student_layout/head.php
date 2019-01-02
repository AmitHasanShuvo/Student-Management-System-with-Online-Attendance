<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/techer.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="student_profile.php">Student Management System</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-secret" aria-hidden="true">
Hasan</i><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="color:black;font-weight:normal">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <div class="container-fluid">
 <div class="row">
    <div class="col-sm-2">
       <br><br>
        <ul id="side_Menu" class="nav nav-pills nav-stacked">
           <li class="active"><a href="../Copy of layout/student_profile.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a></li>
           <li><a href="student_profile.php"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Your Profile</a></li>
           <li><a href="viewattent.php"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;&nbsp;View Attendence</a></li>

       <li><a href="techerlist.php"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Techer List</a></li>
           <li><a href="notic.php"><span class="glyphicon glyphicon-equalizer"></span>&nbsp;&nbsp;Notice</a></li>

            
        </ul>
        
    </div><!-- Ending side area-->