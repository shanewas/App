<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css" >
        <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <!-- Button to trigger modal --> 
            <a href="#myModal" data-toggle="modal"> <i class="glyphicon glyphicon-plus"></i> Add student </a>
            <!-- Modal -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Contact Form</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" name="commentform" method="post" action="Page_parts/Add_student/check.php">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first_name">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last_name">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="email">Email Address</label>
                                    <div class="col-md-6 input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="comment">Question or Comment</label>
                                    <div class="col-md-6">
                                        <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <button type="submit" value="Submit" class="btn btn-custom pull-right">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- End of Modal body -->
                    </div><!-- End of Modal content -->
                </div><!-- End of Modal dialog -->
            </div><!-- End of Modal -->
        </div>

        <script type='text/javascript' src="Scripts/jQuery.js"></script>


        <script type='text/javascript' src="Scripts/Bootstrap.js"></script>


        <script type='text/javascript' src="Scripts/Script.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js"></script>

    </body>
</html>
