<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <script type="text/javascript" src="Scripts/Script.js"></script>
    </head>
    <body>
        <div class="col-md-3">
            <!-- Left column -->
            <!--<a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>  -->

            <hr>

            <ul class="list-unstyled">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
                        <h5 class="glyphicon glyphicon-user"> Students <i class="glyphicon glyphicon-chevron-down"></i></h5>
                    </a>
                    <ul class="list-unstyled collapse in" id="userMenu">
                        <li>





                            <div class="container">
                                <!-- Button to trigger modal --> 
                                <a href="#myModal" role="button" class="btn" data-toggle="modal"> <i class="glyphicon glyphicon-plus"></i> Add student </a>
                                <!-- Modal -->
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Contact Form</h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                    include("Page_parts/Add_student/form.php");
                                                ?>
                                            </div><!-- End of Modal body -->
                                        </div><!-- End of Modal content -->
                                    </div><!-- End of Modal dialog -->
                                </div><!-- End of Modal -->
                            </div>








                            <!--<a href="#"><i class="glyphicon glyphicon-plus"></i> Add </a>--></li>
                        <li><a href="#"><i class="glyphicon glyphicon-align-left"></i> List of Students <!--<span class="badge badge-info">4</span>--></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Results </a></li>
                        <!--<li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> Staff List</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-flag"></i> Transactions</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>-->
                    </ul>
                </li>

                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
                        <h5 class="glyphicon glyphicon-briefcase"> Departments <i class="glyphicon glyphicon-chevron-right"></i></h5>
                    </a>

                    <ul class="list-unstyled collapse" id="menu2">
                        <li><a href="#"> Bachelor of Science in Computer Science and Engineering (BSCSE) </a>
                        </li>
                        <li><a href="#"> Bachelor of Science in Electrical and Electronic Engineering (BSEEE) </a>
                        </li>
                        <li><a href="#"> Bachelor of Architecture </a>
                        </li>
                        <li><a href="#"> Bachelor of Pharmacy </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3">
                        <h5 class="glyphicon glyphicon-book"> Courses <i class="glyphicon glyphicon-chevron-right"></i></h5>
                    </a>

                    <!--<ul class="list-unstyled collapse" id="menu3">
                        <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>-->
                </li>
            </ul>


            <!-- <hr>

             <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources</strong></a>  

             <hr>

             <ul class="nav nav-pills nav-stacked">
                 <li class="nav-header"></li>
                 <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
                 <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
                 <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
                 <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
                 <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
                 <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
             </ul>

             <hr>
             <ul class="nav nav-stacked">
                 <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Playground</a></li>
                 <li><a href="/tagged/bootstrap-3">Bootstrap 3</a></li>
                 <li><a href="/61518" title="Bootstrap 3 Panel">Panels</a></li>
                 <li><a href="/61521" title="Bootstrap 3 Icons">Glyphicons</a></li>
                 <li><a href="/61523" title="Bootstrap 3 ListGroup">List Groups</a></li>
                 <li><a href="#">GitHub</a></li>
                 <li><a href="/61518" title="Bootstrap 3 Slider">Carousel</a></li>
                 <li><a href="/62603">Layout</a></li>
             </ul>
            -->
            <hr>
        </div><!-- /col-3 -->
    </body>
</html>
