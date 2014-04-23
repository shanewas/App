
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Application</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css" >
    </head>
    <body  >
        <?php
        include("Page_parts/header.php");
        ?>

        <!-- Main -->
        <div class="container">


            <div class="row">
                <?php
                    include("Page_parts/left_column.php");
                ?>
                <div class="col-md-9">

                    <!-- column 2 -->	
                    <ul class="list-inline pull-right">
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                        <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
                    </ul>
                    <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>  

                    <hr>

                    <div class="row">



                        <!-- center left-->	
                        <div class="col-md-6">
                            <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>

                            <hr>

                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-primary col-sm-3">
                                    <i class="glyphicon glyphicon-plus"></i><br>
                                    Service
                                </a>
                                <a href="#" class="btn btn-primary col-sm-3">
                                    <i class="glyphicon glyphicon-cloud"></i><br>
                                    Cloud
                                </a>
                                <a href="#" class="btn btn-primary col-sm-3">
                                    <i class="glyphicon glyphicon-cog"></i><br>
                                    Tools
                                </a>
                                <a href="#" class="btn btn-primary col-sm-3">
                                    <i class="glyphicon glyphicon-question-sign"></i><br>
                                    Help
                                </a>
                            </div>


                            <?php
                            include("Page_parts/Panels/report_panel.php");
                            ?>             

                            <?php
                            include("Page_parts/Panels/tabs.php");
                            ?>

                            <hr>

                            <?php
                            include("Page_parts/Panels/new_requests.php");
                            ?>
                        </div><!--/col-->
                        <div class="col-md-6">
                            <?php
                            include("Page_parts/Panels/notice.php");
                            ?>

                            <?php
                            include("Page_parts/Panels/post_request.php");
                            ?>

                            <?php
                            include("Page_parts/Panels/engagement.php");
                            ?>

                        </div><!--/col-span-6-->

                    </div><!--/row-->

                    <?php
                    include("Page_parts/Panels/discussions.php");
                    ?>
                </div><!--/col-span-9-->
            </div>

        </div>
        <!-- /Main -->


        <?php
        include("Page_parts/footer.php");
        ?>
        <?php
        include("Page_parts/model.php");
        ?>





        <script type='text/javascript' src="Scripts/jQuery.js"></script>


        <script type='text/javascript' src="Scripts/Bootstrap.js"></script>


        <script type='text/javascript' src="Scripts/Script.js"></script>

    </body>
</html>
<?php
include("Database/connection.php");
?>