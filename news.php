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
                    <li class="active"><a href="news.php" data-toggle="tab">News & Announcements</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="Home" href="index.php">Home</a></li>
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
                      <!-- This is for NEWS -->
                      <div class="tab-pane active" id="home">
                          <!-- ROW NEWS-->
                          <div class="row" >
                              <!-- NEWS -->
                              <div class="col-md-9">
                                    <div class="col-md-12">
                                        <!-- Carousel -->
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                  <div class="item active">
                                                    <img width="100%" height="100%" src="design/img/school.jpg" alt="...">
                                                    <div class="carousel-caption">
                                                       Caption
                                                    </div>
                                                  </div>
                                                  <div class="item">
                                                    <img width="100%" height="100%" src="design/img/1.jpg" alt="...">
                                                    <div class="carousel-caption">
                                                        Caption
                                                    </div>
                                                  </div>
                                                  <div class="item">
                                                    <img width="100%" height="100%" src="design/img/2.jpg" alt="...">
                                                    <div class="carousel-caption">
                                                        Caption
                                                    </div>
                                                  </div>
                                                  <div class="item">
                                                    <img width="100%" height="100%" src="design/img/3.jpg" alt="...">
                                                    <div class="carousel-caption">
                                                        Caption
                                                    </div>
                                                  </div>
                                                  <div class="item">
                                                    <img width="100%" height="100%" src="design/img/4.jpg" alt="...">
                                                    <div class="carousel-caption">
                                                        Caption
                                                    </div>
                                                  </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                        </div>
                                        <!-- Carousel -->
                                    </div>

                                    <p>&nbsp;</p>

                                    <div class="panel panel-success">
                                            <div class="panel-heading ">News & Announcements</div>

                                            <div class="panel-body">
                                                <br>
                                                    <?php
                                                          // This is for the connection
                                                          include("include/connection.php");

                                                          // This is for getting the announcements
                                                          $query_getAnnouncements = mysql_query("SELECT * FROM announcement 
                                                                                                    ORDER BY announcementIdno DESC LIMIT 5");

                                                          while($row = mysql_fetch_assoc($query_getAnnouncements)){

                                                                // This is for announcement title
                                                                echo("<address>");
                                                                      echo("<strong>".$row['announcement_title']."</strong><br>");
                                                                      echo("<small>Date Published : ".$row['date']."</small><br>");
                                                                      echo("<small>Published By : ".$row['postedBy']."</small>");
                                                                echo("</address>");

                                                                // This is for the announcement image
                                                                if($row['announcement_image'] != ''){
                                                                    echo("<p class='text-center'><img src='administrator/images/announcement/".$row['announcement_image']."' width='60%' height='150'></p>");
                                                                }

                                                                // This is for announcement body
                                                                echo("<p class='text-justify' style='text-indent:50px;''>");
                                                                      echo($row['announcement_body']);
                                                                echo("</p>");

                                                                echo("<br>");
                                                                echo("<hr>");
                                                                echo("<br>");
                                                          }
                                                    ?>
                                                <br>
                                            </div>
                                    </div>
                              </div>
                              <!-- NEWS -->

                              <!-- Website Right Navigation -->
                              <?php include("include/website_right_nav.php"); ?> 
                              <!-- Website Right Navigation -->

                          </div>
                          <!-- ROW NEWS -->
                      </div>
                      <!-- NEWS -->
                </div>
                <!-- Tab panes -->
          </div>
          <!-- First Cut (see web_header.php) -->
    </div>
    <!-- Second Cut (see web_header.php) -->

      
      <?php
        // This is for including bootstrap
        include("include/bootstrap.php");
        include("include/website_footer.php");
      ?>
  </body>
</html>
