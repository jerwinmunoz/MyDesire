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
                    <li><a data-toggle="tooltip" data-placement="bottom" title="News & Announcements"  href="news.php">News & Announcements</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="Home" href="index.php">Home</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="About" href="about.php">About</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="Admission" href="admission.php" >Admission</a></li>
                    <li class="active"><a href="contact.php" data-toggle="tab">Contact Us</a></li>
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
                                  <div class="panel panel-success">
                                          <div class="panel-heading ">Contact Us</div>

                                          <div class="panel-body">
                                              <br>
                                                  <address>
                                                        <strong><span class="glyphicon glyphicon-phone-alt"></span> Telephone</strong><br>
                                                        <ul>
                                                            <li>(632) 520-1010</li>
                                                            <li>(632) 520-1011</li>
                                                            <li>(632) 609-1027</li>
                                                        </ul>
                                                  </address>
                                              <br>
                                                  <address>
                                                        <strong><span class="glyphicon glyphicon-print"></span> Fax</strong><br>
                                                        <ul>
                                                            <li>336-5555-2222</li>
                                                            <li>331-2231-1556</li>
                                                        </ul>
                                                  </address>
                                              <br>
                                                  <address>
                                                        <strong><span class="glyphicon glyphicon-envelope"></span> E-mail Address</strong><br>
                                                        <ul>
                                                            <li>saintjoseph_academy@gmail.com</li>
                                                            <li>stjoseph_depaul_academy@yahoo.com</li>
                                                        </ul>
                                                  </address>
                                              <br>
                                                  <address>
                                                        <strong>For Inquiries :</strong><br><br>
                                                        <div class="col-md-5">
                                                        <p style="text-indent:20px">
                                                          <input type="text" class="form-control" placeholder="Name" ></input><br>
                                                          <input type="text" class="form-control" placeholder="E-mail" ></input><br>
                                                          <input type="text" class="form-control" placeholder="Phone Number" ></input><br>
                                                          <textarea  rows="6" class="form-control" placeholder="Type Here."></textarea><br>
                                                        </p>
                                                  </address>
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
