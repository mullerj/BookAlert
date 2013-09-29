<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Comic Alert - Set up alert for title</title>
    <meta name="viewport" content="width=device-width" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ComicAlert</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="setupalert.php">Alert Setup</a>
                    </li>
                    <li>
                        <a href="bulkadd.php">Enter item</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <div class="container" style="padding-top:50px;">
        <form role="form">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" />
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" />
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Enter comic series" />
            </div>
            <div class="form-group">
                <label for="issue">Issue</label>
                <input type="text" class="form-control" id="issue" placeholder="Enter comic issue" />
            </div>
            <div class="form-group">
                <label for="publisher">Publisher</label>
                <input type="text" class="form-control" id="publisher" placeholder="Enter comic publisher" />
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="container">
        <p>Copyright 2013 ComicAlert</p>
    </div>
</body>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</html>
