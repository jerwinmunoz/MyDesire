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
                    <li><a data-toggle="tooltip" data-placement="bottom" title="News & Announcements" href="news.php" data-toggle="tab">News & Announcements</a></li>
                    <li><a data-toggle="tooltip" data-placement="bottom" title="Home" href="index.php">Home</a></li>
                    <li class="active"><a href="about.php" data-toggle="tab">About</a></li>
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
                      <!-- This is for ABOUT -->
                      <div class="tab-pane active" id="home">
                          <!-- ROW History-->
                          <div class="row" >
                              <!-- History -->
                              <div class="col-md-9">

                                  <!-- HISTORY PANEL -->
                                  <div class="panel panel-success">
                                          <div class="panel-heading ">History of Saint Joseph De Paul Academy</div>

                                          <div class="panel-body">
                                              <br>
                                              <p class="text-justify" style="text-indent:50px;">SAINT JOSEPH DE PAUL ACADEMY (SJDPA) is an educational institution founded by a woman whose ultimate aim in life is to put up a school solely committed to serve. Imelda A. Olivera, having no child of her own, she enjoys looking children with innocent faces and dream if spending her life with children. Guided by the virtues and life of St. Joseph, she wants to be foster parent for the young together with her supportive partener in life, Paul, a belgian who has a second name Joseph, and his brother, Nolito A. Olivera, a seasoned educator helped her made this possible. It was in July 9, 2005 when the decision of putting up SJDPA and to start opening for S.Y 2006-2007 was finally made.
                                                Armed with the education to pursue this dream, combined efforts were made by the family members and the Permits to operate from the Department of Education for NKP, Grade 1-5 and 1st-2nd year were released prior to the opening of classes.
                                              </p>
                                              <br><br>
                                          </div>
                                  </div>
                                  <!-- HISTORY PANEL -->

                                  <br>

                                  <!-- MISSION & VISION PANEL -->
                                  <div class="panel panel-success">
                                          <div class="panel-heading ">Mission & Vision</div>

                                          <div class="panel-body">
                                              <br>
                                              <p class="text-justify" style="text-indent:50px;">
                                                  St. Joseph de Paul Academy is an educational community that upholds the right of every child to relevant high standard quality educaiton embedded in the life, values and virtues of St. Joseph.
                                              </p>
                                              <br>
                                              <p class="text-justify" style="text-indent:50px;">
                                                  St. Joseph de Paul Academy commits to :
                                              </p>
                                              <p class="text-justify" style="text-indent:50px;"> - Uphold the dignity of the human person through higher standard of learning</p>
                                              <p class="text-justify" style="text-indent:50px;"> - Make a stand for truth, justice, love, peace, freedom, respect for life and mother earth.</p>
                                              <p class="text-justify" style="text-indent:50px;"> - Instill the values and habits of discipline and hard work.</p>
                                              <br>
                                          </div>
                                  </div>
                                  <!-- MISSION & VISION PANEL -->

                              </div>
                              <!-- History -->

                              <!-- Website Right Navigation -->
                              <?php include("include/website_right_nav.php"); ?> 
                              <!-- Website Right Navigation -->

                          </div>
                          <!-- ROW History -->
                      </div>
                      <!-- ABOUT -->
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
