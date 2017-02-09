<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Home</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap-table.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-table-export.js"></script>
    <script type="text/javascript" src="libs/FileSaver/FileSaver.min.js"></script>
    <script type="text/javascript" src="libs/jsPDF/jspdf.min.js"></script>
    <script type="text/javascript" src="libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
    <script type="text/javascript" src="libs/html2canvas/html2canvas.min.js"></script>
    <script type="text/javascript" src="js/tableExport.min.js"></script>
    <script type="text/javascript" src="myjs/users.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Optional theme -->

    <!-- Waves Effect Css -->
    <link href="css/waves.css" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/mycss.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-table.min.css">
    <link href="css/sweetalert.css" rel="stylesheet">


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
            <a class="navbar-brand" href="#">Captain's Predictions</a>
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
<br>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-5"><h3>Users Of The System</h3></div>
    </div>
<br><br>
    <div class="row">
        <div class="col-lg-12">

            <div id="toolbar">

                <div class="row">

                    <div class="col-lg-7">
                        <ul  class="nav nav-pills">
                            <li class="active">
                                <a id="showadmin" data-show="admin" data-toggle="tab">Admin</a>
                            </li>
                            <li><a id="showuser" data-show="users" data-toggle="tab">Users</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 ">
                        <button data-backdrop="static" id="Add" class="btn btn-primary waves-effect waves-light btn" data-toggle="modal" data-target="#addmodal">
                            <i class="glyphicon glyphicon-plus"></i> Add User
                        </button>
                    </div>
                    <div class="col-lg-1 ">
                        <button id="delete" class="btn btn-danger waves-effect waves-light btn">
                            <i class="glyphicon glyphicon-minus"></i> Delete User
                        </button>
                    </div>
                </div>


            </div>

                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1a">
                        <table id="table"></table>
                    </div>

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



    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="addmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><span class="glyphicon glyphicon-plus"></span> New User</h4>
                            </div>
                            <div class="modal-body">
                                <form id="add_user_validation" method="POST">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Id</label>
                                            <input placeholder="Id" type="text" class="form-control" name="id" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Name</label>
                                            <input placeholder="Name" type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label  class="form-label">Surname</label>

                                            <input placeholder="Surname" type="text" class="form-control" name="surname" required>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label  class="form-label">Email</label>

                                            <input placeholder="Email" type="text" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float"><label class="form-label">Privillage</label>
                                        <div class="form-line">
                                        <select name="privilage" id="privilage" required>
                                            <option disabled selected> -- select privilage -- </option>
                                            <option value="admin">admin </option>
                                            <option value="user">user </option>

                                        </select>
                                            </div>
                                    </div>

                                    <div class="modal-footer">

                                        <button name="clr" id="clr" class="btn btn-default waves-effect pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                        <button class="btn btn-primary waves-effect pull-left" type="submit"><span class="glyphicon glyphicon-add"></span>SAVE</button>

                                    </div>

                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!-- Waves Effect Plugin Js -->
<script src="js/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="js/jquery.validate.js"></script>

<script src="js/admin.js"></script>
<script src="myjs/myjs.js"></script>
<script src="js/sweetalert.min.js"></script>



<!-- Latest compiled and minified JavaScript -->

</body>

</html>
