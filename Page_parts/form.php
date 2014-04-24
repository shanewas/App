<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
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

        <script type='text/javascript' src="Scripts/jQuery.js"></script>


        <script type='text/javascript' src="Scripts/Bootstrap.js"></script>


        <script type='text/javascript' src="Scripts/Script.js"></script>

    </body>
</html>
