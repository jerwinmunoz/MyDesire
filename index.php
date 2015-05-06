<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  </head>


  <body>
      <?php 
          // This is for the headers of the websites
          include("include/website_header.php");
      ?>
                <!-- Navigation tabs -->
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tooltip" data-placement="bottom" title="News & Announcements" href="news.php">News & Announcements</a></li>
                    <li class="active"><a href="index.php" data-toggle="tab">Home</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="About" href="about.php">About</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="Admission" href="admission.php">Admission</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="Contact Us" href="contact.php">Contact Us</a></li>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <button data-toggle="tooltip" data-placement="bottom" title="Search" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </form>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                      <!-- This is for HOME -->
                      <div class="tab-pane active" id="home">
                          <!-- ROW WELCOME-->
                          <div class="row" >
                              <!-- WELCOME -->
                              <div class="col-md-9">
                                  <div class="panel panel-success">
                                          <div class="panel-heading ">Welcome!</div>

                                          <div class="panel-body">
                                              <br>
                                              <strong>Dear Parents & Students, </strong>
                                              <br><br>
                                              <p class="text-justify" style="text-indent:50px;">
                                                                          Welcome to St. Joseph de Paul Academy official website. Welcome to School Year 2014-2015 in the implementation of the K-12 program, SJDPA is now ready to take its initial step towards its success. I hope that your continues support and cooperation will be given for the betterment of your child's schooling.
                                                                          This school year we'll see to it that our mission/vission be achieved. This website will serve as your guide and reference on what is happening and what will happen to the school. May this communication strengthen our collaborative partnership towards your child's total development
                                                                          and in behalf of the administration, faculty and staff, <em>Welcome to the josephian family</em>.
                                              </p>
                                              <br><br><br>
                                              <blockquote class="blockquote-reverse">
                                                <p>
                                                  " Educate the whole child... spiritually, academically, physically, <br>socially, esthetically and emotionally. "
                                                </p>
                                                  <footer><cite title="Source Title">SJDPA Motto </cite></footer>
                                              </blockquote>
                                              <br><br><br>
                                              <blockquote>
                                                <p>
                                                  " Education is the only thing that a person could acquire and cannot steal or take by others and being rich is not about how much money you have, its about how much knowledge you have. "
                                                </p>
                                                  <footer><cite title="Source Title">TheLegend1010</cite></footer>
                                              </blockquote>
                                          </div>
                                  </div>
                              </div>
                              <!-- WELCOME -->

                              <!-- LOG IN PANEL -->
                              <div class="col-md-3">
                                  <div class="panel panel-success">
                                    <div class="panel-heading">
                                      <t style="color:#0088CC;"><b>Login</b></t> 
                                      <t style="color:black;">Panel</t></h3>
                                    </div>
                                    <div class="panel-body">
                                       <form class="form-signin" role="form" name="login_form" method="post" action="">
                                          <div class="input-prepend">
                                              <span class="glyphicon glyphicon-user"></span> Username 
                                              <input data-toggle="tooltip" data-placement="bottom" title="Enter your username" type="text" name="username" class="form-control" required autofocus>
                                                  <br/>
                                              <span class="glyphicon glyphicon-lock"></span> Password
                                              <input data-toggle="tooltip" data-placement="bottom" title="Enter your password" type="password" name="password" class="form-control"  required>
                                              
                                              <label class="checkbox">
                                                  <input type="checkbox" value="remember-me"> Remember me
                                              </label>

                                              <a href="enrollment/student_admission.php"><b>Enroll now!</b></a>
                                              <button class="btn btn-md btn-default btn-block" type="submit" name="login" value="Login">Sign in</button>
                                          </div>
                                        </form>
                                  </div>
                                  <br>
                                  <div>
                                        <a href="www.facebok.com"><img data-toggle="tooltip" data-placement="bottom" title="Like us on Facebook" src="design/img/facebook.png" width="40px" height="40px"></a>
                                        <a href="www.twitter.com"><img data-toggle="tooltip" data-placement="bottom" title="Follow us on Twitter" src="design/img/twitter.png" width="40px" height="40px"></a>
                                        <a href="www.youtube.com"><img data-toggle="tooltip" data-placement="bottom" title="Follow us on Youtube" src="design/img/youtube.png" width="40px" height="40px"></a>
                                        <a href="www.rss.com"><img data-toggle="tooltip" data-placement="bottom" title="Subscribe to our RSS feeds" src="design/img/rss.png" width="40px" height="40px"></a>
                                  </div>
                              </div>
                              <!-- LOG IN PANEL -->
                          </div>
                          <!-- ROW WELCOME -->

                          <div class="container">
                          <!-- Core Values & Qualities -->
                              <div class="row">

                                  <div class="col-md-6">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">Josephian Core Values</li>
                                            <li class="list-group-item list-group-item-default">Commited</li>
                                            <li class="list-group-item list-group-item-default">Concern</li>
                                            <li class="list-group-item list-group-item-default">Cooperative</li>
                                        </ul>
                                  </div>

                                  <div class="col-md-6">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">Josephian Qualities</li>
                                            <li class="list-group-item list-group-item-default"><p class="text-justify">Hardworking l Resourceful l Creative</p></li>
                                            <li class="list-group-item list-group-item-default">Loyal l Courteous l Honest </li>
                                            <li class="list-group-item list-group-item-default">God-fearing l Nature Lover l Responsible</li>
                                        </ul>
                                  </div>
                              </div>
                          <!-- Core Values & Qualities -->
                        </div>
                        
                      </div>
                      <!-- HOME -->
                </div>
                <!-- Tab panes -->
          </div>
          <!-- First Cut (see web_header.php) -->

      
      <?php
        include("include/website_footer.php");

        // This is for including bootstrap
        include("include/bootstrap.php");

        // This is for the connection
        include("include/connection.php");

       
        // If a user will log in
        if(isset($_POST['login'])){
              $username = $_POST['username'];
              $password = $_POST['password'];

              //This is for student's account
              $query = mysql_query("SELECT * FROM account WHERE username = '$username' AND password='$password' AND account_type='student' AND account_status='active'");
              $count = mysql_num_rows($query);
              if($count!=0){
                while($row = mysql_fetch_row($query)){
                             $username = $row[0];
                      }
                session_start();
                $_SESSION['username'] = $username;
                header("location:student/index.php?username=$username");
              }
              else {
               header("location:index.php?invalid");
              }

              //This is for inactive student's account
              $query = mysql_query("SELECT * FROM account WHERE username = '$username' AND password='$password' AND account_type='student' AND account_status='inactive'");
              $count = mysql_num_rows($query);
              if($count!=0){
                while($row = mysql_fetch_row($query)){
                             $username = $row[0];
                      }
                session_start();
                $_SESSION['username'] = $username;
                header("location:student/inactive_student.php?username=$username");
              }

              //This is for administrator's account
              $query = mysql_query("SELECT * FROM account WHERE username = '$username' AND password='$password' AND account_type='administrator' AND account_status='active'");
              $count = mysql_num_rows($query);
              if($count!=0){
                session_start();
                header("location:administrator/index.php");
                $_SESSION['username'] = $username;
              }

              //This is for teacher's account
              $query = mysql_query("SELECT * FROM account WHERE username = '$username' AND password='$password' AND account_type='teacher' AND account_status='active'");
              $count = mysql_num_rows($query);
              if($count!=0){
                session_start();
                header("location:teacher/index.php?username=$username");
                $_SESSION['username'] = $username;
              }
        }
      ?>
      <?php

if(isset($_GET['invalid']))
{
?>
<script>
 $(function(){

  alert("Invalid Login");
  });  
</script>
<?php
}
?>
  </body>
</html>
