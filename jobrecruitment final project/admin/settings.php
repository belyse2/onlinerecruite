<?php
  session_start();
  if(!isset($_SESSION['email'])) {
    header('location:../login.html');
  }
?>
<html>
<head>
  <title>ADMIN PAGE </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <style>
    body{
      width: 100%;
      margn: 0
    }
    .header {      
      padding: 13px;
      position: fixed;
      width: 100%;
      z-index: 1;
      padding: 5px 10px;
      background-color: #ffffff;
      box-shadow: 0 0 2px rgb(0 0 0 / 30%);
    }
    .title {
      color: #3a3a3a;
      font-size: 25px;
      float: left;
	    font-family: Chiller;  
    }
    .right {
      float: right;
    }
    .logoutbtn {
      padding-left: 20px;
      padding-right: 20px;
    }
    .btn-curve {
      border-radius: 20px
    }
    .sidebar {
      background-color: #3a3a3a;
      padding-top: 70px;
      height: 100%;
      width: 250px;
      position: fixed;
    }
    .menu a {
      text-decoration: none;
      color: #dee2e6;
      display: block;
      padding: 10px;
    }
    .active {
      background-color: #5ca1af;
      color: #f1f1f1;
    }
    .menu a li {
      list-style: none;
    }
    .menu a:hover {
      background-color: #5ca1af;
      color: #f1f1f1;
    }
    .body {
      margin-left: 250px;
      padding: 60px 20px;
    }
  </style>
</head>
<body>
    <div class="wrapper">
      <div class="header">
        <b class="title">Dream Job</b>
        <a href="../logout.php"><button class="right btn btn-sm btn-danger btn-curve logoutbtn">Logout</button></a>
      </div>
      <div class="sidebar">
        <div class="menu">
          <a href="home.php"><li>Home</li></a>
          <a href="employers.php" ><li>Employers</li></a>
          <a href="jobs.php"><li>Jobs</li></a>
          <a href="user.php"><li>Users</li></a>
          <a href="settings.php" class="active"><li>Settings</li></a>
        </div>
      </div>
      <div class="body">
        <table class="table table-bordered table-hover table-condensed" style="100%">
          <thead>
            <tr>
              <th>ID<th>
              <th>Col 1<th>
              <th>Col 2<th>
              <th>Col 3<th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ID<td>
              <td>Col 1<td>
              <td>Col 2<td>
              <td>Col 3<td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>