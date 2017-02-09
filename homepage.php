<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Home</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


    <!-- Latest compiled and minified CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


    <!-- Waves Effect Css -->
    <link href="css/waves.css" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/tm_docs.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">


</head>

<body style="padding-top: 70px;">

<nav class="navbar navbar-inverse navbar-fixed-top nav-down" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SmartGov</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Οι Ειδικοί <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="max-height: 400px; overflow: hidden; overflow-y: auto;">
                        <li role="separator" class="divider"></li>
                        <li><a href="otherbets_form.php?user_name=adonis">adonis</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="otherbets_form.php?user_name=captain">captain</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="otherbets_form.php?user_name=ewq">ewq</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="otherbets_form.php?user_name=marios">marios</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="otherbets_form.php?user_name=q">q</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="otherbets_form.php?user_name=stelios">stelios</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="otherbets_form.php?user_name=w">w</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Άλλοι Χρήστες <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-jq-dropdown="#jq-dropdown-3"
                       role="button" aria-haspopup="true" aria-expanded="false">Example <span class="caret"></span></a>
                </li>

                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="addModal.php" data-toggle="modal" data-target="#addModal" data-backdrop="static"><span
                            class="glyphicon glyphicon-pencil"></span> Add new Prediction</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Welcome adnscut@gmail.com <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="mybets_form.php"><span class="glyphicon glyphicon-folder-open"></span> My
                                Predictions</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="php/logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div class="container" id="loader">
    <div class="row">
        <div class="col-lg-4">

            <a href="userpage.php">
                <div class="tm_view tm_view_fourth">
                    <img src="images/users.png" class="img-responsive img-thumbnail" style="height: 256px; width: 256px;" alt="">
                    <div class="tm_mask">
                        <h2>USERS</h2>
                        <p>Add simple users or administrator users</p>
                        <a href="" class="btn">Add New User</a>
                        <a href="userpage.php" class="btn">All Users</a>
                    </div>
                </div>
            </a>

        </div>

        <div class="col-lg-4">

            <a href="Fcmpage.php">
                <div class="tm_view tm_view_fourth">
                    <img src="images/FCM.png" class="img-responsive img-thumbnail" style="height: 256px; width: 256px;" alt="">
                    <div class="tm_mask">
                        <h2>Fuzzy Gognitive Maps</h2>
                        <p>Click to see all FCMaps</p>
                        <a href="userpage.php" class="btn">Create New FCM</a>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4">

            <a href="userpage.php">
                <div class="tm_view tm_view_fourth">
                    <img src="images/reports.png" class="img-responsive img-thumbnail"style="height: 256px; width: 256px;" alt="">
                    <div class="tm_mask">
                        <h2>Reports</h2>
                        <p>Print Reports</p>
                        <a href="" class="btn">Reports</a>
                    </div>
                </div>
            </a>

        </div>

        </div>
    <hr>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">

            <a href="userpage.php">
                <div class="tm_view tm_view_fourth">
                    <img src="images/exe_fcm.JPG" class="img-responsive img-thumbnail" style="height: 256px; width: 256px;" alt="">
                    <div class="tm_mask">
                        <h2>Execute an FCM</h2>
                        <p>Choose and FCM to execute</p>
                        <a href="" class="btn">Execute</a>
                    </div>
                </div>
            </a>

        </div>
    </div>
    <hr><br>

        <div class="row">
            <div class="col-lg-4 col-lg-offset-1">

                <a href="userpage.php">
                    <div class="tm_view tm_view_fourth">
                        <img src="images/settings.png" class="img-responsive" style="height: 256px; width: 256px;" alt="">
                        <div class="tm_mask">
                            <h2>USERS</h2>
                            <p>Add simple users or administrator users</p>
                            <a href="" class="btn">Add New User</a>
                            <a href="userpage.php" class="btn">All Users</a>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-lg-4 col-lg-offset-2">

                <a href="userpage.php">
                    <div class="tm_view tm_view_fourth">
                        <img src="images/backup.png" class="img-responsive img-thumbnail" style="height: 256px; width: 256px;" alt="">
                        <div class="tm_mask">
                            <h2>USERS</h2>
                            <p>Add simple users or administrator users</p>
                            <a href="" class="btn">Add New User</a>
                            <a href="userpage.php" class="btn">All Users</a>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; ADONIS PODINAS 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- Jquery Core Js -->

    <!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="js/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="js/jquery.validate.js"></script>

    <script src="js/admin.js"></script>
    <script src="myjs/myjs.js"></script>


    <!-- Latest compiled and minified JavaScript -->

</body>

</html>
