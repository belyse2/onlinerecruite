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
          <a href="home.php" class="active"><li>Home</li></a>
          <a href="employers.php"><li>Employers</li></a>
          <a href="jobs.php"><li>Jobs</li></a>
          <a href="user.php"><li>Users</li></a>
          <a href="settings.php"><li>Settings</li></a>
        </div>
      </div>
      <div class="body">
        <?php
        $conn= mysqli_connect ("localhost","root","","jobrecruitment");
        $query="SELECT * FROM form";
        $query_run=mysqli_query($conn,$query);
        
        ?>
        <table class="table table-bordered table-hover table-condensed" style="100%">
          <thead>
            <tr>
              <th>ID<th>
              <th>First Name<th>
              <th>Last Name<th>
              <th>Middle Name<th>
              <th>Current Address<th>
              <th>Permanant Address<th>
              <th>Phone<th>
              <th>Email<th>
              <th>CV<th>
              <th>Position<th>
              <th>Current Imployed<th>
              <th>Start Date<th>
              <th>EDIT<th>
              <th>DELETE<th>
            </tr>
          </thead>
          <tbody>
          <?php
          if(mysqli_num_rows($query_run)>0)
          {
           while($row=mysqli_fetch_assoc($query_run))
           {
             
              ?>

            <tr>
              <td><?php echo$row['id']; ?><td>
              <td> <?php echo$row['firstname']; ?><td>
              <td> <?php echo$row['lastname']; ?><td>
              <td><?php echo$row['middlename']; ?><td>
              <td><?php echo$row['currentaddress']; ?><td>
              <td><?php echo$row['permanantaddress']; ?><td>
              <td><?php echo$row['phone']; ?><td>
              <td><?php echo$row['emal']; ?><td>
              <td><?php echo$row['cv']; ?><td>
              <td><?php echo$row['currentimployed']; ?><td>
              <td><?php echo$row['startdate']; ?><td>
              <td><?php echo$row['availability']; ?><td>
              <td>
                <form action="apply.php" methode="POST">
                  <input type="hidden" name="edit_id" value="<?php echo$row['id']; ?>">
                <button type="submit"  name="edit_btn"class="btn btn-success"> EDIT</button>
           </form>
              <td>
              <td>
                <button type="submit" class="btn btn-danger"> DELETE</button>
              <td>
            </tr>
            <?php
           }
          

          }
          else{
            echo"no record found";
          }
          
          
          ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>