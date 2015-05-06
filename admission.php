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
                    <li><a data-toggle="tooltip" data-placement="bottom" title="News & announcements" href="news.php">News & Announcements</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="Home" href="index.php">Home</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="About" href="about.php" data-toggle="tab">About</a></li>
                    <li class="active"><a href="admission.php" data-toggle="tab">Admission</a></li>
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
                      <!-- This is for Admission -->
                      <div class="tab-pane active" id="home">
                          <!-- ROW Registration & Admission-->
                          <div class="row" >
                              <!-- Registration & Admission -->
                              <div class="col-md-9">

                                  <!-- Registration & Admission Panel --> 
                                  <div class="panel panel-success">
                                          <div class="panel-heading ">Registration & Admission</div>

                                          <div class="panel-body">
                                              <br>
                                              <p class="text-justify" style="text-indent:50px;">
                                                  Saint Joseph De Paul Academy (SJDPA) is a geared toward providing quality academic program made available to as many children possible. Admission is based on the credential and willingness of parents to collaborate and cooperate with the school.
                                              </p>
                                              <br>
                                          </div>
                                  </div>  
                                  <!-- Registration & Admission Panel --> 

                                  <br>

                                  <!-- Requirements Panel --> 
                                  <div class="panel panel-success">
                                          <div class="panel-heading">REQUIREMENTS</div>

                                          <!-- Requirements Body -->
                                          <div class="panel-body">
                                              <ul id="myTab1" class="nav nav-tabs">
                                                        <li class="active"><a href="#pre" data-toggle="tab">Pre-School</a></li>
                                                        <li class=""><a href="#grade" data-toggle="tab">Grade School</a></li>
                                                        <li class=""><a href="#high" data-toggle="tab">High School</a></li>
                                                        <li class=""><a href="#old" data-toggle="tab">Old Student</a></li>
                                              </ul>

                                              <div id="myTabContent1" class="tab-content">
                                                  <div class="tab-pane fade active in" id="pre">
                                                        <br><p>1. Age Requirements</p>
                                                            <ul>
                                                                  <li>Nursery: Must between 3-4 years old by June of academic year.</li>
                                                                  <li>Kindergarten: Must between 4-5 years old by June of academic year. </li>
                                                                  <li>Preparatory: Must between 5-6 years old by June of academic year. </li>
                                                            </ul>
                                                        <p>2. Present original and submit photocopy of Birth Certificate.</p>
                                                        <p>3. Submit 4 pieces 1x1 most recent I.D picture.</p>
                                                  </div>
                                                  <div class="tab-pane fade " id="grade">
                                                            <br><p>Grade School Level</p>
                                                              <p>Grade 1</p>
                                                                  <ul>
                                                                      <li> Grade 1 must be six (6) years old by june of the academic year.</li>
                                                                      <li> Must pass the entrance examination and interview.</li>
                                                                      <li> Submit 4 pieces 1x1 most recent I.D picture.</li>
                                                                  </ul>
                                                              <p>Grade 2-6</p>
                                                                <ul>
                                                                      <li>Submit progress report card (F-138) and certificate of Good Moral Character signed by authorities of last school attended.</li>
                                                                      <li>Present Original and submit photocopy of Birth Certificate.</li>
                                                                      <li>Submit 4 pieces 1x1 most recent I.D picture.</li>
                                                                </ul>
                                                  </div>

                                                  <div class="tab-pane fade " id="high">
                                                            <br><p>High School Level</p>
                                                                  <ul>
                                                                      <li>Submit progress report card (F-138) and certificate of Good Moral Character signed by authorities of last school attended.</li>
                                                                      <li>Must pass entrance examination and interview.</li>
                                                                      <li>Submit 4 pieces 1x1 most recent I.D picture.</li>
                                                                  </ul>
                                                  </div>

                                                  <div class="tab-pane fade " id="old">
                                                            <br><p>For Old Students Only</p>
                                                                  <ul>
                                                                      <li>Present progress report card (F-138) upon enrollment.</li>
                                                                      <li>Submit 4 pieces 1x1 most recent I.D picture.</li>
                                                                  </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- Requirements Body -->
                                  </div>
                                  <!-- Requirements Panel --> 
                              </div>
                              <!-- Registration & Admission -->

                              <!-- Website Right Navigation -->
                              <?php include("include/website_right_nav.php"); ?> 
                              <!-- Website Right Navigation -->
                          </div>
                          <!-- ROW Registration & Admission -->
                      </div>
                      <!-- This is for Admission -->
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
